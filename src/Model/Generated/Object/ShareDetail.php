<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class ShareDetail extends BunqModel
{
    /**
     * Some of the fields in this model have custom names in the bunq API and
     * therefore must be overridden.
     */
    protected static $fieldNameOverrideMap = [
        'payment_field_for_request' => 'ShareDetailPayment',
        'read_only_field_for_request' => 'ShareDetailReadOnly',
        'draft_payment_field_for_request' => 'ShareDetailDraftPayment',
    ];

    /**
     * The share details for a payment share. In the response 'payment' is
     * replaced by 'ShareDetailPayment'.
     *
     * @var ShareDetailPayment
     */
    protected $payment;

    /**
     * The share details for viewing a share. In the response 'read_only' is
     * replaced by 'ShareDetailReadOnly'.
     *
     * @var ShareDetailReadOnly
     */
    protected $readOnly;

    /**
     * The share details for a draft payment share. In the response
     * 'draft_payment' is replaced by 'ShareDetailDraftPayment'.
     *
     * @var ShareDetailDraftPayment
     */
    protected $draftPayment;

    /**
     * The share details for a payment share. Remember to replace 'payment' with
     * 'ShareDetailPayment' before sending a request.
     *
     * @var ShareDetailPayment|null
     */
    protected $paymentFieldForRequest;

    /**
     * The share details for viewing a share. Remember to replace 'read_only'
     * with 'ShareDetailReadOnly' before sending a request.
     *
     * @var ShareDetailReadOnly|null
     */
    protected $readOnlyFieldForRequest;

    /**
     * The share details for a draft payment share. Remember to replace
     * 'draft_payment' with 'ShareDetailDraftPayment' before sending a request.
     *
     * @var ShareDetailDraftPayment|null
     */
    protected $draftPaymentFieldForRequest;

    /**
     * @param ShareDetailPayment|null $payment The share details for a payment
     * share. Remember to replace 'payment' with 'ShareDetailPayment' before
     * sending a request.
     * @param ShareDetailReadOnly|null $readOnly The share details for viewing a
     * share. Remember to replace 'read_only' with 'ShareDetailReadOnly' before
     * sending a request.
     * @param ShareDetailDraftPayment|null $draftPayment The share details for a
     * draft payment share. Remember to replace 'draft_payment' with
     * 'ShareDetailDraftPayment' before sending a request.
     */
    public function __construct(
        ShareDetailPayment $payment = null,
        ShareDetailReadOnly $readOnly = null,
        ShareDetailDraftPayment $draftPayment = null
    ) {
        $this->paymentFieldForRequest = $payment;
        $this->readOnlyFieldForRequest = $readOnly;
        $this->draftPaymentFieldForRequest = $draftPayment;
    }

    /**
     * The share details for a payment share. In the response 'payment' is
     * replaced by 'ShareDetailPayment'.
     *
     * @return ShareDetailPayment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param ShareDetailPayment $payment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /**
     * The share details for viewing a share. In the response 'read_only' is
     * replaced by 'ShareDetailReadOnly'.
     *
     * @return ShareDetailReadOnly
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * @param ShareDetailReadOnly $readOnly
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
    }

    /**
     * The share details for a draft payment share. In the response
     * 'draft_payment' is replaced by 'ShareDetailDraftPayment'.
     *
     * @return ShareDetailDraftPayment
     */
    public function getDraftPayment()
    {
        return $this->draftPayment;
    }

    /**
     * @param ShareDetailDraftPayment $draftPayment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setDraftPayment($draftPayment)
    {
        $this->draftPayment = $draftPayment;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->payment)) {
            return false;
        }

        if (!is_null($this->readOnly)) {
            return false;
        }

        if (!is_null($this->draftPayment)) {
            return false;
        }

        return true;
    }
}
