<?php
include "db.php";

$email = isset($_GET['email']) ? $_GET['email'] : '';
$msg = "";

if(isset($_POST['reset_password'])){
    $new_password = mysqli_real_escape_string($conn, $_POST['password']);

    $conn->query("
        UPDATE alumni
        SET password='$new_password'
        WHERE email='$email'
    ");

    $msg = "Password updated successfully.";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Reset Password</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width:500px;">
    <div class="card p-4 shadow">
        <h3 class="mb-3">Reset Password</h3>

        <?php if($msg != ""){ ?>
            <div class="alert alert-success"><?php echo $msg; ?></div>
            <a href="login.php" class="btn btn-success w-100">Go to Login</a>
        <?php } else { ?>
            <form method="POST">
                <label>New Password</label>
                <input type="password" name="password" class="form-control mb-3" required>

                <button type="submit" name="reset_password" class="btn btn-primary w-100">
                    Update Password
                </button>
            </form>
        <?php } ?>
    </div>
</div>

</body>
</html>