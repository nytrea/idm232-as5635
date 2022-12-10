<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Search';
include_once __DIR__ . '/../../components/header.php';

//$recipes = get_recipes();


if (isset($_GET['search'])) {
  $search = $_GET['search'];
} else {
  $search = '';
}
// $search = 'chicken';

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE recipe_title LIKE '%{$search}%'";
$query .= " OR ingredients LIKE '%{$search}%'";
$query .= " OR instructions LIKE '%{$search}%' ";

$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
  $recipes_results = true;
} else {
  $recipes_results = false;
}
?> 

<?php
$site_title = 'Search Recipes';
$document_title = $page_title . ' | ' . $site_title; 
?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="search-results-title">Search Recipes</h1>
        <form action="<?php echo site_url(); ?>/admin/search" method="GET">
          <div class="search-bar-container">
            <input class="search-bar" type="text" name="search" id="search" placeholder="Search"
              value="<?php echo $search; ?>">
            <button class="search-bar-submit-btn" type="submit">Search</button>
          </div>
          
        </form>
        <?php
        // If no results, echo no results
        if (!$recipes_results) {
            echo '<p>No results found</p>';
        }
?>
        <?php
// If error query param exist, show error message
  if (isset($_GET['error'])) {
      echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
  }?>


    <?php
    // If we have results, show them
      if ($recipes_results) {
          while ($recipes_results = mysqli_fetch_assoc($results)) {
              echo '<div class="flex flex-row justify-center items-center">';
              echo '<h2>' . $recipes_results['recipe_title'] . '</h2>';
              echo '</div>';
          }
      }
?>

  </div>
</div>

<?php
    // If we have results, show them
      if ($recipes_results) {
          while ($recipes_results = mysqli_fetch_assoc($results)) {
              echo '<div class="flex flex-row justify-center items-center">';
              echo '<h2>' . $recipes_results['recipe_title'] . '</h2>';
              echo '</div>';
          }
      }
?>

  </div>
</div>

