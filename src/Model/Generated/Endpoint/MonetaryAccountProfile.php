<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\MonetaryAccountProfileDrain;
use bunq\Model\Generated\Object\MonetaryAccountProfileFill;

/**
 * Used to update and read up monetary account profiles, to keep the balance
 * between specific thresholds.
 *
 * @generated
 */
class MonetaryAccountProfile extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_PROFILE_FILL = 'profile_fill';
    const FIELD_PROFILE_DRAIN = 'profile_drain';

    /**
     * The profile settings for triggering the fill of a monetary account.
     *
     * @var MonetaryAccountProfileFill
     */
    protected $profileFill;

    /**
     * The profile settings for moving excesses to a savings account
     *
     * @var MonetaryAccountProfileDrain
     */
    protected $profileDrain;

    /**
     * The profile settings for triggering the fill of a monetary account.
     *
     * @var MonetaryAccountProfileFill|null
     */
    protected $profileFillFieldForRequest;

    /**
     * The profile settings for moving excesses to a savings account
     *
     * @var MonetaryAccountProfileDrain|null
     */
    protected $profileDrainFieldForRequest;

    /**
     * @param MonetaryAccountProfileFill|null $profileFill The profile settings
     * for triggering the fill of a monetary account.
     * @param MonetaryAccountProfileDrain|null $profileDrain The profile
     * settings for moving excesses to a savings account
     */
    public function __construct(
        MonetaryAccountProfileFill $profileFill = null,
        MonetaryAccountProfileDrain $profileDrain = null
    ) {
        $this->profileFillFieldForRequest = $profileFill;
        $this->profileDrainFieldForRequest = $profileDrain;
    }

    /**
     * The profile settings for triggering the fill of a monetary account.
     *
     * @return MonetaryAccountProfileFill
     */
    public function getProfileFill()
    {
        return $this->profileFill;
    }

    /**
     * @param MonetaryAccountProfileFill $profileFill
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setProfileFill($profileFill)
    {
        $this->profileFill = $profileFill;
    }

    /**
     * The profile settings for moving excesses to a savings account
     *
     * @return MonetaryAccountProfileDrain
     */
    public function getProfileDrain()
    {
        return $this->profileDrain;
    }

    /**
     * @param MonetaryAccountProfileDrain $profileDrain
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setProfileDrain($profileDrain)
    {
        $this->profileDrain = $profileDrain;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->profileFill)) {
            return false;
        }

        if (!is_null($this->profileDrain)) {
            return false;
        }

        return true;
    }
}
