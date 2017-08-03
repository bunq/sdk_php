<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\BunqModel;
use Psr\Http\Message\StreamInterface;

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
    const OBJECT_TYPE = 'ExportAnnualOverviewContent';

    /**
     * Used to retrieve the raw content of an annual overview.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $exportAnnualOverviewId
     * @param string[] $customHeaders
     *
     * @return string|StreamInterface
     */
    public static function listing(ApiContext $apiContext, $userId, $exportAnnualOverviewId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);

        return $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $exportAnnualOverviewId]
            ),
            $customHeaders
        );
    }
}
