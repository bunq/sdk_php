<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Attachment;

/**
 * This call is used to view an attachment that is linked to a tab.
 *
 * @generated
 */
class TabAttachmentTab extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'tab/%s/attachment/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'TabAttachmentTab';

    /**
     * The id of the attachment.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the attachment's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the attachment's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The attachment.
     *
     * @var Attachment
     */
    protected $attachment;

    /**
     * Get a specific attachment. The header of the response contains the
     * content-type of the attachment.
     *
     * @param ApiContext $apiContext
     * @param string $tabUuid
     * @param int $tabAttachmentTabId
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabAttachmentTab
     */
    public static function get(ApiContext $apiContext, $tabUuid, $tabAttachmentTabId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$tabUuid, $tabAttachmentTabId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseTabAttachmentTab::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * The id of the attachment.
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
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the attachment's creation.
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
    public function setCreated(string $created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the attachment's last update.
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
    public function setUpdated(string $updated)
    {
        $this->updated = $updated;
    }

    /**
     * The attachment.
     *
     * @return Attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param Attachment $attachment
     */
    public function setAttachment(Attachment $attachment)
    {
        $this->attachment = $attachment;
    }
}
