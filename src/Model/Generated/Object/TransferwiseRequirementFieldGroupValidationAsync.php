<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class TransferwiseRequirementFieldGroupValidationAsync extends BunqModel
{
    /**
     * The url to be used to validate user input.
     *
     * @var string
     */
    protected $url;

    /**
     * The parameters to send when validating user input.
     *
     * @var TransferwiseRequirementFieldGroupValidationAsyncParams
     */
    protected $params;

    /**
     * The url to be used to validate user input.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * The parameters to send when validating user input.
     *
     * @return TransferwiseRequirementFieldGroupValidationAsyncParams
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param TransferwiseRequirementFieldGroupValidationAsyncParams $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->url)) {
            return false;
        }

        if (!is_null($this->params)) {
            return false;
        }

        return true;
    }
}
