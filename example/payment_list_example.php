<?php
namespace bunq\sdk\examples;

use bunq\Context\ApiContext;
use bunq\Http\Pagination;
use bunq\Model\Generated\CertificatePinned;
use bunq\Model\Generated\MonetaryAccount;
use bunq\Model\Generated\Payment;
use bunq\Model\Generated\User;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Console messages.
 */
const MESSAGE_LATEST_PAGE_IDS = 'Latest page IDs: ';
const MESSAGE_SECOND_LATEST_PAGE_IDS = 'Second latest page IDs: ';

/**
 * Very first index in an array.
 */
const INDEX_FIRST = 0;

/**
 * Size of each page of payments listing.
 */
const PAGE_SIZE = 3;

$apiContext = ApiContext::restore(ApiContext::FILENAME_CONFIG_DEFAULT);
/** @var User[] $users */
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

/** @var MonetaryAccount[] $monetaryAccounts */
$monetaryAccounts = MonetaryAccount::listing($apiContext, $userId)->getValue();
$monetaryAccount = $monetaryAccounts[INDEX_FIRST]->getMonetaryAccountBank();
$monetaryAccountId = $monetaryAccount->getId();

$pagination = new Pagination();
$pagination->setCount(PAGE_SIZE);

$paymentsResponse = Payment::listing(
    $apiContext,
    $userId,
    $monetaryAccountId,
    $pagination->getUrlParamsCountOnly()
);

/** @var Payment[] $payments */
$payments = $paymentsResponse->getValue();

echo MESSAGE_LATEST_PAGE_IDS . PHP_EOL;

foreach ($payments as $payment) {
    echo $payment->getId() . PHP_EOL;
}

$previousPagination = $paymentsResponse->getPagination();

echo MESSAGE_SECOND_LATEST_PAGE_IDS . PHP_EOL;

/** @var Payment[] $previousPayments */
$previousPayments = Payment::listing(
    $apiContext,
    $userId,
    $monetaryAccountId,
    $previousPagination->getUrlParamsPreviousPage()
)->getValue();

foreach ($previousPayments as $payment) {
    echo $payment->getId() . PHP_EOL;
}
