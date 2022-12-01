<?php
include_once __DIR__ . '/../../app.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('ID is needed in URL');
}

// get users data from database
$query = "DELETE FROM recipes WHERE id = {$id}";
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
<<<<<<< HEAD
    $error_message = 'Could Not Delete Recipe'. mysqli_error($db_connection);
=======
    $error_message = 'Could Not Delete Recipe';
>>>>>>> 69870d84bd7d63eb134ef576260c218ea959f6c3
    redirect_to('/admin/recipes?error=' . $error_message);
}

?>