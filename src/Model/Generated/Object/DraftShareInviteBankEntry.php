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
     * @param ShareDetail $shareDetail
     */
    public function __construct(ShareDetail $shareDetail)
    {
        $this->shareDetail = $shareDetail;
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
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }
}
