<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

/**
 * Used to register a device. This is the only unsigned/verified request.
 *
 * @generated
 */
class DevicePhone extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_DESCRIPTION = 'description';
    const FIELD_PHONE_NUMBER = 'phone_number';
    const FIELD_REMOVE_OLD_DEVICES = 'remove_old_devices';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'DevicePhone';

    /**
     * The id of the DevicePhone as created on the server.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the DevicePhone's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the DevicePhone's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The description of the DevicePhone.
     *
     * @var string
     */
    protected $description;

    /**
     * The phone number used to register the DevicePhone.
     *
     * @var string
     */
    protected $phoneNumber;

    /**
     * The operating system running on this phone.
     *
     * @var string
     */
    protected $os;

    /**
     * The status of the DevicePhone.
     *
     * @var string
     */
    protected $status;

    /**
     * The id of the DevicePhone as created on the server.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the DevicePhone's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the DevicePhone's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The description of the DevicePhone.
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

    /**
     * The phone number used to register the DevicePhone.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * The operating system running on this phone.
     *
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * @param string $os
     */
    public function setOs($os)
    {
        $this->os = $os;
    }

    /**
     * The status of the DevicePhone.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
