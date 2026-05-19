<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

$folder = "assets/uploads/timetable/";
$files = array();

// Get all image files
if(is_dir($folder)){
    $all_files = scandir($folder);

    foreach($all_files as $file){
        if($file != "." && $file != ".."){
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

            if(in_array($ext, array('jpg', 'jpeg', 'png', 'webp'))){
                $files[] = $file;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>View Timetable</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body{
    background:#f4f7fb;
    font-family:Arial, sans-serif;
}

.page-box{
    max-width:1100px;
    margin:40px auto;
    background:#fff;
    padding:30px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

h2{
    color:#8b0000;
    font-weight:bold;
}

.table img{
    width:120px;
    border-radius:8px;
    border:1px solid #ddd;
}

.btn-sm{
    margin:2px;
}
</style>
</head>
<body>

<div class="container">
    <div class="page-box">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>📅 View Timetable</h2>

            <a href="admin_dashboard.php" class="btn btn-secondary">
                ← Back to Dashboard
            </a>
        </div>

        <?php if(count($files) > 0){ ?>

        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>S.No.</th>
                    <th>Preview</th>
                    <th>File Name</th>
                    <th>Branch / Semester / Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $i = 1;
            foreach($files as $file):

                // Remove extension
                $name = pathinfo($file, PATHINFO_FILENAME);

                // Example: cse_6_2025-26
                $parts = explode("_", $name);

                $branch   = isset($parts[0]) ? strtoupper($parts[0]) : "";
                $semester = isset($parts[1]) ? $parts[1] . "th Semester" : "";
                $year     = isset($parts[2]) ? $parts[2] : "";
            ?>

                <tr>
                    <td><?php echo $i++; ?></td>

                    <td>
                        <img src="<?php echo $folder . $file; ?>" alt="Timetable">
                    </td>

                    <td><?php echo $file; ?></td>

                    <td>
                        <?php echo $branch; ?><br>
                        <small><?php echo $semester . " | " . $year; ?></small>
                    </td>

                    <td>
                        <a href="<?php echo $folder . $file; ?>"
                           target="_blank"
                           class="btn btn-primary btn-sm">
                           <i class="fas fa-eye"></i> View
                        </a>

                        <a href="delete_timetable.php?file=<?php echo urlencode($file); ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this timetable?')">
                           <i class="fas fa-trash"></i> Delete
                        </a>
                    </td>
                </tr>

            <?php endforeach; ?>

            </tbody>
        </table>

        <?php } else { ?>

            <div class="alert alert-warning text-center">
                No timetable files found.
            </div>

        <?php } ?>

    </div>
</div>

</body>
</html>