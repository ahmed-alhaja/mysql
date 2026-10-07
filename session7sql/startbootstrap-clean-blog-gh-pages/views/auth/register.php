<div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">

            <div class="col-md-6 col-lg-5">

                <div class="card shadow border-0">
                    <div class="card-body p-5">

                        <h2 class="text-center mb-4">
                            Create Account
                        </h2>

                        <form action="<?= BASE_URL ?>index.php?page=sign-up" method="POST">

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    Name
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    placeholder="Enter your name">
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    placeholder="Enter your email">
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">
                                    Password
                                </label>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Enter your password">
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-4">
                                <label for="phone" class="form-label">
                                    Phone
                                </label>

                                <input
                                    type="phone"
                                    name="phone"
                                    class="form-control"
                                    placeholder="Enter your phone number">
                            </div>

                            <!-- Submit -->
                            <div class="d-grid">
                                <button
                                    type="submit"
                                    class="btn btn-primary">
                                    Register
                                </button>
                            </div>

                        </form>

                        <div class="text-center mt-4">
                            <span>Already have an account?</span>
                            <a href="<?= BASE_URL ?>index.php?page=login">Login</a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

