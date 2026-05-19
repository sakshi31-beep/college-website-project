<?php
session_start();

$branch = isset($_GET['branch']) ? $_GET['branch'] : '';
$semester = isset($_GET['semester']) ? $_GET['semester'] : '';

/* BACK BUTTON LOGIC */
if(isset($_SESSION['admin'])){
    $back_link = "admin_dashboard.php";
}
elseif(isset($_SESSION['student'])){
    $back_link = "student_dashboard.php";
}
else{
    $back_link = "index.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tutorial Notes</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body{
    background: linear-gradient(135deg, #f4f7fb, #e9f2ff);
    font-family: Arial, sans-serif;
    min-height: 100vh;
}

.top-bar{
    background: #8b0000;
    color: #fff;
    padding: 15px 0;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.top-bar h3{
    margin: 0;
    font-weight: bold;
}

.main-card{
    max-width: 1000px;
    margin: 40px auto;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    overflow: hidden;
}

.card-header-custom{
    background: linear-gradient(135deg, #8b0000, #b22222);
    color: #fff;
    padding: 25px;
    text-align: center;
}

.card-header-custom h2{
    margin: 0;
    font-weight: bold;
}

.card-header-custom p{
    margin: 8px 0 0;
    opacity: 0.9;
}

.card-body-custom{
    padding: 30px;
}

.form-label{
    font-weight: 600;
    color: #333;
}

.form-select{
    border-radius: 10px;
    padding: 10px;
}

.btn{
    border-radius: 10px;
    font-weight: 600;
}

.result-box{
    margin-top: 30px;
    background: #f8f9fa;
    border-radius: 15px;
    padding: 25px;
    border: 1px solid #e5e5e5;
}

.note-item{
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 15px 20px;
    margin-bottom: 15px;
    transition: 0.3s;
}

.note-item:hover{
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

.note-title{
    font-weight: 600;
    color: #333;
}

.note-date{
    color: #6c757d;
    font-size: 14px;
}

.empty-state{
    padding: 50px 20px;
    text-align: center;
    color: #6c757d;
}

.empty-state i{
    font-size: 60px;
    color: #ced4da;
    margin-bottom: 15px;
}

@media(max-width:768px){
    .main-card{
        margin: 20px 10px;
    }

    .card-body-custom{
        padding: 20px;
    }

    .action-buttons{
        flex-direction: column;
    }

    .action-buttons .btn{
        width: 100% !important;
    }

    .note-item{
        text-align: center;
    }

    .note-item .d-flex{
        flex-direction: column;
        gap: 15px;
    }
    
}
</style>
</head>
<body>

<!-- Top Bar -->
<div class="top-bar">
    <div class="container d-flex justify-content-between align-items-center">
        <h3><i class="fas fa-book-open"></i> Tutorial Notes</h3>
        <a href="<?php echo $back_link; ?>" class="btn btn-light btn-sm">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>
</div>

<!-- Main Card -->
<div class="container">
    <div class="main-card">

        <!-- Header -->
        <div class="card-header-custom">
            <h2>Semester Tutorial Notes</h2>
            <p>Select your branch and semester to view available notes.</p>
        </div>

        <!-- Body -->
        <div class="card-body-custom">

            <!-- Form -->
            <form method="GET">
                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Branch</label>
                        <select name="branch" class="form-select" required>
                            <option value="">Select Branch</option>
                            <option value="cse" <?php if($branch=="cse") echo "selected"; ?>>CSE</option>
                            <option value="it" <?php if($branch=="it") echo "selected"; ?>>IT</option>
                            <option value="cse/it" <?php if($branch=="cse/it") echo "selected"; ?>>CSE/IT</option>
                            <option value="ete" <?php if($branch=="ete") echo "selected"; ?>>ETE</option>
                            <option value="mom" <?php if($branch=="mom") echo "selected"; ?>>MOM</option>
                            <option value="pharmacy" <?php if($branch=="pharmacy") echo "selected"; ?>>Pharmacy</option>
                            <option value="cddm" <?php if($branch=="cddm") echo "selected"; ?>>CDDM</option>
                            <option value="idd" <?php if($branch=="idd") echo "selected"; ?>>IDD</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Semester</label>
                        <select name="semester" class="form-select" required>
                            <option value="">Select Semester</option>
                            <option value="1th" <?php if($semester=="1th") echo "selected"; ?>>1st Semester</option>
                            <option value="2th" <?php if($semester=="2th") echo "selected"; ?>>2nd Semester</option>
                            <option value="3th" <?php if($semester=="3th") echo "selected"; ?>>3rd Semester</option>
                            <option value="4th" <?php if($semester=="4th") echo "selected"; ?>>4th Semester</option>
                            <option value="5th" <?php if($semester=="5th") echo "selected"; ?>>5th Semester</option>
                            <option value="6th" <?php if($semester=="6th") echo "selected"; ?>>6th Semester</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4 action-buttons">
                    <button type="submit" class="btn btn-success w-50">
                        <i class="fas fa-search"></i> View Notes
                    </button>

                    <a href="tutorial.php" class="btn btn-danger w-50">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>

            <!-- Results -->
            <?php
            if($branch != "" && $semester != ""){

                $folder = "assets/uploads/tutorial/" . $branch . "_" . $semester;

                if(is_dir($folder)){

                    $files = scandir($folder);
                    $validFiles = [];

                    foreach($files as $file){
                        if($file != "." && $file != ".."){
                            $validFiles[] = $file;
                        }
                    }

                    if(count($validFiles) > 0){
                        echo '<div class="result-box">';
                        echo '<h4 class="text-center mb-4"><i class="fas fa-folder-open"></i> Available Notes</h4>';

                        foreach($validFiles as $file){

                            


                            $name = pathinfo($file, PATHINFO_FILENAME);
$path = $folder . "/" . $file;
$time = date("d-m-Y h:i A", filemtime($path));

/* Split title and teacher name */
$parts = explode('_by_', $name);

$subject_title = str_replace('_', ' ', $parts[0]);

$teacher_name = '';
if(isset($parts[1])){
    $teacher_name = str_replace('_', ' ', $parts[1]);
}

                            echo '
                            <div class="note-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        
                                        <div class="note-title">
                                        <i class="fas fa-file-pdf text-danger"></i> ' . htmlspecialchars($subject_title) . '
                                    </div>
                                    
                                    <div class="note-subtitle text-muted">
                                        <i class="fas fa-user"></i> ' . htmlspecialchars($teacher_name) . '
                                    </div>

                                        <div class="note-date">
                                            Released: ' . $time . '
                                        </div>
                                    </div>

                                    <a href="' . $path . '" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fas fa-eye"></i> Open
                                    </a>
                                </div>
                            </div>';
                        }

                        echo '</div>';
                    } else {
                        echo '
                        <div class="alert alert-warning text-center mt-4">
                            <i class="fas fa-folder-open"></i>
                            No notes uploaded for this semester.
                        </div>';
                    }

                } else {
                    echo '
                    <div class="alert alert-danger text-center mt-4">
                        <i class="fas fa-exclamation-circle"></i>
                        No notes uploaded for this semester.
                    </div>';
                }

            } else {
                echo '
                <div class="empty-state">
                    <i class="fas fa-book-reader"></i>
                    <h5>Please select Branch and Semester</h5>
                    <p class="mb-0">Available tutorial notes will appear here.</p>
                </div>';
            }
            ?>

        </div>
    </div>
</div>

</body>
</html>