<?php

require_once dirname(__FILE__, 2) . '/config/config.php';

// Layouts 
require_once dirname(__FILE__, 2) . '/inc/layouts.php';

?>

<header class="masthead" style="background-image: url('<?= BASE_URL ?>assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>404</h1>
                    <span class="subheading">
                        Page Not Found
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <div class="text-center my-5">
                <h2>Oops! Page Not Found</h2>

                <p class="lead">
                    Sorry, the page you are looking for does not exist.
                </p>

                <p>
                    The page may have been moved or deleted.
                </p>

                <a href="<?= BASE_URL ?>index.php" class="btn btn-primary">
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</div>

<?php require_once dirname(__FILE__, 2) . '/inc/footer.php'; ?>
