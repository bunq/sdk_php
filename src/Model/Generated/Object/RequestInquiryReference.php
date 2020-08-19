<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class RequestInquiryReference extends BunqModel
{
    /**
     * The type of request inquiry. Can be RequestInquiry or
     * RequestInquiryBatch.
     *
     * @var string
     */
    protected $type;

    /**
     * The id of the request inquiry (batch).
     *
     * @var int
     */
    protected $id;

    /**
     * The type of request inquiry. Can be RequestInquiry or
     * RequestInquiryBatch.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The id of the request inquiry (batch).
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
        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->id)) {
            return false;
        }

        return true;
    }
}
