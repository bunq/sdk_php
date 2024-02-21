<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Address;

/**
 * Endpoint for getting the Card Replacement of a card.
 *
 * @generated
 */
class CardReplacement extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';
    const FIELD_ADDRESS_MAIN = 'address_main';
    const FIELD_ADDRESS_POSTAL = 'address_postal';

    /**
     * The status of the CardReplacement.
     *
     * @var string
     */
    protected $status;

    /**
     * The original card that belongs to the CardReplacement.
     *
     * @var int
     */
    protected $cardId;

    /**
     * The new card that replaces the original card in the CardReplacement.
     *
     * @var int
     */
    protected $cardNewId;

    /**
     * The status of the CardReplacement.
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * The user's main address.
     *
     * @var Address|null
     */
    protected $addressMainFieldForRequest;

    /**
     * The user's postal address.
     *
     * @var Address|null
     */
    protected $addressPostalFieldForRequest;

    /**
     * @param string $status The status of the CardReplacement.
     * @param Address|null $addressMain The user's main address.
     * @param Address|null $addressPostal The user's postal address.
     */
    public function __construct(string  $status, Address  $addressMain = null, Address  $addressPostal = null)
    {
        $this->statusFieldForRequest = $status;
        $this->addressMainFieldForRequest = $addressMain;
        $this->addressPostalFieldForRequest = $addressPostal;
    }

    /**
     * The status of the CardReplacement.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The original card that belongs to the CardReplacement.
     *
     * @return int
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $cardId
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;
    }

    /**
     * The new card that replaces the original card in the CardReplacement.
     *
     * @return int
     */
    public function getCardNewId()
    {
        return $this->cardNewId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $cardNewId
     */
    public function setCardNewId($cardNewId)
    {
        $this->cardNewId = $cardNewId;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->cardId)) {
            return false;
        }

        if (!is_null($this->cardNewId)) {
            return false;
        }

        return true;
    }
}
