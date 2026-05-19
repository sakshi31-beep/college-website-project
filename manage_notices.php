<?php
session_start();
include "db.php";

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

$msg = "";

/* DELETE NOTICE */
if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);

    $res = $conn->query("SELECT file FROM notices WHERE id=$id");
    $row = $res->fetch_assoc();

    if($row && $row['file'] != ""){
        $filepath = "uploads/notices/" . $row['file'];
        if(file_exists($filepath)){
            unlink($filepath);
        }
    }

    $conn->query("DELETE FROM notices WHERE id=$id");
    $msg = "Notice deleted successfully.";
}

/* ADD OR UPDATE NOTICE */
if(isset($_POST['save_notice'])){

    $id = intval($_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);
    $filename = "";

    if(isset($_FILES['file']) && $_FILES['file']['name'] != ""){
        $filename = time() . "_" . $_FILES['file']['name'];
        move_uploaded_file(
            $_FILES['file']['tmp_name'],
            "uploads/notices/" . $filename
        );
    }

    if($id == 0){
        // ADD
        $conn->query("
            INSERT INTO notices(title,file,link)
            VALUES('$title','$filename','$link')
        ");
        $msg = "Notice added successfully.";
    }else{
        // UPDATE
        if($filename != ""){
            $conn->query("
                UPDATE notices
                SET title='$title', file='$filename', link='$link'
                WHERE id=$id
            ");
        }else{
            $conn->query("
                UPDATE notices
                SET title='$title', link='$link'
                WHERE id=$id
            ");
        }
        $msg = "Notice updated successfully.";
    }
}

/* EDIT MODE */
$edit = [
    'id' => 0,
    'title' => '',
    'link' => ''
];

if(isset($_GET['edit'])){
    $id = intval($_GET['edit']);
    $res = $conn->query("SELECT * FROM notices WHERE id=$id");
    $edit = $res->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage Notices</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <h2 class="mb-4">Manage Latest Notices</h2>

    <?php if($msg != ""){ ?>
        <div class="alert alert-success"><?php echo $msg; ?></div>
    <?php } ?>

    <!-- ADD / EDIT FORM -->
    <div class="card p-4 mb-4">
        <h4><?php echo ($edit['id'] ? "Edit Notice" : "Add Notice"); ?></h4>

        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $edit['id']; ?>">

            <label>Notice Title</label>
            <input type="text" name="title"
                   class="form-control mb-3"
                   required
                   value="<?php echo $edit['title']; ?>">

            <label>Upload PDF (Optional)</label>
            <input type="file" name="file" class="form-control mb-3">

            <label>External Link (Optional)</label>
            <input type="text" name="link"
                   class="form-control mb-3"
                   placeholder="https://example.com"
                   value="<?php echo $edit['link']; ?>">

            <button type="submit" name="save_notice" class="btn btn-success">
                Save Notice
            </button>

            <a href="manage_notices.php" class="btn btn-secondary">
                Reset
            </a>
        </form>
    </div>

    <!-- NOTICE LIST -->
    <div class="card p-4">
        <h4>All Notices</h4>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Date</th>
                <th width="200">Action</th>
            </tr>

            <?php
            $result = $conn->query("SELECT * FROM notices ORDER BY id DESC");
            while($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>
                    <a href="manage_notices.php?edit=<?php echo $row['id']; ?>"
                       class="btn btn-primary btn-sm">
                        Edit
                    </a>

                    <a href="manage_notices.php?delete=<?php echo $row['id']; ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Delete this notice?')">
                        Delete
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <a href="admin_dashboard.php" class="btn btn-secondary mt-3">
        Back to Dashboard
    </a>

</div>

</body>
</html>