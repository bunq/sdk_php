<?php

namespace bunq\Model\Generated\Object;

use bunq\exception\BunqException;
use bunq\Model\Core\AnchorObjectInterface;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\BunqMeFundraiserResult;
use bunq\Model\Generated\Endpoint\BunqMeTab;
use bunq\Model\Generated\Endpoint\BunqMeTabResultInquiry;
use bunq\Model\Generated\Endpoint\BunqMeTabResultResponse;
use bunq\Model\Generated\Endpoint\ChatMessage;
use bunq\Model\Generated\Endpoint\DraftPayment;
use bunq\Model\Generated\Endpoint\IdealMerchantTransaction;
use bunq\Model\Generated\Endpoint\Invoice;
use bunq\Model\Generated\Endpoint\MasterCardAction;
use bunq\Model\Generated\Endpoint\MonetaryAccount;
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
use bunq\Model\Generated\Endpoint\User;

/**
 * @generated
 */
class NotificationAnchorObject extends BunqModel implements AnchorObjectInterface
{
    /**
     * Error constants.
     */
    const ERROR_NULL_FIELDS = 'All fields of an extended model or object are null.';

    /**
     * @var BunqMeFundraiserResult
     */
    protected $bunqMeFundraiserResult;

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
     * @var ChatMessage
     */
    protected $chatMessage;

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
     * @var MonetaryAccount
     */
    protected $monetaryAccount;

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
     * @var User
     */
    protected $user;

    /**
     * @return BunqMeFundraiserResult
     */
    public function getBunqMeFundraiserResult()
    {
        return $this->bunqMeFundraiserResult;
    }

    /**
     * @param BunqMeFundraiserResult $bunqMeFundraiserResult
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setBunqMeFundraiserResult($bunqMeFundraiserResult)
    {
        $this->bunqMeFundraiserResult = $bunqMeFundraiserResult;
    }

    /**
     * @return BunqMeTab
     */
    public function getBunqMeTab()
    {
        return $this->bunqMeTab;
    }

    /**
     * @param BunqMeTab $bunqMeTab
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setBunqMeTabResultResponse($bunqMeTabResultResponse)
    {
        $this->bunqMeTabResultResponse = $bunqMeTabResultResponse;
    }

    /**
     * @return ChatMessage
     */
    public function getChatMessage()
    {
        return $this->chatMessage;
    }

    /**
     * @param ChatMessage $chatMessage
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setChatMessage($chatMessage)
    {
        $this->chatMessage = $chatMessage;
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setMasterCardAction($masterCardAction)
    {
        $this->masterCardAction = $masterCardAction;
    }

    /**
     * @return MonetaryAccount
     */
    public function getMonetaryAccount()
    {
        return $this->monetaryAccount;
    }

    /**
     * @param MonetaryAccount $monetaryAccount
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setMonetaryAccount($monetaryAccount)
    {
        $this->monetaryAccount = $monetaryAccount;
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setTabResultResponse($tabResultResponse)
    {
        $this->tabResultResponse = $tabResultResponse;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return BunqModel
     * @throws BunqException
     */
    public function getReferencedObject()
    {
        if (!is_null($this->bunqMeFundraiserResult)) {
            return $this->bunqMeFundraiserResult;
        }

        if (!is_null($this->bunqMeTab)) {
            return $this->bunqMeTab;
        }

        if (!is_null($this->bunqMeTabResultInquiry)) {
            return $this->bunqMeTabResultInquiry;
        }

        if (!is_null($this->bunqMeTabResultResponse)) {
            return $this->bunqMeTabResultResponse;
        }

        if (!is_null($this->chatMessage)) {
            return $this->chatMessage;
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

        if (!is_null($this->monetaryAccount)) {
            return $this->monetaryAccount;
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

        if (!is_null($this->user)) {
            return $this->user;
        }

        throw new BunqException(self::ERROR_NULL_FIELDS);
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->bunqMeFundraiserResult)) {
            return false;
        }

        if (!is_null($this->bunqMeTab)) {
            return false;
        }

        if (!is_null($this->bunqMeTabResultInquiry)) {
            return false;
        }

        if (!is_null($this->bunqMeTabResultResponse)) {
            return false;
        }

        if (!is_null($this->chatMessage)) {
            return false;
        }

        if (!is_null($this->draftPayment)) {
            return false;
        }

        if (!is_null($this->idealMerchantTransaction)) {
            return false;
        }

        if (!is_null($this->invoice)) {
            return false;
        }

        if (!is_null($this->masterCardAction)) {
            return false;
        }

        if (!is_null($this->monetaryAccount)) {
            return false;
        }

        if (!is_null($this->payment)) {
            return false;
        }

        if (!is_null($this->paymentBatch)) {
            return false;
        }

        if (!is_null($this->requestInquiry)) {
            return false;
        }

        if (!is_null($this->requestInquiryBatch)) {
            return false;
        }

        if (!is_null($this->requestResponse)) {
            return false;
        }

        if (!is_null($this->shareInviteBankInquiry)) {
            return false;
        }

        if (!is_null($this->shareInviteBankResponse)) {
            return false;
        }

        if (!is_null($this->scheduledPayment)) {
            return false;
        }

        if (!is_null($this->scheduledInstance)) {
            return false;
        }

        if (!is_null($this->tabResultInquiry)) {
            return false;
        }

        if (!is_null($this->tabResultResponse)) {
            return false;
        }

        if (!is_null($this->user)) {
            return false;
        }

        return true;
    }
}
