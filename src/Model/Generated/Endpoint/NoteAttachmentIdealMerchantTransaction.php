<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\AttachmentMonetaryAccountPayment;
use bunq\Model\Generated\Object\LabelUser;

/**
 * Used to manage attachment notes.
 *
 * @generated
 */
class NoteAttachmentIdealMerchantTransaction extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/ideal-merchant-transaction/%s/note-attachment';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/ideal-merchant-transaction/%s/note-attachment/%s';
    const ENDPOINT_URL_DELETE = 'user/%s/monetary-account/%s/ideal-merchant-transaction/%s/note-attachment/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/ideal-merchant-transaction/%s/note-attachment';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/ideal-merchant-transaction/%s/note-attachment/%s';

    /**
     * Field constants.
     */
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ATTACHMENT_ID = 'attachment_id';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'NoteAttachment';

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
     * Optional description of the attachment.
     *
     * @var string
     */
    protected $description;

    /**
     * The attachment attached to the note.
     *
     * @var AttachmentMonetaryAccountPayment[]
     */
    protected $attachment;

    /**
     * Optional description of the attachment.
     *
     * @var string|null
     */
    protected $descriptionFieldForRequest;

    /**
     * The reference to the uploaded file to attach to this note.
     *
     * @var int
     */
    protected $attachmentIdFieldForRequest;

    /**
     * @param int $attachmentId The reference to the uploaded file to attach to
     * this note.
     * @param string|null $description Optional description of the attachment.
     */
    public function __construct(int $attachmentId, string $description = null)
    {
        $this->descriptionFieldForRequest = $description;
        $this->attachmentIdFieldForRequest = $attachmentId;
    }

    /**
     * @param int $idealMerchantTransactionId
     * @param int $attachmentId The reference to the uploaded file to attach to
     * this note.
     * @param int|null $monetaryAccountId
     * @param string|null $description Optional description of the attachment.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        int $idealMerchantTransactionId,
        int $attachmentId,
        int $monetaryAccountId = null,
        string $description = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $idealMerchantTransactionId,
                ]
            ),
            [
                self::FIELD_DESCRIPTION => $description,
                self::FIELD_ATTACHMENT_ID => $attachmentId,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $idealMerchantTransactionId
     * @param int $noteAttachmentIdealMerchantTransactionId
     * @param int|null $monetaryAccountId
     * @param string|null $description Optional description of the attachment.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $idealMerchantTransactionId,
        int $noteAttachmentIdealMerchantTransactionId,
        int $monetaryAccountId = null,
        string $description = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $idealMerchantTransactionId,
                    $noteAttachmentIdealMerchantTransactionId,
                ]
            ),
            [self::FIELD_DESCRIPTION => $description],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param string[] $customHeaders
     * @param int $idealMerchantTransactionId
     * @param int $noteAttachmentIdealMerchantTransactionId
     *
     * @return BunqResponseNull
     */
    public static function delete(
        int $idealMerchantTransactionId,
        int $noteAttachmentIdealMerchantTransactionId,
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
                    $idealMerchantTransactionId,
                    $noteAttachmentIdealMerchantTransactionId,
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
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $idealMerchantTransactionId
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseNoteAttachmentIdealMerchantTransactionList
     */
    public static function listing(
        int $idealMerchantTransactionId,
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseNoteAttachmentIdealMerchantTransactionList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $idealMerchantTransactionId,
                ]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseNoteAttachmentIdealMerchantTransactionList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $idealMerchantTransactionId
     * @param int $noteAttachmentIdealMerchantTransactionId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseNoteAttachmentIdealMerchantTransaction
     */
    public static function get(
        int $idealMerchantTransactionId,
        int $noteAttachmentIdealMerchantTransactionId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseNoteAttachmentIdealMerchantTransaction {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $idealMerchantTransactionId,
                    $noteAttachmentIdealMerchantTransactionId,
                ]
            ),
            [],
            $customHeaders
        );

        return BunqResponseNoteAttachmentIdealMerchantTransaction::castFromBunqResponse(
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
     *
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
     *
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
     *
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
     *
     */
    public function setLabelUserCreator($labelUserCreator)
    {
        $this->labelUserCreator = $labelUserCreator;
    }

    /**
     * Optional description of the attachment.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The attachment attached to the note.
     *
     * @return AttachmentMonetaryAccountPayment[]
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param AttachmentMonetaryAccountPayment[] $attachment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
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

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->attachment)) {
            return false;
        }

        return true;
    }
}
