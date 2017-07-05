<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-10-26 12:03:23
 */

$app = Yee\Yee::getInstance();

$app->map("/search/(:page)/", "SearchEngineController::___search")->via("GET")->name("search.get");
$app->map("/search/game/:id/", "SearchEngineController::___showGame")->via("GET")->name("show.games.reviews.asc");

