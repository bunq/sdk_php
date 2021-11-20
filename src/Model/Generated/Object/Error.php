<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class Error extends BunqModel
{
    /**
     * The error description (in English).
     *
     * @var string
     */
    protected $errorDescription;

    /**
     * The error description (in the user language).
     *
     * @var string
     */
    protected $errorDescriptionTranslated;

    /**
     * The error description (in English).
     *
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $errorDescription
     */
    public function setErrorDescription($errorDescription)
    {
        $this->errorDescription = $errorDescription;
    }

    /**
     * The error description (in the user language).
     *
     * @return string
     */
    public function getErrorDescriptionTranslated()
    {
        return $this->errorDescriptionTranslated;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $errorDescriptionTranslated
     */
    public function setErrorDescriptionTranslated($errorDescriptionTranslated)
    {
        $this->errorDescriptionTranslated = $errorDescriptionTranslated;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->errorDescription)) {
            return false;
        }

        if (!is_null($this->errorDescriptionTranslated)) {
            return false;
        }

        return true;
    }
}
