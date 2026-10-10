<?php
require_once dirname(__FILE__, 2) . '/config/config.php';
// Layouts
require_once dirname(__FILE__, 2) . '/inc/layouts.php';
// Navigation
require_once dirname(__FILE__, 2) . '/inc/nav.php';
?>
<?php
$blogs = getBlog();
// var_dump($blogs);
?>



<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            <?php foreach ($blogs as $blog) : ?>

                <div class="post-preview mb-5 pb-4 border-bottom">

                    <div class="row align-items-center">

                        <div class="col-md-8">

                            <a class="text-decoration-none text-dark">

                                <h2 class="post-title">
                                    <?= $blog['title'] ?>
                                </h2>

                                <h3 class="post-subtitle">
                                    <?= $blog['content'] ?>
                                </h3>

                            </a>

                            <p class="text-muted mt-3 mb-2">
                                <?= $blog['created_at'] ?>
                            </p>
                            <div class="container mt-3">
                                <div class="d-flex gap-2">

                                    <div>
                                        <form action="index.php?page=deleteBlog&action=delete" method="POST">
                                            <input type="hidden" name="id" value="<?= $blog['id'] ?>">

                                            <button type="submit" class="btn btn-danger btn-sm px-3">
                                                Delete
                                            </button>
                                        </form>
                                    </div>

                                    <div>
                                        <a href="index.php?page=editBlog&id=<?= $blog['id'] ?>">
                                            <input type="hidden" name="id" value="<?= $blog['id'] ?>">

                                            <button type="submit" class="btn btn-success btn-sm px-3">
                                                Edit
                                            </button>

                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 text-center">

                            <img src="<?= $blog['image'] ?>"
                                class="img-fluid rounded"
                                style="width: 200px; height: 140px; object-fit: cover;" />

                        </div>

                    </div>

                </div>

            <?php endforeach ?>

        </div>
    </div>
</div>
<?php require_once dirname(__FILE__, 2) . '/inc/footer.php'; ?>