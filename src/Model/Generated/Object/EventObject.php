<?php
namespace bunq\Model\Generated\Object;

use bunq\exception\BunqException;
use bunq\Model\Core\AnchorObjectInterface;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\BunqMeTab;
use bunq\Model\Generated\Endpoint\Card;
use bunq\Model\Generated\Endpoint\CardDebit;
use bunq\Model\Generated\Endpoint\DraftPayment;
use bunq\Model\Generated\Endpoint\FeatureAnnouncement;
use bunq\Model\Generated\Endpoint\Invoice;
use bunq\Model\Generated\Endpoint\MasterCardAction;
use bunq\Model\Generated\Endpoint\Payment;
use bunq\Model\Generated\Endpoint\PaymentBatch;
use bunq\Model\Generated\Endpoint\RequestInquiry;
use bunq\Model\Generated\Endpoint\RequestInquiryBatch;
use bunq\Model\Generated\Endpoint\RequestResponse;
use bunq\Model\Generated\Endpoint\ScheduleInstance;
use bunq\Model\Generated\Endpoint\SchedulePayment;
use bunq\Model\Generated\Endpoint\SchedulePaymentBatch;
use bunq\Model\Generated\Endpoint\ShareInviteBankInquiry;
use bunq\Model\Generated\Endpoint\ShareInviteBankInquiryBatch;
use bunq\Model\Generated\Endpoint\ShareInviteBankResponse;
use bunq\Model\Generated\Endpoint\TabResultInquiry;
use bunq\Model\Generated\Endpoint\TabResultResponse;

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
     * @var TabResultInquiry
     */
    protected $tabResultInquiry;

    /**
     * @var TabResultResponse
     */
    protected $tabResultResponse;

    /**
     * @return BunqMeTab
     */
    public function getBunqMeTab()
    {
        return $this->bunqMeTab;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param BunqMeTab $bunqMeTab
     */
    public function setBunqMeTab($bunqMeTab)
    {
        $this->bunqMeTab = $bunqMeTab;
    }

    /**
     * @return Card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Card $card
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param CardDebit $cardDebit
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param DraftPayment $draftPayment
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param FeatureAnnouncement $featureAnnouncement
     */
    public function setFeatureAnnouncement($featureAnnouncement)
    {
        $this->featureAnnouncement = $featureAnnouncement;
    }

    /**
     * @return Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Invoice $invoice
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param SchedulePayment $scheduledPayment
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param SchedulePaymentBatch $scheduledPaymentBatch
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param ScheduleInstance $scheduledInstance
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param MasterCardAction $masterCardAction
     */
    public function setMasterCardAction($masterCardAction)
    {
        $this->masterCardAction = $masterCardAction;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param PaymentBatch $paymentBatch
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param RequestResponse $requestResponse
     */
    public function setRequestResponse($requestResponse)
    {
        $this->requestResponse = $requestResponse;
    }

    /**
     * @return ShareInviteBankInquiryBatch
     */
    public function getShareInviteBankInquiryBatch()
    {
        return $this->shareInviteBankInquiryBatch;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param ShareInviteBankInquiryBatch $shareInviteBankInquiryBatch
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param ShareInviteBankResponse $shareInviteBankResponse
     */
    public function setShareInviteBankResponse($shareInviteBankResponse)
    {
        $this->shareInviteBankResponse = $shareInviteBankResponse;
    }

    /**
     * @return TabResultInquiry
     */
    public function getTabResultInquiry()
    {
        return $this->tabResultInquiry;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param TabResultResponse $tabResultResponse
     */
    public function setTabResultResponse($tabResultResponse)
    {
        $this->tabResultResponse = $tabResultResponse;
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

        if (!is_null($this->shareInviteBankInquiryBatch)) {
            return $this->shareInviteBankInquiryBatch;
        }

        if (!is_null($this->shareInviteBankInquiry)) {
            return $this->shareInviteBankInquiry;
        }

        if (!is_null($this->shareInviteBankResponse)) {
            return $this->shareInviteBankResponse;
        }

        if (!is_null($this->tabResultInquiry)) {
            return $this->tabResultInquiry;
        }

        if (!is_null($this->tabResultResponse)) {
            return $this->tabResultResponse;
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

        if (!is_null($this->shareInviteBankInquiryBatch)) {
            return false;
        }

        if (!is_null($this->shareInviteBankInquiry)) {
            return false;
        }

        if (!is_null($this->shareInviteBankResponse)) {
            return false;
        }

        if (!is_null($this->tabResultInquiry)) {
            return false;
        }

        if (!is_null($this->tabResultResponse)) {
            return false;
        }

        return true;
    }
}
