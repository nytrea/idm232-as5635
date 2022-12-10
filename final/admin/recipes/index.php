<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Admin';
include_once __DIR__ . '/../../components/header.php';
?>

<?php
// get users data from database
$query = 'SELECT * FROM recipes ORDER BY recipe_title ASC';
$result = mysqli_query($db_connection, $query);
?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="admin-title"> Admin Access </h1>


        <?php
          if (isset($_GET['error'])) {
              echo "<p class='text-red-500'>Error: " . $_GET['error'] . '</p>';
          }?>

      </div>
      <div class="add-recipe-btn-container">
        <button type="button" class='add-recipe-btn'>
          <a class='add-recipe-btn-text' href="<?php echo site_url() . '/admin/recipes/create.php' ?>">
            Add a Recipe</a></button>
      </div>
    </div>
   
          <div class="table-container">
            <table class="min-w-full divide-y divide-gray-300">
              <tbody class="table-body">
                <?php
                  while ($recipes = mysqli_fetch_array($result)) {
                    echo "<tr class='table-recipe-container'>
                            <td class='table-recipe-title'>{$recipes['recipe_title']}</td>
                            <td class='table-lines'>
                              <a class='edit-btn' href='https://nytrea.com/idm232/final/admin/recipes/edit.php?id={$recipes['id']}' >Edit</a>
                              <a class='delete-btn' href='https://nytrea.com/idm232/final/admin/recipes/delete.php?id={$recipes['id']}' >Delete</a>
                            </td>
                          </tr>";
                    }
                ?>
              </tbody>
            </table>
          </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../components/footer.php';