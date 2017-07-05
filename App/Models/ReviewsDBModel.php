<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-2
 * Date: 7.9.2016 г.
 * Time: 10:09
 */

namespace App\Models;

use App\Interfaces\ReviewsDBRepo;
use phpDocumentor\Reflection\Types\Array_;

class ReviewsDBModel implements ReviewsDBRepo {

    private $reviews_by_publish_date_desc = 'reviews_by_publish_date_desc';
    private $reviews_by_publish_date_asc = 'reviews_by_publish_date_asc';
    private $reviews_by_score_desc = 'reviews_by_score_desc';
    private $reviews_by_score_asc = 'reviews_by_score_asc';
    private $reviews_by_id = 'reviews_by_id';
    private $limit_reviews = 10;
    private $limit_home_reviews = 8;

    public function selectTotalNumberReviewsDesc()
    {
        $app = \Yee\Yee::getInstance();

        $reviews = $app->db['cassandra']->get($this->reviews_by_publish_date_desc);
        return $reviews;
    }

    public function selectPaginationReviewsDesc($limit)
    {
        $app = \Yee\Yee::getInstance();

        $reviews = $app->db['cassandra']->get($this->reviews_by_publish_date_desc,$limit);
        return $reviews;
    }

    public function selectTotalNumberReviewsAsc()
    {
        $app = \Yee\Yee::getInstance();

        $reviews = $app->db['cassandra']->get($this->reviews_by_publish_date_asc);
        return $reviews;
    }

    public function selectPaginationReviewsAsc($limit)
    {
        $app = \Yee\Yee::getInstance();

        $reviews = $app->db['cassandra']->get($this->reviews_by_publish_date_asc,$limit);
        return $reviews;
    }

    public function selectTotalNumberReviewsScoreDesc()
    {
        $app = \Yee\Yee::getInstance();

        $reviews = $app->db['cassandra']->get($this->reviews_by_score_desc);
        return $reviews;
    }

    public function selectPaginationReviewsScoreDesc($limit)
    {
        $app = \Yee\Yee::getInstance();

        $reviews = $app->db['cassandra']->get($this->reviews_by_score_desc,$limit);
        return $reviews;
    }

    public function selectTotalNumberReviewsScoreAsc()
    {
        $app = \Yee\Yee::getInstance();

        $reviews = $app->db['cassandra']->get($this->reviews_by_score_asc);
        return $reviews;
    }

    public function selectPaginationReviewsScoreAsc($limit)
    {
        $app = \Yee\Yee::getInstance();

        $reviews = $app->db['cassandra']->get($this->reviews_by_score_asc,$limit);
        return $reviews;
    }

    public function selectHomePageReviews()
    {
        $app = \Yee\Yee::getInstance();

        $reviews = $app->db['cassandra']->get($this->reviews_by_publish_date_desc,$this->limit_home_reviews);
        return $reviews;
    }

    public function selectAllReviewsFromDBPublishDateDesc()
    {
        $app = \Yee\Yee::getInstance();

        $reviews = $app->db['cassandra']->get($this->reviews_by_publish_date_desc,$this->limit_reviews);
        return $reviews;
    }

    public function selectAllReviewsFromDBPublishDateASC()
    {
        $app = \Yee\Yee::getInstance();

        $reviews = $app->db['cassandra']->get($this->reviews_by_publish_date_asc,$this->limit_reviews);
        return $reviews;
    }

    public function selectAllReviewsFromDBScoreASC()
    {
        $app = \Yee\Yee::getInstance();

        $reviews = $app->db['cassandra']->get($this->reviews_by_score_asc,$this->limit_reviews);
        return $reviews;
    }

    public function selectAllReviewsFromDBScoreDESC()
    {
        $app = \Yee\Yee::getInstance();

        $reviews = $app->db['cassandra']->get($this->reviews_by_score_desc,$this->limit_reviews);
        return $reviews;
    }

