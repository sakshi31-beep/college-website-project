
<?php
session_start();
include "db.php";

/*
-----------------------------------------
ACCESS CONTROL
- Admin login  -> Back button to admin_dashboard.php
- Student login -> Back button to student_dashboard.php
- Public user   -> Back button to alumni.php
-----------------------------------------
*/
if(isset($_SESSION['admin'])){
    $back_link = "admin_dashboard.php";
}
elseif(isset($_SESSION['student'])){
    $back_link = "student_dashboard.php";
}
else{
    $back_link = "alumni.php";
}

/* FILTER VALUES */
$branch = "";
$year = "";

/* FILTER QUERY */
if(isset($_POST['search'])){

    $branch = $_POST['degree'];
    $year   = $_POST['year'];

    $query = "SELECT * FROM alumni WHERE 1=1";

    if($branch != ""){
        $query .= " AND degree = '$branch'";
    }

    if($year != ""){
        
        
        $query .= " AND YEAR(leaving_year) = '$year'";
    }

    $query .= " ORDER BY id DESC";

    $result = $conn->query($query);

}else{
    $result = $conn->query("SELECT * FROM alumni ORDER BY id DESC");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alumni Report</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body{
    background:#f4f7fb;
    font-family:Arial, sans-serif;
}

.page-box{
    max-width:1300px;
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
    width:60px;
    height:60px;
    border-radius:50%;
    object-fit:cover;
    border:2px solid #ddd;
}

.table th{
    white-space:nowrap;
}

@media(max-width:768px){
    .page-box{
        padding:20px;
    }
}
</style>
</head>
<body>

<div class="container">
<div class="page-box">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        
        <h2><i class="fas fa-chart-bar"></i> Alumni Report</h2>

        <a href="<?php echo $back_link; ?>" class="btn btn-secondary">
            ← Back
        </a>
    </div>


    <!-- FILTER FORM -->
    <form method="POST" class="row g-3 mb-4">

        <div class="col-md-4">
            <label class="form-label">Branch</label>
            <select name="degree" class="form-select">
                <option value="">All Branches</option>
                <option value="CSE" <?php if($branch=="CSE") echo "selected"; ?>>CSE</option>
                <option value="IT" <?php if($branch=="IT") echo "selected"; ?>>IT</option>
                <option value="ET&E" <?php if($branch=="ET&E") echo "selected"; ?>>ET&E</option>
                <option value="MOM" <?php if($branch=="MOM") echo "selected"; ?>>MOM</option>
                <option value="IDD" <?php if($branch=="IDD") echo "selected"; ?>>IDD</option>
                <option value="CDDM" <?php if($branch=="CDDM") echo "selected"; ?>>CDDM</option>
                <option value="Architecture" <?php if($branch=="Architecture") echo "selected"; ?>>Architecture</option>
                <option value="Pharmacy" <?php if($branch=="Pharmacy") echo "selected"; ?>>Pharmacy</option>
            </select>
        </div>

        <div class="col-md-4">
            
            <label class="form-label">Leaving Year</label>
            <input type="text"
                   name="year"
                   class="form-control"
                   placeholder="e.g. 2025"
                   value="<?php echo htmlspecialchars($year); ?>">
        </div>

        <div class="col-md-4 d-flex align-items-end">
            <button type="submit" name="search" class="btn btn-danger me-2">
                Search
            </button>

            <a href="report.php" class="btn btn-secondary">
                Reset
            </a>
        </div>
    </form>

    <!-- REPORT TABLE -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle">

            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Degree</th>
                    <th>Leaving Year</th>
                    <th>Working Place</th>

                    <?php if(isset($_SESSION['admin'])){ ?>
                        <th>Action</th>
                    <?php } ?>
                </tr>
            </thead>

            <tbody>

            <?php if($result && $result->num_rows > 0){ ?>

                <?php while($row = $result->fetch_assoc()){ ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>

                    <td>
                        <?php if(!empty($row['photo'])){ ?>
                           
                            <img src="uploads/<?php echo $row['photo']; ?>" width="60" height="60">
                        <?php } else { ?>
                            No Photo
                        <?php } ?>
                    </td>

                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['mobile']); ?></td>
                    <td><?php echo htmlspecialchars($row['degree']); ?></td>
                    <td><?php echo htmlspecialchars($row['leaving_year']); ?></td>
                    <td><?php echo htmlspecialchars($row['working_place']); ?></td>

                    <?php if(isset($_SESSION['admin'])){ ?>
                    <td>
                        <a href="edit_alumni.php?id=<?php echo $row['id']; ?>"
                           class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <a href="delete_alumni.php?id=<?php echo $row['id']; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this record?')">
                            <i class="fas fa-trash"></i> Delete
                        </a>
                    </td>
                    <?php } ?>

                </tr>

                <?php } ?>

            <?php } else { ?>

                <tr>
                    <td colspan="<?php echo isset($_SESSION['admin']) ? '9' : '8'; ?>"
                        class="text-center text-danger">
                        No alumni records found.
                    </td>
                </tr>

            <?php } ?>

            </tbody>

        </table>
    </div>

</div>
</div>

</body>
</html>