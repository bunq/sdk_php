<?php
namespace bunq\sdk\examples;

use bunq\Context\ApiContext;
use bunq\Model\Generated\Endpoint\MonetaryAccount;
use bunq\Model\Generated\Endpoint\RequestInquiry;
use bunq\Model\Generated\Endpoint\User;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Pointer;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Update these constants to edit the values of the request sent.
 */
const REQUEST_AMOUNT = '99.90';
const REQUEST_COUNTERPARTY_EMAIL = 'isaias.beckwith@bunq.org';
const REQUEST_DESCRIPTION = 'This is a generated request!';

/**
 * Other constants.
 */
const FILENAME_BUNQ_CONFIG = 'bunq.conf';
const CURRENCY_EUR = "EUR";
const POINTER_TYPE_EMAIL = "EMAIL";
const STATUS_REVOKED = 'REVOKED';
const MESSAGE_REQUEST_STATUS = 'Request status: "%s".' . PHP_EOL;

/**
 * The first index in an array.
 */
const INDEX_FIRST = 0;

// Restore the API context.
$apiContext = ApiContext::restore(FILENAME_BUNQ_CONFIG);

// Retrieve the active user.
$users = User::listing($apiContext)->getValue();
// If your user is UserPerson or UserLight, replace getUserCompany() with getUserPerson() or getUserLight()
$userId = $users[INDEX_FIRST]->getUserCompany()->getId();

// Retrieve the first monetary account of the active user.
$monetaryAccounts = MonetaryAccount::listing($apiContext, $userId)->getValue();
$monetaryAccountId = $monetaryAccounts[INDEX_FIRST]->getMonetaryAccountBank()->getId();

$requestMap = [
    RequestInquiry::FIELD_AMOUNT_INQUIRED => new Amount(REQUEST_AMOUNT, CURRENCY_EUR),
    RequestInquiry::FIELD_COUNTERPARTY_ALIAS => new Pointer(POINTER_TYPE_EMAIL, REQUEST_COUNTERPARTY_EMAIL),
    RequestInquiry::FIELD_DESCRIPTION => REQUEST_DESCRIPTION,
    RequestInquiry::FIELD_ALLOW_BUNQME => true,
];

$requestInquiryUpdatedId = RequestInquiry::create($apiContext, $requestMap, $userId, $monetaryAccountId)->getValue();

$request = RequestInquiry::get($apiContext, $userId, $monetaryAccountId, $requestInquiryUpdatedId)->getValue();

vprintf(MESSAGE_REQUEST_STATUS, [$request->getStatus()]);

$requestMapUpdate = [
    RequestInquiry::FIELD_STATUS => STATUS_REVOKED,
];

$requestInquiryUpdatedId = RequestInquiry::update(
    $apiContext,
    $requestMapUpdate,
    $userId,
    $monetaryAccountId,
    $requestInquiryUpdatedId
)->getValue();

$request = RequestInquiry::get($apiContext, $userId, $monetaryAccountId, $requestInquiryUpdatedId->getId())->getValue();

vprintf(MESSAGE_REQUEST_STATUS, [$request->getStatus()]);
