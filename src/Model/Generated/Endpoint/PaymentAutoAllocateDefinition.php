<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Pointer;

/**
 * List all the definitions in a payment auto allocate.
 *
 * @generated
 */
class PaymentAutoAllocateDefinition extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/payment-auto-allocate/%s/definition';

    /**
     * Field constants.
     */
    const FIELD_TYPE = 'type';
    const FIELD_COUNTERPARTY_ALIAS = 'counterparty_alias';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_AMOUNT = 'amount';
    const FIELD_FRACTION = 'fraction';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'PaymentAutoAllocateDefinition';

    /**
     * The id of the PaymentAutoAllocateDefinition.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp when the PaymentAutoAllocateDefinition was created.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp when the PaymentAutoAllocateDefinition was last updated.
     *
     * @var string
     */
    protected $updated;

    /**
     * The alias of the party we are allocating the money to.
     *
     * @var Pointer
     */
    protected $counterpartyAlias;

    /**
     * The description for the payment.
     *
     * @var string
     */
    protected $description;

    /**
     * The amount to allocate.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The percentage of the triggering payment's amount to allocate.
     *
     * @var float
     */
    protected $fraction;

    /**
     * The type of definition.
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * The alias of the party we are allocating the money to.
     *
     * @var Pointer
     */
    protected $counterpartyAliasFieldForRequest;

    /**
     * The description for the payment.
     *
     * @var string
     */
    protected $descriptionFieldForRequest;

    /**
     * The amount to allocate.
     *
     * @var Amount|null
     */
    protected $amountFieldForRequest;

    /**
     * The percentage of the triggering payment's amount to allocate.
     *
     * @var float|null
     */
    protected $fractionFieldForRequest;

    /**
     * @param string $type The type of definition.
     * @param Pointer $counterpartyAlias The alias of the party we are
     * allocating the money to.
     * @param string $description The description for the payment.
     * @param Amount|null $amount The amount to allocate.
     * @param float|null $fraction The percentage of the triggering payment's
     * amount to allocate.
     */
    public function __construct(
        string $type,
        Pointer $counterpartyAlias,
        string $description,
        Amount $amount = null,
        float $fraction = null
    ) {
        $this->typeFieldForRequest = $type;
        $this->counterpartyAliasFieldForRequest = $counterpartyAlias;
        $this->descriptionFieldForRequest = $description;
        $this->amountFieldForRequest = $amount;
        $this->fractionFieldForRequest = $fraction;
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $paymentAutoAllocateId
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentAutoAllocateDefinitionList
     */
    public static function listing(
        int $paymentAutoAllocateId,
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponsePaymentAutoAllocateDefinitionList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $paymentAutoAllocateId,
                ]
            ),
            $params,
            $customHeaders
        );

        return BunqResponsePaymentAutoAllocateDefinitionList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the PaymentAutoAllocateDefinition.
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
     * The timestamp when the PaymentAutoAllocateDefinition was created.
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
     * The timestamp when the PaymentAutoAllocateDefinition was last updated.
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
     * The alias of the party we are allocating the money to.
     *
     * @return Pointer
     */
    public function getCounterpartyAlias()
    {
        return $this->counterpartyAlias;
    }

    /**
     * @param Pointer $counterpartyAlias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCounterpartyAlias($counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * The description for the payment.
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
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The amount to allocate.
     *
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * The percentage of the triggering payment's amount to allocate.
     *
     * @return float
     */
    public function getFraction()
    {
        return $this->fraction;
    }

    /**
     * @param float $fraction
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setFraction($fraction)
    {
        $this->fraction = $fraction;
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

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->fraction)) {
            return false;
        }

        return true;
    }
}
