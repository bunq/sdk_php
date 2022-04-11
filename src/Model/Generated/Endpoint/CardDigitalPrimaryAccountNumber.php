<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * View for getting the dPAN of the card.
 *
 * @generated
 */
class CardDigitalPrimaryAccountNumber extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/card/%s/digital-primary-account-number';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'CardDigitalPrimaryAccountNumber';

    /**
     * The digital PAN of the card.
     *
     * @var string
     */
    protected $digitalPrimaryAccountNumber;

    /**
     * The expiry date.
     *
     * @var string
     */
    protected $expiryDate;

    /**
     * The sequence number.
     *
     * @var string
     */
    protected $sequenceNumber;

    /**
     * Unique reference given by MDES.
     *
     * @var string
     */
    protected $tokenUniqueReference;

    /**
     * Status code of the token given by MDES.
     *
     * @var string
     */
    protected $tokenStatusCode;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $cardId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardDigitalPrimaryAccountNumberList
     */
    public static function listing(int $cardId, array $params = [], array $customHeaders = []): BunqResponseCardDigitalPrimaryAccountNumberList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), $cardId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseCardDigitalPrimaryAccountNumberList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The digital PAN of the card.
     *
     * @return string
     */
    public function getDigitalPrimaryAccountNumber()
    {
        return $this->digitalPrimaryAccountNumber;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $digitalPrimaryAccountNumber
     */
    public function setDigitalPrimaryAccountNumber($digitalPrimaryAccountNumber)
    {
        $this->digitalPrimaryAccountNumber = $digitalPrimaryAccountNumber;
    }

    /**
     * The expiry date.
     *
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $expiryDate
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
    }

    /**
     * The sequence number.
     *
     * @return string
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $sequenceNumber
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    /**
     * Unique reference given by MDES.
     *
     * @return string
     */
    public function getTokenUniqueReference()
    {
        return $this->tokenUniqueReference;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $tokenUniqueReference
     */
    public function setTokenUniqueReference($tokenUniqueReference)
    {
        $this->tokenUniqueReference = $tokenUniqueReference;
    }

    /**
     * Status code of the token given by MDES.
     *
     * @return string
     */
    public function getTokenStatusCode()
    {
        return $this->tokenStatusCode;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $tokenStatusCode
     */
    public function setTokenStatusCode($tokenStatusCode)
    {
        $this->tokenStatusCode = $tokenStatusCode;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->digitalPrimaryAccountNumber)) {
            return false;
        }

        if (!is_null($this->expiryDate)) {
            return false;
        }

        if (!is_null($this->sequenceNumber)) {
            return false;
        }

        if (!is_null($this->tokenUniqueReference)) {
            return false;
        }

        if (!is_null($this->tokenStatusCode)) {
            return false;
        }

        return true;
    }
}
