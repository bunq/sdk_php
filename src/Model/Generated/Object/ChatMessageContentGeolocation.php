<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class ChatMessageContentGeolocation extends BunqModel
{
    /**
     * A geolocation, using WGS 84 coordinates.
     *
     * @var Geolocation
     */
    protected $geolocation;

    /**
     * A geolocation, using WGS 84 coordinates.
     *
     * @return Geolocation
     */
    public function getGeolocation()
    {
        return $this->geolocation;
    }

    /**
     * @param Geolocation $geolocation
     */
    public function setGeolocation(Geolocation $geolocation)
    {
        $this->geolocation = $geolocation;
    }
}
