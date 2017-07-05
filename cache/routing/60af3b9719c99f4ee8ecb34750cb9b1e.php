<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-10-25 02:27:14
 */

$app = Yee\Yee::getInstance();

$app->map("/games/(:page)", "GamesController::___showGames")->via("GET")->name("show.games");
$app->map("/games/asc/(:page)", "GamesController::___showGamesAsc")->via("GET")->name("show.games.asc");
$app->map("/games/title/desc/(:page)", "GamesController::___showGamesByTitle")->via("GET")->name("show.games.title.desc");
$app->map("/games/title/asc/(:page)", "GamesController::___showGamesByTitleAsc")->via("GET")->name("show.games.title.asc");
$app->map("/game/date/desc/:id", "GamesController::___showByIdDesc")->via("GET")->name("show.game.date.added.desc.id.name");
$app->map("/game/date/asc/:id", "GamesController::___showByIdAsc")->via("GET")->name("show.game.date.added.asc.id.name");
$app->map("/game/title/desc/:id", "GamesController::___showByIdTitleDesc")->via("GET")->name("show.game.id");
$app->map("/game/title/asc/:id", "GamesController::___showByIdTitleAsc")->via("GET")->name("show.game.id");
$app->map("/game/reviews/desc/:id", "GamesController::___showByIdReviewsDesc")->via("GET")->name("show.game.id");
$app->map("/game/reviews/asc/:id", "GamesController::___showByIdReviewsAsc")->via("GET")->name("show.game.id");
$app->map("/games/reviews/desc/(:page)", "GamesController::___showGamesReviewsDesc")->via("GET")->name("show.games.reviews.desc");
$app->map("/games/reviews/asc/(:page)", "GamesController::___showGamesReviewsAsc")->via("GET")->name("show.games.reviews.asc");
$app->map("/games/additional/", "GamesController::___additionalInfo")->via("GET")->name("get.additional.games.info");
$app->map("/game/similar/:id", "GamesController::___similarGames")->via("GET")->name("show.games");

