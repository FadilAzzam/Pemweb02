<?php 
session_start();
if (!isset($_SESSION['is_admin']) == 1) {
    header('Location: auth/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>
    <div class="container login-container d-flex flex-column flex-md-row">
        <div class="col-md-6 illustration-admin"></div>
        <div class="col-md-6 p-5 form-section">
            <h2 class="fw-semibold mb-2">Register</h2>
            <p>Create your account to manage this website</p>
            <form action="../proses.php" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" name="username" placeholder="username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" name="register-admin" class="btn btn-login w-100 mb-3 mt-3">Register</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
