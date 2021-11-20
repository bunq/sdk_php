<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\LabelUser;
use bunq\Model\Generated\Object\Pointer;
use bunq\Model\Generated\Object\ShareDetail;

/**
 * [DEPRECATED - use /share-invite-monetary-account-response] Used to share
 * a monetary account with another bunq user, as in the 'Connect' feature in
 * the bunq app. Allow the creation of share inquiries that, in the same way
 * as request inquiries, can be revoked by the user creating them or
 * accepted/rejected by the other party.
 *
 * @generated
 */
class ShareInviteMonetaryAccountInquiry extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/share-invite-monetary-account-inquiry';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/share-invite-monetary-account-inquiry/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/share-invite-monetary-account-inquiry/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/share-invite-monetary-account-inquiry';

    /**
     * Field constants.
     */
    const FIELD_COUNTER_USER_ALIAS = 'counter_user_alias';
    const FIELD_DRAFT_SHARE_INVITE_BANK_ID = 'draft_share_invite_bank_id';
    const FIELD_SHARE_DETAIL = 'share_detail';
    const FIELD_STATUS = 'status';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_SHARE_TYPE = 'share_type';
    const FIELD_START_DATE = 'start_date';
    const FIELD_END_DATE = 'end_date';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'ShareInviteMonetaryAccountInquiry';

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
     * share inquiry before it's accepted), ACCEPTED, CANCELLED (the user
     * deletes an active share) or CANCELLATION_PENDING, CANCELLATION_ACCEPTED,
     * CANCELLATION_REJECTED (for canceling mutual connects)
     *
     * @var string
     */
    protected $status;

    /**
     * The relationship: COMPANY_DIRECTOR, COMPANY_EMPLOYEE, etc
     *
     * @var string
     */
    protected $relationship;

    /**
     * The share type, either STANDARD or MUTUAL.
     *
     * @var string
     */
    protected $shareType;

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
     * The pointer of the user to share with.
     *
     * @var Pointer
     */
    protected $counterUserAliasFieldForRequest;

    /**
     * The id of the draft share invite bank.
     *
     * @var int|null
     */
    protected $draftShareInviteBankIdFieldForRequest;

    /**
     * The share details. Only one of these objects may be passed.
     *
     * @var ShareDetail
     */
    protected $shareDetailFieldForRequest;

    /**
     * The status of the share. Can be PENDING, REVOKED (the user deletes the
     * share inquiry before it's accepted), ACCEPTED, CANCELLED (the user
     * deletes an active share) or CANCELLATION_PENDING, CANCELLATION_ACCEPTED,
     * CANCELLATION_REJECTED (for canceling mutual connects).
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * The relationship: COMPANY_DIRECTOR, COMPANY_EMPLOYEE, etc
     *
     * @var string|null
     */
    protected $relationshipFieldForRequest;

    /**
     * The share type, either STANDARD or MUTUAL.
     *
     * @var string|null
     */
    protected $shareTypeFieldForRequest;

    /**
     * The start date of this share.
     *
     * @var string|null
     */
    protected $startDateFieldForRequest;

    /**
     * The expiration date of this share.
     *
     * @var string|null
     */
    protected $endDateFieldForRequest;

    /**
     * @param Pointer $counterUserAlias The pointer of the user to share with.
     * @param ShareDetail $shareDetail The share details. Only one of these
     * objects may be passed.
     * @param string $status The status of the share. Can be PENDING, REVOKED
     * (the user deletes the share inquiry before it's accepted), ACCEPTED,
     * CANCELLED (the user deletes an active share) or CANCELLATION_PENDING,
     * CANCELLATION_ACCEPTED, CANCELLATION_REJECTED (for canceling mutual
     * connects).
     * @param int|null $draftShareInviteBankId The id of the draft share invite
     * bank.
     * @param string|null $relationship The relationship: COMPANY_DIRECTOR,
     * COMPANY_EMPLOYEE, etc
     * @param string|null $shareType The share type, either STANDARD or MUTUAL.
     * @param string|null $startDate The start date of this share.
     * @param string|null $endDate The expiration date of this share.
     */
    public function __construct(Pointer  $counterUserAlias, ShareDetail  $shareDetail, string  $status, int  $draftShareInviteBankId = null, string  $relationship = null, string  $shareType = null, string  $startDate = null, string  $endDate = null)
    {
        $this->counterUserAliasFieldForRequest = $counterUserAlias;
        $this->draftShareInviteBankIdFieldForRequest = $draftShareInviteBankId;
        $this->shareDetailFieldForRequest = $shareDetail;
        $this->statusFieldForRequest = $status;
        $this->relationshipFieldForRequest = $relationship;
        $this->shareTypeFieldForRequest = $shareType;
        $this->startDateFieldForRequest = $startDate;
        $this->endDateFieldForRequest = $endDate;
    }

    /**
     * [DEPRECATED - use /share-invite-monetary-account-response] Create a new
     * share inquiry for a monetary account, specifying the permission the other
     * bunq user will have on it.
     *
     * @param Pointer $counterUserAlias The pointer of the user to share with.
     * @param ShareDetail $shareDetail The share details. Only one of these
     * objects may be passed.
     * @param string $status The status of the share. Can be PENDING, REVOKED
     * (the user deletes the share inquiry before it's accepted), ACCEPTED,
     * CANCELLED (the user deletes an active share) or CANCELLATION_PENDING,
     * CANCELLATION_ACCEPTED, CANCELLATION_REJECTED (for canceling mutual
     * connects).
     * @param int|null $monetaryAccountId
     * @param int|null $draftShareInviteBankId The id of the draft share invite
     * bank.
     * @param string|null $relationship The relationship: COMPANY_DIRECTOR,
     * COMPANY_EMPLOYEE, etc
     * @param string|null $shareType The share type, either STANDARD or MUTUAL.
     * @param string|null $startDate The start date of this share.
     * @param string|null $endDate The expiration date of this share.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(Pointer  $counterUserAlias, ShareDetail  $shareDetail, string  $status, int $monetaryAccountId = null, int  $draftShareInviteBankId = null, string  $relationship = null, string  $shareType = null, string  $startDate = null, string  $endDate = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [self::FIELD_COUNTER_USER_ALIAS => $counterUserAlias,
self::FIELD_DRAFT_SHARE_INVITE_BANK_ID => $draftShareInviteBankId,
self::FIELD_SHARE_DETAIL => $shareDetail,
self::FIELD_STATUS => $status,
self::FIELD_RELATIONSHIP => $relationship,
self::FIELD_SHARE_TYPE => $shareType,
self::FIELD_START_DATE => $startDate,
self::FIELD_END_DATE => $endDate],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * [DEPRECATED - use /share-invite-monetary-account-response] Get the
     * details of a specific share inquiry.
     *
     * @param int $shareInviteMonetaryAccountInquiryId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseShareInviteMonetaryAccountInquiry
     */
    public static function get(int $shareInviteMonetaryAccountInquiryId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseShareInviteMonetaryAccountInquiry
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $shareInviteMonetaryAccountInquiryId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseShareInviteMonetaryAccountInquiry::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * [DEPRECATED - use /share-invite-monetary-account-response] Update the
     * details of a share. This includes updating status (revoking or cancelling
     * it), granted permission and validity period of this share.
     *
     * @param int $shareInviteMonetaryAccountInquiryId
     * @param int|null $monetaryAccountId
     * @param ShareDetail|null $shareDetail The share details. Only one of these
     * objects may be passed.
     * @param string|null $status The status of the share. Can be PENDING,
     * REVOKED (the user deletes the share inquiry before it's accepted),
     * ACCEPTED, CANCELLED (the user deletes an active share) or
     * CANCELLATION_PENDING, CANCELLATION_ACCEPTED, CANCELLATION_REJECTED (for
     * canceling mutual connects).
     * @param string|null $startDate The start date of this share.
     * @param string|null $endDate The expiration date of this share.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $shareInviteMonetaryAccountInquiryId, int $monetaryAccountId = null, ShareDetail  $shareDetail = null, string  $status = null, string  $startDate = null, string  $endDate = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $shareInviteMonetaryAccountInquiryId]
            ),
            [self::FIELD_SHARE_DETAIL => $shareDetail,
self::FIELD_STATUS => $status,
self::FIELD_START_DATE => $startDate,
self::FIELD_END_DATE => $endDate],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * [DEPRECATED - use /share-invite-monetary-account-response] Get a list
     * with all the share inquiries for a monetary account, only if the
     * requesting user has permission to change the details of the various ones.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseShareInviteMonetaryAccountInquiryList
     */
    public static function listing(int $monetaryAccountId = null, array $params = [], array $customHeaders = []): BunqResponseShareInviteMonetaryAccountInquiryList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseShareInviteMonetaryAccountInquiryList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
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
     * The user who created the share.
     *
     * @return LabelUser
     */
    public function getUserAliasCreated()
    {
        return $this->userAliasCreated;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $userAliasCreated
     */
    public function setUserAliasCreated($userAliasCreated)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $userAliasRevoked
     */
    public function setUserAliasRevoked($userAliasRevoked)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $counterUserAlias
     */
    public function setCounterUserAlias($counterUserAlias)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param ShareDetail $shareDetail
     */
    public function setShareDetail($shareDetail)
    {
        $this->shareDetail = $shareDetail;
    }

    /**
     * The status of the share. Can be PENDING, REVOKED (the user deletes the
     * share inquiry before it's accepted), ACCEPTED, CANCELLED (the user
     * deletes an active share) or CANCELLATION_PENDING, CANCELLATION_ACCEPTED,
     * CANCELLATION_REJECTED (for canceling mutual connects)
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
     * The relationship: COMPANY_DIRECTOR, COMPANY_EMPLOYEE, etc
     *
     * @return string
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $relationship
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * The share type, either STANDARD or MUTUAL.
     *
     * @return string
     */
    public function getShareType()
    {
        return $this->shareType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $shareType
     */
    public function setShareType($shareType)
    {
        $this->shareType = $shareType;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->userAliasCreated)) {
            return false;
        }

        if (!is_null($this->userAliasRevoked)) {
            return false;
        }

        if (!is_null($this->counterUserAlias)) {
            return false;
        }

        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        if (!is_null($this->draftShareInviteBankId)) {
            return false;
        }

        if (!is_null($this->shareDetail)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->relationship)) {
            return false;
        }

        if (!is_null($this->shareType)) {
            return false;
        }

        if (!is_null($this->startDate)) {
            return false;
        }

        if (!is_null($this->endDate)) {
            return false;
        }

        if (!is_null($this->id)) {
            return false;
        }

        return true;
    }
}
