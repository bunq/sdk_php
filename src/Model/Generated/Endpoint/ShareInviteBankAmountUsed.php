<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * [DEPRECATED - use /share-invite-monetary-account-inquiry/ID/amount-used]
 * When you have connected your monetary account bank to a user, and given
 * this user a (for example) daily budget of 10 EUR. If this users has used
 * his entire budget or part of it, this call can be used to reset the
 * amount he used to 0. The user can then spend the daily budget of 10 EUR
 * again.
 *
 * @generated
 */
class ShareInviteBankAmountUsed extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_DELETE = 'user/%s/monetary-account/%s/share-invite-bank-inquiry/%s/amount-used/%s';

    /**
     * [DEPRECATED - use /share-invite-monetary-account-inquiry/ID/amount-used]
     * Reset the available budget for a bank account share. To be called without
     * any ID at the end of the path.
     *
     * @param string[] $customHeaders
     * @param int $shareInviteBankInquiryId
     * @param int $shareInviteBankAmountUsedId
     *
     * @return BunqResponseNull
     */
    public static function delete(
        int $shareInviteBankInquiryId,
        int $shareInviteBankAmountUsedId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseNull {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $shareInviteBankInquiryId,
                    $shareInviteBankAmountUsedId,
                ]
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
