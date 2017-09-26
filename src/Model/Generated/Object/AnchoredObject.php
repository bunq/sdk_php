<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\CardDebit;
use bunq\Model\Generated\Endpoint\CardPinChange;
use bunq\Model\Generated\Endpoint\CardResult;
use bunq\Model\Generated\Endpoint\DraftPayment;
use bunq\Model\Generated\Endpoint\IdealMerchantTransaction;
use bunq\Model\Generated\Endpoint\Invoice;
use bunq\Model\Generated\Endpoint\Payment;
use bunq\Model\Generated\Endpoint\PaymentBatch;
use bunq\Model\Generated\Endpoint\PromotionDisplay;
use bunq\Model\Generated\Endpoint\RequestInquiry;
use bunq\Model\Generated\Endpoint\RequestInquiryBatch;
use bunq\Model\Generated\Endpoint\RequestResponse;
use bunq\Model\Generated\Endpoint\ScheduleInstance;
use bunq\Model\Generated\Endpoint\SchedulePayment;
use bunq\Model\Generated\Endpoint\SchedulePaymentBatch;
use bunq\Model\Generated\Endpoint\ScheduleRequestInquiry;
use bunq\Model\Generated\Endpoint\ScheduleRequestInquiryBatch;
use bunq\Model\Generated\Endpoint\ShareInviteBankInquiry;
use bunq\Model\Generated\Endpoint\ShareInviteBankResponse;
use bunq\Model\Generated\Endpoint\UserCredentialPasswordIp;

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
    public function setCardDebit($cardDebit)
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
    public function setCardPinChange($cardPinChange)
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
    public function setCardResult($cardResult)
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
    public function setDraftPayment($draftPayment)
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
    public function setIdealMerchantTransaction($idealMerchantTransaction)
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
    public function setInvoice($invoice)
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
    public function setPayment($payment)
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
    public function setPaymentBatch($paymentBatch)
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
    public function setPromotionDisplay($promotionDisplay)
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
    public function setRequestInquiryBatch($requestInquiryBatch)
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
    public function setRequestInquiry($requestInquiry)
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
    public function setRequestResponse($requestResponse)
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
    public function setScheduledPaymentBatch($scheduledPaymentBatch)
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
    public function setScheduledPayment($scheduledPayment)
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
    public function setScheduledRequestInquiryBatch($scheduledRequestInquiryBatch)
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
    public function setScheduledRequestInquiry($scheduledRequestInquiry)
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
    public function setScheduledInstance($scheduledInstance)
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
    public function setShareInviteBankInquiry($shareInviteBankInquiry)
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
    public function setShareInviteBankResponse($shareInviteBankResponse)
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
    public function setUserCredentialPasswordIp($userCredentialPasswordIp)
    {
        $this->userCredentialPasswordIp = $userCredentialPasswordIp;
    }
}
