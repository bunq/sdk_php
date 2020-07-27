<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelUser;

/**
 * Used to manage text notes.
 *
 * @generated
 */
class NoteTextScheduleInstance extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/schedule/%s/schedule-instance/%s/note-text';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/schedule/%s/schedule-instance/%s/note-text/%s';
    const ENDPOINT_URL_DELETE = 'user/%s/monetary-account/%s/schedule/%s/schedule-instance/%s/note-text/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/schedule/%s/schedule-instance/%s/note-text';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/schedule/%s/schedule-instance/%s/note-text/%s';

    /**
     * Field constants.
     */
    const FIELD_CONTENT = 'content';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'NoteText';

    /**
     * The id of the note.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the note's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the note's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The label of the user who created this note.
     *
     * @var LabelUser
     */
    protected $labelUserCreator;

    /**
     * The content of the note.
     *
     * @var string
     */
    protected $content;

    /**
     * The content of the note.
     *
     * @var string|null
     */
    protected $contentFieldForRequest;

    /**
     * @param string|null $content The content of the note.
     */
    public function __construct(string $content = null)
    {
        $this->contentFieldForRequest = $content;
    }

    /**
     * @param int $scheduleId
     * @param int $scheduleInstanceId
     * @param int|null $monetaryAccountId
     * @param string|null $content The content of the note.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        int $scheduleId,
        int $scheduleInstanceId,
        int $monetaryAccountId = null,
        string $content = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $scheduleId,
                    $scheduleInstanceId,
                ]
            ),
            [self::FIELD_CONTENT => $content],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $scheduleId
     * @param int $scheduleInstanceId
     * @param int $noteTextScheduleInstanceId
     * @param int|null $monetaryAccountId
     * @param string|null $content The content of the note.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $scheduleId,
        int $scheduleInstanceId,
        int $noteTextScheduleInstanceId,
        int $monetaryAccountId = null,
        string $content = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $scheduleId,
                    $scheduleInstanceId,
                    $noteTextScheduleInstanceId,
                ]
            ),
            [self::FIELD_CONTENT => $content],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param string[] $customHeaders
     * @param int $scheduleId
     * @param int $scheduleInstanceId
     * @param int $noteTextScheduleInstanceId
     *
     * @return BunqResponseNull
     */
    public static function delete(
        int $scheduleId,
        int $scheduleInstanceId,
        int $noteTextScheduleInstanceId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseNull {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $scheduleId,
                    $scheduleInstanceId,
                    $noteTextScheduleInstanceId,
                ]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * Manage the notes for a given user.
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $scheduleId
     * @param int $scheduleInstanceId
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseNoteTextScheduleInstanceList
     */
    public static function listing(
        int $scheduleId,
        int $scheduleInstanceId,
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseNoteTextScheduleInstanceList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $scheduleId,
                    $scheduleInstanceId,
                ]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseNoteTextScheduleInstanceList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $scheduleId
     * @param int $scheduleInstanceId
     * @param int $noteTextScheduleInstanceId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseNoteTextScheduleInstance
     */
    public static function get(
        int $scheduleId,
        int $scheduleInstanceId,
        int $noteTextScheduleInstanceId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseNoteTextScheduleInstance {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $scheduleId,
                    $scheduleInstanceId,
                    $noteTextScheduleInstanceId,
                ]
            ),
            [],
            $customHeaders
        );

        return BunqResponseNoteTextScheduleInstance::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the note.
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
     * The timestamp of the note's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the note's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The label of the user who created this note.
     *
     * @return LabelUser
     */
    public function getLabelUserCreator()
    {
        return $this->labelUserCreator;
    }

    /**
     * @param LabelUser $labelUserCreator
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setLabelUserCreator($labelUserCreator)
    {
        $this->labelUserCreator = $labelUserCreator;
    }

    /**
     * The content of the note.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setContent($content)
    {
        $this->content = $content;
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

        if (!is_null($this->labelUserCreator)) {
            return false;
        }

        if (!is_null($this->content)) {
            return false;
        }

        return true;
    }
}