    public function selectReviewByIdFromDB($id)
    {
        $app = \Yee\Yee::getInstance();

        $review = $app->db['cassandra']->where('review_id', intval($id))->get($this->reviews_by_id);
        return $review;
    }

    public function syncApiDataWithDBData($reviews)
    {
        $app = \Yee\Yee::getInstance();

        $db = $app->db['cassandra'];

        if(!empty($reviews[0])) {

            foreach ($reviews as $key => $value) {

                $data_reviews_by_id[] = array(
                    'review_id' => intval($value['reviews_ids']),
                    'publish_date' => $value['publish_date'],
                    'deck' => $value['deck'],
                    'description' => $value['description'],
                    'game_id' => $value['game']['id'],
                    'game_name' => $value['game']['name'],
                    'platforms' => $value['platforms'],
                    'release_id' => $value['release']['id'],
                    'release_name' => $value['release']['name'],
                    'reviewer' => $value['reviewer'],
                    'score' => $value['score'],
                );

                $data_reviews[] = array(
                    'type' => 'reviews',
                    'review_id' => intval($value['reviews_ids']),
                    'publish_date' => $value['publish_date'],
                    'deck' => $value['deck'],
                    'description' => $value['description'],
                    'game_id' => $value['game']['id'],
                    'game_name' => $value['game']['name'],
                    'platforms' => $value['platforms'],
                    'release_id' => $value['release']['id'],
                    'release_name' => $value['release']['name'],
                    'reviewer' => $value['reviewer'],
                    'score' => $value['score'],
                );
            }

            //Insert every array element in DB
            foreach ($data_reviews_by_id as $key => $value) {

                $db->insert($this->reviews_by_id, $value);

            }

            //Insert every array element in DB
            foreach ($data_reviews_by_id as $key => $value) {

                $db->insert($this->reviews_by_score_desc, $value);

            }

            //Insert every array element in DB
            foreach ($data_reviews_by_id as $key => $value) {

                $db->insert($this->reviews_by_score_asc, $value);

            }

            //Insert every array element in DB
            foreach ($data_reviews as $key => $value) {

                $db->insert($this->reviews_by_publish_date_desc, $value);

            }

            //Insert every array element in DB
            foreach ($data_reviews as $key => $value) {

                $db->insert($this->reviews_by_publish_date_asc, $value);

            }
        }

        else {

            $data_reviews_by_id = array(
                'review_id' => intval($reviews['reviews_ids']),
                'publish_date' => $reviews['publish_date'],
                'deck' => $reviews['deck'],
                'description' => $reviews['description'],
                'game_id' => $reviews['game']['id'],
                'game_name' => $reviews['game']['name'],
                'platforms' => $reviews['platforms'],
                'release_id' => $reviews['release']['id'],
                'release_name' => $reviews['release']['name'],
                'reviewer' => $reviews['reviewer'],
                'score' => $reviews['score'],
            );

            $data_reviews = array(
                'type' => 'reviews',
                'review_id' => intval($reviews['reviews_ids']),
                'publish_date' => $reviews['publish_date'],
                'deck' => $reviews['deck'],
                'description' => $reviews['description'],
                'game_id' => $reviews['game']['id'],
                'game_name' => $reviews['game']['name'],
                'platforms' => $reviews['platforms'],
                'release_id' => $reviews['release']['id'],
                'release_name' => $reviews['release']['name'],
                'reviewer' => $reviews['reviewer'],
                'score' => $reviews['score'],
            );

            $db->insert($this->reviews_by_id, $data_reviews_by_id);

            $db->insert($this->reviews_by_score_desc, $data_reviews_by_id);

            $db->insert($this->reviews_by_score_asc, $data_reviews_by_id);

            $db->insert($this->reviews_by_publish_date_desc, $data_reviews);

            $db->insert($this->reviews_by_publish_date_asc, $data_reviews);

        }

    }
}