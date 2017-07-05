<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-4
 * Date: 24.8.2016 г.
 * Time: 10:55
 */

namespace App\Models;

use App\Interfaces\GamesRepo;

class GamesModel implements GamesRepo
{

    public function getGameByName($name)
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/search/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&query=' . $name . '&resources=game&field_list=id,name&limit=10&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getAllGames()
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/games/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&sort=date_added:desc&field_list=date_added,deck,id,description,image,name,platforms&limit=100&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getGameById($id)
    {
        //Additional game info - images , videos , reviews etc.
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/game/' . $id . '/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&field_list=date_added,deck,id,description,images,videos,reviews,name,similar_games,platforms,genre,theme,developer,publisher&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getGame($id)
    {
        //Primary game info - deck, description, image etc.
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/game/' . $id . '/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&field_list=date_added,deck,id,description,image,platforms,name&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getAllGamesAsc()
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/games/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&sort=date_added:asc&field_list=date_added,deck,id,description,image,name,platforms&limit=100&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getAllGamesByTitle()
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/games/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&sort=name:desc&field_list=date_added,deck,id,description,image,name,platforms&limit=100&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getAllGamesByTitleAsc()
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/games/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&sort=name:asc&field_list=date_added,deck,id,description,image,name,platforms&limit=100&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }


    public function getAllGamesReviewsScoreDesc()
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');

        $data = file_get_contents('http://www.giantbomb.com/api/games/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&sort=number_of_user_reviews:desc&field_list=id,image,name,date_added,deck,platforms&limit=100&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getAllGamesReviewsScoreAsc()
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');

        $data = file_get_contents('http://www.giantbomb.com/api/games/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&sort=number_of_user_reviews:asc&field_list=id,image,name,date_added,deck,platforms&limit=100&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function searchGameByName($name)
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/search/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&query=' . $name . '&resources=game&field_list=id,image,name,description,date_added,deck,platforms&limit=10&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getGamesCarousel()
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/games/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&sort=date_last_updated:desc&field_list=date_added,deck,id,description,image,name&limit=20&offset=10&format=json');
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