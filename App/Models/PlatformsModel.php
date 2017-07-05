<?php
namespace App\Models;

use App\Interfaces\PlatformsRepo;


class PlatformsModel implements \App\Interfaces\PlatformsRepo
{

    public function getAllPlatforms()
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/platforms/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&sort=release_date:desc&field_list=id,image,name,date_added,deck,platforms&limit=40&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getPlatformGamesDescById($id)
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/games/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&platforms='.$id.'&sort=date_added:desc&field_list=date_added,deck,id,description,image,name,platforms&limit=50&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getPlatformGamesAscById($id)
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/games/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&platforms='.$id.'&sort=date_added:asc&field_list=date_added,deck,id,description,image,name,platforms&limit=50&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getSinglePopularPlatform($id)
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/platform/'.$id.'/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
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