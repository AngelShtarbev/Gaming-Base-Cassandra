<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-10-25 01:57:13
 */

$app = Yee\Yee::getInstance();

$app->map("/videos/(:page)", "VideosController::___showVideos")->via("GET")->name("show.videos.desc");
$app->map("/videos/asc/(:page)", "VideosController::___showVideosAsc")->via("GET")->name("show.videos.asc");
$app->map("/video/:id/", "VideosController::___showVideoById")->via("GET")->name("show.video.id.name");

