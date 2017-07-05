<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-2
 * Date: 30.8.2016 г.
 * Time: 9:44
 */

namespace App\Interfaces;

interface VideosRepo
{
    public function getAllVideos();
    public function getAllVideosAsc();
    public function getVideoById($id);
}