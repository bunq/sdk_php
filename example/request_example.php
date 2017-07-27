<?php
namespace bunq\sdk\examples;

use bunq\Context\ApiContext;
use bunq\Model\Generated\MonetaryAccount;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Pointer;
use bunq\Model\Generated\RequestInquiry;
use bunq\Model\Generated\User;

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

// Restore the API context.
$apiContext = ApiContext::restore(FILENAME_BUNQ_CONFIG);

// Retrieve the active user.
$userId = User::listing($apiContext)[INDEX_FIRST]->getUserCompany()->getId();

// Retrieve the first monetary account of the active user.
$monetaryAccountId = MonetaryAccount::listing($apiContext, $userId)[INDEX_FIRST]->getMonetaryAccountBank()->getId();

$requestMap = [
    RequestInquiry::FIELD_AMOUNT_INQUIRED => new Amount(REQUEST_AMOUNT, CURRENCY_EUR),
    RequestInquiry::FIELD_COUNTERPARTY_ALIAS => new Pointer(POINTER_TYPE_EMAIL, REQUEST_COUNTERPARTY_EMAIL),
    RequestInquiry::FIELD_DESCRIPTION => REQUEST_DESCRIPTION,
    RequestInquiry::FIELD_ALLOW_BUNQME => true,
];

$requestInquiryUpdated = RequestInquiry::create($apiContext, $requestMap, $userId, $monetaryAccountId);

$request = RequestInquiry::get($apiContext, $userId, $monetaryAccountId, $requestInquiryUpdated);

vprintf(MESSAGE_REQUEST_STATUS, [$request->getStatus()]);

$requestMapUpdate = [
    RequestInquiry::FIELD_STATUS => STATUS_REVOKED,
];

$requestInquiryUpdated = RequestInquiry::update(
    $apiContext,
    $requestMapUpdate,
    $userId,
    $monetaryAccountId,
    $requestInquiryUpdated
);

$request = RequestInquiry::get($apiContext, $userId, $monetaryAccountId, $requestInquiryUpdated->getId());

vprintf(MESSAGE_REQUEST_STATUS, [$request->getStatus()]);
