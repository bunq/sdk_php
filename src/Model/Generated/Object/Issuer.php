<?php

namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class Issuer extends BunqModel
{
    /**
     * The BIC code.
     *
     * @var string
     */
    protected $bic;

    /**
     * The name of the bank.
     *
     * @var string
     */
    protected $name;

    /**
     * The BIC code.
     *
     * @var string
     */
    protected $bicFieldForRequest;

    /**
     * The name of the bank.
     *
     * @var string|null
     */
    protected $nameFieldForRequest;

    /**
     * @param string $bic       The BIC code.
     * @param string|null $name The name of the bank.
     */
    public function __construct(string $bic, string $name = null)
    {
        $this->bicFieldForRequest = $bic;
        $this->nameFieldForRequest = $name;
    }

    /**
     * The BIC code.
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param string $bic
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
    }

    /**
     * The name of the bank.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->bic)) {
            return false;
        }

        if (!is_null($this->name)) {
            return false;
        }

        return true;
    }
}
