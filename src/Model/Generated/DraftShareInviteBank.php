<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;
use bunq\Model\Generated\Object\DraftShareInviteBankEntry;
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
     * Field constants.
     */
    const FIELD_STATUS = 'status';
    const FIELD_EXPIRATION = 'expiration';
    const FIELD_DRAFT_SHARE_SETTINGS = 'draft_share_settings';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/draft-share-invite-bank';
    const ENDPOINT_URL_READ = 'user/%s/draft-share-invite-bank/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/draft-share-invite-bank/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/draft-share-invite-bank';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'DraftShareInviteBank';

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
     * @var DraftShareInviteBankEntry
     */
    protected $draftShareSettings;

    /**
     * The id of the newly created draft share invite.
     *
     * @var int
     */
    protected $id;

    /**
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<int>
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::processForId($responseRaw);
    }

    /**
     * Get the details of a specific draft of a share invite.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $draftShareInviteBankId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<DraftShareInviteBank>
     */
    public static function get(ApiContext $apiContext, $userId, $draftShareInviteBankId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $draftShareInviteBankId]
            ),
            $customHeaders
        );

        return static::fromJson($responseRaw);
    }

    /**
     * Update a draft share invite. When sending status CANCELLED it is possible
     * to cancel the draft share invite.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $draftShareInviteBankId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<BunqResponse<DraftShareInviteBank>>
     */
    public static function update(ApiContext $apiContext, array $requestMap, $userId, $draftShareInviteBankId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $draftShareInviteBankId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::fromJson($responseRaw);
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<BunqModel[]|DraftShareInviteBank[]>
     */
    public static function listing(ApiContext $apiContext, $userId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId]
            ),
            $customHeaders
        );

        return static::fromJsonList($responseRaw, self::OBJECT_TYPE);
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
     */
    public function setUserAliasCreated(LabelUser $userAliasCreated)
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
     */
    public function setDraftShareUrl($draftShareUrl)
    {
        $this->draftShareUrl = $draftShareUrl;
    }

    /**
     * The draft share invite details.
     *
     * @return DraftShareInviteBankEntry
     */
    public function getDraftShareSettings()
    {
        return $this->draftShareSettings;
    }

    /**
     * @param DraftShareInviteBankEntry $draftShareSettings
     */
    public function setDraftShareSettings(DraftShareInviteBankEntry $draftShareSettings)
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
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
