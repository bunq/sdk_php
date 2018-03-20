<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class ChatMessageContentAnchorEvent extends BunqModel
{
    /**
     * An anchored object. Can be one of: CardDebit, CardPinChange, CardResult,
     * DraftPayment, IdealMerchantTransaction, Invoice, Payment, PaymentBatch,
     * PromotionDisplay, RequestInquiryBatch, RequestInquiry, RequestResponse,
     * ScheduledPaymentBatch, ScheduledPayment, ScheduledRequestInquiryBatch,
     * ScheduledRequestInquiry, ScheduledInstance, ShareInviteBankInquiry,
     * ShareInviteBankResponse, UserCredentialPasswordIp
     *
     * @var AnchoredObject
     */
    protected $anchoredObject;

    /**
     * An anchored object. Can be one of: CardDebit, CardPinChange, CardResult,
     * DraftPayment, IdealMerchantTransaction, Invoice, Payment, PaymentBatch,
     * PromotionDisplay, RequestInquiryBatch, RequestInquiry, RequestResponse,
     * ScheduledPaymentBatch, ScheduledPayment, ScheduledRequestInquiryBatch,
     * ScheduledRequestInquiry, ScheduledInstance, ShareInviteBankInquiry,
     * ShareInviteBankResponse, UserCredentialPasswordIp
     *
     * @return AnchoredObject
     */
    public function getAnchoredObject()
    {
        return $this->anchoredObject;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param AnchoredObject $anchoredObject
     */
    public function setAnchoredObject($anchoredObject)
    {
        $this->anchoredObject = $anchoredObject;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->anchoredObject)) {
            return false;
        }

        return true;
    }
}
