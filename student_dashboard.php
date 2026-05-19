





























<?php
session_start();

if(!isset($_SESSION['student'])){
    header("Location: login.php");
    exit();
}

$name  = isset($_SESSION['name']) ? $_SESSION['name'] : "Student";
$email = $_SESSION['student'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Dashboard - GGP Raipur</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
    background:#f4f6f9;
    font-family:'Segoe UI', sans-serif;
}

/* Header Card */
.dashboard-header{
    background:#ffffff;
    padding:35px;
    border-radius:18px;
    box-shadow:0 4px 15px rgba(0,0,0,0.08);
    margin-bottom:30px;
    border-left:6px solid #8b0000;
}

.dashboard-header h2{
    color:#8b0000;
    font-weight:700;
    margin-bottom:10px;
}

.dashboard-header p{
    margin-bottom:4px;
    color:#555;
}

/* Cards */
.dashboard-card{
    background:#fff;
    border:none;
    border-radius:18px;
    box-shadow:0 4px 15px rgba(0,0,0,0.08);
    transition:0.3s;
    height:100%;
    padding:35px 25px;
}

.dashboard-card:hover{
    transform:translateY(-5px);
    box-shadow:0 8px 25px rgba(0,0,0,0.12);
}

.card-icon{
    font-size:42px;
    color:#8b0000;
    margin-bottom:15px;
}

.dashboard-card h4{
    font-weight:700;
    margin-bottom:10px;
    color:#0d1b2a;
}

.dashboard-card p{
    color:#666;
    font-size:14px;
    min-height:45px;
}

.dashboard-card .btn{
    border-radius:8px;
    padding:8px 20px;
    font-weight:500;
}

/* Button Colors */
.btn-report,
.btn-tutorial,
.btn-profile{
    background:#8b0000;
    border:none;
    color:white;
}

.btn-report:hover,
.btn-tutorial:hover,
.btn-profile:hover{
    background:#a00000;
    color:white;
}

/* Logout Button */
.logout-btn{
    background:#dc3545;
    border:none;
    border-radius:10px;
    padding:10px 30px;
    font-weight:500;
}

.logout-btn:hover{
    background:#bb2d3b;
}
</style>
</head>

<body>

<div class="container py-5">

    <!-- Welcome Header -->
    <div class="dashboard-header">
        <h2>
            Welcome 👩‍🎓 <?php echo htmlspecialchars($name); ?>
        </h2>

        <p>
            <strong>Email:</strong>
            <?php echo htmlspecialchars($email); ?>
        </p>

        <p class="mb-0">
            Government Girls Polytechnic, Raipur
        </p>
    </div>

    <!-- Feature Cards -->
    <div class="row g-4">

        <!-- Report -->
        <div class="col-md-4">
            <div class="card dashboard-card text-center">
                <div class="card-icon">
                    <i class="bi bi-bar-chart-line-fill"></i>
                </div>
                <h4>Report</h4>
                <p>View alumni reports branch-wise and year-wise.</p>
                <a href="report.php" class="btn btn-report">
                    View Report
                </a>
            </div>
        </div>

       
        <!-- Profile -->
        <div class="col-md-4">
            <div class="card dashboard-card text-center">
                <div class="card-icon">
                    <i class="bi bi-person-fill"></i>
                </div>
                <h4>My Profile</h4>
                <p>View and update your registration details.</p>
                <a href="profile.php" class="btn btn-profile">
                    View Profile
                </a>
            </div>
        </div>

    </div>

    <!-- Logout -->
    <div class="text-center mt-5">
        <a href="logout.php" class="btn logout-btn text-white">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </div>

</div>

</body>
</html>