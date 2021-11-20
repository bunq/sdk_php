<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Endpoint for getting all the known (trade) names for a user company. This
 * is needed for updating the user name, as we only accept legal or trade
 * names.
 *
 * @generated
 */
class UserCompanyName extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user-company/%s/name';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'UserCompanyNameArray';

    /**
     * All known (trade) names for a user company.
     *
     * @var string[]
     */
    protected $nameArray;

    /**
     * Return all the known (trade) names for a specific user company.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $userCompanyId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseUserCompanyNameList
     */
    public static function listing(int $userCompanyId, array $params = [], array $customHeaders = []): BunqResponseUserCompanyNameList
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

        return BunqResponseUserCompanyNameList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * All known (trade) names for a user company.
     *
     * @return string[]
     */
    public function getNameArray()
    {
        return $this->nameArray;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string[] $nameArray
     */
    public function setNameArray($nameArray)
    {
        $this->nameArray = $nameArray;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->nameArray)) {
            return false;
        }

        return true;
    }
}
