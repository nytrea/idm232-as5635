<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = 'Home';
}
$site_title = 'Culinary';
$document_title = $page_title . ' | ' . $site_title; 
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=" <?php echo site_url(); ?>/dist/styles/style.css">
  <title><?php echo $document_title ; ?> </title>

</head>

<body>
 
    <!--Main Content Begins-->
    <div class="header-container">
      <div class="logo-container">
          <!-- <img src="imgs/logo3.png" id="logo" class="center " alt=""> -->
          <h1 id="logo">
              Culinary
          </h1>
      </div>

      <div class="nav-container">
          <ul id="navbar">
              <li><a href="<?php echo site_url(); ?>/index.php">Home</a></li>
              <li><a href="#">All Recipes</a></li>
              <!-- <li><a href="#">Login</a></li> -->
              <li><a href="<?php echo site_url(); ?>/admin/recipes/index.php">Admin</a></li>
          </ul>
      </div>
    <div>