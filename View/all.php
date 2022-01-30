<!DOCTYPE html>
<html>

<?php include('../templates/header.php'); ?>
<?php include('../Controller/character.php'); 
$page = $_GET['page'];
$char=new Character();
$resp= $char->get_characters("$page");
$next_page=$page+1; $pre_page=$page-1;
?>

<h4 class="center grey-text">Rick and Morty Characters</h4>
<div class="container">
  <div class="row">
   
    <div class="card-action left-align">
      
    <a href="./all.php?page=<?php echo $pre_page ?>" class="brand-text">Pre</a>
     

    </div>
    <div class="card-action right-align">
      <a href="./all.php?page=<?php echo $next_page ?>" class="brand-text">Next</a>

    </div>

    <?php foreach ($resp->results as $character) : ?>
      <?php //foreach($result as $character):
      ?>
      <div class="col s6 md3">
        <div class="card z-depth-0">
          <div class="card-content center">

            <img src="<?php //echo $character->image 
                      ?>" class="character">
            <?php $name = $character->name;
            $url = $character->url; ?>

            <a href="detail.php?id=<?php echo $character->id; ?>"><?php echo $name; ?></a>
            <?php //echo $character->name; "<br>";
            ?>
            <?php //echo $character->name; "<br>";
            ?>




          </div>
          <div class="card-action right-align">
            <a href="detail.php?id=<?php echo $character->id; ?>" class="brand-text">more info</a>

          </div>


        </div>
      </div>
    <?php endforeach; ?>






  </div>

</div>

<?php include('../templates/footer.php'); ?>

</html>