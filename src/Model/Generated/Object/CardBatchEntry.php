<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class CardBatchEntry extends BunqModel
{
    /**
     * The ID of the card that needs to be updated.
     *
     * @var int
     */
    protected $idFieldForRequest;

    /**
     * The activation code required to set status to ACTIVE initially. Can only
     * set status to ACTIVE using activation code when order_status is
     * ACCEPTED_FOR_PRODUCTION and status is DEACTIVATED.
     *
     * @var string|null
     */
    protected $activationCodeFieldForRequest;

    /**
     * The status to set for the card. Can be ACTIVE, DEACTIVATED, LOST, STOLEN
     * or CANCELLED, and can only be set to LOST/STOLEN/CANCELLED when order
     * status is
     * ACCEPTED_FOR_PRODUCTION/DELIVERED_TO_CUSTOMER/CARD_UPDATE_REQUESTED/CARD_UPDATE_SENT/CARD_UPDATE_ACCEPTED.
     * Can only be set to DEACTIVATED after initial activation, i.e.
     * order_status is
     * DELIVERED_TO_CUSTOMER/CARD_UPDATE_REQUESTED/CARD_UPDATE_SENT/CARD_UPDATE_ACCEPTED.
     * Mind that all the possible choices (apart from ACTIVE and DEACTIVATED)
     * are permanent and cannot be changed after.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The limits to define for the card, among CARD_LIMIT_ATM and
     * CARD_LIMIT_POS_ICC. All the limits must be provided on update.
     *
     * @var CardLimit[]|null
     */
    protected $limitFieldForRequest;

    /**
     * Whether or not it is allowed to use the mag stripe for the card.
     *
     * @var CardMagStripePermission|null
     */
    protected $magStripePermissionFieldForRequest;

    /**
     * The countries for which to grant (temporary) permissions to use the card.
     *
     * @var CardCountryPermission[]|null
     */
    protected $countryPermissionFieldForRequest;

    /**
     * ID of the MA to be used as fallback for this card if insufficient
     * balance. Fallback account is removed if not supplied.
     *
     * @var int|null
     */
    protected $monetaryAccountIdFallbackFieldForRequest;

    /**
     * @param int $id                                           The ID of the card that needs to be updated.
     * @param string|null $activationCode                       The activation code required to set
     *                                                          status to ACTIVE initially. Can only set status to
     *                                                          ACTIVE using activation code when order_status is
     *                                                          ACCEPTED_FOR_PRODUCTION and status is DEACTIVATED.
     * @param string|null $status                               The status to set for the card. Can be ACTIVE,
     *                                                          DEACTIVATED, LOST, STOLEN or CANCELLED, and can only be
     *                                                          set to LOST/STOLEN/CANCELLED when order status is
     *                                                          ACCEPTED_FOR_PRODUCTION/DELIVERED_TO_CUSTOMER/CARD_UPDATE_REQUESTED/CARD_UPDATE_SENT/CARD_UPDATE_ACCEPTED.
     *                                                          Can only be set to DEACTIVATED after initial
     *                                                          activation, i.e. order_status is
     *                                                          DELIVERED_TO_CUSTOMER/CARD_UPDATE_REQUESTED/CARD_UPDATE_SENT/CARD_UPDATE_ACCEPTED.
     *                                                          Mind that all the possible choices (apart from ACTIVE
     *                                                          and DEACTIVATED) are permanent and cannot be changed
     *                                                          after.
     * @param CardLimit[]|null $limit                           The limits to define for the card, among
     *                                                          CARD_LIMIT_ATM and CARD_LIMIT_POS_ICC. All the limits
     *                                                          must be provided on update.
     * @param CardMagStripePermission|null $magStripePermission Whether or not
     *                                                          it is allowed to use the mag stripe for the card.
     * @param CardCountryPermission[]|null $countryPermission   The countries for
     *                                                          which to grant (temporary) permissions to use the card.
     * @param int|null $monetaryAccountIdFallback               ID of the MA to be used as
     *                                                          fallback for this card if insufficient balance.
     *                                                          Fallback account is removed if not supplied.
     */
    public function __construct(
        int $id,
        string $activationCode = null,
        string $status = null,
        array $limit = null,
        CardMagStripePermission $magStripePermission = null,
        array $countryPermission = null,
        int $monetaryAccountIdFallback = null
    ) {
        $this->idFieldForRequest = $id;
        $this->activationCodeFieldForRequest = $activationCode;
        $this->statusFieldForRequest = $status;
        $this->limitFieldForRequest = $limit;
        $this->magStripePermissionFieldForRequest = $magStripePermission;
        $this->countryPermissionFieldForRequest = $countryPermission;
        $this->monetaryAccountIdFallbackFieldForRequest = $monetaryAccountIdFallback;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        return true;
    }
}
