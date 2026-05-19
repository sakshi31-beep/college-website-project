<?php
session_start();
include "db.php";

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

$msg = "";

if(isset($_POST['submit'])){

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $link  = mysqli_real_escape_string($conn, $_POST['link']);

    $file_name = $_FILES['file']['name'];
    $tmp_name  = $_FILES['file']['tmp_name'];

    $new_name = "";

    // PDF upload
    if($file_name != ""){
        $new_name = time() . "_" . $file_name;
        $target = "assets/uploads/notices/" . $new_name;
        move_uploaded_file($tmp_name, $target);
    }

    // PDF ya Link me se ek hona zaruri
    if($new_name != "" || $link != ""){

        mysqli_query($conn,
            "INSERT INTO notices (title, file, link)
             VALUES ('$title', '$new_name', '$link')"
        );

        $msg = "Notice added successfully!";
    } else {
        $msg = "Please upload a PDF or enter a link.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Notice</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Add Notice</h4>
        </div>

        <div class="card-body">

            <?php if($msg != ""){ ?>
                <div class="alert alert-info"><?php echo $msg; ?></div>
            <?php } ?>

            <form method="post" enctype="multipart/form-data">

                <label class="form-label">Notice Title</label>
                <input type="text" name="title" class="form-control mb-3" required>

                <label class="form-label">Upload PDF (Optional)</label>
                <input type="file" name="file" class="form-control mb-3" accept=".pdf">

                <label class="form-label">External Link (Optional)</label>
                <input type="url"
                       name="link"
                       class="form-control mb-3"
                       placeholder="https://example.com">

                <button type="submit" name="submit" class="btn btn-success">
                    Add Notice
                </button>

                <a href="admin_dashboard.php" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>
    </div>
</div>

</body>
</html>