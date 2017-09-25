<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\LabelUser;
use bunq\Model\Generated\Object\ShareDetail;

/**
 * Used to share a monetary account with another bunq user, as in the
 * 'Connect' feature in the bunq app. Allow the creation of share inquiries
 * that, in the same way as request inquiries, can be revoked by the user
 * creating them or accepted/rejected by the other party.
 *
 * @generated
 */
class ShareInviteBankInquiry extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_COUNTER_USER_ALIAS = 'counter_user_alias';
    const FIELD_DRAFT_SHARE_INVITE_BANK_ID = 'draft_share_invite_bank_id';
    const FIELD_SHARE_DETAIL = 'share_detail';
    const FIELD_STATUS = 'status';
    const FIELD_START_DATE = 'start_date';
    const FIELD_END_DATE = 'end_date';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/share-invite-bank-inquiry';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/share-invite-bank-inquiry/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/share-invite-bank-inquiry/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/share-invite-bank-inquiry';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'ShareInviteBankInquiry';

    /**
     * The label of the monetary account that's being shared.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The user who created the share.
     *
     * @var LabelUser
     */
    protected $userAliasCreated;

    /**
     * The user who revoked the share.
     *
     * @var LabelUser
     */
    protected $userAliasRevoked;

    /**
     * The label of the user to share with.
     *
     * @var LabelUser
     */
    protected $counterUserAlias;

    /**
     * The id of the monetary account the share applies to.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * The id of the draft share invite bank.
     *
     * @var int
     */
    protected $draftShareInviteBankId;

    /**
     * The share details. Only one of these objects is returned.
     *
     * @var ShareDetail
     */
    protected $shareDetail;

    /**
     * The status of the share. Can be PENDING, REVOKED (the user deletes the
     * share inquiry before it's accepted) or CANCELLED (the user deletes an
     * active share).
     *
     * @var string
     */
    protected $status;

    /**
     * The start date of this share.
     *
     * @var string
     */
    protected $startDate;

    /**
     * The expiration date of this share.
     *
     * @var string
     */
    protected $endDate;

    /**
     * The id of the newly created share invite.
     *
     * @var int
     */
    protected $id;

    /**
     * Create a new share inquiry for a monetary account, specifying the
     * permission the other bunq user will have on it.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $monetaryAccountId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::processForId($responseRaw);
    }

    /**
     * Get the details of a specific share inquiry.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $shareInviteBankInquiryId
     * @param string[] $customHeaders
     *
     * @return BunqResponseShareInviteBankInquiry
     */
    public static function get(ApiContext $apiContext, $userId, $monetaryAccountId, $shareInviteBankInquiryId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $shareInviteBankInquiryId]
            ),
            [],
            $customHeaders
        );

        return static::fromJson($responseRaw, self::OBJECT_TYPE);
    }

    /**
     * Update the details of a share. This includes updating status (revoking or
     * cancelling it), granted permission and validity period of this share.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $shareInviteBankInquiryId
     * @param string[] $customHeaders
     *
     * @return BunqResponseShareInviteBankInquiry
     */
    public static function update(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, $shareInviteBankInquiryId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $monetaryAccountId, $shareInviteBankInquiryId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::fromJson($responseRaw, self::OBJECT_TYPE);
    }

    /**
     * Get a list with all the share inquiries for a monetary account, only if
     * the requesting user has permission to change the details of the various
     * ones.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseShareInviteBankInquiryList
     */
    public static function listing(ApiContext $apiContext, $userId, $monetaryAccountId, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId]
            ),
            $params,
            $customHeaders
        );

        return static::fromJsonList($responseRaw, self::OBJECT_TYPE);
    }

    /**
     * The label of the monetary account that's being shared.
     *
     * @return LabelMonetaryAccount
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param LabelMonetaryAccount $alias
     */
    public function setAlias(LabelMonetaryAccount $alias)
    {
        $this->alias = $alias;
    }

    /**
     * The user who created the share.
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
     * The user who revoked the share.
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
     * The label of the user to share with.
     *
     * @return LabelUser
     */
    public function getCounterUserAlias()
    {
        return $this->counterUserAlias;
    }

    /**
     * @param LabelUser $counterUserAlias
     */
    public function setCounterUserAlias(LabelUser $counterUserAlias)
    {
        $this->counterUserAlias = $counterUserAlias;
    }

    /**
     * The id of the monetary account the share applies to.
     *
     * @return int
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @param int $monetaryAccountId
     */
    public function setMonetaryAccountId($monetaryAccountId)
    {
        $this->monetaryAccountId = $monetaryAccountId;
    }

    /**
     * The id of the draft share invite bank.
     *
     * @return int
     */
    public function getDraftShareInviteBankId()
    {
        return $this->draftShareInviteBankId;
    }

    /**
     * @param int $draftShareInviteBankId
     */
    public function setDraftShareInviteBankId($draftShareInviteBankId)
    {
        $this->draftShareInviteBankId = $draftShareInviteBankId;
    }

    /**
     * The share details. Only one of these objects is returned.
     *
     * @return ShareDetail
     */
    public function getShareDetail()
    {
        return $this->shareDetail;
    }

    /**
     * @param ShareDetail $shareDetail
     */
    public function setShareDetail(ShareDetail $shareDetail)
    {
        $this->shareDetail = $shareDetail;
    }

    /**
     * The status of the share. Can be PENDING, REVOKED (the user deletes the
     * share inquiry before it's accepted) or CANCELLED (the user deletes an
     * active share).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The start date of this share.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * The expiration date of this share.
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * The id of the newly created share invite.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
