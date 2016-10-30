<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    private $client;

    public function __construct() {
       $this->client = new Client([
       		'base_uri' => 'http://spapi.t05.sg/portal/'
       ]);
   	}

    public function post($subURL, $array) {
    	$response = $this->client->request('POST', $subURL, $array);
    	return $response->getBody();
    }
}
