<?php
session_start();
include "db.php";

/* Only Admin Can Access */
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

/* Get ID */
if(!isset($_GET['id'])){
    header("Location: report.php");
    exit();
}

$id = intval($_GET['id']);

/* Fetch Record */
$result = $conn->query("SELECT * FROM alumni WHERE id = $id");

if($result->num_rows == 0){
    echo "<script>alert('Record not found'); window.location='report.php';</script>";
    exit();
}

$row = $result->fetch_assoc();

/* Update Record */
if(isset($_POST['update'])){

    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $degree = $conn->real_escape_string($_POST['degree']);
    $leaving_year = $conn->real_escape_string($_POST['leaving_year']);
    $working_place = $conn->real_escape_string($_POST['working_place']);

    $sql = "UPDATE alumni SET
                name = '$name',
                email = '$email',
                mobile = '$mobile',
                degree = '$degree',
                leaving_year = '$leaving_year',
                working_place = '$working_place'
            WHERE id = $id";

    if($conn->query($sql)){
        echo "<script>alert('Record Updated Successfully'); window.location='report.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error: ".$conn->error."');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Alumni</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f7fb;
    font-family:Arial, sans-serif;
}

.form-box{
    max-width:700px;
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
</style>
</head>
<body>

<div class="container">
    <div class="form-box">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Edit Alumni</h2>
            <a href="report.php" class="btn btn-secondary">← Back</a>
        </div>

        <form method="POST">

            <label class="form-label">Name</label>
            <input type="text" name="name"
                   class="form-control mb-3"
                   value="<?php echo htmlspecialchars($row['name']); ?>"
                   required>

            <label class="form-label">Email</label>
            <input type="email" name="email"
                   class="form-control mb-3"
                   value="<?php echo htmlspecialchars($row['email']); ?>"
                   required>

            <label class="form-label">Mobile</label>
            <input type="text" name="mobile"
                   class="form-control mb-3"
                   value="<?php echo htmlspecialchars($row['mobile']); ?>"
                   required>

            <label class="form-label">Degree</label>
            <select name="degree" class="form-select mb-3" required>
                <option value="CSE" <?php if($row['degree']=="CSE") echo "selected"; ?>>CSE</option>
                <option value="IT" <?php if($row['degree']=="IT") echo "selected"; ?>>IT</option>
                <option value="ET&E" <?php if($row['degree']=="ET&E") echo "selected"; ?>>ET&E</option>
                <option value="MOM" <?php if($row['degree']=="MOM") echo "selected"; ?>>MOM</option>
                <option value="IDD" <?php if($row['degree']=="IDD") echo "selected"; ?>>IDD</option>
                <option value="CDDM" <?php if($row['degree']=="CDDM") echo "selected"; ?>>CDDM</option>
                <option value="Architecture" <?php if($row['degree']=="Architecture") echo "selected"; ?>>Architecture</option>
                <option value="Pharmacy" <?php if($row['degree']=="Pharmacy") echo "selected"; ?>>Pharmacy</option>
            </select>

            <label class="form-label">Leaving Year</label>
            <input type="text" name="leaving_year"
                   class="form-control mb-3"
                   value="<?php echo date('Y', strtotime($row['leaving_year'])); ?>"
                   required>

            <label class="form-label">Working Place</label>
            <input type="text" name="working_place"
                   class="form-control mb-4"
                   value="<?php echo htmlspecialchars($row['working_place']); ?>">

            <button type="submit" name="update"
                    class="btn btn-success w-100">
                Update Record
            </button>

        </form>

    </div>
</div>

</body>
</html>