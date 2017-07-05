<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-2
 * Date: 1.9.2016 г.
 * Time: 13:06
 */

namespace  App\Interfaces;

interface GamesDBRepo {

    public function selectAllFromGamesReviewsDesc();
    public function selectAllFromGamesReviewsAsc();
    public function selectAllGamesByTitleFromDBDESC();
    public function selectAllGamesByTitleFromDBASC();
    public function selectPaginationGamesByPlatformIdAsc($platform_id,$limit);
    public function selectPaginationGamesByPlatformIdDesc($platform_id,$limit);
    public function syncApiDataWithDBData($games);
    public function syncApiDataWithDBDataPlatformGames($games);
    public function syncApiDataWithDBDataGamesPlatformId($games);
    public function finalizeData($games_db,$games_platforms_db);
    public function selectGameByIdFromGamesDateAddedDesc($id);
    public function selectGameByIdFromGamesDateAddedAsc($id);
    public function selectGameByIdFromGamesByTitleDesc($id);
    public function selectGameByIdFromGamesByTitleAsc($id);
    public function selectGameByIdFromGamesReviewsDesc($id);
    public function selectGameByIdFromGamesReviewsAsc($id);
    public function selectPlatformGameDesc($game_id);
    public function selectPlatformGameAsc($game_id);
    public function selectAllGamesFromDBASC();
    public function selectPaginationGamesDesc($limit);
    public function selectPaginationGamesAsc($limit);
    public function selectPaginationGamesTitleDesc($limit);
    public function selectPaginationGamesTitleAsc($limit);
    public function selectPaginationGamesReviewedDesc($limit);
    public function selectPaginationGamesReviewedAsc($limit);
    public function selectTotalNumberGamesDesc();
    public function selectTotalNumberGamesAsc();
    public function selectTotalNumberGamesTitleDesc();
    public function selectTotalNumberGamesTitleAsc();
    public function selectTotalNumberGamesReviewedDesc();
    public function selectTotalNumberGamesReviewedAsc();
    public function selectTotalNumberGamesPlatformIdAsc();
    public function selectTotalNumberGamesPlatformIdDesc();
    public function selectHomePageGamesFromDB();
    public function selectSearchResults($searched_item);
    public function selectSearchedGame($id);
    public function selectGameAdditionalInfo($id);
    public function insertGamesAdditionalInfo($games);
    public function selectGamesIdsFromGamesByDateAddedDesc();
    public function selectGamesIdsFromGamesByDateAddedAsc();
    public function selectGamesIdsFromGamesByReviewsDesc();
    public function selectGamesIdsFromGamesByReviewsAsc();
    public function selectGamesIdsFromGamesByTitleDesc();
    public function selectGamesIdsFromGamesByTitlesAsc();
    public function selectGamesIdsFromGamesByPlatformIdNameDesc();
    public function selectGamesIdsFromGamesByPlatformIdNameAsc();
    public function insertSimilarGame($game,$game_additional);
}