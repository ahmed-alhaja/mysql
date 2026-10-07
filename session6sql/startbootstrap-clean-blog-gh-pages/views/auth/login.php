<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">

        <div class="col-md-6 col-lg-5">

            <div class="card shadow border-0">
                <div class="card-body p-5">

                    <h2 class="text-center mb-4">
                        Login
                    </h2>

                    <form action="<?= BASE_URL ?>index.php?page=sign-in" method="POST">

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control"
                                placeholder="Enter your email">
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="form-label">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-control"
                                placeholder="Enter your password">
                        </div>

                        <!-- Submit -->
                        <div class="d-grid">
                            <button
                                type="submit"
                                class="btn btn-primary">
                                Login
                            </button>
                        </div>

                    </form>

                    <div class="text-center mt-4">
                        <span>Don't have an account?</span>
                        <a href="<?= BASE_URL ?>index.php?page=register">
                            Register
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>