<?php
session_start();
include "db.php";

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

if(isset($_POST['update'])){
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    mysqli_query($conn, "UPDATE top_notice SET message='$message' WHERE id=1");
    $success = "Top notice updated successfully!";
}

$result = mysqli_query($conn, "SELECT message FROM top_notice WHERE id=1");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Top Notice</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Edit Top Scrolling Notice</h4>
        </div>

        <div class="card-body">

            <?php if(isset($success)){ ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php } ?>

            <form method="post">
                <label class="form-label">Notice Message</label>
                <textarea name="message" rows="4" class="form-control" required><?php echo $row['message']; ?></textarea>

                <button type="submit" name="update" class="btn btn-success mt-3">
                    Update Notice
                </button>

                <a href="admin_dashboard.php" class="btn btn-secondary mt-3">
                    Back
                </a>
            </form>

        </div>
    </div>
</div>

</body>
</html>