<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelUser;

/**
 * Used to create a draft share invite for a user with another bunq user.
 * The user that accepts the invite can share his MAs with the user that
 * created the invite.
 *
 * @generated
 */
class DraftShareInviteApiKey extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/draft-share-invite-api-key';
    const ENDPOINT_URL_READ = 'user/%s/draft-share-invite-api-key/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/draft-share-invite-api-key/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/draft-share-invite-api-key';

    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';
    const FIELD_SUB_STATUS = 'sub_status';
    const FIELD_EXPIRATION = 'expiration';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'DraftShareInviteApiKey';
    const OBJECT_TYPE_PUT = 'DraftShareInviteApiKey';

    /**
     * The user who created the draft share invite.
     *
     * @var LabelUser
     */
    protected $userAliasCreated;

    /**
     * The status of the draft share invite. Can be USED, CANCELLED and PENDING.
     *
     * @var string
     */
    protected $status;

    /**
     * The sub-status of the draft share invite. Can be NONE, ACCEPTED or
     * REJECTED.
     *
     * @var string
     */
    protected $subStatus;

    /**
     * The moment when this draft share invite expires.
     *
     * @var string
     */
    protected $expiration;

    /**
     * The URL redirecting user to the draft share invite in the app. Only works
     * on mobile devices.
     *
     * @var string
     */
    protected $draftShareUrl;

    /**
     * The API key generated for this DraftShareInviteApiKey.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * The id of the newly created draft share invite.
     *
     * @var int
     */
    protected $id;

    /**
     * The status of the draft share invite. Can be CANCELLED (the user cancels
     * the draft share before it's used).
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The sub-status of the draft share invite. Can be NONE, ACCEPTED or
     * REJECTED.
     *
     * @var string|null
     */
    protected $subStatusFieldForRequest;

    /**
     * The moment when this draft share invite expires.
     *
     * @var string
     */
    protected $expirationFieldForRequest;

    /**
     * @param string $expiration     The moment when this draft share invite
     *                               expires.
     * @param string|null $status    The status of the draft share invite. Can be
     *                               CANCELLED (the user cancels the draft share before it's used).
     * @param string|null $subStatus The sub-status of the draft share invite.
     *                               Can be NONE, ACCEPTED or REJECTED.
     */
    public function __construct(string $expiration, string $status = null, string $subStatus = null)
    {
        $this->statusFieldForRequest = $status;
        $this->subStatusFieldForRequest = $subStatus;
        $this->expirationFieldForRequest = $expiration;
    }

    /**
     * @param string $expiration     The moment when this draft share invite
     *                               expires.
     * @param string|null $status    The status of the draft share invite. Can be
     *                               CANCELLED (the user cancels the draft share before it's used).
     * @param string|null $subStatus The sub-status of the draft share invite.
     *                               Can be NONE, ACCEPTED or REJECTED.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        string $expiration,
        string $status = null,
        string $subStatus = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [
                self::FIELD_STATUS => $status,
                self::FIELD_SUB_STATUS => $subStatus,
                self::FIELD_EXPIRATION => $expiration,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get the details of a specific draft of a share invite.
     *
     * @param int $draftShareInviteApiKeyId
     * @param string[] $customHeaders
     *
     * @return BunqResponseDraftShareInviteApiKey
     */
    public static function get(
        int $draftShareInviteApiKeyId,
        array $customHeaders = []
    ): BunqResponseDraftShareInviteApiKey {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $draftShareInviteApiKeyId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseDraftShareInviteApiKey::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Update a draft share invite. When sending status CANCELLED it is possible
     * to cancel the draft share invite.
     *
     * @param int $draftShareInviteApiKeyId
     * @param string|null $status     The status of the draft share invite. Can be
     *                                CANCELLED (the user cancels the draft share before it's used).
     * @param string|null $subStatus  The sub-status of the draft share invite.
     *                                Can be NONE, ACCEPTED or REJECTED.
     * @param string|null $expiration The moment when this draft share invite
     *                                expires.
     * @param string[] $customHeaders
     *
     * @return BunqResponseDraftShareInviteApiKey
     */
    public static function update(
        int $draftShareInviteApiKeyId,
        string $status = null,
        string $subStatus = null,
        string $expiration = null,
        array $customHeaders = []
    ): BunqResponseDraftShareInviteApiKey {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $draftShareInviteApiKeyId]
            ),
            [
                self::FIELD_STATUS => $status,
                self::FIELD_SUB_STATUS => $subStatus,
                self::FIELD_EXPIRATION => $expiration,
            ],
            $customHeaders
        );

        return BunqResponseDraftShareInviteApiKey::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_PUT)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseDraftShareInviteApiKeyList
     */
    public static function listing(
        array $params = [],
        array $customHeaders = []
    ): BunqResponseDraftShareInviteApiKeyList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseDraftShareInviteApiKeyList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The user who created the draft share invite.
     *
     * @return LabelUser
     */
    public function getUserAliasCreated()
    {
        return $this->userAliasCreated;
    }

    /**
     * @param LabelUser $userAliasCreated
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setUserAliasCreated($userAliasCreated)
    {
        $this->userAliasCreated = $userAliasCreated;
    }

    /**
     * The status of the draft share invite. Can be USED, CANCELLED and PENDING.
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
     *             constructor.
     *
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The sub-status of the draft share invite. Can be NONE, ACCEPTED or
     * REJECTED.
     *
     * @return string
     */
    public function getSubStatus()
    {
        return $this->subStatus;
    }

    /**
     * @param string $subStatus
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setSubStatus($subStatus)
    {
        $this->subStatus = $subStatus;
    }

    /**
     * The moment when this draft share invite expires.
     *
     * @return string
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @param string $expiration
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    }

    /**
     * The URL redirecting user to the draft share invite in the app. Only works
     * on mobile devices.
     *
     * @return string
     */
    public function getDraftShareUrl()
    {
        return $this->draftShareUrl;
    }

    /**
     * @param string $draftShareUrl
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setDraftShareUrl($draftShareUrl)
    {
        $this->draftShareUrl = $draftShareUrl;
    }

    /**
     * The API key generated for this DraftShareInviteApiKey.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * The id of the newly created draft share invite.
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
     *             constructor.
     *
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
        if (!is_null($this->userAliasCreated)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->subStatus)) {
            return false;
        }

        if (!is_null($this->expiration)) {
            return false;
        }

        if (!is_null($this->draftShareUrl)) {
            return false;
        }

        if (!is_null($this->apiKey)) {
            return false;
        }

        if (!is_null($this->id)) {
            return false;
        }

        return true;
    }
}
