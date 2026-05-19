<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

$message = "";

if(isset($_POST['submit'])){

    $branch   = $_POST['branch'];
    $semester = $_POST['semester'];
    $year     = $_POST['year'];

    // File info
    $file_name = $_FILES['file']['name'];
    $tmp_name  = $_FILES['file']['tmp_name'];
    $error     = $_FILES['file']['error'];

    // Check upload error
    if($error == 0){

        // Extension
        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Allowed image types
        $allowed = array("jpg", "jpeg", "png", "webp");

        if(in_array($ext, $allowed)){

            // Semester number निकालें
            // "6th Semester" -> "6"
            $sem_no = preg_replace('/[^0-9]/', '', $semester);

            // Final file name format:
            // cse_6_2025-26.jpg
            $new_name = strtolower($branch) . "_" .
                        $sem_no . "_" .
                        $year . "." . $ext;

            // Upload folder
            $folder = "assets/uploads/timetable/";

            // Create folder if not exists
            if(!is_dir($folder)){
                mkdir($folder, 0777, true);
            }

            // Full path
            $target = $folder . $new_name;

            // Move uploaded file
            if(move_uploaded_file($tmp_name, $target)){

                $message = "<div class='alert alert-success'>
                                Timetable uploaded successfully.
                            </div>";

            } else {

                $message = "<div class='alert alert-danger'>
                                File upload failed.
                            </div>";
            }

        } else {

            $message = "<div class='alert alert-danger'>
                            Only JPG, JPEG, PNG, WEBP files are allowed.
                        </div>";
        }

    } else {

        $message = "<div class='alert alert-danger'>
                        Please select a file.
                    </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Timetable</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f7fb;
    font-family:Arial, sans-serif;
}

.form-box{
    max-width:700px;
    margin:50px auto;
    background:#fff;
    padding:30px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
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

        <h2 class="text-center mb-4">📅 Add Timetable</h2>

        <?php echo $message; ?>

        <form method="POST" enctype="multipart/form-data">

            <label class="form-label">Branch</label>
            <select name="branch" class="form-control mb-3" required>
                <option value="">Select Branch</option>
                <option>CSE</option>
                <option>IT</option>
                <option>ETE</option>
                <option>CDDM</option>
                <option>MOM</option>
                <option>Pharmacy</option>
                <option>IDD</option>
            </select>

            <label class="form-label">Semester</label>
            <select name="semester" class="form-control mb-3" required>
                <option value="">Select Semester</option>
                <option>1st Semester</option>
                <option>2nd Semester</option>
                <option>3rd Semester</option>
                <option>4th Semester</option>
                <option>5th Semester</option>
                <option>6th Semester</option>
            </select>

            <label class="form-label">Academic Year</label>
            <select name="year" class="form-control mb-3" required>
                <option value="">Select Year</option>
                <option>2025-26</option>
                <option>2026-27</option>
                <option>2027-28</option>
            </select>

            <label class="form-label">Upload Timetable Image</label>
            <input type="file"
                   name="file"
                   accept=".jpg,.jpeg,.png,.webp"
                   class="form-control mb-4"
                   required>

            <button type="submit" name="submit" class="btn btn-danger w-100">
                Upload Timetable
            </button>

            <a href="admin_dashboard.php" class="btn btn-secondary w-100 mt-2">
                Back to Dashboard
            </a>

        </form>

    </div>
</div>

</body>
</html>