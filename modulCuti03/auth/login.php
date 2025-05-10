<?php 
session_start();
if (isset($_SESSION['is_admin'])) {
    header('Location: ../dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>
    <div class="container login-container d-flex flex-column flex-md-row">
        <div class="col-md-6 illustration"></div>
        <div class="col-md-6 p-5 form-section">
            <h2 class="fw-semibold mb-2">Login</h2>
            <p>welcome back! please enter your details</p>
            <form action="../proses.php" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" name="nip" placeholder="username/NIP" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" name="login" class="btn btn-login w-100 mb-3 mt-3">Login</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
