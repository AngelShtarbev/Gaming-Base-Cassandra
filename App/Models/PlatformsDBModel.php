<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 3.9.2016 �.
 * Time: 13:12
 */

namespace App\Models;

use App\Interfaces\PlatformsDBRepo;
use phpDocumentor\Reflection\Types\Array_;

class PlatformsDBModel implements PlatformsDBRepo {

    private $platforms_by_date_added_desc = 'platforms_by_date_added_desc';
    private $platforms_by_date_added_asc = 'platforms_by_date_added_asc';
    private $popular_platforms = 'popular_platforms';

    public function selectTotalNumberPlatforms()
    {
        $app = \Yee\Yee::getInstance();

        $platforms = $app->db['cassandra']->get($this->platforms_by_date_added_desc);
        return $platforms;
    }

    public function selectPaginationPlatforms($limit)
    {
        $app = \Yee\Yee::getInstance();

        $platforms = $app->db['cassandra']->get($this->platforms_by_date_added_desc,$limit);
        return $this->objectToArray($platforms);
    }


    public function selectPopularPlatforms() {

        $app = \Yee\Yee::getInstance();

        $platform_by_id = $app->db['cassandra']->get($this->popular_platforms);
        return $platform_by_id;
    }

    public function syncApiDataWithDBData($platforms)
    {

        $app = \Yee\Yee::getInstance();

        $db = $app->db['cassandra'];

        //Extract all the data without the platforms array
//        foreach ($platforms as $outer_key => $platform) {
//            $platforms_outer[] = array(
//                'type' => 'platforms',
//                'date_added' => $platform['date_added'],
//                'deck' => $platform['deck'],
//                'platform_id' => $platform['id'],
//                'image_icon_url' => $platform['image']['icon_url'],
//                'image_medium_url' => $platform['image']['medium_url'],
//                'image_screen_url' => $platform['image']['screen_url'],
//                'image_small_url' => $platform['image']['small_url'],
//                'image_super_url' => $platform['image']['super_url'],
//                'image_thumb_url' => $platform['image']['thumb_url'],
//                'image_tiny_url' => $platform['image']['tiny_url'],
//                'name' => $platform['name'],
//            );
//        }

        $platforms_outer = array(
            'type' => 'platforms',
            'date_added' => $platforms['date_added'],
            'deck' => $platforms['deck'],
            'platform_id' => $platforms['id'],
            'image_icon_url' => $platforms['image']['icon_url'],
            'image_medium_url' => $platforms['image']['medium_url'],
            'image_screen_url' => $platforms['image']['screen_url'],
            'image_small_url' => $platforms['image']['small_url'],
            'image_super_url' => $platforms['image']['super_url'],
            'image_thumb_url' => $platforms['image']['thumb_url'],
            'image_tiny_url' => $platforms['image']['tiny_url'],
            'name' => $platforms['name'],
        );

        //Insert every array element in DB
        //foreach ($platforms_outer as $key => $value) {

            $db->insert($this->popular_platforms, $platforms_outer);

        //}

    }

    public function objectToArray($object)
    {

        if (!is_object($object) && !is_array($object)) {

            return $object;
        }

        $array = array();

        foreach ($object as $member => $data) {
            $array[$member] = $this->objectToArray($data);
        }

        return $array;
    }

}