<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class AnchoredObject extends BunqModel
{
    /**
     * @var CardDebit
     */
    protected $cardDebit;

    /**
     * @var CardPinChange
     */
    protected $cardPinChange;

    /**
     * @var CardResult
     */
    protected $cardResult;

    /**
     * @var DraftPayment
     */
    protected $draftPayment;

    /**
     * @var IdealMerchantTransaction
     */
    protected $idealMerchantTransaction;

    /**
     * @var Invoice
     */
    protected $invoice;

    /**
     * @var Payment
     */
    protected $payment;

    /**
     * @var PaymentBatch
     */
    protected $paymentBatch;

    /**
     * @var PromotionDisplay
     */
    protected $promotionDisplay;

    /**
     * @var RequestInquiryBatch
     */
    protected $requestInquiryBatch;

    /**
     * @var RequestInquiry
     */
    protected $requestInquiry;

    /**
     * @var RequestResponse
     */
    protected $requestResponse;

    /**
     * @var SchedulePaymentBatch
     */
    protected $scheduledPaymentBatch;

    /**
     * @var SchedulePayment
     */
    protected $scheduledPayment;

    /**
     * @var ScheduleRequestInquiryBatch
     */
    protected $scheduledRequestInquiryBatch;

    /**
     * @var ScheduleRequestInquiry
     */
    protected $scheduledRequestInquiry;

    /**
     * @var ScheduleInstance
     */
    protected $scheduledInstance;

    /**
     * @var ShareInviteBankInquiry
     */
    protected $shareInviteBankInquiry;

    /**
     * @var ShareInviteBankResponse
     */
    protected $shareInviteBankResponse;

    /**
     * @var UserCredentialPasswordIp
     */
    protected $userCredentialPasswordIp;

    /**
     * @return CardDebit
     */
    public function getCardDebit()
    {
        return $this->cardDebit;
    }

    /**
     * @param CardDebit $cardDebit
     */
    public function setCardDebit(CardDebit $cardDebit)
    {
        $this->cardDebit = $cardDebit;
    }

    /**
     * @return CardPinChange
     */
    public function getCardPinChange()
    {
        return $this->cardPinChange;
    }

    /**
     * @param CardPinChange $cardPinChange
     */
    public function setCardPinChange(CardPinChange $cardPinChange)
    {
        $this->cardPinChange = $cardPinChange;
    }

    /**
     * @return CardResult
     */
    public function getCardResult()
    {
        return $this->cardResult;
    }

    /**
     * @param CardResult $cardResult
     */
    public function setCardResult(CardResult $cardResult)
    {
        $this->cardResult = $cardResult;
    }

    /**
     * @return DraftPayment
     */
    public function getDraftPayment()
    {
        return $this->draftPayment;
    }

    /**
     * @param DraftPayment $draftPayment
     */
    public function setDraftPayment(DraftPayment $draftPayment)
    {
        $this->draftPayment = $draftPayment;
    }

    /**
     * @return IdealMerchantTransaction
     */
    public function getIdealMerchantTransaction()
    {
        return $this->idealMerchantTransaction;
    }

    /**
     * @param IdealMerchantTransaction $idealMerchantTransaction
     */
    public function setIdealMerchantTransaction(IdealMerchantTransaction $idealMerchantTransaction)
    {
        $this->idealMerchantTransaction = $idealMerchantTransaction;
    }

    /**
     * @return Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param Invoice $invoice
     */
    public function setInvoice(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Payment $payment
     */
    public function setPayment(Payment $payment)
    {
        $this->payment = $payment;
    }

    /**
     * @return PaymentBatch
     */
    public function getPaymentBatch()
    {
        return $this->paymentBatch;
    }

    /**
     * @param PaymentBatch $paymentBatch
     */
    public function setPaymentBatch(PaymentBatch $paymentBatch)
    {
        $this->paymentBatch = $paymentBatch;
    }

    /**
     * @return PromotionDisplay
     */
    public function getPromotionDisplay()
    {
        return $this->promotionDisplay;
    }

    /**
     * @param PromotionDisplay $promotionDisplay
     */
    public function setPromotionDisplay(PromotionDisplay $promotionDisplay)
    {
        $this->promotionDisplay = $promotionDisplay;
    }

    /**
     * @return RequestInquiryBatch
     */
    public function getRequestInquiryBatch()
    {
        return $this->requestInquiryBatch;
    }

    /**
     * @param RequestInquiryBatch $requestInquiryBatch
     */
    public function setRequestInquiryBatch(RequestInquiryBatch $requestInquiryBatch)
    {
        $this->requestInquiryBatch = $requestInquiryBatch;
    }

    /**
     * @return RequestInquiry
     */
    public function getRequestInquiry()
    {
        return $this->requestInquiry;
    }

    /**
     * @param RequestInquiry $requestInquiry
     */
    public function setRequestInquiry(RequestInquiry $requestInquiry)
    {
        $this->requestInquiry = $requestInquiry;
    }

    /**
     * @return RequestResponse
     */
    public function getRequestResponse()
    {
        return $this->requestResponse;
    }

    /**
     * @param RequestResponse $requestResponse
     */
    public function setRequestResponse(RequestResponse $requestResponse)
    {
        $this->requestResponse = $requestResponse;
    }

    /**
     * @return SchedulePaymentBatch
     */
    public function getScheduledPaymentBatch()
    {
        return $this->scheduledPaymentBatch;
    }

    /**
     * @param SchedulePaymentBatch $scheduledPaymentBatch
     */
    public function setScheduledPaymentBatch(SchedulePaymentBatch $scheduledPaymentBatch)
    {
        $this->scheduledPaymentBatch = $scheduledPaymentBatch;
    }

    /**
     * @return SchedulePayment
     */
    public function getScheduledPayment()
    {
        return $this->scheduledPayment;
    }

    /**
     * @param SchedulePayment $scheduledPayment
     */
    public function setScheduledPayment(SchedulePayment $scheduledPayment)
    {
        $this->scheduledPayment = $scheduledPayment;
    }

    /**
     * @return ScheduleRequestInquiryBatch
     */
    public function getScheduledRequestInquiryBatch()
    {
        return $this->scheduledRequestInquiryBatch;
    }

    /**
     * @param ScheduleRequestInquiryBatch $scheduledRequestInquiryBatch
     */
    public function setScheduledRequestInquiryBatch(ScheduleRequestInquiryBatch $scheduledRequestInquiryBatch)
    {
        $this->scheduledRequestInquiryBatch = $scheduledRequestInquiryBatch;
    }

    /**
     * @return ScheduleRequestInquiry
     */
    public function getScheduledRequestInquiry()
    {
        return $this->scheduledRequestInquiry;
    }

    /**
     * @param ScheduleRequestInquiry $scheduledRequestInquiry
     */
    public function setScheduledRequestInquiry(ScheduleRequestInquiry $scheduledRequestInquiry)
    {
        $this->scheduledRequestInquiry = $scheduledRequestInquiry;
    }

    /**
     * @return ScheduleInstance
     */
    public function getScheduledInstance()
    {
        return $this->scheduledInstance;
    }

    /**
     * @param ScheduleInstance $scheduledInstance
     */
    public function setScheduledInstance(ScheduleInstance $scheduledInstance)
    {
        $this->scheduledInstance = $scheduledInstance;
    }

    /**
     * @return ShareInviteBankInquiry
     */
    public function getShareInviteBankInquiry()
    {
        return $this->shareInviteBankInquiry;
    }

    /**
     * @param ShareInviteBankInquiry $shareInviteBankInquiry
     */
    public function setShareInviteBankInquiry(ShareInviteBankInquiry $shareInviteBankInquiry)
    {
        $this->shareInviteBankInquiry = $shareInviteBankInquiry;
    }

    /**
     * @return ShareInviteBankResponse
     */
    public function getShareInviteBankResponse()
    {
        return $this->shareInviteBankResponse;
    }

    /**
     * @param ShareInviteBankResponse $shareInviteBankResponse
     */
    public function setShareInviteBankResponse(ShareInviteBankResponse $shareInviteBankResponse)
    {
        $this->shareInviteBankResponse = $shareInviteBankResponse;
    }

    /**
     * @return UserCredentialPasswordIp
     */
    public function getUserCredentialPasswordIp()
    {
        return $this->userCredentialPasswordIp;
    }

    /**
     * @param UserCredentialPasswordIp $userCredentialPasswordIp
     */
    public function setUserCredentialPasswordIp(UserCredentialPasswordIp $userCredentialPasswordIp)
    {
        $this->userCredentialPasswordIp = $userCredentialPasswordIp;
    }
}
