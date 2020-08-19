<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelUser;

/**
 * See how many trees this user has planted.
 *
 * @generated
 */
class TreeProgress extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/tree-progress';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'TreeProgress';

    /**
     * The number of trees this user and all users have planted.
     *
     * @var float
     */
    protected $numberOfTree;

    /**
     * The progress towards the next tree.
     *
     * @var float
     */
    protected $progressTreeNext;

    /**
     * The label of the user the progress belongs to.
     *
     * @var LabelUser
     */
    protected $labelUser;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseTreeProgressList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseTreeProgressList
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

        return BunqResponseTreeProgressList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The number of trees this user and all users have planted.
     *
     * @return float
     */
    public function getNumberOfTree()
    {
        return $this->numberOfTree;
    }

    /**
     * @param float $numberOfTree
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setNumberOfTree($numberOfTree)
    {
        $this->numberOfTree = $numberOfTree;
    }

    /**
     * The progress towards the next tree.
     *
     * @return float
     */
    public function getProgressTreeNext()
    {
        return $this->progressTreeNext;
    }

    /**
     * @param float $progressTreeNext
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setProgressTreeNext($progressTreeNext)
    {
        $this->progressTreeNext = $progressTreeNext;
    }

    /**
     * The label of the user the progress belongs to.
     *
     * @return LabelUser
     */
    public function getLabelUser()
    {
        return $this->labelUser;
    }

    /**
     * @param LabelUser $labelUser
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setLabelUser($labelUser)
    {
        $this->labelUser = $labelUser;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->numberOfTree)) {
            return false;
        }

        if (!is_null($this->progressTreeNext)) {
            return false;
        }

        if (!is_null($this->labelUser)) {
            return false;
        }

        return true;
    }
}
