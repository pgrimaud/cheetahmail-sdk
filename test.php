<?php
use Cheetahmail\Campaigns\Campaigns;
use Cheetahmail\Campaigns\GetCampaign;

require __DIR__ . '/vendor/autoload.php';

$campaignService = new Campaigns();
$campaign = new GetCampaign('7980175');

$response = $campaignService->GetCampaign($campaign);

print_r($response);