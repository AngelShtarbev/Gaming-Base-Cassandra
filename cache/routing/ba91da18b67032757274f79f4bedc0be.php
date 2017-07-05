<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-09-13 01:59:03
 */

$app = Yee\Yee::getInstance();

$app->map("/platforms", "PlatformsController::___indexPlatforms")->via("GET")->name("show.platforms");
$app->map("/platform/:id/:name", "PlatformsController::___showGamesByPlatformId")->via("GET")->name("show.platform.id");
$app->map("/platform/:id/:name/:popular", "PlatformsController::___insertPopularPlatform")->via("GET")->name("insert.popular.platform.id");
$app->map("/platform/asc/:id/", "PlatformsController::___showGamesByPlatformAsc")->via("GET")->name("show.platform.asc.id");
$app->map("/platform/desc/:id/", "PlatformsController::___showGamesByPlatformDesc")->via("GET")->name("show.platform.desc.id");

