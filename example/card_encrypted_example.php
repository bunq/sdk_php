<?php
namespace bunq\sdk\examples;

/**
 * This example shows using an encrypted endpoint to order a new card.
 */
use bunq\Context\ApiContext;
use bunq\Model\Generated\Card;
use bunq\Model\Generated\CardDebit;
use bunq\Model\Generated\MonetaryAccount;
use bunq\Model\Generated\User;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Card detail constants.
 */
const CARD_INFORMATION_FORMAT = 'Card from "%s" with second line "%s", valid thru "%s".' . PHP_EOL;
const CARD_PREFIX = 'Card_';
const CARD_PIN_CODE = '8439';

/**
 * Other constants.
 */
const POINTER_TYPE_IBAN = 'IBAN';

/**
 * Very first index in an array.
 */
const INDEX_FIRST = 0;

// Restore the API context.
$apiContext = ApiContext::restore(ApiContext::FILENAME_CONFIG_DEFAULT);


// Retrieve the active user.
/** @var User[] $users */
$users = User::listing($apiContext)->getValue();
$userId = $users[INDEX_FIRST]->getUserCompany()->getId();

// Retrieve the first monetary account of the active user.
/** @var MonetaryAccount[] $monetaryAccounts */
$monetaryAccounts = MonetaryAccount::listing($apiContext, $userId)->getValue();
$monetaryAccount = $monetaryAccounts[INDEX_FIRST]->getMonetaryAccountBank();

$aliasList = $monetaryAccount->getAlias();
$monetaryAccountAlias = null;

// Find the alias with type IBAN.
foreach ($aliasList as $alias) {
    if ($alias->getType() === POINTER_TYPE_IBAN) {
        $monetaryAccountAlias = $alias;
        break;
    }
}

$cardDebitMap = [
    CardDebit::FIELD_SECOND_LINE => uniqid(CARD_PREFIX),
    CardDebit::FIELD_NAME_ON_CARD => $monetaryAccountAlias->getName(),
    CardDebit::FIELD_PIN_CODE => CARD_PIN_CODE,
    CardDebit::FIELD_ALIAS => $monetaryAccountAlias,
];

// Create a new card for this user.
$cardId = CardDebit::create($apiContext, $cardDebitMap, $userId)->getValue();

// List all cards for this user.
/** @var Card[] $cards */
$cards = Card::listing($apiContext, $userId)->getValue();

// Print information for each card.
foreach ($cards as $card) {
    vprintf(
        CARD_INFORMATION_FORMAT,
        [
            $card->getNameOnCard(),
            $card->getSecondLine(),
            $card->getExpiryDate(),
        ]
    );
}
