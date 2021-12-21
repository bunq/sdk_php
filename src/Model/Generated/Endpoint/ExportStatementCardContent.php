<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Fetch the raw content of a card statement export. The returned file
 * format could be CSV or PDF depending on the statement format specified
 * during the statement creation. The doc won't display the response of a
 * request to get the content of a statement export.
 *
 * @generated
 */
class ExportStatementCardContent extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/card/%s/export-statement-card/%s/content';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'ExportStatementCardContent';

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $cardId
     * @param int $exportStatementCardId
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function listing(int $cardId, int $exportStatementCardId, array $customHeaders = []): BunqResponseString
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), $cardId, $exportStatementCardId]
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
