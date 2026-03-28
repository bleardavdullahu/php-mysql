<?php include 'header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header text-center">
                <h4>Sign Up</h4>
            </div>
            <div class="card-body">
                <form action="signup_process.php" method="POST">

                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                     <div class="mb-3">
                        <label>Surname</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                     <div class="mb-3">
                        <label>Username</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>

                    <button class="btn btn-success w-100">Create Account</button>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>