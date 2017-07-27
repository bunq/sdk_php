<?php
namespace bunq\sdk\examples;

use bunq\Context\ApiContext;
use bunq\Model\Generated\MonetaryAccount;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Pointer;
use bunq\Model\Generated\Payment;
use bunq\Model\Generated\PaymentBatch;
use bunq\Model\Generated\User;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Update these constants to edit the values of the payment sent.
 */
const PAYMENT_COUNTERPARTY_EMAIL = 'isaias.beckwith@bunq.org';
const PAYMENT_DESCRIPTION = 'This is a generated payment';
const PAYMENT_AMOUNT = '9.99';

/**
 * Other constants.
 */
const FILENAME_BUNQ_CONFIG = 'bunq.conf';
const CURRENCY_EUR = 'EUR';
const POINTER_TYPE_EMAIL = 'EMAIL';
const MESSAGE_PAYMENT_RECEIVED = 'Payment for "%s" with description "%s".';
const INDEX_FIRST = 0;

// Restore the API context.
$apiContext = ApiContext::restore(ApiContext::FILENAME_CONFIG_DEFAULT);

// Retrieve the active user.
$userId = User::listing($apiContext)[INDEX_FIRST]->getUserCompany()->getId();

// Retrieve the first monetary account of the active user.
$monetaryAccountId = MonetaryAccount::listing($apiContext, $userId)[INDEX_FIRST]->getMonetaryAccountBank()->getId();

// Create a payments map.
$payments = [
    PaymentBatch::FIELD_PAYMENTS => [
        [
            Payment::FIELD_AMOUNT => new Amount(PAYMENT_AMOUNT, CURRENCY_EUR),
            Payment::FIELD_COUNTERPARTY_ALIAS => new Pointer(POINTER_TYPE_EMAIL, PAYMENT_COUNTERPARTY_EMAIL),
            Payment::FIELD_DESCRIPTION => PAYMENT_DESCRIPTION,
        ],
    ],
];

// Create a new payment batch and retrieve it's id.
$paymentBatchId = PaymentBatch::create($apiContext, $payments, $userId, $monetaryAccountId);

// Retrieve all payments in the payment batch.
$payments = PaymentBatch::get($apiContext, $userId, $monetaryAccountId, $paymentBatchId)->getPayments();

// Print the recipient's name and the description of the payment.
vprintf(
    MESSAGE_PAYMENT_RECEIVED,
    [
        $payments[INDEX_FIRST]->getCounterpartyAlias()->getDisplayName(),
        $payments[INDEX_FIRST]->getDescription()
    ]
);
