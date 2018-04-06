<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class DraftShareInviteBankEntry extends BunqModel
{
    /**
     * The share details. Only one of these objects is returned.
     *
     * @var ShareDetail
     */
    protected $shareDetail;

    /**
     * The start date of this share.
     *
     * @var string
     */
    protected $startDate;

    /**
     * The expiration date of this share.
     *
     * @var string
     */
    protected $endDate;

    /**
     * @param ShareDetail $shareDetail The share details. Only one of these
     *                                 objects may be passed.
     * @param string|null $startDate   The start date of this share.
     * @param string|null $endDate     The expiration date of this share.
     */
    public function __construct(ShareDetail $shareDetail, string $startDate = null, string $endDate = null)
    {
        $this->shareDetail = $shareDetail;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * The share details. Only one of these objects is returned.
     *
     * @return ShareDetail
     */
    public function getShareDetail()
    {
        return $this->shareDetail;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param ShareDetail $shareDetail
     */
    public function setShareDetail($shareDetail)
    {
        $this->shareDetail = $shareDetail;
    }

    /**
     * The start date of this share.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * The expiration date of this share.
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->shareDetail)) {
            return false;
        }

        if (!is_null($this->startDate)) {
            return false;
        }

        if (!is_null($this->endDate)) {
            return false;
        }

        return true;
    }
}
