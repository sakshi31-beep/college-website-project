<?php
session_start();
include "db.php";

if(!isset($_SESSION['student'])){
    header("Location: login.php");
    exit();
}

$email = $_SESSION['student'];

/* Student data fetch */
$sql = "SELECT * FROM alumni WHERE email='$email'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Profile - GGP Raipur</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg,#eef2f7,#f5f7fb);
    font-family:'Segoe UI', sans-serif;
}

/* CARD */
.profile-card{
    background:#fff;
    border-radius:18px;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
    overflow:hidden;
    transition:0.3s;
}

.profile-card:hover{
    transform:translateY(-3px);
}

/* HEADER */
.profile-header{
    background: linear-gradient(135deg,#0d6efd,#004aad);
    color:white;
    text-align:center;
    padding:45px 20px;
    position:relative;
}

/* PROFILE IMAGE */
.profile-img{
    width:140px;
    height:140px;
    border-radius:50%;
    object-fit:cover;
    border:5px solid #fff;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
    margin-bottom:15px;
    transition:0.3s;
}

.profile-img:hover{
    transform:scale(1.05);
}

/* INFO SECTION */
.info-box{
    padding:35px;
}

.info-item{
    padding:14px 0;
    border-bottom:1px solid #f0f0f0;
    font-size:15px;
}

.info-item:last-child{
    border-bottom:none;
}

.label{
    font-weight:600;
    color:#002147;
    margin-right:5px;
}

/* BUTTONS */
.back-btn{
    border-radius:10px;
    padding:10px 18px;
    font-weight:500;
    transition:0.3s;
}

.back-btn:hover{
    transform:scale(1.05);
}

/* RESPONSIVE */
@media(max-width:768px){
    .profile-img{
        width:110px;
        height:110px;
    }
}
</style>
</head>
<body>

<div class="container py-5">
    <div class="profile-card">

        <!-- Header -->
        <div class="profile-header">

            <img
                src="assets/uploads/registration/<?php echo htmlspecialchars($row['photo']); ?>"
                class="profile-img"
                onerror="this.src='assets/images/uploads/registration_upload'">

            <h3><?php echo htmlspecialchars($row['name']); ?></h3>
            <p class="mb-0"><?php echo htmlspecialchars($row['degree']); ?></p>
        </div>

        <!-- Details -->
        <div class="info-box">

            <div class="info-item">
                <span class="label">Email:</span>
                <?php echo htmlspecialchars($row['email']); ?>
            </div>

            <div class="info-item">
                <span class="label">Father's Name:</span>
                <?php echo htmlspecialchars($row['father_name']); ?>
            </div>

            <div class="info-item">
                <span class="label">Mobile Number:</span>
                <?php echo htmlspecialchars($row['mobile']); ?>
            </div>

            <div class="info-item">
                <span class="label">Admission Year:</span>
                <?php echo htmlspecialchars($row['admission_year']); ?>
            </div>

            <div class="info-item">
                <span class="label">Leaving Year:</span>
                <?php echo htmlspecialchars($row['leaving_year']); ?>
            </div>

            <div class="info-item">
                <span class="label">Present Status:</span>
                <?php echo htmlspecialchars($row['present_status']); ?>
            </div>

            <div class="info-item">
                <span class="label">Working Place:</span>
                <?php echo htmlspecialchars($row['working_place']); ?>
            </div>

            <div class="info-item">
                <span class="label">Contribution:</span>
                <?php echo htmlspecialchars($row['contribution']); ?>
            </div>

            <div class="info-item">
                <span class="label">Message:</span>
                <?php echo htmlspecialchars($row['message']); ?>
            </div>


            <!-- Buttons -->
<div class="text-center mt-4">

<a href="edit_profile.php" class="btn btn-primary back-btn me-2">
    <i class="bi bi-pencil-square"></i> Edit Profile
</a>

<!-- FIXED BACK BUTTON -->
<a href="student_dashboard.php" class="btn btn-secondary back-btn me-2">
    <i class="bi bi-arrow-left"></i> Back
</a>

<a href="logout.php" class="btn btn-danger back-btn">
    <i class="bi bi-box-arrow-right"></i> Logout
</a>

</div>
       

        </div>
    </div>
</div>

</body>
</html>