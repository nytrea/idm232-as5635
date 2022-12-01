<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'All Recipes';
include_once __DIR__ . '/../../components/header.php';
?>

<?php
// get users data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);
?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Recipes</h1>


        <?php
          if (isset($_GET['error'])) {
              echo "<p class='text-red-500'>Error: " . $_GET['error'] . '</p>';
          }?>

      </div>
      <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
        <button type="button">
          <a href="<?php echo site_url() . '/admin/recipes/create.php' ?>">
            Add Recipe</a></button>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Title</th>
                  <!-- <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Title
                  </th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Phone</th>
                  <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6"> -->
                    <!-- <span class="sr-only">Edit</span> -->
                  </th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white">
                <?php
    while ($recipes = mysqli_fetch_array($result)) {
        echo "<tr>
                <td class='whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6'>{$recipes['recipe_title']}</td>
                <td class='relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6'>
                  <a href='https://nytrea.com/idm232/final/admin/recipes/edit.php?id={$recipes['id']}' >Edit</a>
                  <a href='https://nytrea.com/idm232/final/admin/recipes/delete.php?id={$recipes['id']}' >Delete</a>
                </td>
              </tr>";
    }
?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../components/footer.php';