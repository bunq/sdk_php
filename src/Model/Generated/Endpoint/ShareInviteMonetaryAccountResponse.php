<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\LabelUser;
use bunq\Model\Generated\Object\ShareDetail;

/**
 * Used to view or respond to shares a user was invited to. See
 * 'share-invite-bank-inquiry' for more information about the inquiring
 * endpoint.
 *
 * @generated
 */
class ShareInviteMonetaryAccountResponse extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/share-invite-monetary-account-response/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/share-invite-monetary-account-response/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/share-invite-monetary-account-response';

    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';
    const FIELD_CARD_ID = 'card_id';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'ShareInviteMonetaryAccountResponse';

    /**
     * The id of the ShareInviteBankResponse.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the ShareInviteBankResponse creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the ShareInviteBankResponse last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The monetary account and user who created the share.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterAlias;

    /**
     * The user who cancelled the share if it has been revoked or rejected.
     *
     * @var LabelUser
     */
    protected $userAliasCancelled;

    /**
     * The id of the monetary account the ACCEPTED share applies to. null
     * otherwise.
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
     * The share details.
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
     * The description of this share. It is basically the monetary account
     * description.
     *
     * @var string
     */
    protected $description;

    /**
     * The status of the share. Can be PENDING, REVOKED (the user deletes the
     * share inquiry before it's accepted), ACCEPTED, CANCELLED (the user
     * deletes an active share) or CANCELLATION_PENDING, CANCELLATION_ACCEPTED,
     * CANCELLATION_REJECTED (for canceling mutual connects)
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The card to link to the shared monetary account. Used only if
     * share_detail is ShareDetailCardPayment.
     *
     * @var int|null
     */
    protected $cardIdFieldForRequest;

    /**
     * @param string|null $status The status of the share. Can be PENDING,
     * REVOKED (the user deletes the share inquiry before it's accepted),
     * ACCEPTED, CANCELLED (the user deletes an active share) or
     * CANCELLATION_PENDING, CANCELLATION_ACCEPTED, CANCELLATION_REJECTED (for
     * canceling mutual connects)
     * @param int|null $cardId The card to link to the shared monetary account.
     * Used only if share_detail is ShareDetailCardPayment.
     */
    public function __construct(string $status = null, int $cardId = null)
    {
        $this->statusFieldForRequest = $status;
        $this->cardIdFieldForRequest = $cardId;
    }

    /**
     * Return the details of a specific share a user was invited to.
     *
     * @param int $shareInviteMonetaryAccountResponseId
     * @param string[] $customHeaders
     *
     * @return BunqResponseShareInviteMonetaryAccountResponse
     */
    public static function get(
        int $shareInviteMonetaryAccountResponseId,
        array $customHeaders = []
    ): BunqResponseShareInviteMonetaryAccountResponse {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $shareInviteMonetaryAccountResponseId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseShareInviteMonetaryAccountResponse::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Accept or reject a share a user was invited to.
     *
     * @param int $shareInviteMonetaryAccountResponseId
     * @param string|null $status The status of the share. Can be PENDING,
     * REVOKED (the user deletes the share inquiry before it's accepted),
     * ACCEPTED, CANCELLED (the user deletes an active share) or
     * CANCELLATION_PENDING, CANCELLATION_ACCEPTED, CANCELLATION_REJECTED (for
     * canceling mutual connects)
     * @param int|null $cardId The card to link to the shared monetary account.
     * Used only if share_detail is ShareDetailCardPayment.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $shareInviteMonetaryAccountResponseId,
        string $status = null,
        int $cardId = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $shareInviteMonetaryAccountResponseId]
            ),
            [
                self::FIELD_STATUS => $status,
                self::FIELD_CARD_ID => $cardId,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Return all the shares a user was invited to.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseShareInviteMonetaryAccountResponseList
     */
    public static function listing(
        array $params = [],
        array $customHeaders = []
    ): BunqResponseShareInviteMonetaryAccountResponseList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseShareInviteMonetaryAccountResponseList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the ShareInviteBankResponse.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the ShareInviteBankResponse creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the ShareInviteBankResponse last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The monetary account and user who created the share.
     *
     * @return LabelMonetaryAccount
     */
    public function getCounterAlias()
    {
        return $this->counterAlias;
    }

    /**
     * @param LabelMonetaryAccount $counterAlias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setCounterAlias($counterAlias)
    {
        $this->counterAlias = $counterAlias;
    }

    /**
     * The user who cancelled the share if it has been revoked or rejected.
     *
     * @return LabelUser
     */
    public function getUserAliasCancelled()
    {
        return $this->userAliasCancelled;
    }

    /**
     * @param LabelUser $userAliasCancelled
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setUserAliasCancelled($userAliasCancelled)
    {
        $this->userAliasCancelled = $userAliasCancelled;
    }

    /**
     * The id of the monetary account the ACCEPTED share applies to. null
     * otherwise.
     *
     * @return int
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @param int $monetaryAccountId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setDraftShareInviteBankId($draftShareInviteBankId)
    {
        $this->draftShareInviteBankId = $draftShareInviteBankId;
    }

    /**
     * The share details.
     *
     * @return ShareDetail
     */
    public function getShareDetail()
    {
        return $this->shareDetail;
    }

    /**
     * @param ShareDetail $shareDetail
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @param string $status
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * @param string $shareType
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @param string $startDate
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * The description of this share. It is basically the monetary account
     * description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setDescription($description)
    {
        $this->description = $description;
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

        if (!is_null($this->counterAlias)) {
            return false;
        }

        if (!is_null($this->userAliasCancelled)) {
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

        if (!is_null($this->shareType)) {
            return false;
        }

        if (!is_null($this->startDate)) {
            return false;
        }

        if (!is_null($this->endDate)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        return true;
    }
}
