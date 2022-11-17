<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$recipe_title_value = $_POST['recipe_title'];
$introduction_value = $_POST['introduction'];
$ingredients_value = $_POST['ingredients'];
$instructions_value = $_POST['instructions'];

// Create a SQL statement to insert the data into the database
$query = "INSERT INTO recipes (recipe_title, introduction, ingredients, instructions) VALUES ('$recipe_title_value', '$introduction_value', '$ingredients_value', '$instructions_value')";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Could Not Create Recipe';
    redirect_to('/admin/recipes?error=' . $error_message);
}