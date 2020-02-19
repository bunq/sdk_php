<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Error;

/**
 * List all the times a users payment was automatically allocated.
 *
 * @generated
 */
class PaymentAutoAllocateInstance extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/payment-auto-allocate/%s/instance';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/payment-auto-allocate/%s/instance/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'PaymentAutoAllocateInstance';

    /**
     * The id of the PaymentAutoAllocateInstance.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp when the PaymentAutoAllocateInstance was created.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp when the PaymentAutoAllocateInstance was last updated.
     *
     * @var string
     */
    protected $updated;

    /**
     * The ID of the payment auto allocate this instance belongs to.
     *
     * @var int
     */
    protected $paymentAutoAllocateId;

    /**
     * The status of the payment auto allocate instance. SUCCEEDED or FAILED.
     *
     * @var string
     */
    protected $status;

    /**
     * The error message, if the payment auto allocating failed.
     *
     * @var Error[]
     */
    protected $errorMessage;

    /**
     * The payment batch allocating all the payments.
     *
     * @var PaymentBatch
     */
    protected $paymentBatch;

    /**
     * The ID of the payment that triggered the allocating of the payments.
     *
     * @var int
     */
    protected $paymentId;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $paymentAutoAllocateId
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentAutoAllocateInstanceList
     */
    public static function listing(
        int $paymentAutoAllocateId,
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponsePaymentAutoAllocateInstanceList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $paymentAutoAllocateId,
                ]
            ),
            $params,
            $customHeaders
        );

        return BunqResponsePaymentAutoAllocateInstanceList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $paymentAutoAllocateId
     * @param int $paymentAutoAllocateInstanceId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentAutoAllocateInstance
     */
    public static function get(
        int $paymentAutoAllocateId,
        int $paymentAutoAllocateInstanceId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponsePaymentAutoAllocateInstance {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $paymentAutoAllocateId,
                    $paymentAutoAllocateInstanceId,
                ]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePaymentAutoAllocateInstance::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the PaymentAutoAllocateInstance.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp when the PaymentAutoAllocateInstance was created.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp when the PaymentAutoAllocateInstance was last updated.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The ID of the payment auto allocate this instance belongs to.
     *
     * @return int
     */
    public function getPaymentAutoAllocateId()
    {
        return $this->paymentAutoAllocateId;
    }

    /**
     * @param int $paymentAutoAllocateId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setPaymentAutoAllocateId($paymentAutoAllocateId)
    {
        $this->paymentAutoAllocateId = $paymentAutoAllocateId;
    }

    /**
     * The status of the payment auto allocate instance. SUCCEEDED or FAILED.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The error message, if the payment auto allocating failed.
     *
     * @return Error[]
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param Error[] $errorMessage
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * The payment batch allocating all the payments.
     *
     * @return PaymentBatch
     */
    public function getPaymentBatch()
    {
        return $this->paymentBatch;
    }

    /**
     * @param PaymentBatch $paymentBatch
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setPaymentBatch($paymentBatch)
    {
        $this->paymentBatch = $paymentBatch;
    }

    /**
     * The ID of the payment that triggered the allocating of the payments.
     *
     * @return int
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param int $paymentId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;
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

        if (!is_null($this->paymentAutoAllocateId)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->errorMessage)) {
            return false;
        }

        if (!is_null($this->paymentBatch)) {
            return false;
        }

        if (!is_null($this->paymentId)) {
            return false;
        }

        return true;
    }
}
