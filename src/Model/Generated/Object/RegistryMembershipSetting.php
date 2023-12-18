<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class RegistryMembershipSetting extends BunqModel
{
    /**
     * The setting for for adding automatically card transactions to the
     * registry.
     *
     * @var string
     */
    protected $autoAddCardTransaction;

    /**
     * The time when auto add card gets active
     *
     * @var string
     */
    protected $timeAutoAddCardTransactionStart;

    /**
     * The time when auto add card gets inactive
     *
     * @var string
     */
    protected $timeAutoAddCardTransactionEnd;

    /**
     * The ids of the cards that have been added to registry membership setting.
     *
     * @var string[]
     */
    protected $cardIds;

    /**
     * The cards of which payments will be automatically added to this Registry.
     *
     * @var LabelCard[]
     */
    protected $cardLabels;

    /**
     * The setting for for adding automatically card transactions to the
     * registry.
     *
     * @var string|null
     */
    protected $autoAddCardTransactionFieldForRequest;

    /**
     * The time when auto add card gets active
     *
     * @var string|null
     */
    protected $timeAutoAddCardTransactionStartFieldForRequest;

    /**
     * The time when auto add card gets inactive
     *
     * @var string|null
     */
    protected $timeAutoAddCardTransactionEndFieldForRequest;

    /**
     * The ids of the cards that have been added to registry membership setting.
     *
     * @var string[]|null
     */
    protected $cardIdsFieldForRequest;

    /**
     * @param string|null $autoAddCardTransaction The setting for for adding
     * automatically card transactions to the registry.
     * @param string|null $timeAutoAddCardTransactionStart The time when auto
     * add card gets active
     * @param string|null $timeAutoAddCardTransactionEnd The time when auto add
     * card gets inactive
     * @param string[]|null $cardIds The ids of the cards that have been added
     * to registry membership setting.
     */
    public function __construct(string  $autoAddCardTransaction = null, string  $timeAutoAddCardTransactionStart = null, string  $timeAutoAddCardTransactionEnd = null, array  $cardIds = null)
    {
        $this->autoAddCardTransactionFieldForRequest = $autoAddCardTransaction;
        $this->timeAutoAddCardTransactionStartFieldForRequest = $timeAutoAddCardTransactionStart;
        $this->timeAutoAddCardTransactionEndFieldForRequest = $timeAutoAddCardTransactionEnd;
        $this->cardIdsFieldForRequest = $cardIds;
    }

    /**
     * The setting for for adding automatically card transactions to the
     * registry.
     *
     * @return string
     */
    public function getAutoAddCardTransaction()
    {
        return $this->autoAddCardTransaction;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $autoAddCardTransaction
     */
    public function setAutoAddCardTransaction($autoAddCardTransaction)
    {
        $this->autoAddCardTransaction = $autoAddCardTransaction;
    }

    /**
     * The time when auto add card gets active
     *
     * @return string
     */
    public function getTimeAutoAddCardTransactionStart()
    {
        return $this->timeAutoAddCardTransactionStart;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $timeAutoAddCardTransactionStart
     */
    public function setTimeAutoAddCardTransactionStart($timeAutoAddCardTransactionStart)
    {
        $this->timeAutoAddCardTransactionStart = $timeAutoAddCardTransactionStart;
    }

    /**
     * The time when auto add card gets inactive
     *
     * @return string
     */
    public function getTimeAutoAddCardTransactionEnd()
    {
        return $this->timeAutoAddCardTransactionEnd;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $timeAutoAddCardTransactionEnd
     */
    public function setTimeAutoAddCardTransactionEnd($timeAutoAddCardTransactionEnd)
    {
        $this->timeAutoAddCardTransactionEnd = $timeAutoAddCardTransactionEnd;
    }

    /**
     * The ids of the cards that have been added to registry membership setting.
     *
     * @return string[]
     */
    public function getCardIds()
    {
        return $this->cardIds;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string[] $cardIds
     */
    public function setCardIds($cardIds)
    {
        $this->cardIds = $cardIds;
    }

    /**
     * The cards of which payments will be automatically added to this Registry.
     *
     * @return LabelCard[]
     */
    public function getCardLabels()
    {
        return $this->cardLabels;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelCard[] $cardLabels
     */
    public function setCardLabels($cardLabels)
    {
        $this->cardLabels = $cardLabels;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->autoAddCardTransaction)) {
            return false;
        }

        if (!is_null($this->timeAutoAddCardTransactionStart)) {
            return false;
        }

        if (!is_null($this->timeAutoAddCardTransactionEnd)) {
            return false;
        }

        if (!is_null($this->cardIds)) {
            return false;
        }

        if (!is_null($this->cardLabels)) {
            return false;
        }

        return true;
    }
}
