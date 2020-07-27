<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class BunqId extends BunqModel
{
    /**
     * An integer ID of an object. Unique per object type.
     *
     * @var int
     */
    protected $id;

    /**
     * An integer ID of an object. Unique per object type.
     *
     * @var int
     */
    protected $idFieldForRequest;

    /**
     * @param int $id An integer ID of an object. Unique per object type.
     */
    public function __construct(int $id)
    {
        $this->idFieldForRequest = $id;
    }

    /**
     * An integer ID of an object. Unique per object type.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        return true;
    }
}
