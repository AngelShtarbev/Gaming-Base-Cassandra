<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-09-13 02:13:02
 */

$app = Yee\Yee::getInstance();

$app->map("/videos", "VideosController::___showVideos")->via("GET")->name("show.videos.desc");
$app->map("/videos/:asc", "VideosController::___showVideosAsc")->via("GET")->name("show.videos.asc");
$app->map("/video/:id/:name", "VideosController::___showVideoById")->via("GET")->name("show.video.id.name");

