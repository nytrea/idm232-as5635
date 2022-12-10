<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';

include_once __DIR__ . '/components/header.php'; ?>
 <link rel="stylesheet" href=" <?php echo site_url(); ?>/dist/styles/style.css">
 
    <div class="banner-container"> 
    </div>

    <div class="hero-container">
        <img src='dist/Hero.jpg'/>
        <h2 class='homepage-tagline'> A Recipe For Every Craving  </h2>
        <h3 class='homepage-tagline-02'> Not Sure What to Make Today? </h3>
        <a class="homepage-recipes-btn-container" href="<?php echo site_url(); ?>/all-recipes.php" style="text-decoration: none;">
            <button class="homepage-recipes-btn">Find A Recipe</button>
          </a>
    </div>

<?php include_once __DIR__ . '/components/footer.php'; ?>


<!-- make a folder called components in final folder and make a footer.php file and a header.php file -->