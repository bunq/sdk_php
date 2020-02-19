<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class Geolocation extends BunqModel
{
    /**
     * The latitude for a geolocation restriction.
     *
     * @var float
     */
    protected $latitude;

    /**
     * The longitude for a geolocation restriction.
     *
     * @var float
     */
    protected $longitude;

    /**
     * The altitude for a geolocation restriction.
     *
     * @var float
     */
    protected $altitude;

    /**
     * The radius for a geolocation restriction.
     *
     * @var float
     */
    protected $radius;

    /**
     * The latitude for a geolocation restriction.
     *
     * @var string|null
     */
    protected $latitudeFieldForRequest;

    /**
     * The longitude for a geolocation restriction.
     *
     * @var string|null
     */
    protected $longitudeFieldForRequest;

    /**
     * The altitude for a geolocation restriction.
     *
     * @var string|null
     */
    protected $altitudeFieldForRequest;

    /**
     * The radius for a geolocation restriction.
     *
     * @var string|null
     */
    protected $radiusFieldForRequest;

    /**
     * @param string|null $latitude The latitude for a geolocation restriction.
     * @param string|null $longitude The longitude for a geolocation
     * restriction.
     * @param string|null $altitude The altitude for a geolocation restriction.
     * @param string|null $radius The radius for a geolocation restriction.
     */
    public function __construct(
        string $latitude = null,
        string $longitude = null,
        string $altitude = null,
        string $radius = null
    ) {
        $this->latitudeFieldForRequest = $latitude;
        $this->longitudeFieldForRequest = $longitude;
        $this->altitudeFieldForRequest = $altitude;
        $this->radiusFieldForRequest = $radius;
    }

    /**
     * The latitude for a geolocation restriction.
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * The longitude for a geolocation restriction.
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * The altitude for a geolocation restriction.
     *
     * @return float
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * @param float $altitude
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;
    }

    /**
     * The radius for a geolocation restriction.
     *
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->latitude)) {
            return false;
        }

        if (!is_null($this->longitude)) {
            return false;
        }

        if (!is_null($this->altitude)) {
            return false;
        }

        if (!is_null($this->radius)) {
            return false;
        }

        return true;
    }
}
