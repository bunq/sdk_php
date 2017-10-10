## Exceptions
When you make a request via the SDK, there is a chance of request failing
due to various reasons. When such a failure happens, an exception
corresponding to the error occurred is thrown.


----
#### Possible Exceptions
* `BadRequestException` If the request returns with status code `400`
* `UnauthorizedException` If the request returns with status code `401`
* `ForbiddenException` If the request returns with status code `403`
* `NotFoundException` If the request returns with status code `404`
* `MethodNotAllowedException` If the request returns with status code `405`
* `TooManyRequestsException` If the request returns with status code `429`
* `PleaseContactBunqException` If the request returns with status code `500`.
If you get this exception, please contact us preferably via the support chat in the bunq app.
* `UnknownApiErrorException` If none of the above mentioned exceptions are thrown,
this exception will be thrown instead.

For more information regarding these errors, please take a look on the documentation
page here: https://doc.bunq.com/api/1/page/errors

---
#### Base exception
All the exceptions have the same base exception which looks like this:
```php
<?php
class ApiException extends Exception
{
    /**
     * @var int
     */
    private $responseCode;

    /**
     * @param string $message
     * @param int $responseCode
     */
    public function __construct(string $message, int $responseCode)
    {
        // Some hidden code
    }

    /**
     * @return int
     */
    public function getResponseCode(): int
    {
        return $this->responseCode;
    }
}
```
The `Exception` class which is being extended has an `getMessage()` method which is `final` and therefore cannot be
overridden.
 
This means that each exception will have a response code and an error message
related to the specific error returned by API.

---
#### Exception handling
Since each API error has a distinct SDK exception type corresponding to it,
you can catch the exact exceptions you expect 👏.

```php
<?php
use bunq\Context\ApiContext;
use bunq\Util\BunqEnumApiEnvironmentType;
use bunq\Exception\BadRequestException;


const API_KEY = 'Some invalid API key '; 
const DEVICE_DESCRIPTION = 'This will cause BadRequestException to be thrown.';

try{
    // Make a call that might fail
    $apiContext = ApiContext::create(BunqEnumApiEnvironmentType::SANDBOX(), API_KEY, DEVICE_DESCRIPTION);
} catch (BadRequestException $error){
    // Do something if exception is thrown.
    echo $error->getResponseCode() . PHP_EOL;
    echo $error->getMessage() . PHP_EOL;
}


```
