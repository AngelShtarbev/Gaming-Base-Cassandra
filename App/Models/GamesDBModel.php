<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-2
 * Date: 1.9.2016 г.
 * Time: 13:12
 */

namespace App\Models;

use App\Interfaces\GamesDBRepo;
use phpDocumentor\Reflection\Types\Array_;

class GamesDBModel implements GamesDBRepo {

    private $games_by_date_added_desc = 'games_by_date_added_desc';
    private $games_by_date_added_asc = 'games_by_date_added_asc';
    private $games_by_title_desc = 'games_by_title_desc';
    private $games_by_title_asc = 'games_by_title_asc';
    private $games_by_reviews_desc = 'games_by_reviews_desc';
    private $games_by_reviews_asc = 'games_by_reviews_asc';
    private $games_by_platform_id_name_desc = 'games_by_platform_id_name_desc';
    private $games_by_platform_id_name_asc = 'games_by_platform_id_name_asc';
    private $games_desc = 'games_desc';
    private $platforms_games_by_game_id_desc = 'platforms_games_by_game_id_desc';
    private $platforms_games_by_game_id_asc = 'platforms_games_by_game_id_asc';
    private $platforms_by_date_added_desc = 'platforms_by_date_added_desc';
    private $games_search_engine = 'games_search_engine';
    private $games_additional_info = 'games_additional_info';
    private $limit_rows = 10;
    private $limit_home_games = 10;

    public function selectSearchResults($searched_item) {

        $app = \Yee\Yee::getInstance();

        $words = explode(" ",$searched_item);

        $count = count($words);

        if($count == 1) {

            $data = array('solr_query' => 'name:*'.$words[0].'* ');
            $query = 'SELECT * FROM games_search_engine WHERE solr_query = ?';
            $games = $app->db['cassandra']->rawQuery( $query , 'games_search_engine', $data);
        }

        if($count > 1) {

            //To satisfy CQL Solr Query for phrase search searched value must by double quoted
            $data = array('solr_query' => 'name:"'.$searched_item.'" ');
            $query = 'SELECT * FROM games_search_engine WHERE solr_query = ?';
            $games = $app->db['cassandra']->rawQuery( $query , 'games_search_engine', $data);
        }

        return $games;
    }

    public function selectSearchedGame($id) {

        $app = \Yee\Yee::getInstance();

        $game = $app->db['cassandra']->where('game_id', intval($id))->get($this->games_search_engine);

        return $game;
    }

    public function selectGameAdditionalInfo($id) {

        $app = \Yee\Yee::getInstance();

        $game_additional = $app->db['cassandra']->where('game_id', intval($id))->get($this->games_additional_info);

        return $game_additional;
    }

