<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-2
 * Date: 30.8.2016 г.
 * Time: 15:51
 */
use Yee\Yee;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;

class VideosController extends \Yee\Managers\Controller\Controller
{
    /**
     * @Route('/videos/(:page)')
     * @Name('show.videos.desc')
     */
    public function showVideos()
    {
        $app = $this->getYee();

        $container_videos_db = $app->container->get('videos_db');
        $container_platforms_db = $app->container->get('platforms_db');

        $page = explode('/',$_SERVER['REQUEST_URI']);

        $reviews = $container_videos_db->selectTotalNumberVideosDesc();
        $cnt = count($reviews);

        $pagination_items_func = 'selectPaginationVideosDesc';

        $twig = 'videos/videos.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_videos_db,$app,$popular_platforms);

    }

    /**
     * @Route('/videos/asc/(:page)')
     * @Name('show.videos.asc')
     */
    public function showVideosAsc()
    {
        $app = $this->getYee();

        $container_videos_db = $app->container->get('videos_db');
        $container_platforms_db = $app->container->get('platforms_db');

        $page = explode('/',$_SERVER['REQUEST_URI']);

        $reviews = $container_videos_db->selectTotalNumberVideosAsc();
        $cnt = count($reviews);

        $pagination_items_func = 'selectPaginationVideosAsc';

        $twig = 'videos/videos_asc.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_videos_db,$app,$popular_platforms);
    }

    /**
     * @Route('/video/:id/')
     * @Name('show.video.id.name')
     */
    public function showVideoById($id)
    {

        $app = $this->getYee();

        $container_videos_db = $app->container->get('videos_db');
        $container_videos = $app->container->get('videos');

        //First remove whitespaces
        $trim_value = trim($id);

        //Allow only numbers
        $filter_value = preg_replace("/[^0-9]/", "", $trim_value);

        //Select video from DB
        $video_id_db = $container_videos_db->selectVideoByIdFromDB($filter_value);

        if(empty($video_id_db)) {

            //Fetch video data from API
            $video_api = $container_videos->getVideoById($filter_value);

            //Insert the data
            $container_videos_db->syncApiDataWithDBData($video_api);

            $video = $container_videos_db->selectVideoByIdFromDB($filter_value);

            foreach ($video as $key => $value) {
                $video[$key]['images'] = explode(',',$value['images']);
            }

            $app->render('videos/video.twig',$data = array(
                'video' => $video,
            ));
        }

        else {

            foreach ($video_id_db as $key => $value) {
                $video_id_db[$key]['images'] = explode(',',$value['images']);
            }

            $app->render('videos/video.twig',$data = array(
                'video' => $video_id_db,
            ));

        }

    }

    public function pagination($page,$count,$twig,$pagination_items_func,$container_db,$app,$platforms)
    {
        $page_count = count($page);

        $value = array_slice($page, ($page_count - 1), 1);

        $filter_value = stripslashes(htmlentities(trim((string)$value[0])));

        if ((empty($filter_value))) {
            $page_int = 1;
        } else {
            $page_int = $filter_value;
        }

        $previous = $page_int - 1;
        $next = $page_int + 1;

        switch ($page_int) {

            case ( (!is_numeric($page_int)) || ( ($page_int) < 0) ):

                $app->render($twig, $data = array(
                    'message' => 'Page not found'
                ));
                break;

            //first 10 db records
            case (intval($page_int) == 1):
                $limit = 10;

                if ($pagination_items_func == 'selectPaginationVideosDesc') {

                    $videos_db = $container_db->selectPaginationVideosDesc($limit);
                }

                if ($pagination_items_func == 'selectPaginationVideosAsc') {

                    $videos_db = $container_db->selectPaginationVideosAsc($limit);
                }


                foreach ($videos_db as $key => $value) {

                    if (array_key_exists('images', $value)) {

                        $videos_db[$key]['images'] = explode(',', $value['images']);
                    }

                }

                $app->render($twig, $data = array(
                    'videos' => $videos_db,
                    'previous' => $previous,
                    'next' => $next,
                    'popular_platforms' => $platforms,
                ));

                break;

            //no more db records to paginate over
            case (((intval($page_int) * 10) - $count) > 10):

                $app->render($twig, $data = array(
                    'previous' => $previous,
                    'popular_platforms' => $platforms,
                ));

                break;

            //last db records
            case ((intval($page_int) * 10) > $count):

                $last = (($page_int * 10) - $count); // 4

                $limit = ($page_int * 10);

                if ($pagination_items_func == 'selectPaginationVideosDesc') {

                    $videos_db = $container_db->selectPaginationVideosDesc($limit);
                }

                if ($pagination_items_func == 'selectPaginationVideosAsc') {

                    $videos_db = $container_db->selectPaginationVideosAsc($limit);
                }

                foreach ($videos_db as $key => $value) {

                    if (array_key_exists('images', $value)) {

                        $videos_db[$key]['images'] = explode(',', $value['images']);
                    }

                }

                $result = array_slice($videos_db, -(10 - $last), (10 - $last), true); // 6

                $app->render($twig, $data = array(
                    'videos' => $result,
                    'previous' => $previous,
                    'next' => $next,
                    'popular_platforms' => $platforms,
                ));

                break;

            // 10 db records per page
            case ((intval($page_int) * 10) < $count):

                $limit = ($page_int * 10);

                if ($pagination_items_func == 'selectPaginationVideosDesc') {

                    $videos_db = $container_db->selectPaginationVideosDesc($limit);
                }

                if ($pagination_items_func == 'selectPaginationVideosAsc') {

                    $videos_db = $container_db->selectPaginationVideosAsc($limit);
                }

                foreach ($videos_db as $key => $value) {

                    if (array_key_exists('images', $value)) {

                        $videos_db[$key]['images'] = explode(',', $value['images']);
                    }

                }

                $result = array_slice($videos_db, -10, 10, true);

                $app->render($twig, $data = array(
                    'videos' => $result,
                    'previous' => $previous,
                    'next' => $next,
                    'popular_platforms' => $platforms,
                ));

                break;

            // max db records
            case ((intval($page_int) * 10) == $count):

                $limit = ($page_int * 10);

                if ($pagination_items_func == 'selectPaginationVideosDesc') {

                    $videos_db = $container_db->selectPaginationVideosDesc($limit);
                }

                if ($pagination_items_func == 'selectPaginationVideosAsc') {

                    $videos_db = $container_db->selectPaginationVideosAsc($limit);
                }

                foreach ($videos_db as $key => $value) {

                    if (array_key_exists('images', $value)) {

                        $videos_db[$key]['images'] = explode(',', $value['images']);
                    }

                }

                $result = array_slice($videos_db, -10, 10, true);

                $app->render($twig, $data = array(
                    'videos' => $result,
                    'previous' => $previous,
                    'next' => $next,
                    'popular_platforms' => $platforms,
                ));

                break;


        }
    }
}