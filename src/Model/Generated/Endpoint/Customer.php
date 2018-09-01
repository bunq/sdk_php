<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;

/**
 * Used to view a customer.
 *
 * @generated
 */
class Customer extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/customer';
    const ENDPOINT_URL_READ = 'user/%s/customer/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/customer/%s';

    /**
     * Field constants.
     */
    const FIELD_BILLING_ACCOUNT_ID = 'billing_account_id';
    const FIELD_INVOICE_NOTIFICATION_PREFERENCE = 'invoice_notification_preference';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'Customer';

    /**
     * The id of the customer.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the customer object's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the customer object's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The primary billing account account's id.
     *
     * @var string
     */
    protected $billingAccountId;

    /**
     * The preferred notification type for invoices.
     *
     * @var string
     */
    protected $invoiceNotificationPreference;

    /**
     * The primary billing account account's id.
     *
     * @var string|null
     */
    protected $billingAccountIdFieldForRequest;

    /**
     * The preferred notification type for invoices
     *
     * @var string|null
     */
    protected $invoiceNotificationPreferenceFieldForRequest;

    /**
     * @param string|null $billingAccountId              The primary billing account
     *                                                   account's id.
     * @param string|null $invoiceNotificationPreference The preferred
     *                                                   notification type for invoices
     */
    public function __construct(string $billingAccountId = null, string $invoiceNotificationPreference = null)
    {
        $this->billingAccountIdFieldForRequest = $billingAccountId;
        $this->invoiceNotificationPreferenceFieldForRequest = $invoiceNotificationPreference;
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCustomerList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseCustomerList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseCustomerList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $customerId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCustomer
     */
    public static function get(int $customerId, array $customHeaders = []): BunqResponseCustomer
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $customerId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCustomer::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $customerId
     * @param string|null $billingAccountId              The primary billing account
     *                                                   account's id.
     * @param string|null $invoiceNotificationPreference The preferred
     *                                                   notification type for invoices
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $customerId,
        string $billingAccountId = null,
        string $invoiceNotificationPreference = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $customerId]
            ),
            [
                self::FIELD_BILLING_ACCOUNT_ID => $billingAccountId,
                self::FIELD_INVOICE_NOTIFICATION_PREFERENCE => $invoiceNotificationPreference,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * The id of the customer.
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
     * The timestamp of the customer object's creation.
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
     * The timestamp of the customer object's last update.
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
     * The primary billing account account's id.
     *
     * @return string
     */
    public function getBillingAccountId()
    {
        return $this->billingAccountId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $billingAccountId
     */
    public function setBillingAccountId($billingAccountId)
    {
        $this->billingAccountId = $billingAccountId;
    }

    /**
     * The preferred notification type for invoices.
     *
     * @return string
     */
    public function getInvoiceNotificationPreference()
    {
        return $this->invoiceNotificationPreference;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $invoiceNotificationPreference
     */
    public function setInvoiceNotificationPreference($invoiceNotificationPreference)
    {
        $this->invoiceNotificationPreference = $invoiceNotificationPreference;
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

        if (!is_null($this->billingAccountId)) {
            return false;
        }

        if (!is_null($this->invoiceNotificationPreference)) {
            return false;
        }

        return true;
    }
}
