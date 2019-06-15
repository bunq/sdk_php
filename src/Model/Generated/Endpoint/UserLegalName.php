<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;

/**
 * Endpoint for getting available legal names that can be used by the user.
 *
 * @generated
 */
class UserLegalName extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/legal-name';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'UserLegalNameArray';

    /**
     * All legal names that can be used by the user
     *
     * @var string[]
     */
    protected $legalNames;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseUserLegalNameList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseUserLegalNameList
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

        return BunqResponseUserLegalNameList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * All legal names that can be used by the user
     *
     * @return string[]
     */
    public function getLegalNames()
    {
        return $this->legalNames;
    }

    /**
     * @param string[] $legalNames
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLegalNames($legalNames)
    {
        $this->legalNames = $legalNames;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->legalNames)) {
            return false;
        }

        return true;
    }
}
