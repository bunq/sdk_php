<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;

/**
 * Used to manage Transferwise users.
 *
 * @generated
 */
class TransferwiseUser extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/transferwise-user';
    const ENDPOINT_URL_LISTING = 'user/%s/transferwise-user';

    /**
     * Field constants.
     */
    const FIELD_OAUTH_CODE = 'oauth_code';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'TransferwiseUser';

    /**
     * The id of the TransferwiseUser.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the TransferwiseUser's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the TransferwiseUser's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The name the user is registered with at TransferWise.
     *
     * @var string
     */
    protected $name;

    /**
     * The email the user is registered with at TransferWise.
     *
     * @var string
     */
    protected $email;

    /**
     * The OAuth code returned by Transferwise we should be using to gain access
     * to the user's Transferwise account.
     *
     * @var string|null
     */
    protected $oauthCodeFieldForRequest;

    /**
     * @param string|null $oauthCode The OAuth code returned by Transferwise we
     * should be using to gain access to the user's Transferwise account.
     */
    public function __construct(string $oauthCode = null)
    {
        $this->oauthCodeFieldForRequest = $oauthCode;
    }

    /**
     * @param string|null $oauthCode The OAuth code returned by Transferwise we
     * should be using to gain access to the user's Transferwise account.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(string $oauthCode = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_OAUTH_CODE => $oauthCode],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseTransferwiseUserList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseTransferwiseUserList
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

        return BunqResponseTransferwiseUserList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the TransferwiseUser.
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
     * The timestamp of the TransferwiseUser's creation.
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
     * The timestamp of the TransferwiseUser's last update.
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
     * The name the user is registered with at TransferWise.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * The email the user is registered with at TransferWise.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setEmail($email)
    {
        $this->email = $email;
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

        if (!is_null($this->name)) {
            return false;
        }

        if (!is_null($this->email)) {
            return false;
        }

        return true;
    }
}
