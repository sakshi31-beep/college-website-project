<?php
$show = false;

$branch = "";
$semester = "";
$year = "";
$path = "";

if (isset($_GET['branch']) && isset($_GET['semester']) && isset($_GET['year'])) {

    $show = true;

    $branch = $_GET['branch'];
    $semester = $_GET['semester'];
    $year = $_GET['year'];

    $sem_clean = strtolower($semester);
    $sem_clean = str_replace(
        ['st semester', 'nd semester', 'rd semester', 'th semester', ' semester', ' '],
        ['', '', '', '', '', '_'],
        $sem_clean
    );

    $file = strtolower($branch) . "_" . $sem_clean . "_" . $year . ".jpg";
    $path = "assets/uploads/timetable/" . $file;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>College Timetable</title>

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
    padding: 10px 20px;
    font-weight: 600;
}

.result-box{
    margin-top: 30px;
    padding: 25px;
    background: #f8f9fa;
    border-radius: 15px;
    text-align: center;
    border: 1px solid #e5e5e5;
}

.result-box img{
    max-width: 100%;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
}

.empty-state{
    padding: 50px 20px;
    text-align: center;
    color: #6c757d;
}

.empty-state i{
    font-size: 60px;
    margin-bottom: 15px;
    color: #ced4da;
}

@media(max-width: 768px){
    .main-card{
        margin: 20px 10px;
    }

    .card-body-custom{
        padding: 20px;
    }

    .d-flex.gap-2{
        flex-direction: column;
    }

    .d-flex.gap-2 .btn{
        width: 100% !important;
    }
}
</style>
</head>
<body>

<!-- Top Bar -->
<div class="top-bar">
    <div class="container d-flex justify-content-between align-items-center">
        <h3><i class="fas fa-calendar-alt"></i> College Timetable</h3>
        <a href="index.php" class="btn btn-light btn-sm">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>
</div>

<!-- Main Card -->
<div class="container">
    <div class="main-card">

        <!-- Header -->
        <div class="card-header-custom">
            <h2>Select Branch, Semester & Academic Year</h2>
            <p class="mb-0 mt-2">View the latest timetable for your class</p>
        </div>

        <!-- Body -->
        <div class="card-body-custom">

            <!-- Form -->
            <form method="GET">

                <div class="row g-3">

                    <div class="col-md-4">
                        <label class="form-label">Branch</label>
                        <select name="branch" class="form-select" required>
                            <option value="">Select Branch</option>
                            <option value="CSE" <?php if($branch=="CSE") echo "selected"; ?>>CSE</option>
                            <option value="IT" <?php if($branch=="IT") echo "selected"; ?>>IT</option>
                            <option value="ETE" <?php if($branch=="ETE") echo "selected"; ?>>ETE</option>
                            <option value="CDDM" <?php if($branch=="CDDM") echo "selected"; ?>>CDDM</option>
                            <option value="MOM" <?php if($branch=="MOM") echo "selected"; ?>>MOM</option>
                            <option value="Pharmacy" <?php if($branch=="Pharmacy") echo "selected"; ?>>Pharmacy</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Semester</label>
                        <select name="semester" class="form-select" required>
                            <option value="">Select Semester</option>
                            <option value="1st Semester" <?php if($semester=="1st Semester") echo "selected"; ?>>1st Semester</option>
                            <option value="2nd Semester" <?php if($semester=="2nd Semester") echo "selected"; ?>>2nd Semester</option>
                            <option value="3rd Semester" <?php if($semester=="3rd Semester") echo "selected"; ?>>3rd Semester</option>
                            <option value="4th Semester" <?php if($semester=="4th Semester") echo "selected"; ?>>4th Semester</option>
                            <option value="5th Semester" <?php if($semester=="5th Semester") echo "selected"; ?>>5th Semester</option>
                            <option value="6th Semester" <?php if($semester=="6th Semester") echo "selected"; ?>>6th Semester</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Academic Year</label>
                        <select name="year" class="form-select" required>
                            <option value="">Select Year</option>
                            <option value="2025-26" <?php if($year=="2025-26") echo "selected"; ?>>2025-26</option>
                            <option value="2026-27" <?php if($year=="2026-27") echo "selected"; ?>>2026-27</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-primary w-50">
                        <i class="fas fa-search"></i> View Timetable
                    </button>

                    <a href="timetable.php" class="btn btn-danger w-50">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>

            </form>

            <!-- Result -->
            <?php if($show){ ?>

                <div class="result-box">
                    <h4 class="mb-4 text-dark">
                        <?php echo htmlspecialchars($branch . " - " . $semester . " - " . $year); ?>
                    </h4>

                    <?php if(file_exists($path)){ ?>
                        <img src="<?php echo $path; ?>" alt="Timetable">
                    <?php } else { ?>
                        <div class="alert alert-danger mb-0">
                            <i class="fas fa-exclamation-circle"></i>
                            Timetable not found.
                        </div>
                    <?php } ?>
                </div>

            <?php } else { ?>

                <div class="empty-state">
                    <i class="fas fa-calendar-week"></i>
                    <h5>Please select Branch, Semester and Academic Year</h5>
                    <p class="mb-0">Your timetable will appear here.</p>
                </div>

            <?php } ?>

        </div>
    </div>
</div>

</body>
</html>