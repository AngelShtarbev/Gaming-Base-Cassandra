<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-2
 * Date: 30.8.2016 г.
 * Time: 9:58
 */

use Yee\Managers\Controller\Controller;
use Yee\Yee;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;

class ReviewsController extends Controller
{
    /**
     * @Route('/reviews/(:page)')
     * @Name('show.reviews.desc')
     */
    public function showReviews()
    {
        $app = $this->getYee();

        $container_reviews_db = $app->container->get('reviews_db');
        $container_platforms_db = $app->container->get('platforms_db');

        $page = explode('/',$_SERVER['REQUEST_URI']);

        $reviews = $container_reviews_db->selectTotalNumberReviewsDesc();
        $cnt = count($reviews);

        $pagination_items_func = 'selectPaginationReviewsDesc';

        $twig = 'reviews/reviews.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_reviews_db,$app,$popular_platforms);

    }

    /**
     * @Route('/reviews/asc/(:page)')
     * @Name('show.reviews.asc')
     */
    public function showReviewsPublishDateAsc()
    {
        $app = $this->getYee();
        $container_reviews_db = $app->container->get('reviews_db');
        $container_platforms_db = $app->container->get('platforms_db');

        $page = explode('/',$_SERVER['REQUEST_URI']);

        $reviews = $container_reviews_db->selectTotalNumberReviewsAsc();
        $cnt = count($reviews);

        $pagination_items_func = 'selectPaginationReviewsAsc';

        $twig = 'reviews/reviews_asc.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_reviews_db,$app,$popular_platforms);

    }

    /**
     * @Route('/reviews/score/desc/(:page)')
     * @Name('show.reviews.score.desc')
     */
    public function showReviewsByScoreDesc()
    {
        $app = $this->getYee();

        $container_reviews_db = $app->container->get('reviews_db');
        $container_platforms_db = $app->container->get('platforms_db');

        $page = explode('/',$_SERVER['REQUEST_URI']);

        $reviews = $container_reviews_db->selectTotalNumberReviewsScoreDesc();
        $cnt = count($reviews);

        $pagination_items_func = 'selectPaginationReviewsScoreDesc';

        $twig = 'reviews/reviews_score_desc.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_reviews_db,$app,$popular_platforms);

    }

    /**
     * @Route('/reviews/score/asc/(:page)')
     * @Name('show.reviews.score.asc')
     */
    public function showReviewsByScoreAsc()
    {
        $app = $this->getYee();

        $container_reviews_db = $app->container->get('reviews_db');
        $container_platforms_db = $app->container->get('platforms_db');

        $page = explode('/',$_SERVER['REQUEST_URI']);

        $reviews = $container_reviews_db->selectTotalNumberReviewsScoreAsc();
        $cnt = count($reviews);

        $pagination_items_func = 'selectPaginationReviewsScoreAsc';

        $twig = 'reviews/reviews_score_asc.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_reviews_db,$app,$popular_platforms);

    }

    /**
     * @Route('/review/:id/:name')
     * @Name('show.review.id')
     */
    public function showReviewsById($id)
    {
        $app = $this->getYee();

        $container_reviews_db = $app->container->get('reviews_db');
        $container_reviews = $app->container->get('reviews');

        //First remove whitespaces
        $trim_value = trim($id);

        //Allow only numbers
        $filter_value = preg_replace("/[^0-9]/", "", $trim_value);

        //Fetch data for a review by id from DB
        $review_id = $container_reviews_db->selectReviewByIdFromDB($filter_value);

        if(!empty($review_id)) {

            if ($review_id[0]['score'] > 1) {

                $rating = range(1, $review_id[0]['score']);

                $review_id[0]['score'] = $rating;
            } else {
                $review_id[0]['score'] = array($review_id[0]['score']);
            }

            $app->render('reviews/review.twig', $data = array(
                'review' => $review_id,
            ));
        }

        else {

            //Fetch data for a review from API
            $review_id = $container_reviews->getReviewById($filter_value);

            //Make insert in DB
            $container_reviews_db->syncApiDataWithDBData($review_id);

            $review_id = $container_reviews_db->selectReviewByIdFromDB($filter_value);

            if(!empty($review_id)) {

                if ($review_id[0]['score'] > 1) {

                    $rating = range(1, $review_id[0]['score']);

                    $review_id[0]['score'] = $rating;
                } else {
                    $review_id[0]['score'] = array($review_id[0]['score']);
                }
            }

            else {

                $message = 'Page not found';
            }

            $app->render('reviews/review.twig', $data = array(
                'review' => isset($review_id) ? $review_id : '',
                'message' => isset($message) ? $message : '',
            ));
        }

    }

