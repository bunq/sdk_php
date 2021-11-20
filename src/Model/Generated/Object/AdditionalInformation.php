<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class AdditionalInformation extends BunqModel
{
    /**
     * The category of the refund, required for chargeback.
     *
     * @var string
     */
    protected $category;

    /**
     * The reason to refund, required for chargeback.
     *
     * @var string
     */
    protected $reason;

    /**
     * Comment about the refund.
     *
     * @var string
     */
    protected $comment;

    /**
     * The Attachments to attach to the refund request.
     *
     * @var AttachmentMasterCardActionRefund[]
     */
    protected $attachment;

    /**
     * Proof that the user acknowledged the terms and conditions for
     * chargebacks.
     *
     * @var string
     */
    protected $termsAndConditions;

    /**
     * The category of the refund, required for chargeback.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * The reason to refund, required for chargeback.
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
     * Comment about the refund.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * The Attachments to attach to the refund request.
     *
     * @return AttachmentMasterCardActionRefund[]
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param AttachmentMasterCardActionRefund[] $attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * Proof that the user acknowledged the terms and conditions for
     * chargebacks.
     *
     * @return string
     */
    public function getTermsAndConditions()
    {
        return $this->termsAndConditions;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $termsAndConditions
     */
    public function setTermsAndConditions($termsAndConditions)
    {
        $this->termsAndConditions = $termsAndConditions;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->category)) {
            return false;
        }

        if (!is_null($this->reason)) {
            return false;
        }

        if (!is_null($this->comment)) {
            return false;
        }

        if (!is_null($this->attachment)) {
            return false;
        }

        if (!is_null($this->termsAndConditions)) {
            return false;
        }

        return true;
    }
}
