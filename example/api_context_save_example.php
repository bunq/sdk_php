<?php
namespace bunq\sdk\examples;

use bunq\Context\ApiContext;
use bunq\Util\BunqEnumApiEnvironmentType;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Provide the following fields.
 *
 * You can also run `vendor/bin/bunq-install` from your command line.
 */
const API_KEY = '### Your API key ###'; // Insert your API key here.
const DEVICE_DESCRIPTION = 'Server 1';
const PERMITTED_IPS = [];

$apiContext = ApiContext::create(BunqEnumApiEnvironmentType::SANDBOX(), API_KEY, DEVICE_DESCRIPTION);
$apiContext->save(ApiContext::FILENAME_CONFIG_DEFAULT);
