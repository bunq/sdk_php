<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\AttachmentPublic;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\Pointer;

/**
 * bunq.me public profile of the user.
 *
 * @generated
 */
class BunqMeFundraiserProfileUser extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/bunqme-fundraiser-profile/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/bunqme-fundraiser-profile';

    /**
     * Field constants.
     */
    const FIELD_MONETARY_ACCOUNT_ID = 'monetary_account_id';
    const FIELD_COLOR = 'color';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ATTACHMENT_PUBLIC_UUID = 'attachment_public_uuid';
    const FIELD_POINTER = 'pointer';
    const FIELD_REDIRECT_URL = 'redirect_url';
    const FIELD_STATUS = 'status';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'BunqMeFundraiserProfile';

    /**
     * Id of the monetary account on which you want to receive bunq.me payments.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * Id of the user owning the profile.
     *
     * @var int
     */
    protected $ownerUserId;

    /**
     * The color chosen for the bunq.me fundraiser profile in hexadecimal
     * format.
     *
     * @var string
     */
    protected $color;

    /**
     * The LabelMonetaryAccount with the public information of the User and the
     * MonetaryAccount that created the bunq.me fundraiser profile.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The currency of the MonetaryAccount that created the bunq.me fundraiser
     * profile.
     *
     * @var string
     */
    protected $currency;

    /**
     * The description of the bunq.me fundraiser profile.
     *
     * @var string
     */
    protected $description;

    /**
     * The attachment used for the background of the bunq.me fundraiser profile.
     *
     * @var AttachmentPublic
     */
    protected $attachment;

    /**
     * The pointer (url) which will be used to access the bunq.me fundraiser
     * profile.
     *
     * @var Pointer
     */
    protected $pointer;

    /**
     * The URL which the user is sent to when a payment is completed.
     *
     * @var string
     */
    protected $redirectUrl;

    /**
     * The status of the bunq.me fundraiser profile, can be ACTIVE or
     * DEACTIVATED.
     *
     * @var string
     */
    protected $status;

    /**
     * ID of the monetary account on which you want to receive bunq.me
     * fundraiser payments.
     *
     * @var int
     */
    protected $monetaryAccountIdFieldForRequest;

    /**
     * The color chosen for the bunq.me fundraiser profile in hexadecimal
     * format.
     *
     * @var string|null
     */
    protected $colorFieldForRequest;

    /**
     * The description of the bunq.me fundraiser profile. Maximum 9000
     * characters. Field is required but can be an empty string.
     *
     * @var string
     */
    protected $descriptionFieldForRequest;

    /**
     * The public UUID of the public attachment from which an avatar image must
     * be created.
     *
     * @var string|null
     */
    protected $attachmentPublicUuidFieldForRequest;

    /**
     * The pointer (url) which will be used to access the bunq.me fundraiser
     * profile.
     *
     * @var Pointer
     */
    protected $pointerFieldForRequest;

    /**
     * The URL which the user is sent to when a payment is completed.
     *
     * @var string|null
     */
    protected $redirectUrlFieldForRequest;

    /**
     * The status of the bunq.me fundraiser profile.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param int $monetaryAccountId ID of the monetary account on which you
     * want to receive bunq.me fundraiser payments.
     * @param string $description The description of the bunq.me fundraiser
     * profile. Maximum 9000 characters. Field is required but can be an empty
     * string.
     * @param Pointer $pointer The pointer (url) which will be used to access
     * the bunq.me fundraiser profile.
     * @param string|null $color The color chosen for the bunq.me fundraiser
     * profile in hexadecimal format.
     * @param string|null $attachmentPublicUuid The public UUID of the public
     * attachment from which an avatar image must be created.
     * @param string|null $redirectUrl The URL which the user is sent to when a
     * payment is completed.
     * @param string|null $status The status of the bunq.me fundraiser profile.
     */
    public function __construct(int  $monetaryAccountId, string  $description, Pointer  $pointer, string  $color = null, string  $attachmentPublicUuid = null, string  $redirectUrl = null, string  $status = null)
    {
        $this->monetaryAccountIdFieldForRequest = $monetaryAccountId;
        $this->colorFieldForRequest = $color;
        $this->descriptionFieldForRequest = $description;
        $this->attachmentPublicUuidFieldForRequest = $attachmentPublicUuid;
        $this->pointerFieldForRequest = $pointer;
        $this->redirectUrlFieldForRequest = $redirectUrl;
        $this->statusFieldForRequest = $status;
    }

    /**
     * @param int $bunqMeFundraiserProfileUserId
     * @param string[] $customHeaders
     *
     * @return BunqResponseBunqMeFundraiserProfileUser
     */
    public static function get(int $bunqMeFundraiserProfileUserId, array $customHeaders = []): BunqResponseBunqMeFundraiserProfileUser
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $bunqMeFundraiserProfileUserId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseBunqMeFundraiserProfileUser::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseBunqMeFundraiserProfileUserList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseBunqMeFundraiserProfileUserList
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

        return BunqResponseBunqMeFundraiserProfileUserList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Id of the monetary account on which you want to receive bunq.me payments.
     *
     * @return int
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $monetaryAccountId
     */
    public function setMonetaryAccountId($monetaryAccountId)
    {
        $this->monetaryAccountId = $monetaryAccountId;
    }

    /**
     * Id of the user owning the profile.
     *
     * @return int
     */
    public function getOwnerUserId()
    {
        return $this->ownerUserId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $ownerUserId
     */
    public function setOwnerUserId($ownerUserId)
    {
        $this->ownerUserId = $ownerUserId;
    }

    /**
     * The color chosen for the bunq.me fundraiser profile in hexadecimal
     * format.
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * The LabelMonetaryAccount with the public information of the User and the
     * MonetaryAccount that created the bunq.me fundraiser profile.
     *
     * @return LabelMonetaryAccount
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The currency of the MonetaryAccount that created the bunq.me fundraiser
     * profile.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * The description of the bunq.me fundraiser profile.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The attachment used for the background of the bunq.me fundraiser profile.
     *
     * @return AttachmentPublic
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param AttachmentPublic $attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * The pointer (url) which will be used to access the bunq.me fundraiser
     * profile.
     *
     * @return Pointer
     */
    public function getPointer()
    {
        return $this->pointer;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Pointer $pointer
     */
    public function setPointer($pointer)
    {
        $this->pointer = $pointer;
    }

    /**
     * The URL which the user is sent to when a payment is completed.
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * The status of the bunq.me fundraiser profile, can be ACTIVE or
     * DEACTIVATED.
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
        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        if (!is_null($this->ownerUserId)) {
            return false;
        }

        if (!is_null($this->color)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->currency)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->attachment)) {
            return false;
        }

        if (!is_null($this->pointer)) {
            return false;
        }

        if (!is_null($this->redirectUrl)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        return true;
    }
}
