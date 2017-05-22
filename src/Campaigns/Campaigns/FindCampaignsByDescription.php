<?php
namespace Cheetahmail\Campaigns\Campaigns;

class FindCampaignsByDescription
{

    /**
     * @var string $criteresDesc
     */
    protected $criteresDesc = null;

    /**
     * @param string $criteresDesc
     */
    public function __construct($criteresDesc)
    {
        $this->criteresDesc = $criteresDesc;
    }

    /**
     * @return string
     */
    public function getCriteresDesc()
    {
        return $this->criteresDesc;
    }

    /**
     * @param string $criteresDesc
     * @return \Cheetahmail\Campaigns\Campaigns\FindCampaignsByDescription
     */
    public function setCriteresDesc($criteresDesc)
    {
        $this->criteresDesc = $criteresDesc;
        return $this;
    }
}
