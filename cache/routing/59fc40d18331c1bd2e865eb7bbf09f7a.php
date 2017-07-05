<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-10-25 01:57:13
 */

$app = Yee\Yee::getInstance();

$app->map("/reviews/(:page)", "ReviewsController::___showReviews")->via("GET")->name("show.reviews.desc");
$app->map("/reviews/asc/(:page)", "ReviewsController::___showReviewsPublishDateAsc")->via("GET")->name("show.reviews.asc");
$app->map("/reviews/score/desc/(:page)", "ReviewsController::___showReviewsByScoreDesc")->via("GET")->name("show.reviews.score.desc");
$app->map("/reviews/score/asc/(:page)", "ReviewsController::___showReviewsByScoreAsc")->via("GET")->name("show.reviews.score.asc");
$app->map("/review/:id/:name", "ReviewsController::___showReviewsById")->via("GET")->name("show.review.id");

