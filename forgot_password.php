<?php
include "db.php";
$msg = "";

if(isset($_POST['check_email'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $result = $conn->query("SELECT id FROM alumni WHERE email='$email'");

    if($result->num_rows > 0){
        header("Location: reset_password.php?email=" . urlencode($email));
        exit();
    } else {
        $msg = "Email not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width:500px;">
    <div class="card p-4 shadow">
        <h3 class="mb-3">Forgot Password</h3>

        <?php if($msg != "") echo "<div class='alert alert-danger'>$msg</div>"; ?>

        <form method="POST">
            <label>Enter Registered Email</label>
            <input type="email" name="email" class="form-control mb-3" required>

            <button type="submit" name="check_email" class="btn btn-primary w-100">
                Continue
            </button>
        </form>

        <a href="login.php" class="btn btn-secondary w-100 mt-2">
            Back to Login
        </a>
    </div>
</div>

</body>
</html>