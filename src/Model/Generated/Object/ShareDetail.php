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
        'payment' => 'ShareDetailPayment',
        'read_only' => 'ShareDetailReadOnly',
        'draft_payment' => 'ShareDetailDraftPayment',
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
     * The share details for a draft payment share. Remember to replace
     * 'draft_payment' with 'ShareDetailDraftPayment' before sending a request.
     *
     * @var ShareDetailDraftPayment
     */
    protected $draftPayment;

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
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
    }

    /**
     * The share details for a draft payment share. Remember to replace
     * 'draft_payment' with 'ShareDetailDraftPayment' before sending a request.
     *
     * @return ShareDetailDraftPayment
     */
    public function getDraftPayment()
    {
        return $this->draftPayment;
    }

    /**
     * @param ShareDetailDraftPayment $draftPayment
     */
    public function setDraftPayment($draftPayment)
    {
        $this->draftPayment = $draftPayment;
    }
}
