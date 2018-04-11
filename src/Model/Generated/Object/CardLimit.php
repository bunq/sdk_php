<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class CardLimit extends BunqModel
{
    /**
     * The id of the card limit entry.
     *
     * @var int
     */
    protected $id;

    /**
     * The daily limit amount.
     *
     * @var string
     */
    protected $dailyLimit;

    /**
     * Currency for the daily limit.
     *
     * @var string
     */
    protected $currency;

    /**
     * The type of transaction for the limit. Can be CARD_LIMIT_ATM,
     * CARD_LIMIT_CONTACTLESS, CARD_LIMIT_DIPPING or CARD_LIMIT_POS_ICC.
     *
     * @var string
     */
    protected $type;

    /**
     * The daily limit amount.
     *
     * @var string
     */
    protected $dailyLimitFieldForRequest;

    /**
     * Currency for the daily limit.
     *
     * @var string
     */
    protected $currencyFieldForRequest;

    /**
     * The type of transaction for the limit. Can be CARD_LIMIT_ATM,
     * CARD_LIMIT_CONTACTLESS, CARD_LIMIT_DIPPING or CARD_LIMIT_POS_ICC.
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * @param string $dailyLimit The daily limit amount.
     * @param string $currency   Currency for the daily limit.
     * @param string $type       The type of transaction for the limit. Can be
     *                           CARD_LIMIT_ATM, CARD_LIMIT_CONTACTLESS, CARD_LIMIT_DIPPING or
     *                           CARD_LIMIT_POS_ICC.
     */
    public function __construct(string $dailyLimit, string $currency, string $type)
    {
        $this->dailyLimitFieldForRequest = $dailyLimit;
        $this->currencyFieldForRequest = $currency;
        $this->typeFieldForRequest = $type;
    }

    /**
     * The id of the card limit entry.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The daily limit amount.
     *
     * @return string
     */
    public function getDailyLimit()
    {
        return $this->dailyLimit;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $dailyLimit
     */
    public function setDailyLimit($dailyLimit)
    {
        $this->dailyLimit = $dailyLimit;
    }

    /**
     * Currency for the daily limit.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * The type of transaction for the limit. Can be CARD_LIMIT_ATM,
     * CARD_LIMIT_CONTACTLESS, CARD_LIMIT_DIPPING or CARD_LIMIT_POS_ICC.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->dailyLimit)) {
            return false;
        }

        if (!is_null($this->currency)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        return true;
    }
}
