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
  // private $responseCode=404;

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

    if($response->getStatusCode()==200){
      $contents =$response->getBody()->getContents();
      $data= json_decode($contents);
      return $data->data;
    }

  } catch (\Exception $e) {
    if($e->getCode()==403){
      return abort(403);
    }
    return abort(404);
    // echo $e;
    // echo "Something went wrong";
  }


}


public function post($endPoint, $formData)
{
  $url=$this->apiUrl.$endPoint;
  $responseCode=404;

  try {
    $response=   $this->client->post($url,
    [ 'headers' =>[
      'Authorization'  =>'Bearer '. $this->getAccessToken(),
      'Accept'=> 'application/json'
    ],
    'form_params' =>$formData,
  ]);
  $responseCode=$response->getStatusCode();
  if($responseCode==200){
    $contents =$response->getBody()->getContents();
    $data= json_decode($contents);
    // dd($response);
    return $data->data;
  }


} catch (\Exception $e) {

  dd ($e);
  if($e->getCode()==403){
    return abort(403);
  }
  return abort(404);


  echo "Something went wrong";
}
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
    $responseCode=$response->getStatusCode();

    $contents =$response->getBody()->getContents();
    if($responseCode==200){
      $data= json_decode($contents);
      $minutes=Carbon::parse($data->data->expires_at->date)->diffInMinutes(Carbon::now());
      Cookie::queue('saraAccessToken', $data->data->accessToken, $minutes);
      return $data->data->accessToken;
    }

  } catch (\Exception $e) {

    if($e->getCode()==403){
      return abort(403);
    }
    return abort(404);
    // return abort(403);
    // echo $e;
    // echo "Unable to retrieve access token";
  }


}

}
