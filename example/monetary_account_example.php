<?php
namespace bunq\sdk\examples;

use bunq\Context\ApiContext;
use bunq\Model\Generated\MonetaryAccount;
use bunq\Model\Generated\User;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Very first index in an array.
 */
const INDEX_FIRST = 0;

// Restore the API context.
$apiContext = ApiContext::restore(ApiContext::FILENAME_CONFIG_DEFAULT);

// Retrieve the active user.
// You can store this id to quickly retrieve the user at any time.
$userId = User::listing($apiContext)[INDEX_FIRST]->getUserCompany()->getId();

// Retrieve all monetary accounts of the active user.
$monetaryAccountList = MonetaryAccount::listing($apiContext, $userId);

foreach ($monetaryAccountList as $monetaryAccount) {
    printf($monetaryAccount->getMonetaryAccountBank()->getDescription() . PHP_EOL);
}
