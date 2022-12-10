<?php
// get users data from database
// $query = 'SELECT * FROM recipes';
// $result = mysqli_query($db_connection, $query);
?>
    <!--Main Content Begins-->
      <?php
        $site_url = site_url();
        while ($recipes = mysqli_fetch_array($result)) {
          
          echo "
          <a href='{$site_url}/recipe.php?id={$recipes['id']}'>
            <div class='recipe-card-container'>
                <div class='image-container'>
                  <img class='recipe-image' src='{$site_url}/{$recipes['image']}'>
                </div>

                <div class='text-container'>
                  <h1 class='recipe-card-title'> {$recipes['recipe_title']} </h1>
                </div> 

              </div>
          </a>
            ";
          }
      ?>
   