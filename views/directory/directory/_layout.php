<?php

use humhub\modules\directory\widgets\Menu;
use humhub\modules\directory\widgets\Sidebar;
use humhub\widgets\FooterMenu;

\humhub\assets\JqueryKnobAsset::register($this);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-2">
            <?= Menu::widget(); ?>
            <?= Sidebar::widget(); ?>
            <?= FooterMenu::widget(['location' => FooterMenu::LOCATION_SIDEBAR]); ?>
        </div>
        <div class="col-xs-12 col-md-10">
            <?= $content; ?>
        </div>
    </div>
</div>
