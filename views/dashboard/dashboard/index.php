<?php
/**
 * @var \humhub\modules\user\models\User $contentContainer
 * @var bool $showProfilePostForm
 */
use humhub\modules\activity\widgets\ActivityStreamViewer;
use humhub\modules\dashboard\widgets\DashboardContent;
use humhub\modules\dashboard\widgets\Sidebar;
use humhub\widgets\FooterMenu;

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-last-md col-xs-12 col-md-10 layout-content-container">
            <?= DashboardContent::widget([
                'contentContainer' => $contentContainer,
                'showProfilePostForm' => $showProfilePostForm
            ]);
            ?>
        </div>
        <div class="col-first-md col-xs-12 col-md-2 layout-sidebar-container">
            <?= Sidebar::widget([
                'widgets' => [
                    [
                        ActivityStreamViewer::class,
                        ['streamAction' => '/dashboard/dashboard/activity-stream'],
                        ['sortOrder' => 150]
                    ]
                ]
            ]);
            ?>
            <?= FooterMenu::widget(['location' => FooterMenu::LOCATION_SIDEBAR]); ?>
        </div>
    </div>
</div>
