<?php
use Yee\Yee;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;

class HomeController extends \Yee\Managers\Controller\Controller
{

    /**
     * @Route('/')
     * @Name('home.index')
     */
    public function index()
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');
        $container_videos_db = $app->container->get('videos_db');
        $container_platforms_db = $app->container->get('platforms_db');
        $container_reviews_db = $app->container->get('reviews_db');

        //Select games from DB
        $games_db = $container_games_db->selectHomePageGamesFromDB();

        //Select popular platforms from DB
        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        //Select videos from DB
        $videos = $container_videos_db->selectHomePageVideos();

        //Select reviews from DB
        $reviews_db = $container_reviews_db->selectHomePageReviews();

        foreach ($reviews_db as $key => $value) {

            if( $value['score'] > 1 ) {

                $rating = range(1,$value['score']);

                $reviews_db[$key]['score'] = $rating;
            }

            else {
                $reviews_db[$key]['score'] = array($value['score']);
            }
        }

        foreach ($games_db as $key => $value) {
            $games_db[$key]['images'] = explode(',',$value['images']);
            $games_db[$key]['platforms_name'] = explode(',',$value['platforms_name']);
        }

        foreach ($videos as $key => $value) {
            $videos[$key]['images'] = explode(',',$value['images']);
        }

        $app->render('home/home.twig', $data = array(
            'carouselGames' => $games_db,
            'videos' => $videos,
            'popular_platforms' => $popular_platforms,
            'reviews' => $reviews_db
        ));
    }
}