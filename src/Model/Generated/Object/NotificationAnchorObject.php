<?php
namespace bunq\Model\Generated\Object;

use bunq\exception\BunqException;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\BunqMeTab;
use bunq\Model\Generated\Endpoint\BunqMeTabResultInquiry;
use bunq\Model\Generated\Endpoint\BunqMeTabResultResponse;
use bunq\Model\Generated\Endpoint\ChatMessageAnnouncement;
use bunq\Model\Generated\Endpoint\ChatMessageStatus;
use bunq\Model\Generated\Endpoint\ChatMessageUser;
use bunq\Model\Generated\Endpoint\DraftPayment;
use bunq\Model\Generated\Endpoint\IdealMerchantTransaction;
use bunq\Model\Generated\Endpoint\Invoice;
use bunq\Model\Generated\Endpoint\MasterCardAction;
use bunq\Model\Generated\Endpoint\MonetaryAccountBank;
use bunq\Model\Generated\Endpoint\Payment;
use bunq\Model\Generated\Endpoint\PaymentBatch;
use bunq\Model\Generated\Endpoint\RequestInquiry;
use bunq\Model\Generated\Endpoint\RequestInquiryBatch;
use bunq\Model\Generated\Endpoint\RequestResponse;
use bunq\Model\Generated\Endpoint\ScheduleInstance;
use bunq\Model\Generated\Endpoint\SchedulePayment;
use bunq\Model\Generated\Endpoint\ShareInviteBankInquiry;
use bunq\Model\Generated\Endpoint\ShareInviteBankResponse;
use bunq\Model\Generated\Endpoint\TabResultInquiry;
use bunq\Model\Generated\Endpoint\TabResultResponse;
use bunq\Model\Generated\Endpoint\UserCompany;
use bunq\Model\Generated\Endpoint\UserPerson;

/**
 * @generated
 */
class NotificationAnchorObject extends BunqModel
{
    /**
     * Error constants.
     */
    const ERROR_NULL_FIELDS = 'All fields of an extended model or object are null.';

    /**
     * @var BunqMeTab
     */
    protected $bunqMeTab;

    /**
     * @var BunqMeTabResultInquiry
     */
    protected $bunqMeTabResultInquiry;

    /**
     * @var BunqMeTabResultResponse
     */
    protected $bunqMeTabResultResponse;

    /**
     * @var ChatMessageStatus
     */
    protected $chatMessageStatus;

    /**
     * @var ChatMessageUser
     */
    protected $chatMessageUser;

    /**
     * @var ChatMessageAnnouncement
     */
    protected $chatMessageAnnouncement;

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
     * @var MasterCardAction
     */
    protected $masterCardAction;

    /**
     * @var MonetaryAccountBank
     */
    protected $monetaryAccountBank;

    /**
     * @var Payment
     */
    protected $payment;

    /**
     * @var PaymentBatch
     */
    protected $paymentBatch;

    /**
     * @var RequestInquiry
     */
    protected $requestInquiry;

    /**
     * @var RequestInquiryBatch
     */
    protected $requestInquiryBatch;

    /**
     * @var RequestResponse
     */
    protected $requestResponse;

    /**
     * @var ShareInviteBankInquiry
     */
    protected $shareInviteBankInquiry;

    /**
     * @var ShareInviteBankResponse
     */
    protected $shareInviteBankResponse;

    /**
     * @var SchedulePayment
     */
    protected $scheduledPayment;

    /**
     * @var ScheduleInstance
     */
    protected $scheduledInstance;

    /**
     * @var TabResultInquiry
     */
    protected $tabResultInquiry;

    /**
     * @var TabResultResponse
     */
    protected $tabResultResponse;

    /**
     * @var UserPerson
     */
    protected $userPerson;

    /**
     * @var UserCompany
     */
    protected $userCompany;

    /**
     * @return BunqMeTab
     */
    public function getBunqMeTab()
    {
        return $this->bunqMeTab;
    }

    /**
     * @param BunqMeTab $bunqMeTab
     */
    public function setBunqMeTab($bunqMeTab)
    {
        $this->bunqMeTab = $bunqMeTab;
    }

    /**
     * @return BunqMeTabResultInquiry
     */
    public function getBunqMeTabResultInquiry()
    {
        return $this->bunqMeTabResultInquiry;
    }

    /**
     * @param BunqMeTabResultInquiry $bunqMeTabResultInquiry
     */
    public function setBunqMeTabResultInquiry($bunqMeTabResultInquiry)
    {
        $this->bunqMeTabResultInquiry = $bunqMeTabResultInquiry;
    }

    /**
     * @return BunqMeTabResultResponse
     */
    public function getBunqMeTabResultResponse()
    {
        return $this->bunqMeTabResultResponse;
    }

    /**
     * @param BunqMeTabResultResponse $bunqMeTabResultResponse
     */
    public function setBunqMeTabResultResponse($bunqMeTabResultResponse)
    {
        $this->bunqMeTabResultResponse = $bunqMeTabResultResponse;
    }

    /**
     * @return ChatMessageStatus
     */
    public function getChatMessageStatus()
    {
        return $this->chatMessageStatus;
    }

