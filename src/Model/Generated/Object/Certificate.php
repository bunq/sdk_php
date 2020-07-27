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
     * A single certificate in the chain in .PEM format.
     *
     * @var string
     */
    protected $certificateFieldForRequest;

    /**
     * @param string $certificate A single certificate in the chain in .PEM
     * format.
     */
    public function __construct(string $certificate)
    {
        $this->certificateFieldForRequest = $certificate;
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCertificate($certificate)
    {
        $this->certificate = $certificate;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->certificate)) {
            return false;
        }

        return true;
    }
}
