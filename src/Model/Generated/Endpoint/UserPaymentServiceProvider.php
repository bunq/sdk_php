<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Avatar;
use bunq\Model\Generated\Object\Pointer;

/**
 * Used to view UserPaymentServiceProvider for session creation.
 *
 * @generated
 */
class UserPaymentServiceProvider extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user-payment-service-provider/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'UserPaymentServiceProvider';

    /**
     * The id of the user.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the user object's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the user object's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The distinguished name from the certificate used to identify this user.
     *
     * @var string
     */
    protected $certificateDistinguishedName;

    /**
     * The aliases of the user.
     *
     * @var Pointer[]
     */
    protected $alias;

    /**
     * The user's avatar.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * The user status. The user status. Can be: ACTIVE, BLOCKED or DENIED.
     *
     * @var string
     */
    protected $status;

    /**
     * The user sub-status. Can be: NONE
     *
     * @var string
     */
    protected $subStatus;

    /**
     * The providers's public UUID.
     *
     * @var string
     */
    protected $publicUuid;

    /**
     * The display name for the provider.
     *
     * @var string
     */
    protected $displayName;

    /**
     * The public nick name for the provider.
     *
     * @var string
     */
    protected $publicNickName;

    /**
     * The provider's language. Formatted as a ISO 639-1 language code plus a
     * ISO 3166-1 alpha-2 country code, separated by an underscore.
     *
     * @var string
     */
    protected $language;

    /**
     * The provider's region. Formatted as a ISO 639-1 language code plus a ISO
     * 3166-1 alpha-2 country code, separated by an underscore.
     *
     * @var string
     */
    protected $region;

    /**
     * The setting for the session timeout of the user in seconds.
     *
     * @var int
     */
    protected $sessionTimeout;

    /**
     * @param int $userPaymentServiceProviderId
     * @param string[] $customHeaders
     *
     * @return BunqResponseUserPaymentServiceProvider
     */
    public static function get(
        int $userPaymentServiceProviderId,
        array $customHeaders = []
    ): BunqResponseUserPaymentServiceProvider {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userPaymentServiceProviderId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseUserPaymentServiceProvider::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the user.
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
     * The timestamp of the user object's creation.
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
     *             constructor.
     *
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the user object's last update.
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
     *             constructor.
     *
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The distinguished name from the certificate used to identify this user.
     *
     * @return string
     */
    public function getCertificateDistinguishedName()
    {
        return $this->certificateDistinguishedName;
    }

    /**
     * @param string $certificateDistinguishedName
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setCertificateDistinguishedName($certificateDistinguishedName)
    {
        $this->certificateDistinguishedName = $certificateDistinguishedName;
    }

    /**
     * The aliases of the user.
     *
     * @return Pointer[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param Pointer[] $alias
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The user's avatar.
     *
     * @return Avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param Avatar $avatar
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * The user status. The user status. Can be: ACTIVE, BLOCKED or DENIED.
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
     * The user sub-status. Can be: NONE
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
     * The providers's public UUID.
     *
     * @return string
     */
    public function getPublicUuid()
    {
        return $this->publicUuid;
    }

    /**
     * @param string $publicUuid
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setPublicUuid($publicUuid)
    {
        $this->publicUuid = $publicUuid;
    }

    /**
     * The display name for the provider.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * The public nick name for the provider.
     *
     * @return string
     */
    public function getPublicNickName()
    {
        return $this->publicNickName;
    }

    /**
     * @param string $publicNickName
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setPublicNickName($publicNickName)
    {
        $this->publicNickName = $publicNickName;
    }

    /**
     * The provider's language. Formatted as a ISO 639-1 language code plus a
     * ISO 3166-1 alpha-2 country code, separated by an underscore.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * The provider's region. Formatted as a ISO 639-1 language code plus a ISO
     * 3166-1 alpha-2 country code, separated by an underscore.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * The setting for the session timeout of the user in seconds.
     *
     * @return int
     */
    public function getSessionTimeout()
    {
        return $this->sessionTimeout;
    }

    /**
     * @param int $sessionTimeout
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setSessionTimeout($sessionTimeout)
    {
        $this->sessionTimeout = $sessionTimeout;
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

        if (!is_null($this->certificateDistinguishedName)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->avatar)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->subStatus)) {
            return false;
        }

        if (!is_null($this->publicUuid)) {
            return false;
        }

        if (!is_null($this->displayName)) {
            return false;
        }

        if (!is_null($this->publicNickName)) {
            return false;
        }

        if (!is_null($this->language)) {
            return false;
        }

        if (!is_null($this->region)) {
            return false;
        }

        if (!is_null($this->sessionTimeout)) {
            return false;
        }

        return true;
    }
}
