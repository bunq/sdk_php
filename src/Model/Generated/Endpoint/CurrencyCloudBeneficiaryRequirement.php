<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Endpoint to list requirements for CurrencyCloud beneficiaries.
 *
 * @generated
 */
class CurrencyCloudBeneficiaryRequirement extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/currency-cloud-beneficiary-requirement';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'CurrencyCloudBeneficiaryRequirement';

    /**
     * The payment type this requirement is for.
     *
     * @var string
     */
    protected $paymentType;

    /**
     * The entity type this requirement is for.
     *
     * @var string
     */
    protected $legalEntityType;

    /**
     * The fields that are required.
     *
     * @var CurrencyCloudBeneficiaryRequirementField[]
     */
    protected $allField;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCurrencyCloudBeneficiaryRequirementList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseCurrencyCloudBeneficiaryRequirementList
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

        return BunqResponseCurrencyCloudBeneficiaryRequirementList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The payment type this requirement is for.
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $paymentType
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * The entity type this requirement is for.
     *
     * @return string
     */
    public function getLegalEntityType()
    {
        return $this->legalEntityType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $legalEntityType
     */
    public function setLegalEntityType($legalEntityType)
    {
        $this->legalEntityType = $legalEntityType;
    }

    /**
     * The fields that are required.
     *
     * @return CurrencyCloudBeneficiaryRequirementField[]
     */
    public function getAllField()
    {
        return $this->allField;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param CurrencyCloudBeneficiaryRequirementField[] $allField
     */
    public function setAllField($allField)
    {
        $this->allField = $allField;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->paymentType)) {
            return false;
        }

        if (!is_null($this->legalEntityType)) {
            return false;
        }

        if (!is_null($this->allField)) {
            return false;
        }

        return true;
    }
}
