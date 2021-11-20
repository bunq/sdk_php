<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

/**
 * Used to view a customer.
 *
 * @generated
 */
class Customer extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_BILLING_ACCOUNT_ID = 'billing_account_id';
    const FIELD_INVOICE_NOTIFICATION_PREFERENCE = 'invoice_notification_preference';

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
     * @param string|null $billingAccountId The primary billing account
     * account's id.
     * @param string|null $invoiceNotificationPreference The preferred
     * notification type for invoices
     */
    public function __construct(string  $billingAccountId = null, string  $invoiceNotificationPreference = null)
    {
        $this->billingAccountIdFieldForRequest = $billingAccountId;
        $this->invoiceNotificationPreferenceFieldForRequest = $invoiceNotificationPreference;
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
