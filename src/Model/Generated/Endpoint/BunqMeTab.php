<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * bunq.me tabs allows you to create a payment request and share the link
 * through e-mail, chat, etc. Multiple persons are able to respond to the
 * payment request and pay through bunq, iDeal or SOFORT.
 *
 * @generated
 */
class BunqMeTab extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/bunqme-tab';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/bunqme-tab/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/bunqme-tab';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/bunqme-tab/%s';

    /**
     * Field constants.
     */
    const FIELD_BUNQME_TAB_ENTRY = 'bunqme_tab_entry';
    const FIELD_STATUS = 'status';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'BunqMeTab';

    /**
     * The id of the created bunq.me.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp when the bunq.me was created.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp when the bunq.me was last updated.
     *
     * @var string
     */
    protected $updated;

    /**
     * The timestamp of when the bunq.me expired or will expire.
     *
     * @var string
     */
    protected $timeExpiry;

    /**
     * The id of the MonetaryAccount the bunq.me was sent from.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * The status of the bunq.me. Can be WAITING_FOR_PAYMENT, CANCELLED or
     * EXPIRED.
     *
     * @var string
     */
    protected $status;

    /**
     * The type of the bunq.me Tab. Can be BUNQ_ME or SPLIT_RECEIPT.
     *
     * @var string
     */
    protected $type;

    /**
     * The LabelMonetaryAccount with the public information of the User and the
     * MonetaryAccount that created the bunq.me link.
     *
     * @var LabelMonetaryAccount
     */
    protected $aliasMonetaryAccount;

    /**
     * The url that points to the bunq.me page.
     *
     * @var string
     */
    protected $bunqmeTabShareUrl;

    /**
     * The bunq.me entry containing the payment information.
     *
     * @var BunqMeTabEntry
     */
    protected $bunqmeTabEntry;

    /**
     * The bunq.me tab entries attached to this bunq.me Tab.
     *
     * @var BunqMeTabEntry[]
     */
    protected $bunqmeTabEntries;

    /**
     * The list of bunq.me result Inquiries successfully made and paid.
     *
     * @var BunqMeTabResultInquiry[]
     */
    protected $resultInquiries;

    /**
     * The bunq.me entry containing the payment information.
     *
     * @var BunqMeTabEntry
     */
    protected $bunqmeTabEntryFieldForRequest;

    /**
     * The status of the bunq.me. Ignored in POST requests but can be used for
     * cancelling the bunq.me by setting status as CANCELLED with a PUT request.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param BunqMeTabEntry $bunqmeTabEntry The bunq.me entry containing the
     * payment information.
     * @param string|null $status The status of the bunq.me. Ignored in POST
     * requests but can be used for cancelling the bunq.me by setting status as
     * CANCELLED with a PUT request.
     */
    public function __construct(BunqMeTabEntry  $bunqmeTabEntry, string  $status = null)
    {
        $this->bunqmeTabEntryFieldForRequest = $bunqmeTabEntry;
        $this->statusFieldForRequest = $status;
    }

    /**
     * @param BunqMeTabEntry $bunqmeTabEntry The bunq.me entry containing the
     * payment information.
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the bunq.me. Ignored in POST
     * requests but can be used for cancelling the bunq.me by setting status as
     * CANCELLED with a PUT request.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(BunqMeTabEntry  $bunqmeTabEntry, int $monetaryAccountId = null, string  $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [self::FIELD_BUNQME_TAB_ENTRY => $bunqmeTabEntry,
self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $bunqMeTabId
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the bunq.me. Ignored in POST
     * requests but can be used for cancelling the bunq.me by setting status as
     * CANCELLED with a PUT request.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $bunqMeTabId, int $monetaryAccountId = null, string  $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $bunqMeTabId]
            ),
            [self::FIELD_STATUS => $status],
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
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseBunqMeTabList
     */
    public static function listing(int $monetaryAccountId = null, array $params = [], array $customHeaders = []): BunqResponseBunqMeTabList
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

        return BunqResponseBunqMeTabList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $bunqMeTabId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseBunqMeTab
     */
    public static function get(int $bunqMeTabId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseBunqMeTab
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $bunqMeTabId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseBunqMeTab::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the created bunq.me.
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
     * The timestamp when the bunq.me was created.
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
     * The timestamp when the bunq.me was last updated.
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
     * The timestamp of when the bunq.me expired or will expire.
     *
     * @return string
     */
    public function getTimeExpiry()
    {
        return $this->timeExpiry;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $timeExpiry
     */
    public function setTimeExpiry($timeExpiry)
    {
        $this->timeExpiry = $timeExpiry;
    }

    /**
     * The id of the MonetaryAccount the bunq.me was sent from.
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
     * The status of the bunq.me. Can be WAITING_FOR_PAYMENT, CANCELLED or
     * EXPIRED.
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
     * The type of the bunq.me Tab. Can be BUNQ_ME or SPLIT_RECEIPT.
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
     * The LabelMonetaryAccount with the public information of the User and the
     * MonetaryAccount that created the bunq.me link.
     *
     * @return LabelMonetaryAccount
     */
    public function getAliasMonetaryAccount()
    {
        return $this->aliasMonetaryAccount;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $aliasMonetaryAccount
     */
    public function setAliasMonetaryAccount($aliasMonetaryAccount)
    {
        $this->aliasMonetaryAccount = $aliasMonetaryAccount;
    }

    /**
     * The url that points to the bunq.me page.
     *
     * @return string
     */
    public function getBunqmeTabShareUrl()
    {
        return $this->bunqmeTabShareUrl;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $bunqmeTabShareUrl
     */
    public function setBunqmeTabShareUrl($bunqmeTabShareUrl)
    {
        $this->bunqmeTabShareUrl = $bunqmeTabShareUrl;
    }

    /**
     * The bunq.me entry containing the payment information.
     *
     * @return BunqMeTabEntry
     */
    public function getBunqmeTabEntry()
    {
        return $this->bunqmeTabEntry;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param BunqMeTabEntry $bunqmeTabEntry
     */
    public function setBunqmeTabEntry($bunqmeTabEntry)
    {
        $this->bunqmeTabEntry = $bunqmeTabEntry;
    }

    /**
     * The bunq.me tab entries attached to this bunq.me Tab.
     *
     * @return BunqMeTabEntry[]
     */
    public function getBunqmeTabEntries()
    {
        return $this->bunqmeTabEntries;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param BunqMeTabEntry[] $bunqmeTabEntries
     */
    public function setBunqmeTabEntries($bunqmeTabEntries)
    {
        $this->bunqmeTabEntries = $bunqmeTabEntries;
    }

    /**
     * The list of bunq.me result Inquiries successfully made and paid.
     *
     * @return BunqMeTabResultInquiry[]
     */
    public function getResultInquiries()
    {
        return $this->resultInquiries;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param BunqMeTabResultInquiry[] $resultInquiries
     */
    public function setResultInquiries($resultInquiries)
    {
        $this->resultInquiries = $resultInquiries;
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

        if (!is_null($this->timeExpiry)) {
            return false;
        }

        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->aliasMonetaryAccount)) {
            return false;
        }

        if (!is_null($this->bunqmeTabShareUrl)) {
            return false;
        }

        if (!is_null($this->bunqmeTabEntry)) {
            return false;
        }

        if (!is_null($this->bunqmeTabEntries)) {
            return false;
        }

        if (!is_null($this->resultInquiries)) {
            return false;
        }

        return true;
    }
}
