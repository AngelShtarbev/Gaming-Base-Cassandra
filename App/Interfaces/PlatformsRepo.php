<?php

namespace App\Interfaces;

interface PlatformsRepo{
public function getAllPlatforms();
public function getPlatformGamesDescById($id);
public function getPlatformGamesAscById($id);
public function getSinglePopularPlatform($id);
}