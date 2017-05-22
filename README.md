# CheetahMail SDK

Consume CheetahMail's SOAP API.

## Requirements

 - PHP >= 5.6
 - Package php-soap (ext-soap extension)

## Installation

```
composer require pgrimaud/cheetahmail-sdk
```

## Services available
* Admin
    * Notify
* Campaigns
    * Campaigns
    * ChronoContact
* Data
    * Filters
* Statistics
    * Stats

More services can be added if needed. Juste create a PR.

## Basic usage

Get a campaign :

```php
use Cheetahmail\Campaigns\Campaigns\AuthHeader;
use Cheetahmail\Campaigns\Campaigns\Campaigns;
use Cheetahmail\Campaigns\Campaigns\GetCampaign;

$auth = new AuthHeader(1234);
$auth->setUserName('1234_wssoap');
$auth->setPassword('aGVsbG93b3JsZGJ1ZGR5ITopPQ==');

$campaignService = new Campaigns($auth);

$campaign = new GetCampaign('123456798');
$campaignResponse = $campaignService->GetCampaign($campaign);

print_r($campaignResponse);

```

## Licence

Licensed under the terms of the MIT License.