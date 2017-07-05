<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-4
 * Date: 29.8.2016 г.
 * Time: 9:24
 */
use Yee\Yee;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;


class PlatformsController extends \Yee\Managers\Controller\Controller
{

    /**
     * @Route('/platforms/(:page)')
     * @Name('show.platforms')
     */
    public function indexPlatforms()
    {
        $app = $this->getYee();

        $container_platforms_db = $app->container->get('platforms_db');

        $page = explode('/',$_SERVER['REQUEST_URI']);

        $games = $container_platforms_db->selectTotalNumberPlatforms();
        $cnt = count($games);

        $pagination_items_func = 'selectPaginationPlatforms';

        $twig = 'platforms/platforms.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_platforms_db,$app,$id = null,$popular_platforms);

    }

    /**
     * @Route('/platform/:id/:name/(:page)')
     * @Name('show.platform.games.by.platform id.desc')
     */
    public function showGamesByPlatformIdDesc($id)
    {
        $app = $this->getYee();
        $container_games_db = $app->container->get('games_db');
        $container_platforms_db = $app->container->get('platforms_db');

        //Fetch data for all games by platform id in desc order
        $page = explode('/',$_SERVER['REQUEST_URI']);

        $games_platform = $container_games_db->selectTotalNumberGamesPlatformIdDesc();
        $cnt = count($games_platform);

        $pagination_items_func = 'selectPaginationGamesByPlatformIdDesc';

        $twig = 'platforms/games_platform_id_desc.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_games_db,$app,$id,$popular_platforms);
    }

    /**
     * @Route('/platform/game/:id/desc/')
     * @Name('show.platform.game.by.game id.desc')
     */
    public function showPlatformGameByGameIdDesc($id)
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');

        //First remove whitespaces
        $trim_id = trim($id);

        //Allow only numbers
        $filter_value = preg_replace("/[^0-9]/", "", $trim_id);

        //Fetch all the data for a single game from DB
        $game_id = $container_games_db->selectPlatformGameDesc($filter_value);

