<?php
namespace bunq\sdk\examples;

use bunq\Context\ApiContext;
use bunq\Model\Generated\Endpoint\User;

require_once __DIR__ . '/../vendor/autoload.php';

$apiContext = ApiContext::restore(ApiContext::FILENAME_CONFIG_DEFAULT);
$users = User::listing($apiContext)->getValue();
$apiContext->save();

foreach ($users as $user) {
    // If your user is UserPerson or UserLight, replace getUserCompany() with getUserPerson() or getUserLight()
    echo $user->getUserCompany()->getDisplayName();
}
