<?php
include_once __DIR__ . '/app.php';
$page_title = 'All Recipes';
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);

if ($result->num_rows > 0) {
    $recipes = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
}
$page_title = $recipes['recipe_title'];

include_once __DIR__ . '/components/header.php';
?>

<?php
    $site_url = site_url();
    echo "
    <main>
    <div class='recipe-content-container'>
        <div class='row'>
            <div class='column'>
                <div class='recipe-image-container'>
                    <img src='{$site_url}/{$recipes['image']}' class='recipe-page-image'>
                </div>
                <h2 class='recipe-ingredients-title'>Ingredients</h2>
                <div class='recipe-page-ingredients'>
                    {$recipes['ingredients']}</div>
            </div>

            <div class='column'>
                <h2 class='recipe-page-title'>{$recipes['recipe_title']}</h2>
                <div>
                    <h3 class='recipe-page-introduction'>{$recipes['introduction']}</h3>
                </div>

                <div>
                    <h2 class='instructions-title'>Instructions</h2>
                    <p class='recipe-instructions' >{$recipes['instructions']}</p>
                </div>

        </div>

        </div>

        
    </div>
        
        
        
        
    </div>
</main>
    ";
?>