<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';

include_once __DIR__ . '/components/header.php'; ?>

    <div class="banner-container"> 
    </div>

    <div class="categories-container">
        <?php $title = 'Categories';?>
            <h3>Appetizers</h3>
            <h3>Breakfast</h3>
            <h3>Lunch</h3>
            <h3>Dinner</h3>
    </div>

<?php include_once __DIR__ . '/components/footer.php'; ?>


<!-- make a folder called components in final folder and make a footer.php file and a header.php file -->