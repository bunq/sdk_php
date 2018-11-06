<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
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
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/share-invite-bank-inquiry-batch/%s';
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/share-invite-bank-inquiry-batch';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/share-invite-bank-inquiry-batch';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'ShareInviteBankInquiryBatch';

    /**
     * The list of share invite bank inquiries that were made.
     *
     * @var ShareInviteBankInquiry[]
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
     * @param int $shareInviteBankInquiryBatchId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseShareInviteBankInquiryBatch
     */
    public static function get(
        int $shareInviteBankInquiryBatchId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseShareInviteBankInquiryBatch {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $shareInviteBankInquiryBatchId,
                ]
            ),
            [],
            $customHeaders
        );

        return BunqResponseShareInviteBankInquiryBatch::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(int $monetaryAccountId = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [],
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
     * @return BunqResponseShareInviteBankInquiryBatchList
     */
    public static function listing(
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseShareInviteBankInquiryBatchList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseShareInviteBankInquiryBatchList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The list of share invite bank inquiries that were made.
     *
     * @return ShareInviteBankInquiry[]
     */
    public function getShareInviteBankInquiries()
    {
        return $this->shareInviteBankInquiries;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param ShareInviteBankInquiry[] $shareInviteBankInquiries
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
