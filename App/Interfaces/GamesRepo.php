<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-4
 * Date: 25.8.2016 г.
 * Time: 12:09
 */

namespace  App\Interfaces;

interface GamesRepo
{
    public function getGameById($id);
    public function getGame($id);
    public function getGameByName($name);
    public function getAllGames();
    public function getAllGamesAsc();
    public function getAllGamesByTitle();
    public function getAllGamesByTitleAsc();
    public function getAllGamesReviewsScoreAsc();
    public function getAllGamesReviewsScoreDesc();
    public function searchGameByName($name);
}