    public function selectAllGamesFromDBASC()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_date_added_asc,$this->limit_rows);
        return $games;
    }

    public function selectTotalNumberGamesDesc()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_date_added_desc);
        return $games;
    }

    public function selectTotalNumberGamesAsc()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_date_added_asc);
        return $games;
    }

    public function selectTotalNumberGamesTitleDesc()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_title_desc);
        return $games;
    }

    public function selectTotalNumberGamesTitleAsc()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_title_asc);
        return $games;
    }

    public function selectTotalNumberGamesReviewedDesc()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_reviews_desc);
        return $games;
    }

    public function selectTotalNumberGamesReviewedAsc()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_reviews_asc);
        return $games;
    }

    public function selectTotalNumberGamesPlatformIdAsc()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_platform_id_name_asc);
        return $games;
    }

    public function selectTotalNumberGamesPlatformIdDesc()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_platform_id_name_desc);
        return $games;
    }

    public function selectPaginationGamesDesc($limit)
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_date_added_desc,$limit);
        return $games;
    }

    public function selectPaginationGamesAsc($limit)
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_date_added_asc,$limit);
        return $games;
    }

    public function selectPaginationGamesTitleDesc($limit)
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_title_desc,$limit);
        return $games;
    }

    public function selectPaginationGamesTitleAsc($limit)
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_title_asc,$limit);
        return $games;
    }

    public function selectPaginationGamesReviewedDesc($limit)
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_reviews_desc,$limit);
        return $games;
    }

    public function selectPaginationGamesReviewedAsc($limit)
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_reviews_asc,$limit);
        return $games;
    }

    public function selectHomePageGamesFromDB()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_date_added_desc,$this->limit_home_games);
        return $games;
    }

    public function selectPaginationGamesByPlatformIdAsc($platform_id,$limit)
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->where('platforms_id', intval($platform_id))->get($this->games_by_platform_id_name_asc,$limit);
        return $games;
    }

    public function selectPaginationGamesByPlatformIdDesc($platform_id,$limit)
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->where('platforms_id', intval($platform_id))->get($this->games_by_platform_id_name_desc,$limit);
        return $games;
    }

    public function selectPlatformGameDesc($game_id)
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->where('game_id', intval($game_id))->get($this->platforms_games_by_game_id_desc);
        return $games;

    }

    public function selectPlatformGameAsc($game_id)
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->where('game_id', intval($game_id))->get($this->platforms_games_by_game_id_asc);
        return $games;

    }


    public function selectAllGamesByTitleFromDBDESC()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_title_desc);
        return $games;
    }

    public function selectAllGamesByTitleFromDBASC()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_title_asc);
        return $games;
    }


    public function selectAllFromGamesReviewsDesc()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_reviews_desc,$this->limit_rows);
        return $games;
    }


    public function selectAllFromGamesReviewsAsc()
    {
        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->get($this->games_by_reviews_asc,$this->limit_rows);
        return $games;
    }

    public function selectGamesIdsFromGamesByDateAddedDesc()
    {
        $app = \Yee\Yee::getInstance();

        $cols = Array("game_id");
        $games_ids = $app->db['cassandra']->get($this->games_by_date_added_desc,null,$cols);

        return $games_ids;

    }

   public function selectGamesIdsFromGamesByDateAddedAsc()
   {
       $app = \Yee\Yee::getInstance();

       $cols = Array("game_id");
       $games_ids = $app->db['cassandra']->get($this->games_by_date_added_asc,null,$cols);

       return $games_ids;
   }

    public function selectGamesIdsFromGamesByReviewsDesc()
    {
        $app = \Yee\Yee::getInstance();

        $cols = Array("game_id");
        $games_ids = $app->db['cassandra']->get($this->games_by_reviews_desc,null,$cols);

        return $games_ids;
    }

    public function selectGamesIdsFromGamesByReviewsAsc()
    {
        $app = \Yee\Yee::getInstance();

        $cols = Array("game_id");
        $games_ids = $app->db['cassandra']->get($this->games_by_reviews_asc,null,$cols);

        return $games_ids;
    }

    public function selectGamesIdsFromGamesByTitleDesc()
    {
        $app = \Yee\Yee::getInstance();

        $cols = Array("game_id");
        $games_ids = $app->db['cassandra']->get($this->games_by_title_desc,null,$cols);

        return $games_ids;
    }

    public function selectGamesIdsFromGamesByTitlesAsc()
    {
        $app = \Yee\Yee::getInstance();

        $cols = Array("game_id");
        $games_ids = $app->db['cassandra']->get($this->games_by_title_asc,null,$cols);

        return $games_ids;
    }

    public function selectGamesIdsFromGamesByPlatformIdNameDesc() {
        $app = \Yee\Yee::getInstance();

        $cols = Array("game_id");
        $games_ids = $app->db['cassandra']->get($this->games_by_platform_id_name_desc,null,$cols);

        return $games_ids;
    }

    public function selectGamesIdsFromGamesByPlatformIdNameAsc()
    {
        $app = \Yee\Yee::getInstance();

        $cols = Array("game_id");
        $games_ids = $app->db['cassandra']->get($this->games_by_platform_id_name_asc,null,$cols);

        return $games_ids;
    }

    public function syncApiDataWithDBDataPlatformGames($games)
    {
        $app = \Yee\Yee::getInstance();

        $db = $app->db['cassandra'];

        foreach ($games as $outer_key => $outer_value) {
        if (!empty($games[$outer_key]['platforms'])) {
            foreach ($games[$outer_key]['platforms'] as $inner_key => $inner_value) {

                $data[] = array(
                    'platforms_id' => $inner_value['id'],
                    'date_added' => $outer_value['date_added'],
                    'deck' => $outer_value['deck'],
                    'description' => $outer_value['description'],
                    'game_id' => $outer_value['id'],
                    'image_icon_url' => $outer_value['image']['icon_url'],
                    'image_medium_url' => $outer_value['image']['medium_url'],
                    'image_screen_url' => $outer_value['image']['screen_url'],
                    'image_small_url' => $outer_value['image']['small_url'],
                    'image_super_url' => $outer_value['image']['super_url'],
                    'image_thumb_url' => $outer_value['image']['thumb_url'],
                    'image_tiny_url' => $outer_value['image']['tiny_url'],
                    'name' => $outer_value['name'],
                    'platforms_name' => $inner_value['name']
                );

            }
        }

        else {

            $data[] = array(
                'date_added' => $outer_value['date_added'],
                'deck' => $outer_value['deck'],
                'description' => $outer_value['description'],
                'game_id' => $outer_value['id'],
                'image_icon_url' => $outer_value['image']['icon_url'],
                'image_medium_url' => $outer_value['image']['medium_url'],
                'image_screen_url' => $outer_value['image']['screen_url'],
                'image_small_url' => $outer_value['image']['small_url'],
                'image_super_url' => $outer_value['image']['super_url'],
                'image_thumb_url' => $outer_value['image']['thumb_url'],
                'image_tiny_url' => $outer_value['image']['tiny_url'],
                'name' => $outer_value['name'],
            );
        }
    }

        //Insert every array element in DB
        foreach ($data as  $value) {

            $db->insert($this->games_by_platform_id_name_asc, $value);

        }


}

    public function insertSimilarGame($game,$game_additional)
    {

        $app = \Yee\Yee::getInstance();

        $db = $app->db['cassandra'];

        $tables = array('games_by_date_added_asc','games_by_date_added_desc','games_by_reviews_asc','games_by_reviews_desc',
                        'games_by_title_asc','games_by_title_desc','games_search_engine');


        //Prepare array for insertion using the tables names contained in array 'tables'
        $data = array(
            'date_added' => $game_additional['date_added'],
            'deck' => $game_additional['deck'],
            'description' => $game_additional['description'],
            'game_id' => $game_additional['id'],
            'platforms_id' => implode(",",array_column($game_additional['platforms'],'id')),
            'platforms_name' => implode(",",array_column($game_additional['platforms'],'name')),
            'images' => implode(",",$game_additional['image']),
            'name' => $game_additional['name'],
        );
        //End

        //Prepare array for insertion in tables 'games_by_platform_id_name_asc' & 'games_by_platform_id_name_desc'
        $games_platforms_ids = array_column($game_additional['platforms'],'id');

        $games_platforms_names = implode(',',array_column($game_additional['platforms'],'name'));

        foreach ($games_platforms_ids as $key => $value) {
            $insert[] =  array(
                'date_added' => $game_additional['date_added'],
                'deck' => $game_additional['deck'],
                'description' => $game_additional['description'],
                'game_id' => $game_additional['id'],
                'images' => implode(",",$game_additional['image']),
                'name' => $game_additional['name'],
                'platforms_id' => $value,
                'platforms_name' => $games_platforms_names
            );
        }
        //End

        //Make insert first in tables contained in array $tables
        foreach ($tables as $value) {
            $db->insert($this->$value, $data);
        }

        //Make insert in tables 'games_by_platform_id_name_asc' & 'games_by_platform_id_name_desc'
        foreach ($insert as $key => $element) {
            $db->insert($this->games_by_platform_id_name_desc, $element);
        }

        foreach ($insert as $key => $element) {
            $db->insert($this->games_by_platform_id_name_asc, $element);
        }

        //Make insert in table games_additional_info for all the additional images,videos,reviews ect.
        $this->insertGamesAdditionalInfo($game);

        //End

    }

    public function insertGamesAdditionalInfo($games)
    {
        $app = \Yee\Yee::getInstance();

        $db = $app->db['cassandra'];

        if(!empty($games[0])) {

            foreach ($games as $outer_key => $outer_value) {

                $data[] = array(
                    'game_id' => (empty($outer_value['id']) || ($outer_value['id'] == null)) ? '' : $outer_value['id'],
                    'date_added' => (empty($outer_value['date_added']) || ($outer_value['date_added'] == null)) ? '' : $outer_value['date_added'],
                    'deck' => (empty($outer_value['deck']) || ($outer_value['deck'] == null)) ? '' : $outer_value['deck'],
                    'description' => (empty($outer_value['description']) || ($outer_value['description'] == null)) ? '' : $outer_value['description'],

                    'images_icon_url' => (empty($outer_value['images']) || ($outer_value['images'] == null)) ? '' : implode(",", array_column($outer_value['images'], 'icon_url')),
                    'images_medium_url' => (empty($outer_value['images']) || ($outer_value['images'] == null)) ? '' : implode(",", array_column($outer_value['images'], 'medium_url')),
                    'images_screen_url' => (empty($outer_value['images']) || ($outer_value['images'] == null)) ? '' : implode(",", array_column($outer_value['images'], 'screen_url')),
                    'images_small_url' => (empty($outer_value['images']) || ($outer_value['images'] == null)) ? '' : implode(",", array_column($outer_value['images'], 'small_url')),
                    'images_super_url' => (empty($outer_value['images']) || ($outer_value['images'] == null)) ? '' : implode(",", array_column($outer_value['images'], 'super_url')),
                    'images_thumb_url' => (empty($outer_value['images']) || ($outer_value['images'] == null)) ? '' : implode(",", array_column($outer_value['images'], 'thumb_url')),
                    'images_tiny_url' => (empty($outer_value['images']) || ($outer_value['images'] == null)) ? '' : implode(",", array_column($outer_value['images'], 'tiny_url')),

                    'name' => (empty($outer_value['name']) || ($outer_value['name'] == null)) ? '' : $outer_value['name'],

                    'platforms_api_detail_url' => (empty($outer_value['platforms']) || ($outer_value['platforms'] == null)) ? '' : implode(",", array_column($outer_value['platforms'], 'api_detail_url')),
                    'platforms_id' => (empty($outer_value['platforms']) || ($outer_value['platforms'] == null)) ? '' : implode(",", array_column($outer_value['platforms'], 'id')),
                    'platforms_name' => (empty($outer_value['platforms']) || ($outer_value['platforms'] == null)) ? '' : implode(",", array_column($outer_value['platforms'], 'name')),
                    'platforms_site_detail_url' => (empty($outer_value['platforms']) || ($outer_value['platforms'] == null)) ? '' : implode(",", array_column($outer_value['platforms'], 'site_detail_url')),
                    'platforms_abbreviation' => (empty($outer_value['platforms']) || ($outer_value['platforms'] == null)) ? '' : implode(",", array_column($outer_value['platforms'], 'abbreviation')),


                    'similar_api_detail_url' => (empty($outer_value['similar_games']) || ($outer_value['similar_games'] == null)) ? '' : implode(",", array_column($outer_value['similar_games'], 'api_detail_url')),
                    'similar_id' => (empty($outer_value['similar_games']) || ($outer_value['similar_games'] == null)) ? '' : implode(",", array_column($outer_value['similar_games'], 'id')),
                    'similar_name' => (empty($outer_value['similar_games']) || ($outer_value['similar_games'] == null)) ? '' : implode(",", array_column($outer_value['similar_games'], 'name')),
                    'similar_site_detail_url' => (empty($outer_value['similar_games']) || ($outer_value['similar_games'] == null)) ? '' : implode(",", array_column($outer_value['similar_games'], 'site_detail_url')),

                    'videos_api_detail_url' => (empty($outer_value['videos']) || ($outer_value['videos'] == null)) ? '' : implode(",", array_column($outer_value['videos'], 'api_detail_url')),
                    'videos_id' => (empty($outer_value['videos']) || ($outer_value['videos'] == null)) ? '' : implode(",", array_column($outer_value['videos'], 'id')),
                    'videos_name' => (empty($outer_value['videos']) || ($outer_value['videos'] == null)) ? '' : implode(",", array_column($outer_value['videos'], 'name')),
                    'videos_site_detail_url' => (empty($outer_value['videos']) || ($outer_value['videos'] == null)) ? '' : implode(",", array_column($outer_value['videos'], 'site_detail_url')),

                    'reviews_api_detail_url' => (empty($outer_value['reviews']) || ($outer_value['reviews'] == null)) ? '' : implode(",", array_column($outer_value['reviews'], 'api_detail_url')),
                    'reviews_id' => (empty($outer_value['reviews']) || ($outer_value['reviews'] == null)) ? '' : implode(",", array_column($outer_value['reviews'], 'id')),
                    'reviews_name' => (empty($outer_value['reviews']) || ($outer_value['reviews'] == null)) ? '' : implode(",", array_column($outer_value['reviews'], 'name')),
                    'reviews_site_detail_url' => (empty($outer_value['reviews']) || ($outer_value['reviews'] == null)) ? '' : implode(",", array_column($outer_value['reviews'], 'site_detail_url')),
                );

            }

            //Insert every array element in DB
            foreach ($data as $key => $value) {

                $dataInsert = array(
                    'game_id' => $value['game_id'],
                    'date_added' => $value['date_added'],
                    'deck' => $value['deck'],
                    'description' => $value['description'],
                    'images_icon_url' => $value['images_icon_url'],
                    'images_medium_url' => $value['images_medium_url'],
                    'images_screen_url' => $value['images_screen_url'],
                    'images_small_url' => $value['images_small_url'],
                    'images_super_url' => $value['images_super_url'],
                    'images_thumb_url' => $value['images_thumb_url'],
                    'images_tiny_url' => $value['images_tiny_url'],
                    'name' => $value['name'],
                    'platforms_api_detail_url' => $value['platforms_api_detail_url'],
                    'platforms_id' => $value['platforms_id'],
                    'platforms_name' => $value['platforms_name'],
                    'platforms_site_detail_url' => $value['platforms_site_detail_url'],
                    'platforms_abbreviation' => $value['platforms_abbreviation'],
                    'similar_api_detail_url' => $value['similar_api_detail_url'],
                    'similar_id' => $value['similar_id'],
                    'similar_name' => $value['similar_name'],
                    'similar_site_detail_url' => $value['similar_site_detail_url'],
                    'videos_api_detail_url' => $value['videos_api_detail_url'],
                    'videos_id' => $value['videos_id'],
                    'videos_name' => $value['videos_name'],
                    'videos_site_detail_url' => $value['videos_site_detail_url'],
                    'reviews_api_detail_url' => $value['reviews_api_detail_url'],
                    'reviews_id' => $value['reviews_id'],
                    'reviews_name' => $value['reviews_name'],
                    'reviews_site_detail_url' => $value['reviews_site_detail_url'],
                );

                $db->insert($this->games_additional_info, $dataInsert);
            }
        }

        else {

            $data = array(
                'game_id' => (empty($games['id']) || ($games['id'] == null)) ? '' : $games['id'],
                'date_added' => (empty($games['date_added']) || ($games['date_added'] == null)) ? '' : $games['date_added'],
                'deck' => (empty($games['deck']) || ($games['deck'] == null)) ? '' : $games['deck'],
                'description' => (empty($games['description']) || ($games['description'] == null)) ? '' : $games['description'],

                'images_icon_url' => (empty($games['images']) || ($games['images'] == null)) ? '' : implode(",", array_column($games['images'], 'icon_url')),
                'images_medium_url' => (empty($games['images']) || ($games['images'] == null)) ? '' : implode(",", array_column($games['images'], 'medium_url')),
                'images_screen_url' => (empty($games['images']) || ($games['images'] == null)) ? '' : implode(",", array_column($games['images'], 'screen_url')),
                'images_small_url' => (empty($games['images']) || ($games['images'] == null)) ? '' : implode(",", array_column($games['images'], 'small_url')),
                'images_super_url' => (empty($games['images']) || ($games['images'] == null)) ? '' : implode(",", array_column($games['images'], 'super_url')),
                'images_thumb_url' => (empty($games['images']) || ($games['images'] == null)) ? '' : implode(",", array_column($games['images'], 'thumb_url')),
                'images_tiny_url' => (empty($games['images']) || ($games['images'] == null)) ? '' : implode(",", array_column($games['images'], 'tiny_url')),

                'name' => (empty($games['name']) || ($games['name'] == null)) ? '' : $games['name'],

                'platforms_api_detail_url' => (empty($games['platforms']) || ($games['platforms'] == null)) ? '' : implode(",", array_column($games['platforms'], 'api_detail_url')),
                'platforms_id' => (empty($games['platforms']) || ($games['platforms'] == null)) ? '' : implode(",", array_column($games['platforms'], 'id')),
                'platforms_name' => (empty($games['platforms']) || ($games['platforms'] == null)) ? '' : implode(",", array_column($games['platforms'], 'name')),
                'platforms_site_detail_url' => (empty($games['platforms']) || ($games['platforms'] == null)) ? '' : implode(",", array_column($games['platforms'], 'site_detail_url')),
                'platforms_abbreviation' => (empty($games['platforms']) || ($games['platforms'] == null)) ? '' : implode(",", array_column($games['platforms'], 'abbreviation')),


                'similar_api_detail_url' => (empty($games['similar_games']) || ($games['similar_games'] == null)) ? '' : implode(",", array_column($games['similar_games'], 'api_detail_url')),
                'similar_id' => (empty($games['similar_games']) || ($games['similar_games'] == null)) ? '' : implode(",", array_column($games['similar_games'], 'id')),
                'similar_name' => (empty($games['similar_games']) || ($games['similar_games'] == null)) ? '' : implode(",", array_column($games['similar_games'], 'name')),
                'similar_site_detail_url' => (empty($games['similar_games']) || ($games['similar_games'] == null)) ? '' : implode(",", array_column($games['similar_games'], 'site_detail_url')),

                'videos_api_detail_url' => (empty($games['videos']) || ($games['videos'] == null)) ? '' : implode(",", array_column($games['videos'], 'api_detail_url')),
                'videos_id' => (empty($games['videos']) || ($games['videos'] == null)) ? '' : implode(",", array_column($games['videos'], 'id')),
                'videos_name' => (empty($games['videos']) || ($games['videos'] == null)) ? '' : implode(",", array_column($games['videos'], 'name')),
                'videos_site_detail_url' => (empty($games['videos']) || ($games['videos'] == null)) ? '' : implode(",", array_column($games['videos'], 'site_detail_url')),

                'reviews_api_detail_url' => (empty($games['reviews']) || ($games['reviews'] == null)) ? '' : implode(",", array_column($games['reviews'], 'api_detail_url')),
                'reviews_id' => (empty($games['reviews']) || ($games['reviews'] == null)) ? '' : implode(",", array_column($games['reviews'], 'id')),
                'reviews_name' => (empty($games['reviews']) || ($games['reviews'] == null)) ? '' : implode(",", array_column($games['reviews'], 'name')),
                'reviews_site_detail_url' => (empty($games['reviews']) || ($games['reviews'] == null)) ? '' : implode(",", array_column($games['reviews'], 'site_detail_url')),
            );

            $db->insert($this->games_additional_info, $data);
        }
    }

    public function syncApiDataWithDBData($games)
    {
        $app = \Yee\Yee::getInstance();

        $db = $app->db['cassandra'];

        //Extract all the data without the platforms array
        foreach ($games as $outer_key => $game) {

            $games_outer[] = array(
                'date_added' => $game['date_added'],
                'deck' => $game['deck'],
                //'description' => $game['description'],
                'game_id' => $game['id'],
                'images' => array(
                    $game['image']['icon_url'],
                    $game['image']['medium_url'],
                    $game['image']['screen_url'],
                    $game['image']['small_url'],
                    $game['image']['super_url'],
                    $game['image']['thumb_url'],
                    $game['image']['tiny_url'],
                ),
                'name' => $game['name'],
            );
        }

                //Extract games platforms names
                foreach ($games as $outer_key => $game) {
                    if (!empty($games[$outer_key]['platforms'])) {
                        foreach ($games[$outer_key]['platforms'] as $inner_key => $inner_value) {
                            $games_platforms_names[$outer_key][] = $inner_value['name'];
                        }
                    }
                    else {
                        $games_platforms_names[$outer_key][] = null;
                    }
                }

                //Extract games platforms ids
                foreach ($games as $outer_key => $game) {
                    if (!empty($games[$outer_key]['platforms'])) {
                        foreach ($games[$outer_key]['platforms'] as $inner_key => $inner_value) {
                            $games_platforms_ids[$outer_key][] = $inner_value['id'];
                        }
                    }
                    else {
                        $games_platforms_ids[$outer_key][] = null;
                    }
                }

                //Merge the extracted platforms with the main array 'games_db'
                for ($i = 0; $i < (count($games_outer)); $i++) {
                    $games_outer[$i]['platforms_names'] = $games_platforms_names[$i];
                    $games_outer[$i]['platforms_ids'] = $games_platforms_ids[$i];
                }


        //Make additional manipulations before insertion
        foreach ($games_outer as $key => $final) {

            switch ($final) {

                case in_array(null,$final['images']):
                    $insert[] = Array(
                        'name' => $final['name'],
                        'date_added' => $final['date_added'],
                        'deck' => $final['deck'],
                         //'description' => $final['description'],
                        'game_id' => $final['game_id'],
                        'images' => null,
                        'platforms_id' => implode(",", $final['platforms_ids']),
                        'platforms_name' => implode(",", $final['platforms_names'])
                    );
                    break;

                case in_array(null,$final['platforms_ids']):
                    $insert[] = Array(
                        'game_id' => $final['game_id'],
                        'name' => $final['name'],
                        'date_added' => $final['date_added'],
                        'deck' => $final['deck'],
                        //'description' => $final['description'],
                        'images' => implode(",", $final['images']),
                        'platforms_id' => null,
                        'platforms_name' => implode(",", $final['platforms_names'])
                    );
                    break;

                case in_array(null,$final['platforms_names']):
                    $insert[] = Array(
                        'game_id' => $final['game_id'],
                        'name' => $final['name'],
                        'date_added' => $final['date_added'],
                        'deck' => $final['deck'],
                        //'description' => $final['description'],
                        'images' => implode(",", $final['images']),
                        'platforms_id' => implode(",", $final['platforms_ids']),
                        'platforms_name' => null
                    );
                    break;

                default:
                    $insert[] = Array(
                        'game_id' => $final['game_id'],
                        'name' => $final['name'],
                        'date_added' => $final['date_added'],
                        'deck' => $final['deck'],
                        //'description' => $final['description'],
                        'images' => implode(",", $final['images']),
                        'platforms_id' => implode(",", $final['platforms_ids']),
                        'platforms_name' => implode(",", $final['platforms_names'])
                    );
                    break;
            }

        }

        //Insert every array element in DB
        foreach ($insert as  $value) {

            $db->insert($this->games_by_reviews_desc, $value);

        }

    }
     public function syncApiDataWithDBDataGamesPlatformId($games)
     {
         $app = \Yee\Yee::getInstance();

         $db = $app->db['cassandra'];

         //Extract all the data without the platforms array
         foreach ($games as $outer_key => $game) {

             $games_outer[] = array(
                 'date_added' => $game['date_added'],
                 'deck' => $game['deck'],
                 'description' => $game['description'],
                 'game_id' => $game['id'],
                 'images' => array(
                     $game['image']['icon_url'],
                     $game['image']['medium_url'],
                     $game['image']['screen_url'],
                     $game['image']['small_url'],
                     $game['image']['super_url'],
                     $game['image']['thumb_url'],
                     $game['image']['tiny_url'],
                 ),
                 'name' => $game['name'],
             );
         }

         //Extract games platforms names
         foreach ($games as $outer_key => $game) {
             if (!empty($games[$outer_key]['platforms'])) {
                 foreach ($games[$outer_key]['platforms'] as $inner_key => $inner_value) {
                     $games_platforms_names[$outer_key][] = $inner_value['name'];
                 }
             }
             else {
                 $games_platforms_names[$outer_key][] = null;
             }
         }

         //Extract games platforms ids
         foreach ($games as $outer_key => $game) {
             if (!empty($games[$outer_key]['platforms'])) {
                 foreach ($games[$outer_key]['platforms'] as $inner_key => $inner_value) {
                     $games_platforms_ids[$outer_key][] = $inner_value['id'];
                 }
             }
             else {
                 $games_platforms_ids[$outer_key][] = null;
             }
         }

         //Merge the extracted platforms with the main array 'games_db'
         for ($i = 0; $i < (count($games_outer)); $i++) {
             $games_outer[$i]['platforms_names'] = $games_platforms_names[$i];
             $games_outer[$i]['platforms_ids'] = $games_platforms_ids[$i];
         }

         //Make additional manipulations before insertion
         foreach ($games_outer as $key => $final) {

             foreach ($final['platforms_ids'] as $key1 => $final1) {

                 switch ($final) {

                     case in_array(null, $final['images']):
                         $insert[] = Array(
                             'name' => $final['name'],
                             'date_added' => $final['date_added'],
                             'deck' => $final['deck'],
                             'description' => $final['description'],
                             'game_id' => $final['game_id'],
                             'images' => null,
                             //'platforms_id' => $final1,
                             'platforms_ids' => implode(",", $final['platforms_ids']),
                             'platforms_name' => implode(",", $final['platforms_names'])
                         );
                         break;

                     case in_array(null, $final['platforms_ids']):
                         $insert[] = Array(
                             'game_id' => $final['game_id'],
                             'name' => $final['name'],
                             'date_added' => $final['date_added'],
                             'deck' => $final['deck'],
                             'description' => $final['description'],
                             'images' => implode(",", $final['images']),
                             'platforms_id' => null,
                             'platforms_name' => implode(",", $final['platforms_names'])
                         );
                         break;

                     case in_array(null, $final['platforms_names']):
                         $insert[] = Array(
                             'game_id' => $final['game_id'],
                             'name' => $final['name'],
                             'date_added' => $final['date_added'],
                             'deck' => $final['deck'],
                             'description' => $final['description'],
                             'images' => implode(",", $final['images']),
                             //'platforms_id' => $final1,
                             'platforms_ids' => implode(",", $final['platforms_ids']),
                             'platforms_name' => null
                         );
                         break;

                     default:
                         $insert[] = Array(
                             'game_id' => $final['game_id'],
                             'name' => $final['name'],
                             'date_added' => $final['date_added'],
                             'deck' => $final['deck'],
                             'description' => $final['description'],
                             'images' => implode(",", $final['images']),
                             //'platforms_id' => $final1,
                             'platforms_ids' => implode(",", $final['platforms_ids']),
                             'platforms_name' => implode(",", $final['platforms_names'])
                         );
                         break;
                 }
             }
         }

         //Insert every array element in DB
         foreach ($insert as $final_key => $final_value) {

             $db->insert($this->platforms_games_by_game_id_asc, $final_value);

         }
     }

    public function selectGameByIdFromGamesDateAddedDesc($id) {

        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->where('game_id', intval($id))->get($this->games_by_date_added_desc);
        return $games;

    }

    public function selectGameByIdFromGamesDateAddedAsc($id) {

        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->where('game_id', intval($id))->get($this->games_by_date_added_asc);
        return $games;

    }
    public function selectGameByIdFromGamesByTitleDesc($id) {

        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->where('game_id', intval($id))->get($this->games_by_title_desc);
        return $games;

    }
        public function selectGameByIdFromGamesByTitleAsc($id) {

        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->where('game_id', intval($id))->get($this->games_by_title_asc);
        return $games;

    }
    public function selectGameByIdFromGamesReviewsDesc($id) {

        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->where('game_id', intval($id))->get($this->games_by_reviews_desc);
        return $games;

    }
    public function selectGameByIdFromGamesReviewsAsc($id) {

        $app = \Yee\Yee::getInstance();

        $games = $app->db['cassandra']->where('game_id', intval($id))->get($this->games_by_reviews_asc);
        return $games;

    }

    public function finalizeData($games_db, $games_platforms_db)
     {
         //Extract games names
         foreach ($games_db as $key => $game) {
             $games_names[] = $game['name'];
         }

         //Find the platforms for every game and extract the platforms
         foreach ($games_platforms_db as $value) {
             foreach ($games_names as $key => $name) {
                 if (in_array($name, $value)) {
                     $result[$key][] = $value['platform_name'];
                 }
             }
         }

         //Merge the extracted platforms with the main array 'games_db'
         for($i = 0; $i < count($games_db); $i++)
         {
             $games_db[$i]['platforms'] = $result[$i];
         }

         return $games_db;
     }
}