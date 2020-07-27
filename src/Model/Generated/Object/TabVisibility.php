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
     * When true the Tab will be linked to the ACTIVE cash registers QR code. If
     * no cash register QR code exists, one will be created.
     *
     * @var bool
     */
    protected $cashRegisterQrCodeFieldForRequest;

    /**
     * When true the Tab will be visible through its own QR code. Use
     * ../tab/{tab-id}/qr-code-content to get the raw content of this QR code
     *
     * @var bool
     */
    protected $tabQrCodeFieldForRequest;

    /**
     * The location on which this tab will be made visible in NearPay. This
     * location must overlap with the location of the CashRegister. If no
     * location is provided the location of the CashRegister will be used.
     *
     * @var Geolocation|null
     */
    protected $locationFieldForRequest;

    /**
     * @param bool $cashRegisterQrCode When true the Tab will be linked to the
     * ACTIVE cash registers QR code. If no cash register QR code exists, one
     * will be created.
     * @param bool $tabQrCode When true the Tab will be visible through its own
     * QR code. Use ../tab/{tab-id}/qr-code-content to get the raw content of
     * this QR code
     * @param Geolocation|null $location The location on which this tab will be
     * made visible in NearPay. This location must overlap with the location of
     * the CashRegister. If no location is provided the location of the
     * CashRegister will be used.
     */
    public function __construct(bool $cashRegisterQrCode, bool $tabQrCode, Geolocation $location = null)
    {
        $this->cashRegisterQrCodeFieldForRequest = $cashRegisterQrCode;
        $this->tabQrCodeFieldForRequest = $tabQrCode;
        $this->locationFieldForRequest = $location;
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCashRegisterQrCode($cashRegisterQrCode)
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setTabQrCode($tabQrCode)
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->cashRegisterQrCode)) {
            return false;
        }

        if (!is_null($this->tabQrCode)) {
            return false;
        }

        if (!is_null($this->location)) {
            return false;
        }

        return true;
    }
}
