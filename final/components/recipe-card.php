<?php
// get users data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);
?>

<title><?php echo $document_title ; ?> </title>


    <!--Main Content Begins-->
    <div class="recipe-card-container">
      <div class="image-container">
      </div>
      <?php
        while ($recipes = mysqli_fetch_array($result)) {
          echo "
            <div class='text-container'>
              <h1 class='recipe-card-title'> {$recipes['recipe_title']} </h1>
            </div> ";
        }
      ?>
    <div>