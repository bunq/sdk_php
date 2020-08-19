<?php
namespace bunq\Model\Generated\Object;

use bunq\Exception\BunqException;
use bunq\Model\Core\AnchorObjectInterface;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\DraftPayment;
use bunq\Model\Generated\Endpoint\Invoice;
use bunq\Model\Generated\Endpoint\MasterCardAction;
use bunq\Model\Generated\Endpoint\Payment;
use bunq\Model\Generated\Endpoint\PaymentBatch;
use bunq\Model\Generated\Endpoint\RequestResponse;
use bunq\Model\Generated\Endpoint\ScheduleInstance;
use bunq\Model\Generated\Endpoint\TabResultResponse;
use bunq\Model\Generated\Endpoint\TransferwiseTransfer;
use bunq\Model\Generated\Endpoint\WhitelistResult;

/**
 * @generated
 */
class RequestReferenceSplitTheBillAnchorObject extends BunqModel implements AnchorObjectInterface
{
    /**
     * Error constants.
     */
    const ERROR_NULL_FIELDS = 'All fields of an extended model or object are null.';

    /**
     * @var Invoice|null
     */
    protected $billingInvoice;

    /**
     * @var DraftPayment|null
     */
    protected $draftPayment;

    /**
     * @var MasterCardAction|null
     */
    protected $masterCardAction;

    /**
     * @var Payment|null
     */
    protected $payment;

    /**
     * @var PaymentBatch|null
     */
    protected $paymentBatch;

    /**
     * @var RequestResponse|null
     */
    protected $requestResponse;

    /**
     * @var ScheduleInstance|null
     */
    protected $scheduleInstance;

    /**
     * @var TabResultResponse|null
     */
    protected $tabResultResponse;

    /**
     * @var WhitelistResult|null
     */
    protected $whitelistResult;

    /**
     * @var TransferwiseTransfer|null
     */
    protected $transferwisePayment;

    /**
     * @return Invoice
     */
    public function getBillingInvoice()
    {
        return $this->billingInvoice;
    }

    /**
     * @param Invoice $billingInvoice
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setBillingInvoice($billingInvoice)
    {
        $this->billingInvoice = $billingInvoice;
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
     * constructor.
     */
    public function setDraftPayment($draftPayment)
    {
        $this->draftPayment = $draftPayment;
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
     * constructor.
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
     * @param Payment $payment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     * constructor.
     */
    public function setPaymentBatch($paymentBatch)
    {
        $this->paymentBatch = $paymentBatch;
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
     * constructor.
     */
    public function setRequestResponse($requestResponse)
    {
        $this->requestResponse = $requestResponse;
    }

    /**
     * @return ScheduleInstance
     */
    public function getScheduleInstance()
    {
        return $this->scheduleInstance;
    }

    /**
     * @param ScheduleInstance $scheduleInstance
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setScheduleInstance($scheduleInstance)
    {
        $this->scheduleInstance = $scheduleInstance;
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
     * constructor.
     */
    public function setTabResultResponse($tabResultResponse)
    {
        $this->tabResultResponse = $tabResultResponse;
    }

    /**
     * @return WhitelistResult
     */
    public function getWhitelistResult()
    {
        return $this->whitelistResult;
    }

    /**
     * @param WhitelistResult $whitelistResult
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setWhitelistResult($whitelistResult)
    {
        $this->whitelistResult = $whitelistResult;
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
     * constructor.
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
        if (!is_null($this->billingInvoice)) {
            return $this->billingInvoice;
        }

        if (!is_null($this->draftPayment)) {
            return $this->draftPayment;
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

        if (!is_null($this->requestResponse)) {
            return $this->requestResponse;
        }

        if (!is_null($this->scheduleInstance)) {
            return $this->scheduleInstance;
        }

        if (!is_null($this->tabResultResponse)) {
            return $this->tabResultResponse;
        }

        if (!is_null($this->whitelistResult)) {
            return $this->whitelistResult;
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
        if (!is_null($this->billingInvoice)) {
            return false;
        }

        if (!is_null($this->draftPayment)) {
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

        if (!is_null($this->requestResponse)) {
            return false;
        }

        if (!is_null($this->scheduleInstance)) {
            return false;
        }

        if (!is_null($this->tabResultResponse)) {
            return false;
        }

        if (!is_null($this->whitelistResult)) {
            return false;
        }

        if (!is_null($this->transferwisePayment)) {
            return false;
        }

        return true;
    }
}
