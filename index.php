


<!DOCTYPE html>
<html lang="en">
<?php include('./templates/header.php') ;?>
<ul id="nav-mobile" class="right hide-on-small-and-down">
        <li> 
            <a href="./view/all.php?page=1" class="btn brand z-depth-0" style=" margin-left: -113px;">Characters</a>
        </li>
    </ul>

    <div class="container">
<div class="input-group">
<form class="white" action="./view/search.php" method="GET">
  <label for="search">Search By Character Name</label>
	<input type="text" id="search" name="search" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-search" type="submit" name="submit"><i class="fa fa-search fa-fw"></i> Search</button>
      </span>
      </form>
</div>
</div>



 <?php include('./templates/footer.php') ;?>
 </html>