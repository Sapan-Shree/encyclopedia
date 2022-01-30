<?php 
 
//    include('../Controller/read_single.php') ;
   require "../vendor/autoload.php";
    // include('../Controller/read.php') ;
    include('../Controller/character.php'); 
 //check get request id parameter
if(isset($_GET['id'])){
$id=$_GET['id'];

 $char=new Character();
 $resp= $char->get_character_by_id($id);

 //$episodeString='';


}



// $client = new \GuzzleHttp\Client();
// $response = $client->request('GET', "https://rickandmortyapi.com/api/character/$id");
// $resp= json_decode($response->getBody());
// ($resp);

?>

<!DOCTYPE html>
<html lang="en">
<?php include('../templates/header.php') ;?>
<h2>DETAILS</h2>
<div class="container center">
    <img src="<?php echo $resp->image; ?>"class="character">
 
    
<h4> Name:<?php  echo htmlspecialchars($resp->name);    ?></h4>

<p>Species: <?php  echo htmlspecialchars($resp->species);    ?></p>
<p>Origin: <?php  echo htmlspecialchars($resp->origin->name);    ?></p>
<p>Episodes: </p>

<?php $episodeString = '';
    foreach($resp->episode as $epi):
        $episodeid = str_replace("https://rickandmortyapi.com/api/episode/","" ,"$epi");
        $episodeString.= $episodeid. ", ";
        ?>


    <?php endforeach;
//echo htmlspecialchars($episodeString); 
$episodes= $char->get_episodes($episodeString);
foreach($episodes as $episode): ?>
<?php echo htmlspecialchars($episode->name) . "<br>";?><br>

<?php endforeach;?>


</div>
<?php include('../templates/footer.php') ;?>
</html>