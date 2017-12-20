<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Once your CashRegister has been activated you can create a QR code for
 * it. The visibility of a tab can be modified to be linked to this QR code.
 * If a user of the bunq app scans this QR code, the linked tab will be
 * shown on his device.
 *
 * @generated
 */
class CashRegisterQrCode extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/cash-register/%s/qr-code';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/cash-register/%s/qr-code/%s';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/cash-register/%s/qr-code/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/cash-register/%s/qr-code';

    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'TokenQrCashRegister';

    /**
     * The id of the created QR code. Use this id to get the RAW content of the
     * QR code with: ../qr-code/{id}/content
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the QR code's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the TokenQrCashRegister's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The status of this QR code. If the status is "ACTIVE" the QR code can be
     * scanned to see the linked CashRegister and tab. If the status is
     * "INACTIVE" the QR code does not link to a anything.
     *
     * @var string
     */
    protected $status;

    /**
     * The CashRegister that is linked to the token.
     *
     * @var CashRegister
     */
    protected $cashRegister;

    /**
     * Holds the Tab object. Can be TabUsageSingle, TabUsageMultiple or null
     *
     * @var Tab
     */
    protected $tabObject;

    /**
     * Create a new QR code for this CashRegister. You can only have one ACTIVE
     * CashRegister QR code at the time.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, int $userId, int $monetaryAccountId, int $cashRegisterId, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $monetaryAccountId, $cashRegisterId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Modify a QR code in a given CashRegister. You can only have one ACTIVE
     * CashRegister QR code at the time.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param int $cashRegisterQrCodeId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(ApiContext $apiContext, array $requestMap, int $userId, int $monetaryAccountId, int $cashRegisterId, int $cashRegisterQrCodeId, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $monetaryAccountId, $cashRegisterId, $cashRegisterQrCodeId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get the information of a specific QR code. To get the RAW content of the
     * QR code use ../qr-code/{id}/content
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param int $cashRegisterQrCodeId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCashRegisterQrCode
     */
    public static function get(ApiContext $apiContext, int $userId, int $monetaryAccountId, int $cashRegisterId, int $cashRegisterQrCodeId, array $customHeaders = []): BunqResponseCashRegisterQrCode
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $cashRegisterId, $cashRegisterQrCodeId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCashRegisterQrCode::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Get a collection of QR code information from a given CashRegister
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCashRegisterQrCodeList
     */
    public static function listing(ApiContext $apiContext, int $userId, int $monetaryAccountId, int $cashRegisterId, array $params = [], array $customHeaders = []): BunqResponseCashRegisterQrCodeList
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId, $cashRegisterId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseCashRegisterQrCodeList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * The id of the created QR code. Use this id to get the RAW content of the
     * QR code with: ../qr-code/{id}/content
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the QR code's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the TokenQrCashRegister's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The status of this QR code. If the status is "ACTIVE" the QR code can be
     * scanned to see the linked CashRegister and tab. If the status is
     * "INACTIVE" the QR code does not link to a anything.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The CashRegister that is linked to the token.
     *
     * @return CashRegister
     */
    public function getCashRegister()
    {
        return $this->cashRegister;
    }

    /**
     * @param CashRegister $cashRegister
     */
    public function setCashRegister($cashRegister)
    {
        $this->cashRegister = $cashRegister;
    }

    /**
     * Holds the Tab object. Can be TabUsageSingle, TabUsageMultiple or null
     *
     * @return Tab
     */
    public function getTabObject()
    {
        return $this->tabObject;
    }

    /**
     * @param Tab $tabObject
     */
    public function setTabObject($tabObject)
    {
        $this->tabObject = $tabObject;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->created)) {
            return false;
        }

        if (!is_null($this->updated)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->cashRegister)) {
            return false;
        }

        if (!is_null($this->tabObject)) {
            return false;
        }

        return true;
    }
}
