<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\NotificationFilter;
use bunq\Model\Generated\Object\Pointer;

/**
 * Interface UserInterface, describes a minimal user.
 */
interface UserInterface
{
    /**
     * The id of the user.
     *
     * @return int
     */
    public function getId();

    /**
     * The timestamp of the user object's creation.
     *
     * @return string
     */
    public function getCreated();

    /**
     * The timestamp of the user object's last update.
     *
     * @return string
     */
    public function getUpdated();

    /**
     * The user's public UUID.
     *
     * @return string
     */
    public function getPublicUuid();

    /**
     * The display name for the user.
     *
     * @return string
     */
    public function getDisplayName();

    /**
     * The public nick name for the user.
     *
     * @return string
     */
    public function getPublicNickName();

    /**
     * The aliases of the user.
     *
     * @return Pointer[]
     */
    public function getAlias();

    /**
     * The user's main address.
     *
     * @return Address
     */
    public function getAddressMain();

    /**
     * The user's postal address.
     *
     * @return Address
     */
    public function getAddressPostal();

    /**
     * The user's preferred language. Formatted as a ISO 639-1 language code
     * plus a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @return string
     */
    public function getLanguage();

    /**
     * The user's preferred region. Formatted as a ISO 639-1 language code plus
     * a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @return string
     */
    public function getRegion();

    /**
     * The user's avatar.
     *
     * @return Avatar
     */
    public function getAvatar();

    /**
     * The version of the terms of service accepted by the user.
     *
     * @return string
     */
    public function getVersionTermsOfService();

    /**
     * The user status. The user status. Can be: ACTIVE, BLOCKED, SIGNUP, DENIED
     * or ABORTED.
     *
     * @return string
     */
    public function getStatus();

    /**
     * The user sub-status. Can be: NONE, FACE_RESET, APPROVAL, APPROVAL_PARENT,
     * AWAITING_PARENT, APPROVAL_SUPPORT, COUNTER_IBAN, IDEAL or SUBMIT.
     *
     * @return string
     */
    public function getSubStatus();

    /**
     * The setting for the session timeout of the user in seconds.
     *
     * @return int
     */
    public function getSessionTimeout();

    /**
     * The amount the user can pay in the session without asking for
     * credentials.
     *
     * @return Amount
     */
    public function getDailyLimitWithoutConfirmationLogin();

    /**
     * The types of notifications that will result in a push notification or URL
     * callback for this UserLight.
     *
     * @return NotificationFilter[]
     */
    public function getNotificationFilters();
}