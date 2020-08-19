<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Get a PDF export of an invoice.
 *
 * @generated
 */
class InvoiceExportPdfContent extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/invoice/%s/pdf-content';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'InvoiceExportPdfContent';

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $invoiceId
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function listing(int $invoiceId, array $customHeaders = []): BunqResponseString
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), $invoiceId]
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
