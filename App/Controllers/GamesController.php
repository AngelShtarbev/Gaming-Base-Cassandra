<?php
use Yee\Managers\Controller\Controller;
use Yee\Yee;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;

/**
 * Created by PhpStorm.
 * User: JUNIOR-4
 * Date: 26.8.2016 г.
 * Time: 11:01
 */
class GamesController extends Controller
{
    /**
     * @Route('/games/(:page)')
     * @Name('show.games')
     */
    public function showGames()
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');
        $container_platforms_db = $app->container->get('platforms_db');

        $page = explode('/',$_SERVER['REQUEST_URI']);

        $games = $container_games_db->selectTotalNumberGamesDesc();
        $cnt = count($games);

        $pagination_items_func = 'selectPaginationGamesDesc';

        $twig = 'games/games_date_added_desc.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_games_db,$app,$popular_platforms);
    }

    /**
     * @Route('/games/asc/(:page)')
     * @Name('show.games.asc')
     */
    public function showGamesAsc()
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');
        $container_platforms_db = $app->container->get('platforms_db');

        $page = explode('/',$_SERVER['REQUEST_URI']);

        $games = $container_games_db->selectTotalNumberGamesAsc();
        $cnt = count($games);

        $pagination_items_func = 'selectPaginationGamesAsc';

        $twig = 'games/games_date_added_asc.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_games_db,$app,$popular_platforms);
    }


    /**
     * @Route('/games/title/desc/(:page)')
     * @Name('show.games.title.desc')
     */
    public function showGamesByTitle()
    {
        $app = $this->getYee();
        $container_games_db = $app->container->get('games_db');
        $container_platforms_db = $app->container->get('platforms_db');

        $page = explode('/',$_SERVER['REQUEST_URI']);

        $games = $container_games_db->selectTotalNumberGamesTitleDesc();
        $cnt = count($games);

        $pagination_items_func = 'selectPaginationGamesTitleDesc';

        $twig = 'games/games_title_desc.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_games_db,$app,$popular_platforms);
    }

    /**
     * @Route('/games/title/asc/(:page)')
     * @Name('show.games.title.asc')
     */
    public function showGamesByTitleAsc()
    {
        $app = $this->getYee();
        $container_games_db = $app->container->get('games_db');
        $container_platforms_db = $app->container->get('platforms_db');

        $page = explode('/',$_SERVER['REQUEST_URI']);

        $games = $container_games_db->selectTotalNumberGamesTitleAsc();
        $cnt = count($games);

        $pagination_items_func = 'selectPaginationGamesTitleAsc';

        $twig = 'games/games_title_asc.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_games_db,$app,$popular_platforms);
    }

    /**
     * @Route('/game/date/desc/:id')
     * @Name('show.game.date.added.desc.id.name')
     * @param $id
     */
    public function showByIdDesc($id)
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');

        //First remove whitespaces
        $trim_value = trim($id);

        //Allow only numbers
        $filter_value = preg_replace("/[^0-9]/", "", $trim_value);

        //Fetch all the data for a single game from DB
        $game_id = $container_games_db->selectGameByIdFromGamesDateAddedDesc($filter_value);

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
                    $game_additional[$key]['reviews'] = array_combine(array_intersect_key(explode(',', $value['reviews_id']), explode(',', $value['reviews_name'])), array_intersect_key(explode(',', $value['reviews_name']), explode(',', $value['reviews_id'])));
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
     * @Route('/game/date/asc/:id')
     * @Name('show.game.date.added.asc.id.name')
     * @param $id
     */
    public function showByIdAsc($id)
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');

        //First remove whitespaces
        $trim_value = trim($id);

        //Allow only numbers
        $filter_value = preg_replace("/[^0-9]/", "", $trim_value);

        //Fetch all the data for a single game from DB
        $game_id = $container_games_db->selectGameByIdFromGamesDateAddedAsc($filter_value);

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
                    $game_additional[$key]['reviews'] = array_combine(array_intersect_key(explode(',', $value['reviews_id']), explode(',', $value['reviews_name'])), array_intersect_key(explode(',', $value['reviews_name']), explode(',', $value['reviews_id'])));
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
     * @Route('/game/title/desc/:id')
     * @Name('show.game.id')
     * @param $id
     */
    public function showByIdTitleDesc($id)
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');

        //First remove whitespaces
        $trim_value = trim($id);

        //Allow only numbers
        $filter_value = preg_replace("/[^0-9]/", "", $trim_value);

        //Fetch all the data for a single game from DB
        $game_id = $container_games_db->selectGameByIdFromGamesByTitleDesc($filter_value);

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
                    $game_additional[$key]['reviews'] = array_combine(array_intersect_key(explode(',', $value['reviews_id']), explode(',', $value['reviews_name'])), array_intersect_key(explode(',', $value['reviews_name']), explode(',', $value['reviews_id'])));
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
     * @Route('/game/title/asc/:id')
     * @Name('show.game.id')
     * @param $id
     */
    public function showByIdTitleAsc($id)
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');

        //First remove whitespaces
        $trim_value = trim($id);

        //Allow only numbers
        $filter_value = preg_replace("/[^0-9]/", "", $trim_value);

        //Fetch all the data for a single game from DB
        $game_id = $container_games_db->selectGameByIdFromGamesByTitleAsc($filter_value);

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
                    $game_additional[$key]['reviews'] = array_combine(array_intersect_key(explode(',', $value['reviews_id']), explode(',', $value['reviews_name'])), array_intersect_key(explode(',', $value['reviews_name']), explode(',', $value['reviews_id'])));
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
     * @Route('/game/reviews/desc/:id')
     * @Name('show.game.id')
     * @param $id
     */
    public function showByIdReviewsDesc($id)
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');

        //First remove whitespaces
        $trim_value = trim($id);

        //Allow only numbers
        $filter_value = preg_replace("/[^0-9]/", "", $trim_value);

        //Fetch all the data for a single game from DB
        $game_id = $container_games_db->selectGameByIdFromGamesReviewsDesc($filter_value);

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
                    $game_additional[$key]['reviews'] = array_combine(array_intersect_key(explode(',', $value['reviews_id']), explode(',', $value['reviews_name'])), array_intersect_key(explode(',', $value['reviews_name']), explode(',', $value['reviews_id'])));
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
     * @Route('/game/reviews/asc/:id')
     * @Name('show.game.id')
     * @param $id
     */
    public function showByIdReviewsAsc($id)
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');

        //First remove whitespaces
        $trim_value = trim($id);

        //Allow only numbers
        $filter_value = preg_replace("/[^0-9]/", "", $trim_value);

        //Fetch all the data for a single game from DB
        $game_id = $container_games_db->selectGameByIdFromGamesReviewsAsc($filter_value);

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
                    $game_additional[$key]['reviews'] = array_combine(array_intersect_key(explode(',', $value['reviews_id']), explode(',', $value['reviews_name'])), array_intersect_key(explode(',', $value['reviews_name']), explode(',', $value['reviews_id'])));
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
     * @Route('/games/reviews/desc/(:page)')
     * @Name('show.games.reviews.desc')
     */
    public function showGamesReviewsDesc()
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');
        $container_platforms_db = $app->container->get('platforms_db');

        $page = explode('/',$_SERVER['REQUEST_URI']);

        $games = $container_games_db->selectTotalNumberGamesReviewedDesc();
        $cnt = count($games);

        $pagination_items_func = 'selectPaginationGamesReviewedDesc';

        $twig = 'games/games_reviews_desc.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_games_db,$app,$popular_platforms);
    }

    /**
     * @Route('/games/reviews/asc/(:page)')
     * @Name('show.games.reviews.asc')
     */
    public function showGamesReviewsAsc()
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');
        $container_platforms_db = $app->container->get('platforms_db');

        $page = explode('/',$_SERVER['REQUEST_URI']);

        $games = $container_games_db->selectTotalNumberGamesReviewedAsc();
        $cnt = count($games);

        $pagination_items_func = 'selectPaginationGamesReviewedAsc';

        $twig = 'games/games_reviews_asc.twig';

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        $this->pagination($page,$cnt,$twig,$pagination_items_func,$container_games_db,$app,$popular_platforms);
    }

    /**
     * @Route('/games/additional/')
     * @Name('get.additional.games.info')
     */

    public function additionalInfo()
    {
        $app = $this->getYee();

        $container_games = $app->container->get('games');
        $container_games_db = $app->container->get('games_db');

        $games_ids = $container_games_db->selectGamesIdsFromGamesByPlatformIdNameAsc();

        $sliced_ids = array_slice($games_ids,0,500);

        foreach ($sliced_ids as $key => $value) {
            $games[] = $container_games->getGameById($value['game_id']);
        }

        //Send data for insertion
        $container_games_db->insertGamesAdditionalInfo($games);

    }

    /**
     * @Route('/game/similar/:id')
     * @Name('show.games')
     */

    public function similarGames($id)
    {
        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');
        $container_games = $app->container->get('games');

        //First remove whitespaces
        $trim_value = trim($id);

        //Allow only numbers
        $filter_value = preg_replace("/[^0-9]/", "", $trim_value);

        $game = $container_games->getGameById($filter_value);

        $game_extra = $container_games->getGame($filter_value);


        //Insert similar game
        $container_games_db->insertSimilarGame($game,$game_extra);

        $game_id = $container_games_db->selectGameByIdFromGamesDateAddedDesc($filter_value);

        if(!empty($game_id)) {

            foreach ($game_id as $key => $value) {
                $game_id[$key]['images'] = explode(',', $value['images']);
                $game_id[$key]['platforms_name'] = explode(',', $value['platforms_name']);
            }

            $game_additional = $container_games_db->selectGameAdditionalInfo($filter_value);

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
                $game_additional[$key]['reviews'] = array_combine(array_intersect_key(explode(',', $value['reviews_id']), explode(',', $value['reviews_name'])), array_intersect_key(explode(',', $value['reviews_name']), explode(',', $value['reviews_id'])));
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

    public function pagination($page,$count,$twig,$pagination_items_func,$container_db,$app,$platforms)
    {
        $page_count = count($page);

        $value = array_slice($page,($page_count - 1),1);

        $filter_value = stripslashes(htmlentities(trim((string)$value[0])));

        if( ( empty($filter_value)) ) {
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
            case ( intval($page_int) == 1):
                $limit = 10;

                if($pagination_items_func == 'selectPaginationGamesDesc') {

                    $games_db = $container_db->selectPaginationGamesDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesAsc') {

                    $games_db = $container_db->selectPaginationGamesAsc($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesTitleDesc') {

                    $games_db = $container_db->selectPaginationGamesTitleDesc($limit);
                }
                if($pagination_items_func == 'selectPaginationGamesTitleAsc') {

                    $games_db = $container_db->selectPaginationGamesTitleAsc($limit);
                }
                if($pagination_items_func == 'selectPaginationGamesReviewedDesc') {

                    $games_db = $container_db->selectPaginationGamesReviewedDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesReviewedAsc') {

                    $games_db = $container_db->selectPaginationGamesReviewedAsc($limit);
                }

                foreach ($games_db as $key => $value) {
                    $games_db[$key]['images'] = explode(',',$value['images']);
                    $games_db[$key]['platforms_name'] = explode(',',$value['platforms_name']);
                }

                $app->render($twig, $data = array(
                    'games' => $games_db,
                    'previous' => $previous,
                    'next' => $next,
                    'platforms' => $platforms,
                ));

                break;

            //no more db records to paginate over
            case (  ((intval($page_int) * 10) - $count) > 10 ):

                $app->render($twig, $data = array(
                    'previous' => $previous,
                    'platforms' => $platforms,
                ));

                break;

            //last db records
            case (  (intval($page_int) * 10 ) > $count ):

                $last = ( ($page_int * 10) - $count ); // 4

                $limit = ($page_int * 10);

                if($pagination_items_func == 'selectPaginationGamesDesc') {

                    $games_db = $container_db->selectPaginationGamesDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesAsc') {

                    $games_db = $container_db->selectPaginationGamesAsc($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesTitleDesc') {

                    $games_db = $container_db->selectPaginationGamesTitleDesc($limit);
                }
                if($pagination_items_func == 'selectPaginationGamesTitleAsc') {

                    $games_db = $container_db->selectPaginationGamesTitleAsc($limit);
                }
                if($pagination_items_func == 'selectPaginationGamesReviewedDesc') {

                    $games_db = $container_db->selectPaginationGamesReviewedDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesReviewedAsc') {

                    $games_db = $container_db->selectPaginationGamesReviewedAsc($limit);
                }

                foreach ($games_db as $key => $value) {
                    $games_db[$key]['images'] = explode(',',$value['images']);
                    $games_db[$key]['platforms_name'] = explode(',',$value['platforms_name']);
                }

                $result = array_slice($games_db, -(10 - $last) , (10 - $last), true); // 6

                $app->render($twig, $data = array(
                    'games' => $result,
                    'previous' => $previous,
                    'next' => $next,
                    'platforms' => $platforms,
                ));

                break;

            // 10 db records per page
            case ( (intval($page_int) * 10 ) < $count ):

                $limit = ($page_int * 10);

                if($pagination_items_func == 'selectPaginationGamesDesc') {

                    $games_db = $container_db->selectPaginationGamesDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesAsc') {

                    $games_db = $container_db->selectPaginationGamesAsc($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesTitleDesc') {

                    $games_db = $container_db->selectPaginationGamesTitleDesc($limit);
                }
                if($pagination_items_func == 'selectPaginationGamesTitleAsc') {

                    $games_db = $container_db->selectPaginationGamesTitleAsc($limit);
                }
                if($pagination_items_func == 'selectPaginationGamesReviewedDesc') {

                    $games_db = $container_db->selectPaginationGamesReviewedDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesReviewedAsc') {

                    $games_db = $container_db->selectPaginationGamesReviewedAsc($limit);
                }

                foreach ($games_db as $key => $value) {
                    $games_db[$key]['images'] = explode(',',$value['images']);
                    $games_db[$key]['platforms_name'] = explode(',',$value['platforms_name']);
                }

                $result = array_slice($games_db, -10, 10, true);

                $app->render($twig, $data = array(
                    'games' => $result,
                    'previous' => $previous,
                    'next' => $next,
                    'platforms' => $platforms,
                ));

                break;

            // max db records
            case ( (intval($page_int) * 10 ) == $count ):

                $limit = ($page_int * 10);

                if($pagination_items_func == 'selectPaginationGamesDesc') {

                    $games_db = $container_db->selectPaginationGamesDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesAsc') {

                    $games_db = $container_db->selectPaginationGamesAsc($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesTitleDesc') {

                    $games_db = $container_db->selectPaginationGamesTitleDesc($limit);
                }
                if($pagination_items_func == 'selectPaginationGamesTitleAsc') {

                    $games_db = $container_db->selectPaginationGamesTitleAsc($limit);
                }
                if($pagination_items_func == 'selectPaginationGamesReviewedDesc') {

                    $games_db = $container_db->selectPaginationGamesReviewedDesc($limit);
                }

                if($pagination_items_func == 'selectPaginationGamesReviewedAsc') {

                    $games_db = $container_db->selectPaginationGamesReviewedAsc($limit);
                }

                foreach ($games_db as $key => $value) {
                    $games_db[$key]['images'] = explode(',',$value['images']);
                    $games_db[$key]['platforms_name'] = explode(',',$value['platforms_name']);
                }

                $result = array_slice($games_db, -10, 10, true);

                $app->render($twig, $data = array(
                    'games' => $result,
                    'previous' => $previous,
                    'next' => $next,
                    'platforms' => $platforms,
                ));

                break;
        }
    }
}