<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-09-13 02:06:19
 */

$app = Yee\Yee::getInstance();

$app->map("/reviews", "ReviewsController::___showReviews")->via("GET")->name("show.reviews.desc");
$app->map("/reviews/:asc", "ReviewsController::___showReviewsPublishDateAsc")->via("GET")->name("show.reviews.asc");
$app->map("/reviews/score/desc", "ReviewsController::___showReviewsByScoreDesc")->via("GET")->name("show.reviews.score.desc");
$app->map("/reviews/score/asc", "ReviewsController::___showReviewsByScoreAsc")->via("GET")->name("show.reviews.score.asc");
$app->map("/review/:id/:name", "ReviewsController::___showReviewsById")->via("GET")->name("show.review.id");

