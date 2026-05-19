<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

$base_folder = "assets/uploads/tutorial";

/* FILTER VALUES - ye upar define hona chahiye */
$branch = isset($_GET['branch']) ? $_GET['branch'] : '';
$semester = isset($_GET['semester']) ? $_GET['semester'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>View Tutorials</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f5f7fb;
}
.card-box{
    background:#fff;
    padding:25px;
    border-radius:12px;
    box-shadow:0 4px 15px rgba(0,0,0,0.08);
}
</style>
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4 text-center">📘 Uploaded Tutorials</h2>

    <a href="admin_dashboard.php" class="btn btn-secondary mb-3">
        ← Back to Dashboard
    </a>

    <!-- SEARCH FORM -->
    <form method="GET" class="row g-2 mb-4">

        <!-- Branch -->
        <div class="col-md-4">
            <select name="branch" class="form-select">
                <option value="">Select Branch</option>
                <option value="cse" <?php if($branch=="cse") echo "selected"; ?>>CSE</option>
                <option value="cse/it" <?php if($branch=="cse/it") echo "selected"; ?>>CSE/IT</option>
                <option value="it" <?php if($branch=="it") echo "selected"; ?>>IT</option>
                <option value="ete" <?php if($branch=="ete") echo "selected"; ?>>ETE</option>
                <option value="mom" <?php if($branch=="mom") echo "selected"; ?>>MOM</option>
                <option value="pharmacy" <?php if($branch=="pharmacy") echo "selected"; ?>>Pharmacy</option>
                <option value="cddm" <?php if($branch=="cddm") echo "selected"; ?>>CDDM</option>
                <option value="idd" <?php if($branch=="idd") echo "selected"; ?>>IDD</option>
            </select>
        </div>

        <!-- Semester -->
        <div class="col-md-4">
            <select name="semester" class="form-select">
                <option value="">Select Semester</option>
                <option value="1th" <?php if($semester=="1th") echo "selected"; ?>>1st Sem</option>
                <option value="2th" <?php if($semester=="2th") echo "selected"; ?>>2nd Sem</option>
                <option value="3th" <?php if($semester=="3th") echo "selected"; ?>>3rd Sem</option>
                <option value="4th" <?php if($semester=="4th") echo "selected"; ?>>4th Sem</option>
                <option value="5th" <?php if($semester=="5th") echo "selected"; ?>>5th Sem</option>
                <option value="6th" <?php if($semester=="6th") echo "selected"; ?>>6th Sem</option>
            </select>
        </div>

        <!-- Search Button -->
        <div class="col-md-2">
            <button type="submit" class="btn btn-success w-100">
                Search
            </button>
        </div>

        <!-- Cancel Button -->
        <div class="col-md-2">
            <a href="view_tutorials.php" class="btn btn-secondary w-100">
                Cancel
            </a>
        </div>

    </form>

    <div class="card-box">

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>S.No.</th>
                    <th>Branch / Semester</th>
                    <th>File Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

<?php
$count = 1;

if(is_dir($base_folder)){

    $folders = scandir($base_folder);

    foreach($folders as $folder){

        if($folder == "." || $folder == "..") continue;

        // FILTER
        if($branch != "" && $semester != ""){
            $expected_folder = $branch . "_" . $semester;
            if($folder != $expected_folder){
                continue;
            }
        }

        $full_folder = $base_folder . "/" . $folder;

        if(is_dir($full_folder)){

            $files = scandir($full_folder);

            foreach($files as $file){

                if($file == "." || $file == "..") continue;
?>
<tr>
    <td><?php echo $count++; ?></td>
    <td><?php echo strtoupper($folder); ?></td>
    <td><?php echo htmlspecialchars($file); ?></td>
    <td>
        <a href="<?php echo $full_folder . '/' . $file; ?>"
           target="_blank"
           class="btn btn-sm btn-primary">
            View
        </a>

        <a href="delete_tutorial.php?file=<?php echo urlencode($full_folder . '/' . $file); ?>"
           class="btn btn-sm btn-danger"
           onclick="return confirm('Are you sure you want to delete this file?')">
            Delete
        </a>
    </td>
</tr>
<?php
            }
        }
    }

    if($count == 1){
        echo "<tr><td colspan='4' class='text-center text-danger'>No tutorials found</td></tr>";
    }

}else{
    echo "<tr><td colspan='4' class='text-center text-danger'>No tutorials found</td></tr>";
}
?>

            </tbody>
        </table>

    </div>

</div>

</body>
</html>