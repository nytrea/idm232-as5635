<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'All Recipes';
include_once __DIR__ . '/../../components/header.php';
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=" <?php echo site_url(); ?>/style.css">
  <title>Search Recipes</title>
 </head>

 <body>
  <div class='search-bar-container'>
    <form class="search-form-box" action="<?php echo site_url(); ?>/admin/search" method="GET">
      <input type ="text" name="search" id="search" placeholder="Search">
      <button type ="submit" >Search</button>
    </form>
  </div>
 </body>
 </html>



<?php 
  echo '<pre>';
    var_dump($_GET);
  echo '</pre>';
  die;

  if (isset($_GET['search'])){
    $search = $_GET['search'];
  }

  else{
    $search = '';
  }
?>;

