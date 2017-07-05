<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-2
 * Date: 7.9.2016 г.
 * Time: 12:09
 */

namespace  App\Interfaces;

interface VideosDBRepo {

    public function selectTotalNumberVideosDesc();
    public function selectPaginationVideosDesc($limit);
    public function selectTotalNumberVideosAsc();
    public function selectPaginationVideosAsc($limit);
    public function selectAllVideosFromDB();
    public function selectHomePageVideos();
    public function selectAllVideosByReleaseDateFromDBASC();
    public function selectVideoByIdFromDB($id);
    public function syncApiDataWithDBData($videos);
}