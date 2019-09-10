<?php

namespace bunq\Model\Generated\Object;

use bunq\exception\BunqException;
use bunq\Model\Core\AnchorObjectInterface;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\BankSwitchServiceNetherlandsIncomingPayment;
use bunq\Model\Generated\Endpoint\BunqMeFundraiserResult;
use bunq\Model\Generated\Endpoint\BunqMeTab;
use bunq\Model\Generated\Endpoint\BunqMeTabResultResponse;
use bunq\Model\Generated\Endpoint\Card;
use bunq\Model\Generated\Endpoint\CardDebit;
use bunq\Model\Generated\Endpoint\DraftPayment;
use bunq\Model\Generated\Endpoint\FeatureAnnouncement;
use bunq\Model\Generated\Endpoint\IdealMerchantTransaction;
use bunq\Model\Generated\Endpoint\Invoice;
use bunq\Model\Generated\Endpoint\MasterCardAction;
use bunq\Model\Generated\Endpoint\Payment;
use bunq\Model\Generated\Endpoint\PaymentBatch;
use bunq\Model\Generated\Endpoint\RequestInquiry;
use bunq\Model\Generated\Endpoint\RequestInquiryBatch;
use bunq\Model\Generated\Endpoint\RequestResponse;
use bunq\Model\Generated\Endpoint\RewardRecipient;
use bunq\Model\Generated\Endpoint\RewardSender;
use bunq\Model\Generated\Endpoint\ScheduleInstance;
use bunq\Model\Generated\Endpoint\SchedulePayment;
use bunq\Model\Generated\Endpoint\SchedulePaymentBatch;
use bunq\Model\Generated\Endpoint\ShareInviteBankInquiry;
use bunq\Model\Generated\Endpoint\ShareInviteBankInquiryBatch;
use bunq\Model\Generated\Endpoint\ShareInviteBankResponse;
use bunq\Model\Generated\Endpoint\SofortMerchantTransaction;
use bunq\Model\Generated\Endpoint\TabResultInquiry;
use bunq\Model\Generated\Endpoint\TabResultResponse;
use bunq\Model\Generated\Endpoint\TransferwiseTransfer;

/**
 * @generated
 */
