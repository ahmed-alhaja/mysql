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
                    <h1>Maintenance</h1>
                    <span class="subheading">
                        The website is currently under maintenance.
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
                <h2>We'll Be Back Soon!</h2>

                <p class="lead">
                    Sorry for the inconvenience. We are currently working
                    on improving the website.
                </p>

                <p>
                    Please check back again later.
                </p>

                <a href="<?= BASE_URL ?>index.php" class="btn btn-primary">
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</div>

<?php require_once dirname(__FILE__, 2) . '/inc/footer.php'; ?>
