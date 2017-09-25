<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class ScheduleRequestInquiryEntry extends BunqModel
{
    /**
     * The requested amount.
     *
     * @var Amount
     */
    protected $amountInquired;

    /**
     * The LabelMonetaryAccount with the public information of the
     * MonetaryAccount the money was requested from.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The description of the inquiry.
     *
     * @var string
     */
    protected $description;

    /**
     * The attachments attached to the payment.
     *
     * @var AttachmentScheduleRequestInquiryEntry
     */
    protected $attachment;

    /**
     * The client's custom reference that was attached to the request and the
     * mutation.
     *
     * @var string
     */
    protected $merchantReference;

    /**
     * The minimum age the user accepting the RequestInquiry must have.
     *
     * @var int
     */
    protected $minimumAge;

    /**
     * Whether or not an address must be provided on accept.
     *
     * @var string
     */
    protected $requireAddress;

    /**
     * [DEPRECATED] Whether or not the user accepting the request should be
     * asked if he wants to give a tip.
     *
     * @var bool
     */
    protected $wantTip;

    /**
     * [DEPRECATED] Whether or not a lower amount can be paid on accept.
     *
     * @var bool
     */
    protected $allowAmountLower;

    /**
     * [DEPRECATED] Whether or not a higher amount can be paid on accept.
     *
     * @var bool
     */
    protected $allowAmountHigher;

    /**
     * Whether or not sending a bunq.me request is allowed.
     *
     * @var bool
     */
    protected $allowBunqme;

    /**
     * The URL which the user is sent to after accepting or rejecting the
     * Request.
     *
     * @var string
     */
    protected $redirectUrl;

    /**
     * The label that's displayed to the counterparty with the mutation.
     * Includes user.
     *
     * @var LabelUser
     */
    protected $userAliasCreated;

    /**
     * The label that's displayed to the counterparty with the mutation.
     * Includes user.
     *
     * @var LabelUser
     */
    protected $userAliasRevoked;

    /**
     * @param Amount $amountInquired
     * @param Pointer $counterpartyAlias
     * @param string $description
     * @param bool $allowBunqme
     */
    public function __construct(Amount $amountInquired, Pointer $counterpartyAlias, $description, $allowBunqme)
    {
        $this->amountInquired = $amountInquired;
        $this->counterpartyAlias = $counterpartyAlias;
        $this->description = $description;
        $this->allowBunqme = $allowBunqme;
    }

    /**
     * The requested amount.
     *
     * @return Amount
     */
    public function getAmountInquired()
    {
        return $this->amountInquired;
    }

    /**
     * @param Amount $amountInquired
     */
    public function setAmountInquired(Amount $amountInquired)
    {
        $this->amountInquired = $amountInquired;
    }

    /**
     * The label that's displayed to the counterparty with the mutation.
     * Includes user.
     *
     * @return LabelUser
     */
    public function getUserAliasCreated()
    {
        return $this->userAliasCreated;
    }

    /**
     * @param LabelUser $userAliasCreated
     */
    public function setUserAliasCreated(LabelUser $userAliasCreated)
    {
        $this->userAliasCreated = $userAliasCreated;
    }

    /**
     * The label that's displayed to the counterparty with the mutation.
     * Includes user.
     *
     * @return LabelUser
     */
    public function getUserAliasRevoked()
    {
        return $this->userAliasRevoked;
    }

    /**
     * @param LabelUser $userAliasRevoked
     */
    public function setUserAliasRevoked(LabelUser $userAliasRevoked)
    {
        $this->userAliasRevoked = $userAliasRevoked;
    }

    /**
     * The LabelMonetaryAccount with the public information of the
     * MonetaryAccount the money was requested from.
     *
     * @return LabelMonetaryAccount
     */
    public function getCounterpartyAlias()
    {
        return $this->counterpartyAlias;
    }

    /**
     * @param LabelMonetaryAccount $counterpartyAlias
     */
    public function setCounterpartyAlias(LabelMonetaryAccount $counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * The description of the inquiry.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * The client's custom reference that was attached to the request and the
     * mutation.
     *
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @param string $merchantReference
     */
    public function setMerchantReference(string $merchantReference)
    {
        $this->merchantReference = $merchantReference;
    }

    /**
     * The attachments attached to the payment.
     *
     * @return AttachmentScheduleRequestInquiryEntry
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param AttachmentScheduleRequestInquiryEntry $attachment
     */
    public function setAttachment(AttachmentScheduleRequestInquiryEntry $attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * The minimum age the user accepting the RequestInquiry must have.
     *
     * @return int
     */
    public function getMinimumAge()
    {
        return $this->minimumAge;
    }

    /**
     * @param int $minimumAge
     */
    public function setMinimumAge(int $minimumAge)
    {
        $this->minimumAge = $minimumAge;
    }

    /**
     * Whether or not an address must be provided on accept.
     *
     * @return string
     */
    public function getRequireAddress()
    {
        return $this->requireAddress;
    }

    /**
     * @param string $requireAddress
     */
    public function setRequireAddress(string $requireAddress)
    {
        $this->requireAddress = $requireAddress;
    }

    /**
     * Whether or not sending a bunq.me request is allowed.
     *
     * @return bool
     */
    public function getAllowBunqme()
    {
        return $this->allowBunqme;
    }

    /**
     * @param bool $allowBunqme
     */
    public function setAllowBunqme(bool $allowBunqme)
    {
        $this->allowBunqme = $allowBunqme;
    }

    /**
     * The URL which the user is sent to after accepting or rejecting the
     * Request.
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     */
    public function setRedirectUrl(string $redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }
}
