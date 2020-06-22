# bunq PHP SDK

## Introduction
Hi developers!

Welcome to the bunq PHP SDK! 👨‍💻

We're very happy to introduce yet another unique product: complete banking SDKs! 
Now you can build even bigger and better apps and integrate them with your bank of the free! 🌈

Before you dive into this brand new SDK, please consider:
- Learning how bunq works and what objects you will work with by reading [the intro to our API](https://github.com/bunq/doc/blob/develop/README.md) 🤓
- Checking out [our developer portal](https://developer.bunq.com/) 🙌  
- Grabbing your Production API key from [our developer portal](https://developer.bunq.com/) or the bunq app 🗝
- Generating a Sandbox API key using [our developer portal] or [Tinker](https://www.bunq.com/developer) 🗝
- Visiting [our forum](https://together.bunq.com/t/api) where you can share your creations,
questions and experience 🎤

Give us your feedback, create pull requests, build your very own bunq apps and most importantly: have fun! 💪

This SDK is in **beta**. We cannot guarantee constant availability or stability. 
Thanks to your feedback we will make improvements on it.

## Installation

```shell
$ composer require bunq/sdk_php
```

## Usage

### Creating an API context
In order to start making calls with the bunq API, you must first register your API key and device, and create a session.
In the SDKs, we group these actions and call it "creating an API context". There are two ways to do it. One is through
our interactive script, and the other is programmatically from your code.

`src/Util/InstallationUtil.php`

#### Creating an API context using `bunq-install` interactive script
After installing bunq SDK into your project, run the command below from your project root folder:

```shell
$ vendor/bin/bunq-install
```

And then follow the steps the script offers.

#### Creating an API context programmatically
The context can be created by executing the following code snippet:
```php
<?php
use bunq\Context\ApiContext;
use bunq\Util\BunqEnumApiEnvironmentType;

$environmentType = BunqEnumApiEnvironmentType::SANDBOX(); // Can also be BunqEnumApiEnvironmentType::PRODUCTION();
$apiKey = '### Your API Key ###'; // Replace with your API key
$deviceDescription = '### Your device description ###'; // Replace with your device description
$permittedIps = ['0.0.0.0']; // List the real expected IPs of this device or leave empty to use the current IP

$apiContext = ApiContext::create(
    $environmentType,
    $apiKey,
    $deviceDescription,
    $permittedIps
);

BunqContext::loadApiContext($apiContext);
```

The API context can then be saved with:

```php
$fileName = '/path/to/save/bunq.conf/file/'; // Replace with your own secure location to store the API context details
$apiContext->save($fileName);
```

**Please note:** *<u>initializing your application is a heavy task and it is recommended to do it only once per device.</u>*  

After saving the context, you can restore it at any time:

```php
$fileName = '/path/to/bunq.conf/file/';
$apiContext = ApiContext::restore($fileName);
BunqContext::loadApiContext($apiContext);
```

**Tip:** both saving and restoring the context can be done without any arguments. In this case the context will be saved to/restored from the `bunq.conf` file in the same folder with your script.

##### PSD2
It is possible to create an ApiContext as PSD2 Service Provider. Although this might seem a complex task, we wrote some helper implementations to get you started.
You need to create a certificate and private key to get you started. Our sandbox environment currently accepts all certificates, if these criteria are met:
- Up to 64 characters
- PISP and/or AISP used in the end.
 
Make sure you have your unique eIDAS certificate number and certificates ready when you want to perform these tasks on our production environment. 

Creating a PSD2 context is very easy:
```php
$apiContext = ApiContext::createForPsd2(
    BunqEnumApiEnvironmentType::SANDBOX(), // Could be PRODUCTION as well.
    SecurityUtil::getCertificateFromFile($pathToCertificate),
    SecurityUtil::getPrivateKeyFromFile($pathToKey),
    [
        SecurityUtil::getCertificateFromFile($pathToCertificateInChain), // Could be one file containing chain, or multiple certificate files in array.
    ],
    $description
)
```

This context can be saved the same way as a normal ApiContext. After creating this context, create an OAuth client to get your users to grant you access.
For a more detailed example, check the [tinker_php](https://github.com/bunq/tinker_php/) repository.

##### Proxy
You can use a proxy with the bunq PHP SDK. This option must be a string. This proxy will be used for all requests done with
the context for which it was provided. You will be prompted to provide a proxy URL when using the interactive installation script.

```php
$proxyUrl = 'socks5://localhost:1080'; // The proxy for all requests, null to disable

$apiContext = ApiContext::create(
    ...
    $proxyUrl
);
```

#### Safety considerations
The file storing the context details (i.e. `bunq.conf`) is a key to your account. Anyone having access to it is able to perform any Public API actions with your account. Therefore, we recommend choosing a truly safe place to store it.

If you rather save the context in a database, you can use the `fromJson()` and `toJson()` methods. 

### Making API calls
There is a class for each endpoint. Each class has functions for each supported action. These actions can be
`create`, `get`, `update`, `delete` and `listing`.

Before you can start making calls, you must ensure that you have create an ApiContext and loaded in into BunqContext as shown in the examples above. 

The SDK will take care of your user Id, as this id wil never change per ApiContext. The SDK also uses your first active monetary account as primary monetary account. This is almost always the same as your billing account. This means that when you do not explicitly pass a Monetary Account ID, the SDK will use the Monetary Account ID of your billing account.

Take a look at [doc.bunq.com](https://doc.bunq.com) for the full documentation.

#### Creating objects
```php
BunqContext::loadApiContext($apiContext); // if it has not been loaded yet. 

Payment::create(
    new Amount($amount, self::CURRENCY_TYPE_EUR),
    new Pointer(self::POINTER_TYPE_EMAIL, $recipient),
    $description,
    $monetaryAccount->getId()
);
```

##### Example
See [`tinker/BunqLib`](https://github.com/bunq/tinker_php/blob/05a38a2660e6f6db1f7efc9b915f0131c172c230/src/BunqLib.php#L240-L245)

##### NotificationFilters / Callbacks
**Note!** Due to an in internal change in the way we handle `NotificationFilters` (Callbacks), you should not use the default classes included in this SDK. 
Please make sure you make use of the associated `Internal`-classes. For example when you need `NotificationFilterUrlUser`, make use of `NotificationFilterUrlUserInternal`.
You can use every method of these classes, except for the `create()` method. **Always use `createWithListResponse()` instead.**

##### Example
```
NotificationFilterPushUserInternal::createWithListResponse(...)
NotificationFilterUrlUserInternal::createWithListResponse(...)
NotificationFilterUrlMonetaryAccountInternal::createWithListResponse(...)
```

#### Reading objects
To use the read method you must pass the identifier of the object to read (ID or UUID) except for the endpoints `User`, `UserPerson`, `UserCompany` and `MonetaryAccount`. The SDK will use the default IDs when none are passed. For all other endpoints you must pass the identifier.

This type of calls always returns a model.

```php
BunqContext::loadApiContext($apiContext); // if it has not been loaded yet. 

$userCompany = UserCompany::get();

printf($userCompany->getPublicNickName());
```

##### Example

You can also retrieve this information from `BunqContext`, see [`tinker/setupCurrentUser`](https://github.com/bunq/tinker_php/blob/05a38a2660e6f6db1f7efc9b915f0131c172c230/src/BunqLib.php#L117-L120)

#### Updating objects
```php
BunqContext::loadApiContext($apiContext); // if it has not been loaded yet. 

MonetaryAccountBank::update(
    $monetaryAccount->getId(),
    $description
);
```

##### Example
See [`tinker/updateBankAccountDescription`](https://github.com/bunq/tinker_php/blob/05a38a2660e6f6db1f7efc9b915f0131c172c230/src/BunqLib.php#L217-L223)

#### Deleting objects
```php
BunqContext::loadApiContext($apiContext); // if it has not been loaded yet. 

CustomerStatementExport::delete($customerStatementExportId);
```

#### Listing objects
```php
BunqContext::loadApiContext($apiContext); // if it has not been loaded yet. 

$monetaryAccountList = MonetaryAccount::listing();

foreach ($monetaryAccountList as $monetaryAccount) {
    printf($monetaryAccount->getMonetaryAccountBank->getDescription() . PHP_EOL);
}
```

##### Example
See [`tinker/getAllActiveBankAccount`](https://github.com/bunq/tinker_php/blob/05a38a2660e6f6db1f7efc9b915f0131c172c230/src/BunqLib.php#L192-L211)

## Running Examples

If you want to play around with the SDK before you actually start implementing something awesome you can use the [tinker](https://github.com/bunq/tinker_php/tree/master) project and adjust the code in the scripts as you please. 

## Running Tests

Information regarding the test cases can be found in the [README.md](./tests/README.md)
located in [test](/tests).

## Exceptions
The SDK can throw multiple exceptions. For an overview of these exceptions please
take a look at [EXCEPTIONS.md](./src/Exception/EXCEPTION.md)
