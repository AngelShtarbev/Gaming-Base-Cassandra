<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-2
 * Date: 7.9.2016 г.
 * Time: 10:11
 */

namespace  App\Interfaces;

interface ReviewsDBRepo {

    public function selectAllReviewsFromDBPublishDateDesc();
    public function syncApiDataWithDBData($reviews);
    public function selectAllReviewsFromDBPublishDateASC();
    public function selectAllReviewsFromDBScoreASC();
    public function selectAllReviewsFromDBScoreDESC();
    public function selectReviewByIdFromDB($id);
    public function selectHomePageReviews();
    public function selectTotalNumberReviewsDesc();
    public function selectPaginationReviewsDesc($limit);
    public function selectTotalNumberReviewsAsc();
    public function selectPaginationReviewsAsc($limit);
    public function selectTotalNumberReviewsScoreDesc();
    public function selectPaginationReviewsScoreDesc($limit);
    public function selectTotalNumberReviewsScoreAsc();
    public function selectPaginationReviewsScoreAsc($limit);
}