    /**
     * @param ChatMessageStatus $chatMessageStatus
     */
    public function setChatMessageStatus($chatMessageStatus)
    {
        $this->chatMessageStatus = $chatMessageStatus;
    }

    /**
     * @return ChatMessageUser
     */
    public function getChatMessageUser()
    {
        return $this->chatMessageUser;
    }

    /**
     * @param ChatMessageUser $chatMessageUser
     */
    public function setChatMessageUser($chatMessageUser)
    {
        $this->chatMessageUser = $chatMessageUser;
    }

    /**
     * @return ChatMessageAnnouncement
     */
    public function getChatMessageAnnouncement()
    {
        return $this->chatMessageAnnouncement;
    }

    /**
     * @param ChatMessageAnnouncement $chatMessageAnnouncement
     */
    public function setChatMessageAnnouncement($chatMessageAnnouncement)
    {
        $this->chatMessageAnnouncement = $chatMessageAnnouncement;
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
     * @return MasterCardAction
     */
    public function getMasterCardAction()
    {
        return $this->masterCardAction;
    }

    /**
     * @param MasterCardAction $masterCardAction
     */
    public function setMasterCardAction($masterCardAction)
    {
        $this->masterCardAction = $masterCardAction;
    }

    /**
     * @return MonetaryAccountBank
     */
    public function getMonetaryAccountBank()
    {
        return $this->monetaryAccountBank;
    }

    /**
     * @param MonetaryAccountBank $monetaryAccountBank
     */
    public function setMonetaryAccountBank($monetaryAccountBank)
    {
        $this->monetaryAccountBank = $monetaryAccountBank;
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
     * @return TabResultInquiry
     */
    public function getTabResultInquiry()
    {
        return $this->tabResultInquiry;
    }

    /**
     * @param TabResultInquiry $tabResultInquiry
     */
    public function setTabResultInquiry($tabResultInquiry)
    {
        $this->tabResultInquiry = $tabResultInquiry;
    }

    /**
     * @return TabResultResponse
     */
    public function getTabResultResponse()
    {
        return $this->tabResultResponse;
    }

    /**
     * @param TabResultResponse $tabResultResponse
     */
    public function setTabResultResponse($tabResultResponse)
    {
        $this->tabResultResponse = $tabResultResponse;
    }

    /**
     * @return UserPerson
     */
    public function getUserPerson()
    {
        return $this->userPerson;
    }

    /**
     * @param UserPerson $userPerson
     */
    public function setUserPerson($userPerson)
    {
        $this->userPerson = $userPerson;
    }

    /**
     * @return UserCompany
     */
    public function getUserCompany()
    {
        return $this->userCompany;
    }

    /**
     * @param UserCompany $userCompany
     */
    public function setUserCompany($userCompany)
    {
        $this->userCompany = $userCompany;
    }

    /**
     * @return BunqModel
     * @throws BunqException
     */
    public function getReferencedObject()
    {
        if (!is_null($this->bunqMeTab)) {
            return $this->bunqMeTab;
        }

        if (!is_null($this->bunqMeTabResultInquiry)) {
            return $this->bunqMeTabResultInquiry;
        }

        if (!is_null($this->bunqMeTabResultResponse)) {
            return $this->bunqMeTabResultResponse;
        }

        if (!is_null($this->chatMessageStatus)) {
            return $this->chatMessageStatus;
        }

        if (!is_null($this->chatMessageUser)) {
            return $this->chatMessageUser;
        }

        if (!is_null($this->chatMessageAnnouncement)) {
            return $this->chatMessageAnnouncement;
        }

        if (!is_null($this->draftPayment)) {
            return $this->draftPayment;
        }

        if (!is_null($this->idealMerchantTransaction)) {
            return $this->idealMerchantTransaction;
        }

        if (!is_null($this->invoice)) {
            return $this->invoice;
        }

        if (!is_null($this->masterCardAction)) {
            return $this->masterCardAction;
        }

        if (!is_null($this->monetaryAccountBank)) {
            return $this->monetaryAccountBank;
        }

        if (!is_null($this->payment)) {
            return $this->payment;
        }

        if (!is_null($this->paymentBatch)) {
            return $this->paymentBatch;
        }

        if (!is_null($this->requestInquiry)) {
            return $this->requestInquiry;
        }

        if (!is_null($this->requestInquiryBatch)) {
            return $this->requestInquiryBatch;
        }

        if (!is_null($this->requestResponse)) {
            return $this->requestResponse;
        }

        if (!is_null($this->shareInviteBankInquiry)) {
            return $this->shareInviteBankInquiry;
        }

        if (!is_null($this->shareInviteBankResponse)) {
            return $this->shareInviteBankResponse;
        }

        if (!is_null($this->scheduledPayment)) {
            return $this->scheduledPayment;
        }

        if (!is_null($this->scheduledInstance)) {
            return $this->scheduledInstance;
        }

        if (!is_null($this->tabResultInquiry)) {
            return $this->tabResultInquiry;
        }

        if (!is_null($this->tabResultResponse)) {
            return $this->tabResultResponse;
        }

        if (!is_null($this->userPerson)) {
            return $this->userPerson;
        }

        if (!is_null($this->userCompany)) {
            return $this->userCompany;
        }

        throw new BunqException(self::ERROR_NULL_FIELDS);
    }
}
