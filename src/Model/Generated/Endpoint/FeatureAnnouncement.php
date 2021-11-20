<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Avatar;

/**
 * view for updating the feature display.
 *
 * @generated
 */
class FeatureAnnouncement extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/feature-announcement/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'FeatureAnnouncement';

    /**
     * The Avatar of the event overview.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * The event overview title of the feature display
     *
     * @var string
     */
    protected $title;

    /**
     * The event overview subtitle of the feature display
     *
     * @var string
     */
    protected $subTitle;

    /**
     * The type of the feature announcement so apps can override with their own
     * stuff if desired
     *
     * @var string
     */
    protected $type;

    /**
     * @param int $featureAnnouncementId
     * @param string[] $customHeaders
     *
     * @return BunqResponseFeatureAnnouncement
     */
    public static function get(int $featureAnnouncementId, array $customHeaders = []): BunqResponseFeatureAnnouncement
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $featureAnnouncementId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseFeatureAnnouncement::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The Avatar of the event overview.
     *
     * @return Avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Avatar $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * The event overview title of the feature display
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * The event overview subtitle of the feature display
     *
     * @return string
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $subTitle
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
    }

    /**
     * The type of the feature announcement so apps can override with their own
     * stuff if desired
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->avatar)) {
            return false;
        }

        if (!is_null($this->title)) {
            return false;
        }

        if (!is_null($this->subTitle)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        return true;
    }
}
