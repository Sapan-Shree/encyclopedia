<?php
 include('../Controller/character.php'); 

$count=0;
$value='';
if(isset($_GET['submit'])){
$value=$_GET['search'];
//echo $value;
$char=new Character();

if(isset($value)){

    $result=$char->get_character_by_name($value);
}
//echo $result->info->count;
//print_r($result);

}



?>
<!DOCTYPE html>
<html lang="en">
<?php include('../templates/header.php') ;?>
<h2>Search Result : <?php echo $result->info->count ;?></h2>
<div class="container center">
<?php if($result->info->count >0): ?> 
    <?php foreach($result->results as $item):?>
    <img src="<?php echo $item->image; ?>"class="character">
 
    
<h4> Name:<?php  echo htmlspecialchars($item->name);    ?></h4>

<p>Species: <?php  echo htmlspecialchars($item->species);    ?></p>
<p>Origin: <?php  echo htmlspecialchars($item->origin->name);    ?></p>
<p>Episodes: </p>

<?php $episodeString = '';
    foreach($item->episode as $epi):
        $episodeid = str_replace("https://rickandmortyapi.com/api/episode/","" ,"$epi");
        $episodeString.= $episodeid. ", ";
        ?>


    <?php endforeach;
//echo htmlspecialchars($episodeString); 
$episodes= $char->get_episodes($episodeString);
foreach($episodes as $episode): ?>
<?php echo htmlspecialchars($episode->name) . "<br>";?><br>

<?php endforeach;?>

<?php endforeach;?>
<?php endif ;?>
</div>
<?php include('../templates/footer.php') ;?>
</html>