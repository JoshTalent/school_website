<?php
include("connect.php");

$step = 1;
$email = '';
$error = '';
$success = '';

if (isset($_POST['check_email'])) {
    $email = trim($_POST['email']);
    $query = mysqli_query($con, "SELECT * FROM `school_info` WHERE `email` = '$email'");
    if (mysqli_num_rows($query) == 1) {
        $step = 2;
    } else {
        $error = "No account found with that email address.";
    }
}

if (isset($_POST['reset_password'])) {
    $email = trim($_POST['email']);
    $newpass = trim($_POST['new_password']);
    $confirmpass = trim($_POST['confirm_password']);
    if ($newpass !== $confirmpass) {
        $error = "Passwords do not match.";
        $step = 2;
    } else {
        $hashed = md5($newpass);
        $update = mysqli_query($con, "UPDATE `school_info` SET `password`='$hashed' WHERE `email`='$email'");
        if ($update) {
            $success = "Your password has been updated successfully. You can now <a href='login.php'>login</a>.";
            $step = 3;
        } else {
            $error = "Failed to update password. Please try again.";
            $step = 2;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Reset Password - GS Des Parents</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body class="courses-page bg-light">
    <main class="main d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow border-0 rounded-4">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <i class="bi bi-shield-lock fs-1 text-primary mb-2"></i>
                                <h4 class="fw-bold mb-1">Reset Password</h4>
                                <p class="text-muted mb-0">Enter your email to reset your password.</p>
                            </div>
                            <?php if ($error): ?>
                                <div class="alert alert-danger small py-2 mb-3"><?php echo $error; ?></div>
                            <?php endif; ?>
                            <?php if ($success): ?>
                                <div class="alert alert-success small py-2 mb-3"><?php echo $success; ?></div>
                            <?php endif; ?>
                            <?php if ($step === 1): ?>
                                <form method="post" class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>">
                                        <div class="invalid-feedback">Please enter your email address.</div>
                                    </div>
                                    <button type="submit" name="check_email" class="btn btn-primary w-100">Continue</button>
                                </form>
                            <?php elseif ($step === 2): ?>
                                <form method="post" class="needs-validation" novalidate>
                                    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="new_password" name="new_password" required placeholder="Enter new password">
                                        <div class="invalid-feedback">Please enter a new password.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirm_password" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required placeholder="Confirm new password">
                                        <div class="invalid-feedback">Please confirm your new password.</div>
                                    </div>
                                    <button type="submit" name="reset_password" class="btn btn-primary w-100">Update Password</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
    // Bootstrap validation
    (() => {
      'use strict';
      const forms = document.querySelectorAll('.needs-validation');
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
    </script>
</body>
</html> 