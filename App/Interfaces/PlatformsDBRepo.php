<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 3.9.2016 �.
 * Time: 15:55
 */

namespace  App\Interfaces;

interface PlatformsDBRepo {

    public function selectTotalNumberPlatforms();
    public function selectPaginationPlatforms($limit);
    public function syncApiDataWithDBData($platforms);
    public function selectPopularPlatforms();
}