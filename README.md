# bunq PHP SDK
Version 0.9 **BETA**

## Introduction
Hi developers!

Welcome to the bunq PHP SDK! 👨‍💻

We're very happy to introduce yet another unique product: complete banking SDKs! 
Now you can build even bigger and better apps and integrate them with your bank of the free! 🌈

Before you dive into this brand new SDK, please consider:
- Checking out our new developer’s page [https://bunq.com/en/developer](https://bunq.com/en/developer) 🙌  
- Grabbing your production API key from the bunq app or asking our support for a Sandbox API key 🗝
- Visiting [together.bunq.com](https://together.bunq.com) where you can share your creations, questions and experience
🎤

Give us your feedback, create pull requests, build your very own bunq apps and most importantly: have fun! 💪

This SDK is in **beta**. We cannot guarantee constant availability or stability. 
Thanks to your feedback we will make improvements on it.

## Installation

```shell
$ composer require bunq/bunq-php
```

## Usage

### Creating an API context
In order to start making calls with the bunq API, you must first register your API key and device, and create a session.
In the SDKs, we group these actions and call it "creating an API context". There are two ways to do it. One is through
our interactive script, and the other is programmatically from your code.

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
$permittedIps = ['0.0.0.0']; // List the real expected IPs of this device of leave empty to use the current IP

$apiContext = ApiContext::create(
    $environmentType,
    $apiKey,
    $deviceDescription,
    $permittedIps
);
```

The API context can then be saved with:

```php
$fileName = '/path/to/save/bunq.conf/file/'; // Replace with your own secure location to store the API context details
$apiContext->save($fileName);
```

**Please note:** initializing your application is a heavy task and it is recommended to do it only once per device.  

After saving the context, you can restore it at any time:

```php
$fileName = '/path/to/bunq.conf/file/';
$apiContext = ApiContext::restore($fileName);
```

**Tip:** both saving and restoring the context can be done without any arguments. In this case the context will be saved
to/restored from the `bunq.conf` file in the same folder with your script.

#### Safety considerations
The file storing the context details (i.e. `bunq.conf`) is a key to your account. Anyone having access to it is able to
perform any Public API actions with your account. Therefore, we recommend choosing a truly safe place to store it.

### Making API calls
There is a class for each endpoint. Each class has functions for each supported action. These actions can be
`create`, `get`, `update`, `delete` and `listing`.

Sometimes API calls have dependencies, for instance `MonetaryAccount`. Making changes to a monetary account 
always also needs a reference to a `User`. These dependencies are required as arguments when performing API calls.
Take a look at [doc.bunq.com](https://doc.bunq.com) for the full documentation.

#### Creating objects
Creating objects through the API requires an `ApiContext`, a `requestMap` and identifiers of all dependencies (such as
User ID required for accessing a Monetary Account). Optionally, custom headers can be passed to requests.

```php
$paymentMap = [
    Payment::FIELD_AMOUNT => new Amount('10.00', 'EUR'),
    Payment::FIELD_COUNTERPARTY_ALIAS => new Pointer('EMAIL', 'api-guru@bunq.io'),
    Payment::FIELD_DESCRIPTION => 'This is a generated payment',
];

Payment::create($bunqApiContext, $paymentMap, $userId, $monetaryAccountId);
```

##### Example
See [`example/payment_example.php`](./example/payment_example.php)

#### Reading objects
Reading objects through the API requires an `ApiContext`, identifiers of all dependencies (such as User ID required for
accessing a Monetary Account), and the identifier of the object to read (ID or UUID) Optionally, custom headers can be
passed to requests.

This type of calls always returns a model.

```php
$userCompany = UserCompany::get($bunqApiContext, $userId);

printf($userCompany->getPublicNickName());
```

##### Example
See [`example/user_example.php`](./example/user_example.php)

#### Updating objects
Updating objects through the API goes the same way as creating objects, except that also the object to update identifier 
(ID or UUID) is needed.

```php
$tabUsageSingleMap = [
    TabUsageSingle::FIELD_STATUS => 'WAITING_FOR_PAYMENT',
    TabUsageSingle::FIELD_VISIBILITY => new TabVisibility(false, true),
];

TabUsageSingle::update(
    $bunqApiContext,
    $tabUsageSingleMap,
    $userId,
    $monetaryAccountId,
    $cashRegisterId,
    $tabUsageSingleUuid
);
```

##### Example
See [`example/tab_example.php`](./example/tab_example.php)

#### Deleting objects
Deleting objects through the API requires an `ApiContext`, identifiers of all dependencies (such as User ID required for
accessing a Monetary Account), and the identifier of the object to delete (ID or UUID) Optionally, custom headers can be
passed to requests.

```php
CustomerStatementExport::delete($apiContext, $userId, $monetaryAccountId, $customerStatementExportId)
```

##### Example
See [`example/customer_statement_export_example.php`](./example/customer_statement_export_example.php)

#### Listing objects
Listing objects through the API requires an `ApiContext` and identifiers of all dependencies (such as User ID required
for accessing a Monetary Account). Optionally, custom headers can be passed to requests.

```php
$monetaryAccountList = MonetaryAccount::listing($apiContext, $userId);

foreach ($monetaryAccountList as $monetaryAccount) {
    printf($monetaryAccount->getMonetaryAccountBank->getDescription() . PHP_EOL);
}
```

##### Example
See [`example/monetary_account_example.php`](./example/monetary_account_example.php)
