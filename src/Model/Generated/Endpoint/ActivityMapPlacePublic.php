<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\AttachmentPublic;
use bunq\Model\Generated\Object\Geolocation;

/**
 * Public endpoint for getting the place info.
 *
 * @generated
 */
class ActivityMapPlacePublic extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'activity-map-place-public/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'ActivityMapPlace';

    /**
     * The name of the place.
     *
     * @var string
     */
    protected $name;

    /**
     * The public uuid of the place.
     *
     * @var string
     */
    protected $publicUuid;

    /**
     * The geolocation of this place.
     *
     * @var Geolocation
     */
    protected $geolocation;

    /**
     * The address of this place.
     *
     * @var Address
     */
    protected $address;

    /**
     * The phone number of this place.
     *
     * @var string
     */
    protected $phoneNumber;

    /**
     * The URL to this place's merchant website.
     *
     * @var string
     */
    protected $urlMerchant;

    /**
     * The URL to the place's Google maps location.
     *
     * @var string
     */
    protected $urlGoogleMaps;

    /**
     * The attachments for the place's photos.
     *
     * @var AttachmentPublic[]
     */
    protected $allAttachmentPhoto;

    /**
     * The google types of the place.
     *
     * @var string[]
     */
    protected $allType;

    /**
     * The opening periods of the place.
     *
     * @var string[]
     */
    protected $allOpeningPeriod;

    /**
     * The total number of recommendations.
     *
     * @var int
     */
    protected $numberOfRecommendationTotal;

    /**
     * @param string $activityMapPlacePublicUuid
     * @param string[] $customHeaders
     *
     * @return BunqResponseActivityMapPlacePublic
     */
    public static function get(string $activityMapPlacePublicUuid, array $customHeaders = []): BunqResponseActivityMapPlacePublic
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$activityMapPlacePublicUuid]
            ),
            [],
            $customHeaders
        );

        return BunqResponseActivityMapPlacePublic::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The name of the place.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * The public uuid of the place.
     *
     * @return string
     */
    public function getPublicUuid()
    {
        return $this->publicUuid;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $publicUuid
     */
    public function setPublicUuid($publicUuid)
    {
        $this->publicUuid = $publicUuid;
    }

    /**
     * The geolocation of this place.
     *
     * @return Geolocation
     */
    public function getGeolocation()
    {
        return $this->geolocation;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Geolocation $geolocation
     */
    public function setGeolocation($geolocation)
    {
        $this->geolocation = $geolocation;
    }

    /**
     * The address of this place.
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Address $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * The phone number of this place.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * The URL to this place's merchant website.
     *
     * @return string
     */
    public function getUrlMerchant()
    {
        return $this->urlMerchant;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $urlMerchant
     */
    public function setUrlMerchant($urlMerchant)
    {
        $this->urlMerchant = $urlMerchant;
    }

    /**
     * The URL to the place's Google maps location.
     *
     * @return string
     */
    public function getUrlGoogleMaps()
    {
        return $this->urlGoogleMaps;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $urlGoogleMaps
     */
    public function setUrlGoogleMaps($urlGoogleMaps)
    {
        $this->urlGoogleMaps = $urlGoogleMaps;
    }

    /**
     * The attachments for the place's photos.
     *
     * @return AttachmentPublic[]
     */
    public function getAllAttachmentPhoto()
    {
        return $this->allAttachmentPhoto;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param AttachmentPublic[] $allAttachmentPhoto
     */
    public function setAllAttachmentPhoto($allAttachmentPhoto)
    {
        $this->allAttachmentPhoto = $allAttachmentPhoto;
    }

    /**
     * The google types of the place.
     *
     * @return string[]
     */
    public function getAllType()
    {
        return $this->allType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string[] $allType
     */
    public function setAllType($allType)
    {
        $this->allType = $allType;
    }

    /**
     * The opening periods of the place.
     *
     * @return string[]
     */
    public function getAllOpeningPeriod()
    {
        return $this->allOpeningPeriod;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string[] $allOpeningPeriod
     */
    public function setAllOpeningPeriod($allOpeningPeriod)
    {
        $this->allOpeningPeriod = $allOpeningPeriod;
    }

    /**
     * The total number of recommendations.
     *
     * @return int
     */
    public function getNumberOfRecommendationTotal()
    {
        return $this->numberOfRecommendationTotal;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $numberOfRecommendationTotal
     */
    public function setNumberOfRecommendationTotal($numberOfRecommendationTotal)
    {
        $this->numberOfRecommendationTotal = $numberOfRecommendationTotal;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->name)) {
            return false;
        }

        if (!is_null($this->publicUuid)) {
            return false;
        }

        if (!is_null($this->geolocation)) {
            return false;
        }

        if (!is_null($this->address)) {
            return false;
        }

        if (!is_null($this->phoneNumber)) {
            return false;
        }

        if (!is_null($this->urlMerchant)) {
            return false;
        }

        if (!is_null($this->urlGoogleMaps)) {
            return false;
        }

        if (!is_null($this->allAttachmentPhoto)) {
            return false;
        }

        if (!is_null($this->allType)) {
            return false;
        }

        if (!is_null($this->allOpeningPeriod)) {
            return false;
        }

        if (!is_null($this->numberOfRecommendationTotal)) {
            return false;
        }

        return true;
    }
}
