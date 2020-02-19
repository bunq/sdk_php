<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class DraftShareInviteEntry extends BunqModel
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
     * The share details. Only one of these objects may be passed.
     *
     * @var ShareDetail
     */
    protected $shareDetailFieldForRequest;

    /**
     * The start date of this share.
     *
     * @var string|null
     */
    protected $startDateFieldForRequest;

    /**
     * The expiration date of this share.
     *
     * @var string|null
     */
    protected $endDateFieldForRequest;

    /**
     * @param ShareDetail $shareDetail The share details. Only one of these
     * objects may be passed.
     * @param string|null $startDate The start date of this share.
     * @param string|null $endDate The expiration date of this share.
     */
    public function __construct(ShareDetail $shareDetail, string $startDate = null, string $endDate = null)
    {
        $this->shareDetailFieldForRequest = $shareDetail;
        $this->startDateFieldForRequest = $startDate;
        $this->endDateFieldForRequest = $endDate;
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
     * @param ShareDetail $shareDetail
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @param string $startDate
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @param string $endDate
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
