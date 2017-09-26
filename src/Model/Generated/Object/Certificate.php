<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class Certificate extends BunqModel
{
    /**
     * A single certificate in the chain in .PEM format.
     *
     * @var string
     */
    protected $certificate;

    /**
     * @param string $certificate
     */
    public function __construct($certificate)
    {
        $this->certificate = $certificate;
    }

    /**
     * A single certificate in the chain in .PEM format.
     *
     * @return string
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * @param string $certificate
     */
    public function setCertificate($certificate)
    {
        $this->certificate = $certificate;
    }
}
