<?php
namespace bunq\sdk\examples;

use bunq\Context\ApiContext;
use bunq\Model\Generated\User;

require_once __DIR__ . '/../vendor/autoload.php';

$apiContext = ApiContext::restore(ApiContext::FILENAME_CONFIG_DEFAULT);
$users = User::listing($apiContext);
$apiContext->save();

foreach ($users as $user) {
    printf($user->getUserCompany()->getDisplayName());
}
