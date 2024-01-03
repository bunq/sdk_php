<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class RegistryEntryReference extends BunqModel
{
    /**
     * The object type that will be linked to the RegistryEntry.
     *
     * @var string|null
     */
    protected $typeFieldForRequest;

    /**
     * The ID of the object that will be used for the RegistryEntry.
     *
     * @var int|null
     */
    protected $idFieldForRequest;

    /**
     * @param string|null $type The object type that will be linked to the
     * RegistryEntry.
     * @param int|null $id The ID of the object that will be used for the
     * RegistryEntry.
     */
    public function __construct(string  $type = null, int  $id = null)
    {
        $this->typeFieldForRequest = $type;
        $this->idFieldForRequest = $id;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        return true;
    }
}
