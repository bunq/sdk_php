<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class CardBatchReplaceEntry extends BunqModel
{
    /**
     * The ID of the card that needs to be replaced.
     *
     * @var int
     */
    protected $idFieldForRequest;

    /**
     * The user's name as it will be on the card. Check 'card-name' for the
     * available card names for a user.
     *
     * @var string|null
     */
    protected $nameOnCardFieldForRequest;

    /**
     * Array of Types, PINs, account IDs assigned to the card.
     *
     * @var CardPinAssignment[]|null
     */
    protected $pinCodeAssignmentFieldForRequest;

    /**
     * The second line on the card.
     *
     * @var string|null
     */
    protected $secondLineFieldForRequest;

    /**
     * @param int $id The ID of the card that needs to be replaced.
     * @param string|null $nameOnCard The user's name as it will be on the card.
     * Check 'card-name' for the available card names for a user.
     * @param CardPinAssignment[]|null $pinCodeAssignment Array of Types, PINs,
     * account IDs assigned to the card.
     * @param string|null $secondLine The second line on the card.
     */
    public function __construct(int  $id, string  $nameOnCard = null, array  $pinCodeAssignment = null, string  $secondLine = null)
    {
        $this->idFieldForRequest = $id;
        $this->nameOnCardFieldForRequest = $nameOnCard;
        $this->pinCodeAssignmentFieldForRequest = $pinCodeAssignment;
        $this->secondLineFieldForRequest = $secondLine;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        return true;
    }
}
