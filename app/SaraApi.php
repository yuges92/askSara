<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Cookie;
use Carbon\Carbon;
class SaraApi {

  private $client; // Guzzle Instance
  // private $accessToken;
  private $username;
  private $password;
  private $version;
  private $apiUrl;

  function __construct($username,$password,$apiUrl,$version)
  {
    // $this->accessToken=$accessToken;
    $this->username=$username;
    $this->password=$password;
    $this->version=$version;
    $this->apiUrl=$apiUrl;
    $this->client = new Client();
  }


  public function get($endPoint)
  {
    $url=$this->apiUrl.$endPoint;
    // dd($this->getAccessToken());

    try {
      $response=   $this->client->get($url,['headers' =>
      [
        'Authorization'  =>'Bearer '. $this->getAccessToken(),
        'Accept'=> 'application/json'
      ]
    ]);

    $contents =$response->getBody()->getContents();
    // dd($contents);
    if($response->getStatusCode()==200){
      $data= json_decode($contents);
      return $data->data;
    }
  } catch (\Exception $e) {
    echo $e;
    echo "Unable to retrieve access token";
  }

}


public function post($endPoint)
{

}

public function getAccessToken()
{
  if(Cookie::has('saraAccessToken')){
    $token=Cookie::get('saraAccessToken');
    return $token;
  }

  try {
    $loginUrl=$this->apiUrl.'login';

    $response = $this->client->post($loginUrl,[
      'form_params'=> [
        'username'=>$this->username,
        'password'=>$this->password
      ],
    ]);

    $contents =$response->getBody()->getContents();
    if($response->getStatusCode()==200){
      $data= json_decode($contents);
      $minutes=Carbon::parse($data->data->expires_at->date)->diffInMinutes(Carbon::now());
      Cookie::queue('saraAccessToken', $data->data->accessToken, $minutes);
    }
    
  } catch (\Exception $e) {
    // echo $e;
    echo "Unable to retrieve access token";
  }
  return $data->data->accessToken;
}

}
