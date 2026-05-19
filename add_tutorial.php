<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

$message = "";

if(isset($_POST['submit'])){

    $title    = trim($_POST['title']);
    $teacher_name = trim($_POST['teacher_name']);
    $branch   = strtolower(trim($_POST['branch']));
    $semester = trim($_POST['semester']);
    

    // File data
    $file_name = $_FILES['file']['name'];
    $tmp_name  = $_FILES['file']['tmp_name'];
    $error     = $_FILES['file']['error'];
    $size      = $_FILES['file']['size'];

    // 1. Check if file selected
    if(empty($file_name)){
        $message = "<div class='alert alert-danger'>No file selected.</div>";
    }

    // 2. Check upload error
    elseif($error !== UPLOAD_ERR_OK){
        $message = "<div class='alert alert-danger'>
                        Upload Error Code: $error
                    </div>";
    }

    // 3. Check extension
    else{
        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if($ext != "pdf"){
            $message = "<div class='alert alert-danger'>Only PDF files are allowed.</div>";
        } else {

            // Base folder
            $base_folder = __DIR__ . "/assets/uploads/tutorial";

            // Create base folder
            if(!is_dir($base_folder)){
                mkdir($base_folder, 0777, true);
            }

            // Final folder
            $folder = $base_folder . "/" . $branch . "_" . $semester;

            // Create branch-sem folder
            if(!is_dir($folder)){
                mkdir($folder, 0777, true);
            }

            // Safe file name
            $safe_file = preg_replace('/[^A-Za-z0-9._-]/', '_', $file_name);
            $safe_teacher = preg_replace('/[^A-Za-z0-9_-]/', '_', $teacher_name);
$safe_title   = preg_replace('/[^A-Za-z0-9_-]/', '_', $title);

$safe_file = $safe_title . "_by_" . $safe_teacher . ".pdf";

            // Full path
            $target = $folder . "/" . $safe_file;

            // Move file
            if(move_uploaded_file($tmp_name, $target)){
                            $message = "<div class='alert alert-success'>
                Tutorial uploaded successfully.
            </div>";
            } else {
                $message = "<div class='alert alert-danger'>
                                move_uploaded_file() failed.<br>
                                Target path:<br>
                                <small>$target</small>
                            </div>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Tutorial</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f7fb;
}
.form-box{
    max-width:700px;
    margin:50px auto;
    background:#fff;
    padding:30px;
    border-radius:12px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
}
h2{
    color:#8b0000;
    font-weight:bold;
}
</style>
</head>
<body>

<div class="container">
    <div class="form-box">

        <h2 class="text-center mb-4">Add Tutorial</h2>

        <?php echo $message; ?>

        <form method="POST" enctype="multipart/form-data">

            <label class="form-label">Tutorial Title</label>
            <input type="text" name="title" class="form-control mb-3" required>
            <!-- Teacher Name -->
<label class="form-label">Teacher Name</label>
<input type="text"
       name="teacher_name"
       class="form-control mb-3"
       placeholder="Enter Teacher Name"
       required>

            <label class="form-label">Branch</label>
            <select name="branch" class="form-control mb-3" required>
                <option value="">Select Branch</option>
                <option value="cse">CSE</option>
                
                <option value="it">IT</option>
                <option value="cse/it">CSE/IT</option>
                <option value="ete">ETE</option>
                <option value="mom">MOM</option>
                <option value="pharmacy">Pharmacy</option>
                <option value="cddm">CDDM</option>
                <option value="idd">IDD</option>
            </select>

            <label class="form-label">Semester</label>
            <select name="semester" class="form-control mb-3" required>
                <option value="">Select Semester</option>
                <option value="1th">1th Semester</option>
                <option value="2th">2th Semester</option>
                <option value="3th">3th Semester</option>
                <option value="4th">4th Semester</option>
                <option value="5th">5th Semester</option>
                <option value="6th">6th Semester</option>
            </select>

            <label class="form-label">Upload PDF File</label>
            <input type="file"
                   name="file"
                   accept=".pdf"
                   class="form-control mb-4"
                   required>

            <button type="submit" name="submit" class="btn btn-danger w-100">
                Upload Tutorial
            </button>

            <a href="admin_dashboard.php" class="btn btn-secondary w-100 mt-2">
                Back to Dashboard
            </a>

        </form>

    </div>
</div>

</body>
</html>