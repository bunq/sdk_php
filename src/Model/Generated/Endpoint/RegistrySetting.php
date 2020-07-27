<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;

/**
 * Used to manage Slice group settings.
 *
 * @generated
 */
class RegistrySetting extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_UPDATE = 'user/%s/registry/%s/registry-setting/%s';
    const ENDPOINT_URL_READ = 'user/%s/registry/%s/registry-setting/%s';

    /**
     * Field constants.
     */
    const FIELD_AUTO_ADD_CARD_TRANSACTION = 'auto_add_card_transaction';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'RegistrySetting';

    /**
     * The setting for for adding automatically card transactions to the
     * registry.
     *
     * @var string
     */
    protected $autoAddCardTransaction;

    /**
     * The setting for for adding automatically card transactions to the
     * registry.
     *
     * @var string
     */
    protected $autoAddCardTransactionFieldForRequest;

    /**
     * @param string $autoAddCardTransaction The setting for for adding
     * automatically card transactions to the registry.
     */
    public function __construct(string $autoAddCardTransaction)
    {
        $this->autoAddCardTransactionFieldForRequest = $autoAddCardTransaction;
    }

    /**
     * Update a specific Slice group setting.
     *
     * @param int $registryId
     * @param int $registrySettingId
     * @param string|null $autoAddCardTransaction The setting for for adding
     * automatically card transactions to the registry.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $registryId,
        int $registrySettingId,
        string $autoAddCardTransaction = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $registryId, $registrySettingId]
            ),
            [self::FIELD_AUTO_ADD_CARD_TRANSACTION => $autoAddCardTransaction],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get a specific Slice group setting.
     *
     * @param int $registryId
     * @param int $registrySettingId
     * @param string[] $customHeaders
     *
     * @return BunqResponseRegistrySetting
     */
    public static function get(
        int $registryId,
        int $registrySettingId,
        array $customHeaders = []
    ): BunqResponseRegistrySetting {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $registryId, $registrySettingId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseRegistrySetting::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The setting for for adding automatically card transactions to the
     * registry.
     *
     * @return string
     */
    public function getAutoAddCardTransaction()
    {
        return $this->autoAddCardTransaction;
    }

    /**
     * @param string $autoAddCardTransaction
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAutoAddCardTransaction($autoAddCardTransaction)
    {
        $this->autoAddCardTransaction = $autoAddCardTransaction;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->autoAddCardTransaction)) {
            return false;
        }

        return true;
    }
}
