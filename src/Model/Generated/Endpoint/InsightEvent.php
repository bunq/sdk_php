<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\EventObject;

/**
 * Used to get events based on time and insight category.
 *
 * @generated
 */
class InsightEvent extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/insights-search';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'Event';

    /**
     * The id of the event.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the event's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the event's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The performed action. Can be: CREATE or UPDATE.
     *
     * @var string
     */
    protected $action;

    /**
     * The id of the user the event applied to (if it was a user event).
     *
     * @var string
     */
    protected $userId;

    /**
     * The id of the monetary account the event applied to (if it was a monetary
     * account event).
     *
     * @var string
     */
    protected $monetaryAccountId;

    /**
     * The details of the external object the event was created for.
     *
     * @var EventObject
     */
    protected $object;

    /**
     * The event status. Can be: FINALIZED or AWAITING_REPLY. An example of
     * FINALIZED event is a payment received event, while an AWAITING_REPLY
     * event is a request received event.
     *
     * @var string
     */
    protected $status;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseInsightEventList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseInsightEventList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseInsightEventList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the event.
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
     * The timestamp of the event's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the event's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The performed action. Can be: CREATE or UPDATE.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * The id of the user the event applied to (if it was a user event).
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * The id of the monetary account the event applied to (if it was a monetary
     * account event).
     *
     * @return string
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $monetaryAccountId
     */
    public function setMonetaryAccountId($monetaryAccountId)
    {
        $this->monetaryAccountId = $monetaryAccountId;
    }

    /**
     * The details of the external object the event was created for.
     *
     * @return EventObject
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param EventObject $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * The event status. Can be: FINALIZED or AWAITING_REPLY. An example of
     * FINALIZED event is a payment received event, while an AWAITING_REPLY
     * event is a request received event.
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->created)) {
            return false;
        }

        if (!is_null($this->updated)) {
            return false;
        }

        if (!is_null($this->action)) {
            return false;
        }

        if (!is_null($this->userId)) {
            return false;
        }

        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        if (!is_null($this->object)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        return true;
    }
}
