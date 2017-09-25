<?php
namespace bunq\sdk\examples;

use bunq\Context\ApiContext;
use bunq\Http\Pagination;
use bunq\Model\Generated\MonetaryAccount;
use bunq\Model\Generated\Payment;
use bunq\Model\Generated\User;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Console messages.
 */
const MESSAGE_LATEST_PAGE_IDS = 'Latest page IDs: ';
const MESSAGE_SECOND_LATEST_PAGE_IDS = 'Second latest page IDs: ';
const MESSAGE_NO_PRIOR_PAYMENTS_FOUND = "No prior payments found!";

/**
 * Very first index in an array.
 */
const INDEX_FIRST = 0;

/**
 * Size of each page of payments listing.
 */
const PAGE_SIZE = 3;

$apiContext = ApiContext::restore(ApiContext::FILENAME_CONFIG_DEFAULT);
$users = User::listing($apiContext)->getValue();
$apiContext->save();
$userContainer = $users[INDEX_FIRST];

if (!is_null($userContainer->getUserLight())) {
    $user = $userContainer->getUserLight();
} elseif (!is_null($userContainer->getUserPerson())) {
    $user = $userContainer->getUserPerson();
} else {
    $user = $userContainer->getUserCompany();
}

$userId = $user->getId();

$monetaryAccounts = MonetaryAccount::listing($apiContext, $userId)->getValue();
$monetaryAccount = $monetaryAccounts[INDEX_FIRST]->getMonetaryAccountBank();
$monetaryAccountId = $monetaryAccount->getId();

$paginationCountOnly = new Pagination();
$paginationCountOnly->setCount(PAGE_SIZE);

$paymentsResponse = Payment::listing(
    $apiContext,
    $userId,
    $monetaryAccountId,
    $paginationCountOnly->getUrlParamsCountOnly()
);

$payments = $paymentsResponse->getValue();

echo MESSAGE_LATEST_PAGE_IDS . PHP_EOL;

foreach ($payments as $payment) {
    echo $payment->getId() . PHP_EOL;
}

$pagination = $paymentsResponse->getPagination();

if ($pagination->hasPreviousPage()) {
    echo MESSAGE_SECOND_LATEST_PAGE_IDS . PHP_EOL;

    $previousPayments = Payment::listing(
        $apiContext,
        $userId,
        $monetaryAccountId,
        $pagination->getUrlParamsPreviousPage()
    )->getValue();

    foreach ($previousPayments as $payment) {
        echo $payment->getId() . PHP_EOL;
    }
} else {
    echo MESSAGE_NO_PRIOR_PAYMENTS_FOUND . PHP_EOL;
}
