<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class TabTextWaitingScreen extends BunqModel
{
    /**
     * Language of tab text
     *
     * @var string
     */
    protected $language;

    /**
     * Tab text
     *
     * @var string
     */
    protected $description;

    /**
     * Language of tab text
     *
     * @var string
     */
    protected $languageFieldForRequest;

    /**
     * Tab text
     *
     * @var string
     */
    protected $descriptionFieldForRequest;

    /**
     * @param string $language Language of tab text
     * @param string $description Tab text
     */
    public function __construct(string $language, string $description)
    {
        $this->languageFieldForRequest = $language;
        $this->descriptionFieldForRequest = $description;
    }

    /**
     * Language of tab text
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * Tab text
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->language)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        return true;
    }
}
