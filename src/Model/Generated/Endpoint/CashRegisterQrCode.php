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
    const OBJECT_TYPE_GET = 'TokenQrCashRegister';

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
     * The status of the QR code. ACTIVE or INACTIVE. Only one QR code can be
     * ACTIVE for a CashRegister at any time. Setting a QR code to ACTIVE will
     * deactivate any other CashRegister QR codes.
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * @param string $status The status of the QR code. ACTIVE or INACTIVE. Only
     * one QR code can be ACTIVE for a CashRegister at any time. Setting a QR
     * code to ACTIVE will deactivate any other CashRegister QR codes.
     */
    public function __construct(string  $status)
    {
        $this->statusFieldForRequest = $status;
    }

    /**
     * Create a new QR code for this CashRegister. You can only have one ACTIVE
     * CashRegister QR code at the time.
     *
     * @param int $cashRegisterId
     * @param string $status The status of the QR code. ACTIVE or INACTIVE. Only
     * one QR code can be ACTIVE for a CashRegister at any time. Setting a QR
     * code to ACTIVE will deactivate any other CashRegister QR codes.
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(int $cashRegisterId, string  $status, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cashRegisterId]
            ),
            [self::FIELD_STATUS => $status],
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
     * @param int $cashRegisterId
     * @param int $cashRegisterQrCodeId
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the QR code. ACTIVE or INACTIVE.
     * Only one QR code can be ACTIVE for a CashRegister at any time. Setting a
     * QR code to ACTIVE will deactivate any other CashRegister QR codes.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $cashRegisterId, int $cashRegisterQrCodeId, int $monetaryAccountId = null, string  $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cashRegisterId, $cashRegisterQrCodeId]
            ),
            [self::FIELD_STATUS => $status],
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
     * @param int $cashRegisterId
     * @param int $cashRegisterQrCodeId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCashRegisterQrCode
     */
    public static function get(int $cashRegisterId, int $cashRegisterQrCodeId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseCashRegisterQrCode
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cashRegisterId, $cashRegisterQrCodeId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCashRegisterQrCode::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Get a collection of QR code information from a given CashRegister
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $cashRegisterId
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCashRegisterQrCodeList
     */
    public static function listing(int $cashRegisterId, int $monetaryAccountId = null, array $params = [], array $customHeaders = []): BunqResponseCashRegisterQrCodeList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cashRegisterId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseCashRegisterQrCodeList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
