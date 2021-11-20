<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Fetch the raw content of an annual overview. The annual overview is
 * always in PDF format. Doc won't display the response of a request to get
 * the content of an annual overview.
 *
 * @generated
 */
class ExportAnnualOverviewContent extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/export-annual-overview/%s/content';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'ExportAnnualOverviewContent';

    /**
     * Used to retrieve the raw content of an annual overview.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $exportAnnualOverviewId
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function listing(int $exportAnnualOverviewId, array $customHeaders = []): BunqResponseString
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), $exportAnnualOverviewId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseString::castFromBunqResponse(
            new BunqResponse($responseRaw->getBodyString(), $responseRaw->getHeaders())
        );
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        return true;
    }
}
