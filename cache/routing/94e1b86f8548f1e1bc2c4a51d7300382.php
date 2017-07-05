<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-10-25 02:34:02
 */

$app = Yee\Yee::getInstance();

$app->map("/platforms/(:page)", "PlatformsController::___indexPlatforms")->via("GET")->name("show.platforms");
$app->map("/platform/:id/:name/(:page)", "PlatformsController::___showGamesByPlatformIdDesc")->via("GET")->name("show.platform.games.by.platform id.desc");
$app->map("/platform/game/:id/desc/", "PlatformsController::___showPlatformGameByGameIdDesc")->via("GET")->name("show.platform.game.by.game id.desc");
$app->map("/platform/game/:id/asc/", "PlatformsController::___showPlatformGameByGameIdAsc")->via("GET")->name("show.platform.game.by.game id.desc");
$app->map("/platform/:id/:name/asc/(:page)", "PlatformsController::___showGamesByPlatformIdAsc")->via("GET")->name("show.platform.games.by.platform id.asc");

