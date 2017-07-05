<?php
/**
 * Created by PhpStorm.
 * User: JUNIOR-2
 * Date: 30.8.2016 г.
 * Time: 9:48
 */

namespace App\Models;

use App\Interfaces\ReviewsRepo;

class ReviewsModel implements ReviewsRepo {

    public function getAllReviews() {

        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/reviews/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&sort=publish_date:desc&limit=100&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getAllReviewsAsc()
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/reviews/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&sort=publish_date:asc&limit=100&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getReviewsByScoreHighLow()
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/reviews/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&sort=score:desc&limit=100&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getReviewsByScoreLowHigh()
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/reviews/?api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&sort=score:asc&limit=100&format=json');
        $vresult = json_decode($data);
        $result = $this->objectToArray($vresult);
        return $result['results'];
    }

    public function getReviewById($id)
    {
        ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
        $data = file_get_contents('http://www.giantbomb.com/api/review/'.$id.'/api_key=8a5abb22f7252d2b1114549ecaa28706639a7026&format=json');
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