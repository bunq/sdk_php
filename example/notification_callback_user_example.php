<?php
namespace bunq\sdk\examples;

use bunq\Context\ApiContext;
use bunq\Model\Generated\Endpoint\User;
use bunq\Model\Generated\Endpoint\UserCompany;
use bunq\Model\Generated\Object\NotificationFilter;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Update these constants to edit the values of the notification filter.
 */
const NOTIFICATION_TARGET = 'https://mybeautifulwebsite.nl/foo/bar/';
const NOTIFICATION_CATEGORY = 'MUTATION';

/**
 * Other constants.
 */
const FILENAME_BUNQ_CONFIG = 'bunq.conf';
const INDEX_FIRST = 0;

// Restore the API context.
$apiContext = ApiContext::restore(ApiContext::FILENAME_CONFIG_DEFAULT);

// Retrieve the active user.
$users = User::listing($apiContext)->getValue();
// If your user is UserPerson or UserLight, replace getUserCompany() with getUserPerson() or getUserLight()
$userCompany = $users[INDEX_FIRST]->getUserCompany();
$userId = $userCompany->getId();
$notificationFilters = $userCompany->getNotificationFilters();

echo "UserCompany has the following notification filters:\n";

foreach ($notificationFilters as $filter) {
    echo $filter->getNotificationDeliveryMethod()." ".$filter->getCategory()." ".$filter->getNotificationTarget()."\n";
}

// Add the new notification filter
$notificationFilters[] = new NotificationFilter('URL', NOTIFICATION_TARGET, NOTIFICATION_CATEGORY);

// Replace all notification filters with the updated array
UserCompany::update($apiContext, [
    UserCompany::FIELD_NOTIFICATION_FILTERS => $notificationFilters,
], $userId);

echo "Added a callback for '".NOTIFICATION_CATEGORY."' that targets '".NOTIFICATION_TARGET."'\n";

$userCompany = UserCompany::get($apiContext, $userId);
$notificationFilters = $userCompany->getValue()->getNotificationFilters();
for ($i = 0; $i < count($notificationFilters); $i++) {
    $filter = $notificationFilters[$i];
    // Remove any URL notification callbacks for the MUTATION category from the array
    if ($filter->getNotificationDeliveryMethod() == 'URL' && $filter->getCategory() == NOTIFICATION_CATEGORY) {
        echo "Removing URL filter targeting ".$filter->getNotificationTarget()."\n";
        unset($notificationFilters[$i]);
    }
}
// Replace all notification filters with the updated array
UserCompany::update($apiContext, [
    UserCompany::FIELD_NOTIFICATION_FILTERS => $notificationFilters,
], $userId);

echo "Removed custom URL notification filters\n";