        if(!empty($game_id)) {

            foreach ($game_id as $key => $value) {
                $game_id[$key]['images'] = explode(',', $value['images']);
            }

            $game_additional = $container_games_db->selectGameAdditionalInfo($filter_value);

            if (!empty($game_additional)) {

                foreach ($game_additional as $key => $value) {
                    $game_additional[$key]['images_icon_url'] = explode(',', $value['images_icon_url']);
                    $game_additional[$key]['images_medium_url'] = explode(',', $value['images_medium_url']);
                    $game_additional[$key]['images_screen_url'] = explode(',', $value['images_screen_url']);
                    $game_additional[$key]['images_small_url'] = explode(',', $value['images_small_url']);
                    $game_additional[$key]['images_super_url'] = explode(',', $value['images_super_url']);
                    $game_additional[$key]['images_thumb_url'] = explode(',', $value['images_thumb_url']);
                    $game_additional[$key]['images_tiny_url'] = explode(',', $value['images_tiny_url']);
                    $game_additional[$key]['platforms_abbreviation'] = explode(',', $value['platforms_abbreviation']);
                    $game_additional[$key]['platforms_api_detail_url'] = explode(',', $value['platforms_api_detail_url']);
                    $game_additional[$key]['platforms_id'] = explode(',', $value['platforms_id']);
                    $game_additional[$key]['platforms_name'] = explode(',', $value['platforms_name']);
                    $game_additional[$key]['platforms_site_detail_url'] = explode(',', $value['platforms_site_detail_url']);
                    $game_additional[$key]['similar_games'] = array_combine(array_intersect_key(explode(',', $value['similar_id']), explode(',', $value['similar_name'])), array_intersect_key(explode(',', $value['similar_name']), explode(',', $value['similar_id'])));
                    $game_additional[$key]['videos'] = array_combine(array_intersect_key(explode(',', $value['videos_id']), explode(',', $value['videos_name'])), array_intersect_key(explode(',', $value['videos_name']), explode(',', $value['videos_id'])));
                }
            }

            $app->render('games/game.twig', $data = array(
                'game' => $game_additional,
                'game_additional' => $game_id,
            ));
        }
        else {

            $app->render('games/game.twig', $data = array(

            ));
        }

    }

    /**
     * @Route('/platform/game/:id/asc/')
     * @Name('show.platform.game.by.game id.desc')
     */
    public function showPlatformGameByGameIdAsc($id)
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');

        //First remove whitespaces
        $trim_id = trim($id);

        //Allow only numbers
        $filter_value = preg_replace("/[^0-9]/", "", $trim_id);

        //Fetch all the data for a single game from DB
        $game_id = $container_games_db->selectPlatformGameAsc($filter_value);

        if(!empty($game_id)) {

            foreach ($game_id as $key => $value) {
                $game_id[$key]['images'] = explode(',', $value['images']);
            }

            $game_additional = $container_games_db->selectGameAdditionalInfo($filter_value);

            if (!empty($game_additional)) {

                foreach ($game_additional as $key => $value) {
                    $game_additional[$key]['images_icon_url'] = explode(',', $value['images_icon_url']);
                    $game_additional[$key]['images_medium_url'] = explode(',', $value['images_medium_url']);
                    $game_additional[$key]['images_screen_url'] = explode(',', $value['images_screen_url']);
                    $game_additional[$key]['images_small_url'] = explode(',', $value['images_small_url']);
                    $game_additional[$key]['images_super_url'] = explode(',', $value['images_super_url']);
                    $game_additional[$key]['images_thumb_url'] = explode(',', $value['images_thumb_url']);
                    $game_additional[$key]['images_tiny_url'] = explode(',', $value['images_tiny_url']);
                    $game_additional[$key]['platforms_abbreviation'] = explode(',', $value['platforms_abbreviation']);
                    $game_additional[$key]['platforms_api_detail_url'] = explode(',', $value['platforms_api_detail_url']);
                    $game_additional[$key]['platforms_id'] = explode(',', $value['platforms_id']);
                    $game_additional[$key]['platforms_name'] = explode(',', $value['platforms_name']);
                    $game_additional[$key]['platforms_site_detail_url'] = explode(',', $value['platforms_site_detail_url']);
                    $game_additional[$key]['similar_games'] = array_combine(array_intersect_key(explode(',', $value['similar_id']), explode(',', $value['similar_name'])), array_intersect_key(explode(',', $value['similar_name']), explode(',', $value['similar_id'])));
                    $game_additional[$key]['videos'] = array_combine(array_intersect_key(explode(',', $value['videos_id']), explode(',', $value['videos_name'])), array_intersect_key(explode(',', $value['videos_name']), explode(',', $value['videos_id'])));
                }
            }

            $app->render('games/game.twig', $data = array(
                'game' => $game_additional,
                'game_additional' => $game_id,
            ));
        }
        else {

            $app->render('games/game.twig', $data = array(

            ));
        }
    }


    /**
     * @Route('/platform/:id/:name/asc/(:page)')
     * @Name('show.platform.games.by.platform id.asc')
     */
    public function showGamesByPlatformIdAsc($id)
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');
        $container_platforms_db = $app->container->get('platforms_db');

        //Fetch data for all games by platform id in desc order
        $page = explode('/',$_SERVER['REQUEST_URI']);

        $games_platform = $container_games_db->selectTotalNumberGamesPlatformIdAsc();
        $cnt = count($games_platform);

        $pagination_items_func = 'selectPaginationGamesByPlatformIdAsc';

        $twig = 'platforms/games_platform_id_asc.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_games_db,$app,$id,$popular_platforms);
    }

    public function pagination($page,$count,$twig,$pagination_items_func,$container_db,$app,$platform_id,$platforms)
    {
        $page_count = count($page);

        $value = array_slice($page,($page_count - 1),1);

        $filter_value = stripslashes(htmlentities(trim((string)$value[0])));

        //First remove whitespaces
        $trim_id = trim($platform_id);

        //Allow only numbers
        $id = preg_replace("/[^0-9]/", "", $trim_id);

        if( (empty($filter_value)) ) {
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

            //first 10 db records
            case ( (intval($page_int) == 1) ):
                $limit = 10;

                if($pagination_items_func == 'selectPaginationPlatforms') {

                    $games_db = $container_db->selectPaginationPlatforms($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesByPlatformIdAsc') {

                    $games_db = $container_db->selectPaginationGamesByPlatformIdAsc($id,$limit);
                }

                if($pagination_items_func == 'selectPaginationGamesByPlatformIdDesc') {

                    $games_db = $container_db->selectPaginationGamesByPlatformIdDesc($id,$limit);
                }

                if(!empty($games_db)) {

                    foreach ($games_db as $key => $value) {

                        if (array_key_exists('images', $value) && array_key_exists('platforms_name', $value)) {

                            $games_db[$key]['images'] = explode(',', $value['images']);
                            $games_db[$key]['platforms_name'] = explode(',', $value['platforms_name']);
                        }

                    }


                    $app->render($twig, $data = array(
                        'platforms' => $games_db,
                        'previous' => $previous,
                        'next' => $next,
                        'id' => $id,
                        'name' => (!empty($page[3])) ? $page[3] : '',
                        'popular_platforms' => $platforms,
                    ));
                }

                else {

                    $app->render($twig, $data = array(

                    ));
                }

                break;

            //no more db records to paginate over
            case (  ((intval($page_int) * 10) - $count) > 10 ):

                $app->render($twig, $data = array(
                    'previous' => $previous,
                    'id' => $id,
                    'name' => ( !empty($page[3]) )? $page[3] : '',
                    'popular_platforms' => $platforms,
                ));

                break;

            //last db records
            case ( ( intval($page_int) * 10 ) > $count ):

                $last = ( ($page_int * 10) - $count ); // 4

                $limit = ($page_int * 10);

                if($pagination_items_func == 'selectPaginationPlatforms') {

                    $games_db = $container_db->selectPaginationPlatforms($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesByPlatformIdAsc') {

                    $games_db = $container_db->selectPaginationGamesByPlatformIdAsc($id,$limit);
                }

                if($pagination_items_func == 'selectPaginationGamesByPlatformIdDesc') {

                    $games_db = $container_db->selectPaginationGamesByPlatformIdDesc($id,$limit);
                }

                if(!empty($games_db)) {

                    foreach ($games_db as $key => $value) {

                        if (array_key_exists('images', $value) && array_key_exists('platforms_name', $value)) {

                            $games_db[$key]['images'] = explode(',', $value['images']);
                            $games_db[$key]['platforms_name'] = explode(',', $value['platforms_name']);
                        }

                    }

                    $result = array_slice($games_db, -(10 - $last), (10 - $last), true); // 6

                    $app->render($twig, $data = array(
                        'platforms' => $result,
                        'next' => $next,
                        'previous' => $previous,
                        'id' => $id,
                        'name' => (!empty($page[3])) ? $page[3] : '',
                        'popular_platforms' => $platforms,
                    ));
                }

                else {
                    $app->render($twig, $data = array(

                    ));

                }

                break;

            // 10 db records per page
            case ( ( intval($page_int) * 10 ) < $count ):

                $limit = ($page_int * 10);

                if($pagination_items_func == 'selectPaginationPlatforms') {

                    $games_db = $container_db->selectPaginationPlatforms($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesByPlatformIdAsc') {

                    $games_db = $container_db->selectPaginationGamesByPlatformIdAsc($id,$limit);
                }

                if($pagination_items_func == 'selectPaginationGamesByPlatformIdDesc') {

                    $games_db = $container_db->selectPaginationGamesByPlatformIdDesc($id,$limit);
                }

                if(!empty($games_db)) {

                    foreach ($games_db as $key => $value) {

                        if (array_key_exists('images', $value) && array_key_exists('platforms_name', $value)) {

                            $games_db[$key]['images'] = explode(',', $value['images']);
                            $games_db[$key]['platforms_name'] = explode(',', $value['platforms_name']);
                        }

                    }

                    $result = array_slice($games_db, -10, 10, true);

                    $app->render($twig, $data = array(
                        'platforms' => $result,
                        'previous' => $previous,
                        'next' => $next,
                        'id' => $id,
                        'name' => (!empty($page[3])) ? $page[3] : '',
                        'popular_platforms' => $platforms,
                    ));
                }
                else {

                    $app->render($twig, $data = array(

                    ));
                }

                break;

            // max db records
            case ( ( intval($page_int) * 10 ) == $count ):

                $limit = ($page_int * 10);

                if($pagination_items_func == 'selectPaginationPlatforms') {

                    $games_db = $container_db->selectPaginationPlatforms($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesByPlatformIdAsc') {

                    $games_db = $container_db->selectPaginationGamesByPlatformIdAsc($id,$limit);
                }

                if($pagination_items_func == 'selectPaginationGamesByPlatformIdDesc') {

                    $games_db = $container_db->selectPaginationGamesByPlatformIdDesc($id,$limit);
                }

                if(!empty($games_db)) {

                    foreach ($games_db as $key => $value) {

                        if (array_key_exists('images', $value) && array_key_exists('platforms_name', $value)) {

                            $games_db[$key]['images'] = explode(',', $value['images']);
                            $games_db[$key]['platforms_name'] = explode(',', $value['platforms_name']);
                        }

                    }

                    $result = array_slice($games_db, -10, 10, true);

                    $app->render($twig, $data = array(
                        'platforms' => $result,
                        'previous' => $previous,
                        'next' => $next,
                        'id' => $id,
                        'name' => (!empty($page[3])) ? $page[3] : '',
                        'popular_platforms' => $platforms,
                    ));
                }
                else {

                    $app->render($twig, $data = array(

                    ));
                }

                break;


        }
    }

}