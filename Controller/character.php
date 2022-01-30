<?php
 //include "../Model/cracter.php";
require "../vendor/autoload.php";
use GuzzleHttp\Client;

class Character{

    public $base_url;
    public $episode_url;

function __construct()
{
    $this->base_url='https://rickandmortyapi.com/api';
}

function get_characters($page)
{
     
$client= new Client();
 $response = $client->request('GET', $this->base_url .'/character?page=' . $page );
$resp= json_decode($response->getBody());
return( $resp);

}


function get_character_by_id($id)
{
     
$client= new Client();
 $response = $client->request('GET', $this->base_url .'/character/' . $id );
$resp= json_decode($response->getBody());
return( $resp);

}

function get_episodes($str)
{
    $client= new Client();
    $response = $client->request('GET', $this->base_url ."/episode/".$str );
   $episodes= json_decode($response->getBody());
   return( $episodes);

}
function get_character_by_name($name)
{
     
$client= new Client();
 $response = $client->request('GET', $this->base_url .'/character?name=' . $name );
$resp= json_decode($response->getBody());
return( $resp);

}


}

?>