<?php
session_start();
include "db.php";

/* Only Admin Can Access */
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

/* Total Alumni Count */
$result = $conn->query("SELECT COUNT(*) AS total FROM alumni");
$row = $result->fetch_assoc();
$total_alumni = $row['total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard - GGP Raipur</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>
body{
    margin:0;
    font-family:'Segoe UI', sans-serif;
    background:#f4f7fb;
}

/* Sidebar */
.sidebar{
    width:250px;
    height:100vh;
    position:fixed;
    top:0;
    left:0;
    background:linear-gradient(180deg,#8b0000,#5e0000);
    color:white;
    padding:30px 20px;
}

.sidebar h3{
    text-align:center;
    margin-bottom:30px;
    font-weight:bold;
}

.sidebar a{
    display:block;
    color:white;
    text-decoration:none;
    padding:12px 15px;
    margin-bottom:10px;
    border-radius:8px;
    transition:0.3s;
}

.sidebar a:hover{
    background:rgba(255,255,255,0.15);
}

/* Main Content */
.main-content{
    margin-left:250px;
    padding:30px;
}

.top-header{
    background:white;
    padding:20px 30px;
    border-radius:12px;
    box-shadow:0 4px 15px rgba(0,0,0,0.08);
    margin-bottom:30px;
}

.top-header h2{
    margin:0;
    color:#8b0000;
    font-weight:bold;
}

/* Dashboard Cards */
.card-box{
    background:white;
    border-radius:15px;
    padding:25px;
    text-align:center;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
    transition:0.3s;
    height:100%;
}

.card-box:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,0.12);
}

.card-box i{
    font-size:40px;
    margin-bottom:15px;
    color:#8b0000;
}

.card-box h4{
    font-size:28px;
    font-weight:bold;
    color:#002147;
}

.card-box p{
    color:#666;
    margin-bottom:15px;
}

.card-box a{
    text-decoration:none;
    background:#8b0000;
    color:white;
    padding:8px 18px;
    border-radius:6px;
    display:inline-block;
}

.card-box a:hover{
    background:#5e0000;
    color:white;
}

.logout-btn{
    background:#dc3545 !important;
}

.logout-btn:hover{
    background:#bb2d3b !important;
}
</style>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h3>Admin Panel</h3>

    <a href="admin_dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
    <a href="admin_alumni_list.php"><i class="fas fa-users"></i> View Alumni</a>
    <a href="report.php"><i class="fas fa-chart-bar"></i> Report</a>
    <a href="add_tutorial.php"><i class="fas fa-book"></i> Add Tutorial</a>
    <a href="add_timetable.php"><i class="fas fa-calendar"></i> Add Timetable</a>
    <a href="add_notice.php"> <i class="fas fa-bullhorn"></i>Add Notices</a>
    <a href="manage_notices.php"><i class="fas fa-bullhorn"></i>Manage Notices</a>
<a href="manage_gallery.php"><i class="fas fa-images"></i> Manage Gallery</a>
    <a href="logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<!-- Main Content -->
<div class="main-content">

    <!-- Header -->
    <div class="top-header">
        <h2>Welcome Admin 👩‍💼</h2>
        <p class="mb-0 text-muted">Government Girls Polytechnic, Raipur</p>
    </div>

    <!-- Cards -->
    <div class="row g-4">

        <!-- Total Alumni -->
        <div class="col-md-4">
            <div class="card-box">
                <i class="fas fa-user-graduate"></i>
                <h4><?php echo $total_alumni; ?></h4>
                <p>Total Alumni</p>
                <a href="admin_alumni_list.php">View Alumni</a>
            </div>
        </div>

        
        <!-- Report Management -->
<div class="col-md-4">
    <div class="card-box">
        <i class="fas fa-chart-bar"></i>
        <h4>Reports</h4>
        <p>View, Edit and Delete Alumni Reports</p>
        <a href="report.php">View Reports</a>
    </div>
</div>

        <!-- Add Tutorial -->
        <div class="col-md-4">
            <div class="card-box">
                <i class="fas fa-book-open"></i>
                <h4>Tutorials</h4>
                <p>Upload Study Material</p>
                <a href="add_tutorial.php">Add Tutorial</a>
            </div>
        </div>

        <!-- Timetable Management -->
<div class="col-md-4">
    <div class="card-box">
        <i class="fas fa-calendar-alt"></i>
        <h4>Timetable</h4>
        <p>Add and View Uploaded Timetables</p>
        <a href="add_timetable.php">Add Timetable</a>
        <a href="view_timetable.php" class="mt-2 d-inline-block">View Timetable</a>
    </div>
</div>

  <!-- Notice Management -->
<div class="col-md-4">
    <div class="card-box">
        <i class="fas fa-bullhorn"></i>
        <h4>Manage Notices</h4>
        <p>Add, View and Delete Homepage Notices</p>
        <a href="add_notice.php">Add Notices</a>
        <a href="edit_top_notice.php">Edit Notice</a>
        <a href="manage_notices.php">Manage Notices</a>



    </div>
</div>



<!-- View Tutorials -->
<div class="col-md-4">
    <div class="card-box">
        <i class="fas fa-eye"></i>
        <h4>View Tutorials</h4>
        <p>View and Delete Uploaded Tutorials</p>
        <a href="view_tutorials.php">View Tutorials</a>
    </div>
</div>
       <!-- Gallery Management -->
<div class="col-md-4">
    <div class="card-box">
        <i class="fas fa-images"></i>
        <h4>Gallery</h4>
        <p>Upload, View and Delete Gallery Images</p>
        
        <a href="manage_gallery.php" class="mt-2 d-inline-block">Manage Gallery</a>
    </div>
</div>

        <!-- Logout -->
        <div class="col-md-4">
            <div class="card-box">
                <i class="fas fa-sign-out-alt"></i>
                <h4>Logout</h4>
                <p>Securely Sign Out</p>
                <a href="logout.php">Logout</a>
            </div>
        </div>

    </div>
</div>

</body>
</html>