<?php

/**
 * get all recipes from the database
 * @return object - mysqli_result
 */
function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM recipes ORDER BY title ASC';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Insert a recipe into the database
 * @param  string $recipe_title - title of the recipe
 * @param  string $introduction - introduction text
 * @param  string $image -  image of the recipe
 * @param  string $ingredients - ingredients of the recipe
 * @param  string $instructions - steps of the recipe
 * @return object - mysqli_result
 */
function add_recipe($recipe_title, $introduction, $image, $ingredients, $instructions)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' (recipe_title, image_path_small, image_path_large, ingredients, instructions)';
    $query .= " VALUES ('$recipe_title', '$image', '$ingredients', '$instructions')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}