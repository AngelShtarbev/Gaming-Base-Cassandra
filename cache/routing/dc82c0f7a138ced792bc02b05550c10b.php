<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-09-13 01:40:41
 */

$app = Yee\Yee::getInstance();

$app->map("/games", "GamesController::___showGames")->via("GET")->name("show.games");
$app->map("/games/asc", "GamesController::___showGamesAsc")->via("GET")->name("show.games.asc");
$app->map("/games/desc", "GamesController::___showGamesDesc")->via("GET")->name("show.games.desc");
$app->map("/games/title/desc", "GamesController::___showGamesByTitle")->via("GET")->name("show.games.title.desc");
$app->map("/games/title/asc", "GamesController::___showGamesByTitleAsc")->via("GET")->name("show.games.title.asc");
$app->map("/game/:id/:name/", "GamesController::___showById")->via("GET")->name("show.game.id");
$app->map("/games/reviews/desc", "GamesController::___showGamesReviewsDesc")->via("GET")->name("show.games.reviews.desc");
$app->map("/games/reviews/asc", "GamesController::___showGamesReviewsAsc")->via("GET")->name("show.games.reviews.asc");

