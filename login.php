<?php
session_start();
include "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST['email'];
    $password = $_POST['password'];

    // 🧑‍💼 ADMIN LOGIN
    if($email == "admin@gmail.com" && $password == "@123"){
        $_SESSION['admin'] = $email;
       
        header("Location: admin_dashboard.php");
        exit();
    }

    // 👩‍🎓 STUDENT LOGIN
    $sql = "SELECT * FROM alumni WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $_SESSION['student'] = $row['email'];
        $_SESSION['name'] = $row['name'];

        header("Location: student_dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login - GGP Raipur</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f2f2f2;">

<div class="container mt-5" style="max-width:400px;background:#fff;padding:30px;border-radius:10px;">

<h3 class="text-center mb-3">Login</h3>

<form method="POST">
<a href="alumni.php" class="btn btn-secondary mt-2">
← Back
</a>

<input type="email" name="email" class="form-control mb-3" placeholder="Email" required>


<div class="position-relative mb-3">

    <input type="password"
           name="password"
           id="password"
           class="form-control"
           placeholder="Password"
           required>

    <span onclick="togglePassword()"
          style="position:absolute;
                 right:15px;
                 top:50%;
                 transform:translateY(-50%);
                 cursor:pointer;
                 color:#666;
                 font-size:20px;">
        👁️
    </span>

</div>

<button class="btn btn-primary w-100">Login</button>

</form>

<p class="text-center mt-3">
<a href="registration.php">New User? Register</a>
<div class="text-end mt-2">
    <a href="forgot_password.php">Forgot Password?</a>
</div>
</p>

</div>
<script>
function togglePassword() {
    var password = document.getElementById("password");

    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}
</script>
</body>
</html>