    public function getReviewsIds($reviews) {

        $api_detail_urls = array_column($reviews,'api_detail_url');

        //Lambda function
        $func = function($value){ return substr($value,41,-1); };
        $reviews_ids = array_map($func,$api_detail_urls);

        //Push new ids to every array element
        for($i = 0; $i < count($reviews); $i++)
        {
            $reviews[$i]['reviews_ids'] = $reviews_ids[$i];
        }

        return $reviews;

    }

    public function pagination($page,$count,$twig,$pagination_items_func,$container_db,$app,$platforms)
    {
        $page_count = count($page);

        $value = array_slice($page,($page_count - 1),1);

        $filter_value = stripslashes(htmlentities(trim((string)$value[0])));

        if( (empty($filter_value) ) ) {
            $page_int = 1;
        }
        else {
            $page_int = $filter_value;
        }

        $previous = $page_int - 1;
        $next = $page_int + 1;

        switch($page_int) {

            case ( (!is_numeric($page_int)) || ( ($page_int) < 0) ):

                $app->render($twig, $data = array(
                    'message' => 'Page not found'
                ));
                break;

            //page = 1 -> 10 results - first 10 db records
            case ( intval($page_int) == 1):
                $limit = 10;

                if($pagination_items_func == 'selectPaginationReviewsDesc') {

                    $reviews_db = $container_db->selectPaginationReviewsDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationReviewsAsc') {

                    $reviews_db = $container_db->selectPaginationReviewsAsc($limit);
                }

                if($pagination_items_func == 'selectPaginationReviewsScoreDesc') {

                    $reviews_db = $container_db->selectPaginationReviewsScoreDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationReviewsScoreAsc') {

                    $reviews_db = $container_db->selectPaginationReviewsScoreAsc($limit);
                }

                foreach ($reviews_db as $key => $value) {

                    if( array_key_exists('platforms',$value) ) {

                        $reviews_db[$key]['platforms'] = explode(',', $value['platforms']);
                    }

                }

                foreach ($reviews_db as $key => $value) {

                    if( $value['score'] > 1 ) {

                        $rating = range(1,$value['score']);

                        $reviews_db[$key]['score'] = $rating;
                    }

                    else {
                        $reviews_db[$key]['score'] = array($value['score']);
                    }
                }

                $app->render($twig, $data = array(
                    'reviews' => $reviews_db,
                    'previous' => $previous,
                    'next' => $next,
                    'popular_platforms' => $platforms,
                ));

                break;

            //no more db records to paginate over
            case (  ((intval($page_int) * 10) - $count) > 10 ):

                $app->render($twig, $data = array(
                    'previous' => $previous,
                ));

                break;

            //last db records
            case ( ( intval($page_int) * 10 ) > $count ):

                $last = ( ($page_int * 10) - $count ); // 4

                $limit = ($page_int * 10);

                if($pagination_items_func == 'selectPaginationReviewsDesc') {

                    $reviews_db = $container_db->selectPaginationReviewsDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationReviewsAsc') {

                    $reviews_db = $container_db->selectPaginationReviewsAsc($limit);
                }

                if($pagination_items_func == 'selectPaginationReviewsScoreDesc') {

                    $reviews_db = $container_db->selectPaginationReviewsScoreDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationReviewsScoreAsc') {

                    $reviews_db = $container_db->selectPaginationReviewsScoreAsc($limit);
                }

                foreach ($reviews_db as $key => $value) {

                    if( array_key_exists('platforms',$value) ) {

                        $reviews_db[$key]['platforms'] = explode(',', $value['platforms']);
                    }

                }

                foreach ($reviews_db as $key => $value) {

                    if( $value['score'] > 1 ) {

                        $rating = range(1,$value['score']);

                        $reviews_db[$key]['score'] = $rating;
                    }

                    else {
                        $reviews_db[$key]['score'] = array($value['score']);
                    }
                }

                $result = array_slice($reviews_db, -(10 - $last) , (10 - $last), true); // 6

                $app->render($twig, $data = array(
                    'reviews' => $result,
                    'previous' => $previous,
                    'next' => $next,
                    'popular_platforms' => $platforms,
                ));

                break;

            // 10 db records per page
            case ( ( intval($page_int) * 10 ) < $count ):

                $limit = ($page_int * 10);

                if($pagination_items_func == 'selectPaginationReviewsDesc') {

                    $reviews_db = $container_db->selectPaginationReviewsDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationReviewsAsc') {

                    $reviews_db = $container_db->selectPaginationReviewsAsc($limit);
                }

                if($pagination_items_func == 'selectPaginationReviewsScoreDesc') {

                    $reviews_db = $container_db->selectPaginationReviewsScoreDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationReviewsScoreAsc') {

                    $reviews_db = $container_db->selectPaginationReviewsScoreAsc($limit);
                }

                foreach ($reviews_db as $key => $value) {

                    if( array_key_exists('platforms',$value) ) {

                        $reviews_db[$key]['platforms'] = explode(',', $value['platforms']);
                    }

                }

                foreach ($reviews_db as $key => $value) {

                    if( $value['score'] > 1 ) {

                        $rating = range(1,$value['score']);

                        $reviews_db[$key]['score'] = $rating;
                    }

                    else {
                        $reviews_db[$key]['score'] = array($value['score']);
                    }
                }

                $result = array_slice($reviews_db, -10, 10, true);

                $app->render($twig, $data = array(
                    'reviews' => $result,
                    'previous' => $previous,
                    'next' => $next,
                    'popular_platforms' => $platforms,
                ));

                break;

            // max db records
            case ( ( intval($page_int) * 10 ) == $count ):

                $limit = ($page_int * 10);

                if($pagination_items_func == 'selectPaginationReviewsDesc') {

                    $reviews_db = $container_db->selectPaginationReviewsDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationReviewsAsc') {

                    $reviews_db = $container_db->selectPaginationReviewsAsc($limit);
                }

                if($pagination_items_func == 'selectPaginationReviewsScoreDesc') {

                    $reviews_db = $container_db->selectPaginationReviewsScoreDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationReviewsScoreAsc') {

                    $reviews_db = $container_db->selectPaginationReviewsScoreAsc($limit);
                }

                foreach ($reviews_db as $key => $value) {

                    if( array_key_exists('platforms',$value) ) {

                        $reviews_db[$key]['platforms'] = explode(',', $value['platforms']);
                    }

                }

                foreach ($reviews_db as $key => $value) {

                    if( $value['score'] > 1 ) {

                        $rating = range(1,$value['score']);

                        $reviews_db[$key]['score'] = $rating;
                    }

                    else {
                        $reviews_db[$key]['score'] = array($value['score']);
                    }
                }

                $result = array_slice($reviews_db, -10, 10, true);

                $app->render($twig, $data = array(
                    'reviews' => $result,
                    'previous' => $previous,
                    'next' => $next,
                    'popular_platforms' => $platforms,
                ));

                break;


        }
    }

}