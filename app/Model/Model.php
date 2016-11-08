<?php

namespace App\Model;

use GuzzleHttp\Client;

class Model
{
    public static function post($subURL, $array) {
      $client = new Client([
          'base_uri' => 'http://spapi.t05.sg/portal/'
      ]);
    	$response = $client->request('POST', $subURL, $array);
    	return $response->getBody();
    }
}
