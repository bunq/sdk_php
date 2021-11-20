<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * When you have connected your monetary account to a user, and given this
 * user a (for example) daily budget of 10 EUR. If this users has used his
 * entire budget or part of it, this call can be used to reset the amount he
 * used to 0. The user can then spend the daily budget of 10 EUR again.
 *
 * @generated
 */
class ShareInviteMonetaryAccountAmountUsed extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_DELETE = 'user/%s/monetary-account/%s/share-invite-monetary-account-inquiry/%s/amount-used/%s';

    /**
     * Reset the available budget for an account share. To be called without any
     * ID at the end of the path.
     *
     * @param string[] $customHeaders
     * @param int $shareInviteMonetaryAccountInquiryId
     * @param int $shareInviteMonetaryAccountAmountUsedId
     *
     * @return BunqResponseNull
     */
    public static function delete(int $shareInviteMonetaryAccountInquiryId, int $shareInviteMonetaryAccountAmountUsedId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $shareInviteMonetaryAccountInquiryId, $shareInviteMonetaryAccountAmountUsedId]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
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
