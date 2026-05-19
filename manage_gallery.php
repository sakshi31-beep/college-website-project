<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include "db.php";

/*
Required Table Structure:

CREATE TABLE gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(255) NOT NULL,
    file_path VARCHAR(255) NOT NULL,
    type ENUM('image','video') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
*/

$upload_dir = "assets/uploads/gallery/";

/* Create folder if not exists */
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

/* =========================
   DELETE MEDIA
========================= */
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);

    $result = $conn->query("SELECT file_path FROM gallery WHERE id = $id");

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (!empty($row['file_path']) && file_exists($row['file_path'])) {
            unlink($row['file_path']);
        }

        $conn->query("DELETE FROM gallery WHERE id = $id");
    }

    header("Location: manage_gallery.php");
    exit();
}

/* =========================
   FETCH DATA FOR EDIT
========================= */
$edit_id = 0;
$edit_category = "";
$edit_file = "";
$edit_type = "";

if (isset($_GET['edit'])) {
    $edit_id = intval($_GET['edit']);

    $result = $conn->query("SELECT * FROM gallery WHERE id = $edit_id");

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $edit_category = $row['category'];
        $edit_file = $row['file_path'];
        $edit_type = $row['type'];
    }
}

/* =========================
   ADD / UPDATE MEDIA
========================= */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = intval($_POST['id']);
    $category = mysqli_real_escape_string($conn, trim($_POST['category']));
    $file_path = $_POST['old_file'];
    $type = $_POST['old_type'];

    /* New upload */
    if (isset($_FILES['media']) && $_FILES['media']['name'] != "") {

        $ext = strtolower(pathinfo($_FILES['media']['name'], PATHINFO_EXTENSION));

        $image_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $video_ext = ['mp4', 'webm', 'ogg', 'mov'];

        if (in_array($ext, $image_ext)) {
            $type = 'image';
        } elseif (in_array($ext, $video_ext)) {
            $type = 'video';
        } else {
            die("Invalid file type. Only images and videos are allowed.");
        }

        $new_name = time() . "_" . rand(1000, 9999) . "." . $ext;
        $target = $upload_dir . $new_name;

        if (move_uploaded_file($_FILES['media']['tmp_name'], $target)) {

            /* Delete old file when updating */
            if (
                $id > 0 &&
                !empty($_POST['old_file']) &&
                file_exists($_POST['old_file'])
            ) {
                unlink($_POST['old_file']);
            }

            $file_path = $target;
        }
    }

    /* Insert or Update */
    if ($id > 0) {
        $conn->query("
            UPDATE gallery
            SET category = '$category',
                file_path = '$file_path',
                type = '$type'
            WHERE id = $id
        ");
    } else {
        $conn->query("
            INSERT INTO gallery (category, file_path, type)
            VALUES ('$category', '$file_path', '$type')
        ");
    }

    header("Location: manage_gallery.php");
    exit();
}

/* =========================
   FETCH ALL GALLERY DATA
========================= */
$gallery = $conn->query("SELECT * FROM gallery ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Gallery</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f5f7fb;
    font-family:'Segoe UI', sans-serif;
}
.card-box{
    background:#fff;
    padding:25px;
    border-radius:12px;
    box-shadow:0 4px 15px rgba(0,0,0,0.08);
}
.gallery-media{
    width:100%;
    height:220px;
    object-fit:cover;
    border-radius:10px;
}
</style>
</head>
<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">🖼️ Manage Gallery</h2>

    <a href="admin_dashboard.php" class="btn btn-secondary mb-3">
        ← Back to Dashboard
    </a>

    <!-- Add / Edit Form -->
    <div class="card-box mb-4">
        <h4><?php echo $edit_id ? "Edit Media" : "Add New Media"; ?></h4>

        <form method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $edit_id; ?>">
            <input type="hidden" name="old_file" value="<?php echo htmlspecialchars($edit_file); ?>">
            <input type="hidden" name="old_type" value="<?php echo htmlspecialchars($edit_type); ?>">

            <div class="mb-3">
                <label class="form-label">Category Title</label>
                <input type="text"
                       name="category"
                       class="form-control"
                       required
                       placeholder="e.g. NSS Camp"
                       value="<?php echo htmlspecialchars($edit_category); ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Select Image or Video</label>
                <input type="file"
                       name="media"
                       class="form-control"
                       accept="image/*,video/*"
                       <?php echo $edit_id ? "" : "required"; ?>>
            </div>

            <?php if ($edit_file != ""): ?>
                <?php if ($edit_type == 'image'): ?>
                    <img src="<?php echo htmlspecialchars($edit_file); ?>"
                         width="220"
                         class="mb-3 rounded">
                <?php else: ?>
                    <video width="220" controls class="mb-3 rounded">
                        <source src="<?php echo htmlspecialchars($edit_file); ?>">
                    </video>
                <?php endif; ?>
            <?php endif; ?>

            <button type="submit" class="btn btn-primary">
                <?php echo $edit_id ? "Update Media" : "Add Media"; ?>
            </button>

            <?php if ($edit_id): ?>
                <a href="manage_gallery.php" class="btn btn-secondary">
                    Cancel
                </a>
            <?php endif; ?>

        </form>
    </div>

    <!-- Gallery List -->
    <div class="row">

        <?php if ($gallery && $gallery->num_rows > 0): ?>

            <?php while ($row = $gallery->fetch_assoc()): ?>

                <div class="col-md-4 mb-4">
                    <div class="card-box">

                        <?php if ($row['type'] == 'image'): ?>
                            <img src="<?php echo htmlspecialchars($row['file_path']); ?>"
                                 class="gallery-media mb-3"
                                 alt="Gallery Image">
                        <?php else: ?>
                            <video class="gallery-media mb-3" controls>
                                <source src="<?php echo htmlspecialchars($row['file_path']); ?>">
                            </video>
                        <?php endif; ?>

                        <h5><?php echo htmlspecialchars($row['category']); ?></h5>

                        <a href="manage_gallery.php?edit=<?php echo $row['id']; ?>"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="manage_gallery.php?delete=<?php echo $row['id']; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this file?')">
                            Delete
                        </a>

                    </div>
                </div>

            <?php endwhile; ?>

        <?php else: ?>

            <p class="text-center text-muted">No media found.</p>

        <?php endif; ?>

    </div>

</div>

</body>
</html>