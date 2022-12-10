<?php
include_once __DIR__ . '/app.php';
$page_title = 'All Recipes';
include_once __DIR__ . '/components/header.php';
// $recipes = get_recipes();
?>

<?php
    $query = 'SELECT * FROM recipes ORDER BY recipe_title ASC';
    $result = mysqli_query($db_connection, $query);
?>
<h1 class="search-results-title">All Recipes</h1>


<div class="all-recipe-cards-container">
    <?php
    include __DIR__ . '/components/recipe-card.php';
    ?>
</div>

<?php
include_once __DIR__ . '/components/footer.php';




