<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\DraftShareInviteEntry;
use bunq\Model\Generated\Object\LabelUser;

/**
 * Used to create a draft share invite for a monetary account with another
 * bunq user, as in the 'Connect' feature in the bunq app. The user that
 * accepts the invite can share one of their MonetaryAccounts with the user
 * that created the invite.
 *
 * @generated
 */
class DraftShareInviteBank extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/draft-share-invite-bank';
    const ENDPOINT_URL_READ = 'user/%s/draft-share-invite-bank/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/draft-share-invite-bank/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/draft-share-invite-bank';

    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';
    const FIELD_EXPIRATION = 'expiration';
    const FIELD_DRAFT_SHARE_SETTINGS = 'draft_share_settings';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'DraftShareInviteBank';

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
     * The moment when this draft share invite expires.
     *
     * @var string
     */
    protected $expiration;

    /**
     * The id of the share invite bank response this draft share belongs to.
     *
     * @var int
     */
    protected $shareInviteBankResponseId;

    /**
     * The URL redirecting user to the draft share invite in the app. Only works
     * on mobile devices.
     *
     * @var string
     */
    protected $draftShareUrl;

    /**
     * The draft share invite details.
     *
     * @var DraftShareInviteEntry
     */
    protected $draftShareSettings;

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
     * The moment when this draft share invite expires.
     *
     * @var string
     */
    protected $expirationFieldForRequest;

    /**
     * The draft share invite details.
     *
     * @var DraftShareInviteEntry
     */
    protected $draftShareSettingsFieldForRequest;

    /**
     * @param string $expiration The moment when this draft share invite
     * expires.
     * @param DraftShareInviteEntry $draftShareSettings The draft share invite
     * details.
     * @param string|null $status The status of the draft share invite. Can be
     * CANCELLED (the user cancels the draft share before it's used).
     */
    public function __construct(string $expiration, DraftShareInviteEntry $draftShareSettings, string $status = null)
    {
        $this->statusFieldForRequest = $status;
        $this->expirationFieldForRequest = $expiration;
        $this->draftShareSettingsFieldForRequest = $draftShareSettings;
    }

    /**
     * @param string $expiration The moment when this draft share invite
     * expires.
     * @param DraftShareInviteEntry $draftShareSettings The draft share invite
     * details.
     * @param string|null $status The status of the draft share invite. Can be
     * CANCELLED (the user cancels the draft share before it's used).
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        string $expiration,
        DraftShareInviteEntry $draftShareSettings,
        string $status = null,
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
                self::FIELD_EXPIRATION => $expiration,
                self::FIELD_DRAFT_SHARE_SETTINGS => $draftShareSettings,
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
     * @param int $draftShareInviteBankId
     * @param string[] $customHeaders
     *
     * @return BunqResponseDraftShareInviteBank
     */
    public static function get(int $draftShareInviteBankId, array $customHeaders = []): BunqResponseDraftShareInviteBank
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $draftShareInviteBankId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseDraftShareInviteBank::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Update a draft share invite. When sending status CANCELLED it is possible
     * to cancel the draft share invite.
     *
     * @param int $draftShareInviteBankId
     * @param string|null $status The status of the draft share invite. Can be
     * CANCELLED (the user cancels the draft share before it's used).
     * @param string|null $expiration The moment when this draft share invite
     * expires.
     * @param DraftShareInviteEntry|null $draftShareSettings The draft share
     * invite details.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $draftShareInviteBankId,
        string $status = null,
        string $expiration = null,
        DraftShareInviteEntry $draftShareSettings = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $draftShareInviteBankId]
            ),
            [
                self::FIELD_STATUS => $status,
                self::FIELD_EXPIRATION => $expiration,
                self::FIELD_DRAFT_SHARE_SETTINGS => $draftShareSettings,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseDraftShareInviteBankList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseDraftShareInviteBankList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseDraftShareInviteBankList::castFromBunqResponse(
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
     * constructor.
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
     * constructor.
     *
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * constructor.
     *
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    }

    /**
     * The id of the share invite bank response this draft share belongs to.
     *
     * @return int
     */
    public function getShareInviteBankResponseId()
    {
        return $this->shareInviteBankResponseId;
    }

    /**
     * @param int $shareInviteBankResponseId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setShareInviteBankResponseId($shareInviteBankResponseId)
    {
        $this->shareInviteBankResponseId = $shareInviteBankResponseId;
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
     * constructor.
     *
     */
    public function setDraftShareUrl($draftShareUrl)
    {
        $this->draftShareUrl = $draftShareUrl;
    }

    /**
     * The draft share invite details.
     *
     * @return DraftShareInviteEntry
     */
    public function getDraftShareSettings()
    {
        return $this->draftShareSettings;
    }

    /**
     * @param DraftShareInviteEntry $draftShareSettings
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setDraftShareSettings($draftShareSettings)
    {
        $this->draftShareSettings = $draftShareSettings;
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
     * constructor.
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

        if (!is_null($this->expiration)) {
            return false;
        }

        if (!is_null($this->shareInviteBankResponseId)) {
            return false;
        }

        if (!is_null($this->draftShareUrl)) {
            return false;
        }

        if (!is_null($this->draftShareSettings)) {
            return false;
        }

        if (!is_null($this->id)) {
            return false;
        }

        return true;
    }
}
