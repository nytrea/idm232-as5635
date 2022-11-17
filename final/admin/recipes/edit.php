<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Edit Recipes';
include_once __DIR__ . '/../../components/header.php';
?>

<?php
// get users data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $user variable;
    $recipes = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Edit Recipe</h1>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <form action="<?php echo site_url(); ?>/_includes/process-edit-recipes.php" method="POST">
              <div class="block">
                <label for="">Recipe Title</label>
                <input class="border-black border-2" type="text" name="recipe_title"
                  value="<?php echo $recipes['recipe_title']; ?>">
              </div>

              <div class="block">
                <label for=""> Introduction</label>
                <input class="border-black border-2" type="text" name="introduction"
                  value="<?php echo $recipes['introduction']; ?>">
              </div>


              <div class=" block">
                <label for="">Ingredients</label>
                <input class="border-black border-2" type="text" name="ingredients" 
                value="<?php echo $recipes['ingredients']; ?>">
              </div>

              <div class=" block">
                <label for="">Instructions</label>
                <input class="border-black border-2" type="text" name="instructions" 
                value="<?php echo $recipes['instructions']; ?>">
              </div>

              <input type="submit" value="Update">

              <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../components/footer.php';