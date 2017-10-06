<?php
namespace bunq\sdk\examples;

use bunq\Context\ApiContext;
use bunq\Model\Generated\Endpoint\MonetaryAccount;
use bunq\Model\Generated\Endpoint\User;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Very first index in an array.
 */
const INDEX_FIRST = 0;

// Restore the API context.
$apiContext = ApiContext::restore(ApiContext::FILENAME_CONFIG_DEFAULT);

// Retrieve the active user.
$users = User::listing($apiContext)->getValue();
// If your user is UserPerson or UserLight, replace getUserCompany() with getUserPerson() or getUserLight()
$userId = $users[INDEX_FIRST]->getUserCompany()->getId();

// Retrieve all monetary accounts of the active user.
$monetaryAccounts = MonetaryAccount::listing($apiContext, $userId)->getValue();

foreach ($monetaryAccounts as $monetaryAccount) {
    echo $monetaryAccount->getMonetaryAccountBank()->getDescription() . PHP_EOL;
}
