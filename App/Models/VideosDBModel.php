<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-2
 * Date: 7.9.2016 г.
 * Time: 12:10
 */

namespace App\Models;

use App\Interfaces\VideosDBRepo;
use phpDocumentor\Reflection\Types\Array_;

class VideosDBModel implements VideosDBRepo {

    private $videos_by_publish_date_desc = 'videos_by_publish_date_desc';
    private $videos_by_publish_date_asc = 'videos_by_publish_date_asc';
    private $videos_by_id = 'videos_by_id';
    private $limit_videos = 10;
    private $limit_home_videos = 9;

    public function selectTotalNumberVideosDesc()
    {
        $app = \Yee\Yee::getInstance();

        $videos = $app->db['cassandra']->get($this->videos_by_publish_date_desc);
        return $videos;
    }

    public function selectPaginationVideosDesc($limit)
    {
        $app = \Yee\Yee::getInstance();

        $videos = $app->db['cassandra']->get($this->videos_by_publish_date_desc,$limit);
        return $videos;
    }

    public function selectTotalNumberVideosAsc()
    {
        $app = \Yee\Yee::getInstance();

        $videos = $app->db['cassandra']->get($this->videos_by_publish_date_asc);
        return $videos;
    }

    public function selectPaginationVideosAsc($limit)
    {
        $app = \Yee\Yee::getInstance();

        $videos = $app->db['cassandra']->get($this->videos_by_publish_date_asc,$limit);
        return $videos;
    }

    public function selectAllVideosByReleaseDateFromDBASC()
    {
        $app = \Yee\Yee::getInstance();

        $videos = $app->db['cassandra']->get($this->videos_by_publish_date_asc,$this->limit_videos);
        return $videos;
    }

    public function selectAllVideosFromDB()
    {
        $app = \Yee\Yee::getInstance();

        $videos = $app->db['cassandra']->get($this->videos_by_publish_date_desc,$this->limit_videos);
        return $videos;
    }

    //Select single video from table video_by_id
    public function selectVideoByIdFromDB($id)
    {
        $app = \Yee\Yee::getInstance();

        $video = $app->db['cassandra']->where('video_id', intval($id))->get($this->videos_by_id);
        return $video;
    }


    public function selectHomePageVideos()
    {
        $app = \Yee\Yee::getInstance();

        $videos = $app->db['cassandra']->get($this->videos_by_publish_date_desc,$this->limit_home_videos);
        return $videos;
    }

    public function syncApiDataWithDBData($videos)
    {
        $app = \Yee\Yee::getInstance();

        $db = $app->db['cassandra'];

        if(isset($videos[0])) {

            foreach ($videos as $key => $value) {

                $data[] = array(
                    'publish_date' => $value['publish_date'],
                    'deck' => $value['deck'],
                    'images' => implode(",", array(
                            $value['image']['icon_url'],
                            $value['image']['medium_url'],
                            $value['image']['screen_url'],
                            $value['image']['small_url'],
                            $value['image']['super_url'],
                            $value['image']['thumb_url'],
                            $value['image']['tiny_url'],
                        )),
                    'name' => $value['name'],
                    'video_id' => $value['id'],
                    'video_type' => $value['video_type'],
                    'embed_player' => $value['embed_player']
                );

                $data1[] = array(
                    'type' => 'videos',
                    'publish_date' => $value['publish_date'],
                    'deck' => $value['deck'],
                    'images' => implode(",", array(
                        $value['image']['icon_url'],
                        $value['image']['medium_url'],
                        $value['image']['screen_url'],
                        $value['image']['small_url'],
                        $value['image']['super_url'],
                        $value['image']['thumb_url'],
                        $value['image']['tiny_url'],
                    )),
                    'name' => $value['name'],
                    'video_id' => $value['id'],
                    'video_type' => $value['video_type'],
                );

            }

            //Insert every array element in DB
            foreach ($data as $key => $value) {

                $db->insert($this->videos_by_id, $value);

            }

            //Insert every array element in DB
            foreach ($data1 as $key => $value) {

                $db->insert($this->videos_by_publish_date_desc, $value);

            }

            //Insert every array element in DB
            foreach ($data1 as $key => $value) {

                $db->insert($this->videos_by_publish_date_asc, $value);

            }
        }

        else {

            $data = array(
                'publish_date' => $videos['publish_date'],
                'deck' => $videos['deck'],
                'images' => implode(",", array(
                        $videos['image']['icon_url'],
                        $videos['image']['medium_url'],
                        $videos['image']['screen_url'],
                        $videos['image']['small_url'],
                        $videos['image']['super_url'],
                        $videos['image']['thumb_url'],
                        $videos['image']['tiny_url'],
                    )),
                'name' => $videos['name'],
                'video_id' =>$videos['id'],
                'video_type' => $videos['video_type'],
                'embed_player' => $videos['embed_player']
            );

            $data1 = array(
                'type' => 'videos',
                'publish_date' => $videos['publish_date'],
                'deck' => $videos['deck'],
                'images' => implode(",", array(
                    $videos['image']['icon_url'],
                    $videos['image']['medium_url'],
                    $videos['image']['screen_url'],
                    $videos['image']['small_url'],
                    $videos['image']['super_url'],
                    $videos['image']['thumb_url'],
                    $videos['image']['tiny_url'],
                )),
                'name' => $videos['name'],
                'video_id' =>$videos['id'],
                'video_type' => $videos['video_type'],
            );

            //Insert every array element in DB
           $db->insert($this->videos_by_id, $data);

           $db->insert($this->videos_by_publish_date_desc, $data1);

           $db->insert($this->videos_by_publish_date_asc, $data1);
        }

    }

}