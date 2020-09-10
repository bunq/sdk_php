<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * Used to share a monetary account with another bunq user, as in the
 * 'Connect' feature in the bunq app. Allow the creation of share inquiries
 * that, in the same way as request inquiries, can be revoked by the user
 * creating them or accepted/rejected by the other party.
 *
 * @generated
 */
class ShareInviteBankInquiryBatch extends BunqModel
{
    /**
     * The list of share invite bank inquiries that were made.
     *
     * @var ShareInviteMonetaryAccountInquiry[]
     */
    protected $shareInviteBankInquiries;

    /**
     * The LabelMonetaryAccount containing the public information of this share
     * invite inquiry batch.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The list of share invite bank inquiries that were made.
     *
     * @return ShareInviteMonetaryAccountInquiry[]
     */
    public function getShareInviteBankInquiries()
    {
        return $this->shareInviteBankInquiries;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param ShareInviteMonetaryAccountInquiry[] $shareInviteBankInquiries
     */
    public function setShareInviteBankInquiries($shareInviteBankInquiries)
    {
        $this->shareInviteBankInquiries = $shareInviteBankInquiries;
    }

    /**
     * The LabelMonetaryAccount containing the public information of this share
     * invite inquiry batch.
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->shareInviteBankInquiries)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        return true;
    }
}
