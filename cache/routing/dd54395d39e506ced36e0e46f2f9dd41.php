<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-09-10 08:29:35
 */

$app = Yee\Yee::getInstance();

$app->map("/search", "SearchEngineController::___search")->via("POST")->name("search.post");

