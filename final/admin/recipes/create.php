<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Create Recipes';
include_once __DIR__ . '/../../components/header.php';
?>
<link rel="stylesheet" href=" <?php echo site_url(); ?>/dist/styles/style.css">

<?php
// get users data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="create-recipe-title-container">
        <h1 class="create-recipe-title">Create Recipe</h1>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <form action="<?php echo site_url(); ?>/_includes/process-create-recipes.php" method="POST">
              <div class="block">
                <label for="">Recipe Title</label>
                <input class="border-black border-2" type="text" name="recipe_title">
              </div>

              <div class="block">
                <label for="">Introduction</label>
                <input class="border-black border-2" type="text" name="introduction">
              </div>


              <div class="block">
                <label for="">Ingredients</label>
                <input class="border-black border-2" type="text" name="ingredients">
              </div>
              <div class="block">
                <label for="">Instructions</label>
                <input class="border-black border-2" type="text" name="instructions">
              </div>
              <input
                class="nline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                type="submit" value="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../components/footer.php'; ?>