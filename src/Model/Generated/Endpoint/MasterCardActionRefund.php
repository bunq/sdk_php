<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\AdditionalInformation;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\AttachmentMasterCardActionRefund;
use bunq\Model\Generated\Object\LabelCard;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\LabelUser;
use bunq\Model\Generated\Object\MasterCardActionReference;

/**
 * Endpoint for creating a refund request for a masterCard transaction.
 *
 * @generated
 */
class MasterCardActionRefund extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_TYPE = 'type';
    const FIELD_SUB_TYPE = 'sub_type';
    const FIELD_AMOUNT = 'amount';
    const FIELD_CATEGORY = 'category';
    const FIELD_REASON = 'reason';
    const FIELD_COMMENT = 'comment';
    const FIELD_ATTACHMENT = 'attachment';
    const FIELD_TERMS_AND_CONDITIONS = 'terms_and_conditions';

    /**
     * The id of the refund.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the refund's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the refund's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The label of the user who created this note.
     *
     * @var LabelUser
     */
    protected $labelUserCreator;

    /**
     * The status of the refunded mastercard action. Can be AUTO_APPROVED,
     * AUTO_APPROVED_WAITING_FOR_EXPIRY, PENDING_APPROVAL, APPROVED, REFUNDED,
     * DENIED or FAILED
     *
     * @var string
     */
    protected $status;

    /**
     * The reference to the object this refund applies to.
     *
     * @var MasterCardActionReference[]
     */
    protected $referenceMastercardActionEvent;

    /**
     * The id of mastercard action being refunded.
     *
     * @var int
     */
    protected $mastercardActionId;

    /**
     * Type of this refund. Can de REFUND or CHARGEBACK
     *
     * @var string
     */
    protected $type;

    /**
     * The sub type of this refund indicating whether the chargeback will be
     * FULL or PARTIAL.
     *
     * @var string
     */
    protected $subType;

    /**
     * The reason of the refund. Can be REFUND_EXPIRED_TRANSACTION,
     * REFUND_REQUESTED, REFUND_MERCHANT, REFUND_CHARGEBACK.
     *
     * @var string
     */
    protected $reason;

    /**
     * The amount to refund.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The monetary account label of the account that this action is created
     * for.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The monetary account label of the counterparty.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The description for this transaction to display.
     *
     * @var string
     */
    protected $description;

    /**
     * The label of the card.
     *
     * @var LabelCard
     */
    protected $labelCard;

    /**
     * The time the refund will take place.
     *
     * @var string
     */
    protected $timeRefund;

    /**
     * All additional information provided by the user.
     *
     * @var AdditionalInformation
     */
    protected $additionalInformation;

    /**
     * Description of the refund's current status.
     *
     * @var string
     */
    protected $statusDescription;

    /**
     * Description of the refund's current status, translated in user's
     * language.
     *
     * @var string
     */
    protected $statusDescriptionTranslated;

    /**
     * Together topic concerning the refund's current status.
     *
     * @var string
     */
    protected $statusTogetherUrl;

    /**
     * Type of this refund. Can de REFUND or CHARGEBACK
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * The sub type of this refund indicating whether the chargeback will be
     * FULL or PARTIAL.
     *
     * @var string
     */
    protected $subTypeFieldForRequest;

    /**
     * The amount to refund.
     *
     * @var Amount
     */
    protected $amountFieldForRequest;

    /**
     * The category of the refund, required for chargeback.
     *
     * @var string|null
     */
    protected $categoryFieldForRequest;

    /**
     * The reason to refund, required for chargeback.
     *
     * @var string|null
     */
    protected $reasonFieldForRequest;

    /**
     * Comment about the refund.
     *
     * @var string|null
     */
    protected $commentFieldForRequest;

    /**
     * The Attachments to attach to the refund request.
     *
     * @var AttachmentMasterCardActionRefund[]|null
     */
    protected $attachmentFieldForRequest;

    /**
     * Proof that the user acknowledged the terms and conditions for
     * chargebacks.
     *
     * @var string|null
     */
    protected $termsAndConditionsFieldForRequest;

    /**
     * @param string $type Type of this refund. Can de REFUND or CHARGEBACK
     * @param string $subType The sub type of this refund indicating whether the
     * chargeback will be FULL or PARTIAL.
     * @param Amount $amount The amount to refund.
     * @param string|null $category The category of the refund, required for
     * chargeback.
     * @param string|null $reason The reason to refund, required for chargeback.
     * @param string|null $comment Comment about the refund.
     * @param AttachmentMasterCardActionRefund[]|null $attachment The
     * Attachments to attach to the refund request.
     * @param string|null $termsAndConditions Proof that the user acknowledged
     * the terms and conditions for chargebacks.
     */
    public function __construct(string  $type, string  $subType, Amount  $amount, string  $category = null, string  $reason = null, string  $comment = null, array  $attachment = null, string  $termsAndConditions = null)
    {
        $this->typeFieldForRequest = $type;
        $this->subTypeFieldForRequest = $subType;
        $this->amountFieldForRequest = $amount;
        $this->categoryFieldForRequest = $category;
        $this->reasonFieldForRequest = $reason;
        $this->commentFieldForRequest = $comment;
        $this->attachmentFieldForRequest = $attachment;
        $this->termsAndConditionsFieldForRequest = $termsAndConditions;
    }

    /**
     * The id of the refund.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the refund's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the refund's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The label of the user who created this note.
     *
     * @return LabelUser
     */
    public function getLabelUserCreator()
    {
        return $this->labelUserCreator;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $labelUserCreator
     */
    public function setLabelUserCreator($labelUserCreator)
    {
        $this->labelUserCreator = $labelUserCreator;
    }

    /**
     * The status of the refunded mastercard action. Can be AUTO_APPROVED,
     * AUTO_APPROVED_WAITING_FOR_EXPIRY, PENDING_APPROVAL, APPROVED, REFUNDED,
     * DENIED or FAILED
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The reference to the object this refund applies to.
     *
     * @return MasterCardActionReference[]
     */
    public function getReferenceMastercardActionEvent()
    {
        return $this->referenceMastercardActionEvent;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param MasterCardActionReference[] $referenceMastercardActionEvent
     */
    public function setReferenceMastercardActionEvent($referenceMastercardActionEvent)
    {
        $this->referenceMastercardActionEvent = $referenceMastercardActionEvent;
    }

    /**
     * The id of mastercard action being refunded.
     *
     * @return int
     */
    public function getMastercardActionId()
    {
        return $this->mastercardActionId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $mastercardActionId
     */
    public function setMastercardActionId($mastercardActionId)
    {
        $this->mastercardActionId = $mastercardActionId;
    }

    /**
     * Type of this refund. Can de REFUND or CHARGEBACK
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The sub type of this refund indicating whether the chargeback will be
     * FULL or PARTIAL.
     *
     * @return string
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $subType
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;
    }

    /**
     * The reason of the refund. Can be REFUND_EXPIRED_TRANSACTION,
     * REFUND_REQUESTED, REFUND_MERCHANT, REFUND_CHARGEBACK.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * The amount to refund.
     *
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * The monetary account label of the account that this action is created
     * for.
     *
     * @return LabelMonetaryAccount
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The monetary account label of the counterparty.
     *
     * @return LabelMonetaryAccount
     */
    public function getCounterpartyAlias()
    {
        return $this->counterpartyAlias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $counterpartyAlias
     */
    public function setCounterpartyAlias($counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * The description for this transaction to display.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The label of the card.
     *
     * @return LabelCard
     */
    public function getLabelCard()
    {
        return $this->labelCard;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelCard $labelCard
     */
    public function setLabelCard($labelCard)
    {
        $this->labelCard = $labelCard;
    }

    /**
     * The time the refund will take place.
     *
     * @return string
     */
    public function getTimeRefund()
    {
        return $this->timeRefund;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $timeRefund
     */
    public function setTimeRefund($timeRefund)
    {
        $this->timeRefund = $timeRefund;
    }

    /**
     * All additional information provided by the user.
     *
     * @return AdditionalInformation
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param AdditionalInformation $additionalInformation
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;
    }

    /**
     * Description of the refund's current status.
     *
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->statusDescription;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $statusDescription
     */
    public function setStatusDescription($statusDescription)
    {
        $this->statusDescription = $statusDescription;
    }

    /**
     * Description of the refund's current status, translated in user's
     * language.
     *
     * @return string
     */
    public function getStatusDescriptionTranslated()
    {
        return $this->statusDescriptionTranslated;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $statusDescriptionTranslated
     */
    public function setStatusDescriptionTranslated($statusDescriptionTranslated)
    {
        $this->statusDescriptionTranslated = $statusDescriptionTranslated;
    }

    /**
     * Together topic concerning the refund's current status.
     *
     * @return string
     */
    public function getStatusTogetherUrl()
    {
        return $this->statusTogetherUrl;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $statusTogetherUrl
     */
    public function setStatusTogetherUrl($statusTogetherUrl)
    {
        $this->statusTogetherUrl = $statusTogetherUrl;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->created)) {
            return false;
        }

        if (!is_null($this->updated)) {
            return false;
        }

        if (!is_null($this->labelUserCreator)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->referenceMastercardActionEvent)) {
            return false;
        }

        if (!is_null($this->mastercardActionId)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->subType)) {
            return false;
        }

        if (!is_null($this->reason)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->labelCard)) {
            return false;
        }

        if (!is_null($this->timeRefund)) {
            return false;
        }

        if (!is_null($this->additionalInformation)) {
            return false;
        }

        if (!is_null($this->statusDescription)) {
            return false;
        }

        if (!is_null($this->statusDescriptionTranslated)) {
            return false;
        }

        if (!is_null($this->statusTogetherUrl)) {
            return false;
        }

        return true;
    }
}
