<?php
$id = $_GET['id'];
$blog = findBlog($id);
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit Blog</h4>
                </div>

                <div class="card-body">
                    <form action="<?= BASE_URL ?>index.php?page=updateBlog&id=<?= $blog['id'] ?>" method="POST" enctype="multipart/form-data">

                        <!-- Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input
                                type="text"
                                name="title"
                                id="title"
                                class="form-control"
                                value="<?= $blog['title'] ?>"
                                placeholder="Enter blog title">

                        </div>

                        <!-- Content -->
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea
                                name="content"
                                id="content"
                                rows="6"
                                class="form-control"

                                placeholder="Write your blog content..."><?= $blog['content'] ?></textarea>
                        </div>
                        <!-- image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input
                                name="image"
                                type="file"
                                id="image"
                                rows="6"
                                class="form-control" />
                            <a>
                                <img src="<?= BASE_URL . $blog['image'] ?>" alt="">
                            </a>
                        </div>

                        <!-- User ID -->
                        <!-- <div class="mb-3">
                            <label for="user_id" class="form-label">User ID</label>
                            <input
                                type="number"
                                name="user_id"
                                id="user_id"
                                class="form-control"
                                placeholder="Enter user ID">
                        </div> -->

                        <!-- Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                Edit Blog
                            </button>

                            <a href="index.php" class="btn btn-secondary">
                                Cancel
                            </a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>