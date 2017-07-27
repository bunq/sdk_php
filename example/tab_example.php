<?php
namespace bunq\sdk\examples;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\Generated\AttachmentPublic;
use bunq\Model\Generated\AttachmentTab;
use bunq\Model\Generated\Avatar;
use bunq\Model\Generated\CashRegister;
use bunq\Model\Generated\MonetaryAccount;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Geolocation;
use bunq\Model\Generated\Object\TabVisibility;
use bunq\Model\Generated\TabItemShop;
use bunq\Model\Generated\TabUsageSingle;
use bunq\Model\Generated\User;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * CashRegister constants.
 */
const CASH_REGISTER_STATUS_PENDING_APPROVAL = 'PENDING_APPROVAL';
const CASH_REGISTER_PREFIX_NAME = 'cashregister_';

/**
 * TabAttachment Fields
 */
const FIELD_TAB_ATTACHMENT_ID = 'id';

/**
 * Amount constants.
 */
const AMOUNT_VALUE = '12.50';
const AMOUNT_CURRENCY_EUR = 'EUR';

/**
 * Attachment constants.
 */
const ATTACHMENT_FILENAME = '/example_attachment.jpg';
const ATTACHMENT_DESCRIPTION = 'My Attachment Description';
const ATTACHMENT_CONTENT_TYPE = 'image/jpeg';

/**
 * TabItem constants.
 */
const TAB_ITEM_DESCRIPTION = 'My TabItem Description';

/**
 * TabUsageSingle constants.
 */
const TAB_USAGE_SINGLE_STATUS_OPEN = 'OPEN';
const TAB_USAGE_SINGLE_STATUS_WAITING_FOR_PAYMENT = 'WAITING_FOR_PAYMENT';
const TAB_USAGE_SINGLE_DESCRIPTION = 'My TabUsageSingle Description';
const TAB_USAGE_SINGLE_MESSAGE = 'Tab with description "%s" for amount "%s" with status "%s".';

/**
 * Geolocation constants.
 */
const GEOLOCATION_LATITUDE = '52.389722';
const GEOLOCATION_LONGITUDE = '4.837808';
const GEOLOCATION_ALTITUDE = '10';
const GEOLOCATION_RADIUS = '100';
const GEOLOCATION_COUNTRY = 'NL';

/**
 * Other constants.
 */
const INDEX_FIRST = 0;

// Restore the API context.
$apiContext = ApiContext::restore(ApiContext::FILENAME_CONFIG_DEFAULT);

// Retrieve the active user.
// You can store this id to quickly retrieve the user at any time.
$userId = User::listing($apiContext)[INDEX_FIRST]->getUserCompany()->getId();

// Retrieve the first monetary account of the active user.
$monetaryAccountId = MonetaryAccount::listing($apiContext, $userId)[INDEX_FIRST]->getMonetaryAccountBank()->getId();

$attachmentPublicBytes = file_get_contents(__DIR__ . ATTACHMENT_FILENAME);
$requestHeadersMap = [
    ApiClient::HEADER_CONTENT_TYPE => ATTACHMENT_CONTENT_TYPE,
    ApiClient::HEADER_ATTACHMENT_DESCRIPTION => ATTACHMENT_DESCRIPTION,
];


// Create a new public attachment.
$attachmentPublicUuid = AttachmentPublic::create($apiContext, $attachmentPublicBytes, $requestHeadersMap);

$attachmentPublicUuidMap = [
    Avatar::FIELD_ATTACHMENT_PUBLIC_UUID => $attachmentPublicUuid,
];

// Create a new avatar using the public attachment.
$avatarUuid = Avatar::create($apiContext, $attachmentPublicUuidMap);

$geoLocation = new Geolocation();
$geoLocation->setAltitude(GEOLOCATION_ALTITUDE);
$geoLocation->setLatitude(GEOLOCATION_LATITUDE);
$geoLocation->setLongitude(GEOLOCATION_LONGITUDE);
$geoLocation->setRadius(GEOLOCATION_RADIUS);

$cashRegisterMap = [
    CashRegister::FIELD_AVATAR_UUID => $avatarUuid,
    CashRegister::FIELD_LOCATION => $geoLocation,
    CashRegister::FIELD_NAME => uniqid(CASH_REGISTER_PREFIX_NAME),
    CashRegister::FIELD_STATUS => CASH_REGISTER_STATUS_PENDING_APPROVAL,
];

$cashRegisterId = CashRegister::create($apiContext, $cashRegisterMap, $userId, $monetaryAccountId);

$attachmentTabBytes = file_get_contents(__DIR__ . ATTACHMENT_FILENAME);
$requestHeadersMap = [
    ApiClient::HEADER_CONTENT_TYPE => ATTACHMENT_CONTENT_TYPE,
    ApiClient::HEADER_ATTACHMENT_DESCRIPTION => ATTACHMENT_DESCRIPTION,
];

$attachmentTabId = AttachmentTab::create(
    $apiContext,
    $attachmentTabBytes,
    $userId,
    $monetaryAccountId,
    $requestHeadersMap
);

$tabUsageSingleMap = [
    TabUsageSingle::FIELD_DESCRIPTION => TAB_USAGE_SINGLE_DESCRIPTION,
    TabUsageSingle::FIELD_STATUS => TAB_USAGE_SINGLE_STATUS_OPEN,
    TabUsageSingle::FIELD_AMOUNT_TOTAL => new Amount(AMOUNT_VALUE, AMOUNT_CURRENCY_EUR),
    TabUsageSingle::FIELD_TAB_ATTACHMENT => [
        [FIELD_TAB_ATTACHMENT_ID => $attachmentTabId]
    ],
];

$tabUsageSingleUuid = TabUsageSingle::create(
    $apiContext,
    $tabUsageSingleMap,
    $userId,
    $monetaryAccountId,
    $cashRegisterId
);

$tabItemMap = [
    TabItemShop::FIELD_DESCRIPTION => TAB_ITEM_DESCRIPTION,
    TabItemShop::FIELD_AMOUNT => new Amount(AMOUNT_VALUE, AMOUNT_CURRENCY_EUR),
];

$tabItemId = TabItemShop::create(
    $apiContext,
    $tabItemMap,
    $userId,
    $monetaryAccountId,
    $cashRegisterId,
    $tabUsageSingleUuid
);

$tabUsageSingleMap = [
    TabUsageSingle::FIELD_STATUS => TAB_USAGE_SINGLE_STATUS_WAITING_FOR_PAYMENT,
    TabUsageSingle::FIELD_VISIBILITY => new TabVisibility(false, true),
];

TabUsageSingle::update(
    $apiContext,
    $tabUsageSingleMap,
    $userId,
    $monetaryAccountId,
    $cashRegisterId,
    $tabUsageSingleUuid
);

$tabUsageSingleArray = TabUsageSingle::listing($apiContext, $userId, $monetaryAccountId, $cashRegisterId);

foreach ($tabUsageSingleArray as $tabUsageSingle) {
    vprintf(
        TAB_USAGE_SINGLE_MESSAGE,
        [
            $tabUsageSingle->getDescription(),
            $tabUsageSingle->getAmountTotal()->getValue(),
            $tabUsageSingle->getStatus(),
        ]
    );
}
