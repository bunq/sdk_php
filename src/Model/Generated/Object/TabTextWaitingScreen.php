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
     * @param string $language
     * @param string $description
     */
    public function __construct($language, $description)
    {
        $this->language = $language;
        $this->description = $description;
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
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