class EventObject extends BunqModel implements AnchorObjectInterface
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
     * @var BunqMeTabResultResponse
     */
    protected $bunqMeTabResultResponse;

    /**
     * @var BunqMeFundraiserResult
     */
    protected $bunqMeFundraiserResult;

    /**
     * @var Card
     */
    protected $card;

    /**
     * @var CardDebit
     */
    protected $cardDebit;

    /**
     * @var DraftPayment
     */
    protected $draftPayment;

    /**
     * @var FeatureAnnouncement
     */
    protected $featureAnnouncement;

    /**
     * @var IdealMerchantTransaction
     */
    protected $idealMerchantTransaction;

    /**
     * @var Invoice
     */
    protected $invoice;

    /**
     * @var SchedulePayment
     */
    protected $scheduledPayment;

    /**
     * @var SchedulePaymentBatch
     */
    protected $scheduledPaymentBatch;

    /**
     * @var ScheduleInstance
     */
    protected $scheduledInstance;

    /**
     * @var MasterCardAction
     */
    protected $masterCardAction;

    /**
     * @var BankSwitchServiceNetherlandsIncomingPayment
     */
    protected $bankSwitchServiceNetherlandsIncomingPayment;

    /**
     * @var Payment
     */
    protected $payment;

    /**
     * @var PaymentBatch
     */
    protected $paymentBatch;

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
     * @var RewardRecipient
     */
    protected $rewardRecipient;

    /**
     * @var RewardSender
     */
    protected $rewardSender;

    /**
     * @var ShareInviteBankInquiryBatch
     */
    protected $shareInviteBankInquiryBatch;

    /**
     * @var ShareInviteBankInquiry
     */
    protected $shareInviteBankInquiry;

    /**
     * @var ShareInviteBankResponse
     */
    protected $shareInviteBankResponse;

    /**
     * @var SofortMerchantTransaction
     */
    protected $sofortMerchantTransaction;

    /**
     * @var TabResultInquiry
     */
    protected $tabResultInquiry;

    /**
     * @var TabResultResponse
     */
    protected $tabResultResponse;

    /**
     * @var TransferwiseTransfer
     */
    protected $transferwisePayment;

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
     * @return Card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param Card $card
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setCard($card)
    {
        $this->card = $card;
    }

    /**
     * @return CardDebit
     */
    public function getCardDebit()
    {
        return $this->cardDebit;
    }

    /**
     * @param CardDebit $cardDebit
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setCardDebit($cardDebit)
    {
        $this->cardDebit = $cardDebit;
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
     * @return FeatureAnnouncement
     */
    public function getFeatureAnnouncement()
    {
        return $this->featureAnnouncement;
    }

    /**
     * @param FeatureAnnouncement $featureAnnouncement
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setFeatureAnnouncement($featureAnnouncement)
    {
        $this->featureAnnouncement = $featureAnnouncement;
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
     * @return SchedulePaymentBatch
     */
    public function getScheduledPaymentBatch()
    {
        return $this->scheduledPaymentBatch;
    }

    /**
     * @param SchedulePaymentBatch $scheduledPaymentBatch
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setScheduledPaymentBatch($scheduledPaymentBatch)
    {
        $this->scheduledPaymentBatch = $scheduledPaymentBatch;
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
     * @return BankSwitchServiceNetherlandsIncomingPayment
     */
    public function getBankSwitchServiceNetherlandsIncomingPayment()
    {
        return $this->bankSwitchServiceNetherlandsIncomingPayment;
    }

    /**
     * @param BankSwitchServiceNetherlandsIncomingPayment
     * $bankSwitchServiceNetherlandsIncomingPayment
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setBankSwitchServiceNetherlandsIncomingPayment($bankSwitchServiceNetherlandsIncomingPayment)
    {
        $this->bankSwitchServiceNetherlandsIncomingPayment = $bankSwitchServiceNetherlandsIncomingPayment;
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
     * @return RewardRecipient
     */
    public function getRewardRecipient()
    {
        return $this->rewardRecipient;
    }

    /**
     * @param RewardRecipient $rewardRecipient
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setRewardRecipient($rewardRecipient)
    {
        $this->rewardRecipient = $rewardRecipient;
    }

    /**
     * @return RewardSender
     */
    public function getRewardSender()
    {
        return $this->rewardSender;
    }

    /**
     * @param RewardSender $rewardSender
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setRewardSender($rewardSender)
    {
        $this->rewardSender = $rewardSender;
    }

    /**
     * @return ShareInviteBankInquiryBatch
     */
    public function getShareInviteBankInquiryBatch()
    {
        return $this->shareInviteBankInquiryBatch;
    }

    /**
     * @param ShareInviteBankInquiryBatch $shareInviteBankInquiryBatch
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setShareInviteBankInquiryBatch($shareInviteBankInquiryBatch)
    {
        $this->shareInviteBankInquiryBatch = $shareInviteBankInquiryBatch;
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
     * @return SofortMerchantTransaction
     */
    public function getSofortMerchantTransaction()
    {
        return $this->sofortMerchantTransaction;
    }

    /**
     * @param SofortMerchantTransaction $sofortMerchantTransaction
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setSofortMerchantTransaction($sofortMerchantTransaction)
    {
        $this->sofortMerchantTransaction = $sofortMerchantTransaction;
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
     * @return TransferwiseTransfer
     */
    public function getTransferwisePayment()
    {
        return $this->transferwisePayment;
    }

    /**
     * @param TransferwiseTransfer $transferwisePayment
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setTransferwisePayment($transferwisePayment)
    {
        $this->transferwisePayment = $transferwisePayment;
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

        if (!is_null($this->bunqMeTabResultResponse)) {
            return $this->bunqMeTabResultResponse;
        }

        if (!is_null($this->bunqMeFundraiserResult)) {
            return $this->bunqMeFundraiserResult;
        }

        if (!is_null($this->card)) {
            return $this->card;
        }

        if (!is_null($this->cardDebit)) {
            return $this->cardDebit;
        }

        if (!is_null($this->draftPayment)) {
            return $this->draftPayment;
        }

        if (!is_null($this->featureAnnouncement)) {
            return $this->featureAnnouncement;
        }

        if (!is_null($this->idealMerchantTransaction)) {
            return $this->idealMerchantTransaction;
        }

        if (!is_null($this->invoice)) {
            return $this->invoice;
        }

        if (!is_null($this->scheduledPayment)) {
            return $this->scheduledPayment;
        }

        if (!is_null($this->scheduledPaymentBatch)) {
            return $this->scheduledPaymentBatch;
        }

        if (!is_null($this->scheduledInstance)) {
            return $this->scheduledInstance;
        }

        if (!is_null($this->masterCardAction)) {
            return $this->masterCardAction;
        }

        if (!is_null($this->bankSwitchServiceNetherlandsIncomingPayment)) {
            return $this->bankSwitchServiceNetherlandsIncomingPayment;
        }

        if (!is_null($this->payment)) {
            return $this->payment;
        }

        if (!is_null($this->paymentBatch)) {
            return $this->paymentBatch;
        }

        if (!is_null($this->requestInquiryBatch)) {
            return $this->requestInquiryBatch;
        }

        if (!is_null($this->requestInquiry)) {
            return $this->requestInquiry;
        }

        if (!is_null($this->requestResponse)) {
            return $this->requestResponse;
        }

        if (!is_null($this->rewardRecipient)) {
            return $this->rewardRecipient;
        }

        if (!is_null($this->rewardSender)) {
            return $this->rewardSender;
        }

        if (!is_null($this->shareInviteBankInquiryBatch)) {
            return $this->shareInviteBankInquiryBatch;
        }

        if (!is_null($this->shareInviteBankInquiry)) {
            return $this->shareInviteBankInquiry;
        }

        if (!is_null($this->shareInviteBankResponse)) {
            return $this->shareInviteBankResponse;
        }

        if (!is_null($this->sofortMerchantTransaction)) {
            return $this->sofortMerchantTransaction;
        }

        if (!is_null($this->tabResultInquiry)) {
            return $this->tabResultInquiry;
        }

        if (!is_null($this->tabResultResponse)) {
            return $this->tabResultResponse;
        }

        if (!is_null($this->transferwisePayment)) {
            return $this->transferwisePayment;
        }

        throw new BunqException(self::ERROR_NULL_FIELDS);
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->bunqMeTab)) {
            return false;
        }

        if (!is_null($this->bunqMeTabResultResponse)) {
            return false;
        }

        if (!is_null($this->bunqMeFundraiserResult)) {
            return false;
        }

        if (!is_null($this->card)) {
            return false;
        }

        if (!is_null($this->cardDebit)) {
            return false;
        }

        if (!is_null($this->draftPayment)) {
            return false;
        }

        if (!is_null($this->featureAnnouncement)) {
            return false;
        }

        if (!is_null($this->idealMerchantTransaction)) {
            return false;
        }

        if (!is_null($this->invoice)) {
            return false;
        }

        if (!is_null($this->scheduledPayment)) {
            return false;
        }

        if (!is_null($this->scheduledPaymentBatch)) {
            return false;
        }

        if (!is_null($this->scheduledInstance)) {
            return false;
        }

        if (!is_null($this->masterCardAction)) {
            return false;
        }

        if (!is_null($this->bankSwitchServiceNetherlandsIncomingPayment)) {
            return false;
        }

        if (!is_null($this->payment)) {
            return false;
        }

        if (!is_null($this->paymentBatch)) {
            return false;
        }

        if (!is_null($this->requestInquiryBatch)) {
            return false;
        }

        if (!is_null($this->requestInquiry)) {
            return false;
        }

        if (!is_null($this->requestResponse)) {
            return false;
        }

        if (!is_null($this->rewardRecipient)) {
            return false;
        }

        if (!is_null($this->rewardSender)) {
            return false;
        }

        if (!is_null($this->shareInviteBankInquiryBatch)) {
            return false;
        }

        if (!is_null($this->shareInviteBankInquiry)) {
            return false;
        }

        if (!is_null($this->shareInviteBankResponse)) {
            return false;
        }

        if (!is_null($this->sofortMerchantTransaction)) {
            return false;
        }

        if (!is_null($this->tabResultInquiry)) {
            return false;
        }

        if (!is_null($this->tabResultResponse)) {
            return false;
        }

        if (!is_null($this->transferwisePayment)) {
            return false;
        }

        return true;
    }
}
