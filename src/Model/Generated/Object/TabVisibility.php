<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class TabVisibility extends BunqModel
{
    /**
     * When true the tab will be linked to the ACTIVE cash registers QR code.
     *
     * @var bool
     */
    protected $cashRegisterQrCode;

    /**
     * When true the tab will be visible through its own QR code. Use
     * ../tab/{tab-id}/qr-code-content to get the raw content of this QR code
     *
     * @var bool
     */
    protected $tabQrCode;

    /**
     * The location of the Tab in NearPay.
     *
     * @var Geolocation
     */
    protected $location;

    /**
     * @param bool $cashRegisterQrCode
     * @param bool $tabQrCode
     */
    public function __construct($cashRegisterQrCode, $tabQrCode)
    {
        $this->cashRegisterQrCode = $cashRegisterQrCode;
        $this->tabQrCode = $tabQrCode;
    }

    /**
     * When true the tab will be linked to the ACTIVE cash registers QR code.
     *
     * @return bool
     */
    public function getCashRegisterQrCode()
    {
        return $this->cashRegisterQrCode;
    }

    /**
     * @param bool $cashRegisterQrCode
     */
    public function setCashRegisterQrCode(bool $cashRegisterQrCode)
    {
        $this->cashRegisterQrCode = $cashRegisterQrCode;
    }

    /**
     * When true the tab will be visible through its own QR code. Use
     * ../tab/{tab-id}/qr-code-content to get the raw content of this QR code
     *
     * @return bool
     */
    public function getTabQrCode()
    {
        return $this->tabQrCode;
    }

    /**
     * @param bool $tabQrCode
     */
    public function setTabQrCode(bool $tabQrCode)
    {
        $this->tabQrCode = $tabQrCode;
    }

    /**
     * The location of the Tab in NearPay.
     *
     * @return Geolocation
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Geolocation $location
     */
    public function setLocation(Geolocation $location)
    {
        $this->location = $location;
    }
}
