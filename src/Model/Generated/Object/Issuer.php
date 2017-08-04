<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

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
     * @param string $bic
     */
    public function __construct($bic)
    {
        $this->bic = $bic;
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
