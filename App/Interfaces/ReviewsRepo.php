<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-2
 * Date: 30.8.2016 г.
 * Time: 9:44
 */

namespace App\Interfaces;

interface ReviewsRepo
{
    public function getAllReviews();
    public function getAllReviewsAsc();
    public function getReviewById($id);
    public function getReviewsByScoreHighLow();
    public function getReviewsByScoreLowHigh();
}