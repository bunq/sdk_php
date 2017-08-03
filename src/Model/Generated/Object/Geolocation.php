<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

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
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
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
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
}
