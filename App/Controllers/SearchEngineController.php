<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-2
 * Date: 9.9.2016 г.
 * Time: 17:17
 */

use Yee\Yee;
use Yee\Managers\RoutingCacheManager;
use Yee\Managers\CacheManager;


class SearchEngineController extends \Yee\Managers\Controller\Controller {

    /**
     * @Route('/search/(:page)/')
     * @Name('search.get')
     * @Method('GET')
     */

    public function search()
    {
        $app = $this->getYee();
        $container_games_db = $app->container->get('games_db');
        $container_platforms_db = $app->container->get('platforms_db');

        //Get input value and first remove whitespaces
        $search = trim($app->request()->get('search'));

        //Perform regex match and replace
        $filter_value = preg_replace("/[^a-zA-Z0-9\s]/", "'", $search);

        $popular_platforms = $container_platforms_db->selectPopularPlatforms();

        //Use the filtered value
        //If an empty search input field was sent return error message
        if(empty($filter_value)) {
            $message = 'No results have been found';
        }

        //If search input field is not empty
        elseif(!empty($filter_value)) {

            //Search for a game
            $games = $container_games_db->selectSearchResults($filter_value);

            $result = $games;

            //If no records for a game where found in db return error message
            if(empty($result[0]) ) {
                $message = 'No results have been found';
            }

            //If there are results returned from db
            if (!empty($result[0])) {

                foreach ($result as $key => $value) {
                        $final[] = $value;
                }

                foreach ($final as $key => $value) {
                            $final[$key]['images'] = explode(',', ($value['images']));
                            $final[$key]['platforms_name'] = explode(',', ($value['platforms_name']));
                }

            }

        }

        //Return found results and pass them for pagination
        if(isset($final)) {

            $pagination = $this->pagination($final);

            //If no paginated games are returned
            if( empty($pagination['pagination_games']) ) {
                $pagination['next'] = null;
            }

            $app->render('search/search.twig', $data = array(
                'games' =>  $pagination['pagination_games'],
                'previous' => $pagination['previous'],
                'next' => $pagination['next'],
                'last_uri' => $pagination['last_uri'],
                'popular_platforms' => $popular_platforms,
            ));
        }

        //Return error message
        if(isset($message)) {
            $app->render('search/search.twig', $data = array(
                'message' =>  $message,
                'popular_platforms' => $popular_platforms,
            ));
        }
    }

    /**
     * @Route('/search/game/:id/')
     * @Name('show.games.reviews.asc')
     */

    public function showGame($id) {

        $app = $this->getYee();

        $container_games_db = $app->container->get('games_db');

        //First remove whitespaces
        $trim_value = trim($id);

        //Allow only numbers
        $filter_value = preg_replace("/[^0-9]/", "", $trim_value);

        //Collection of all found elements
        $game[] = $container_games_db->selectSearchedGame($filter_value);

        //Make final manipulations
        foreach ($game as $key => $value) {
            if(is_array($value)) {

                $final = $value;

                foreach ($final as $key1 => $value1) {
                    $final[$key1]['images'] = explode(',', ($value1['images']));
                    $final[$key1]['platforms_name'] = explode(',', ($value1['platforms_name']));
                }
            }
        }

        $game_additional = $container_games_db->selectGameAdditionalInfo($filter_value);

        if(!empty($game_additional)) {

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
            'game_additional' => $final,
        ));
    }

    public function searchGame($table,$searched_game) {

        $result = array();

        foreach ($table as $key => $value) {
            if (preg_match('/\b'.$searched_game.'\b/i', $value['name'])) {
                $result = $value;
            }
        }

        return $result;
    }

    public function unique_inner($array)
    {

        //Remove duplicate elements from inner arrays
        foreach ($array as $key => $value) {

            $games_ids_first[] = $value['game_id'];

            $unique_ids_first = array_unique($games_ids_first);

        }

        foreach ($unique_ids_first as $keys => $values ) {
            $final[] = $array[$keys];
        }
        //End

        return $final;
    }

    public function pagination($games)
    {
        $page = explode('/',$_SERVER['REQUEST_URI']);

        $page_count = count($page);

        $last_uri = array_slice($page,($page_count - 1),1);

        if(isset($page[2])) {

            $count_items = count($games);

            $filter_value = stripslashes(htmlentities(trim($page[2])));

            if( (!is_numeric($filter_value)) || ($filter_value < 0) || ($filter_value == 0) ) {
                $page_int = 1;
            }
            else {
                $page_int = $filter_value;
            }

            $previous = $page_int - 1;
            $next = $page_int + 1;

            switch ($page_int) {

                //firts 10 items to paginate over
                case( intval($page_int) == 1):

                $pagination_games = array_slice($games,0,10);

                break;

                //paginate over every 10 items
                case( (intval($page_int) * 10 ) < $count_items ):

                $limit = (intval($page_int) * 10 );

                $pagination_games = array_slice($games,-$limit,10);

                break;

                //last items to be paginated
                case( (intval($page_int) * 10 ) > $count_items ):

                $last = ( ($page_int * 10) - $count_items );

                $pagination_games = array_slice($games, -(10 - $last) , (10 - $last));

                break;

                // max db records
                case ( (intval($page_int) * 10 ) == $count_items ):

                $pagination_games = array_slice($games, -10, 10);

                break;

                //no more items to paginate over
                case (  ((intval($page_int) * 10) - $count_items) > 10 ):

                break;

            }

        }

        return $result = array(
            'pagination_games' => $pagination_games,
            'previous' => $previous,
            'next' => $next,
            'last_uri' => $last_uri
        );
    }
}