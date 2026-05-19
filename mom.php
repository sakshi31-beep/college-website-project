<?php
// Future database connection ke liye ready
// include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modern Office Management (MOM)</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f5f7fb;
    font-family:'Segoe UI', sans-serif;
    color:#333;
}

/* Banner */
.dept-banner{
    background:linear-gradient(rgba(0,33,71,0.75), rgba(0,33,71,0.75)),
               url('images/mom_lab.jpg') center/cover no-repeat;
    height:320px;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:white;
}

.dept-banner h1{
    font-size:42px;
    font-weight:700;
    margin-bottom:10px;
}

/* Section Box */
.section-box{
    background:#fff;
    padding:30px;
    border-radius:16px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
    margin-bottom:30px;
}

.section-title{
    color:#8b0000;
    font-weight:700;
    margin-bottom:20px;
    border-left:5px solid #8b0000;
    padding-left:12px;
}

.info-text{
    font-size:16px;
    line-height:1.8;
    color:#555;
}

/* Faculty */
.faculty-item{
    padding:15px 0;
    border-bottom:1px solid #eee;
}

.faculty-item:last-child{
    border-bottom:none;
}

/* Lists */
.custom-list{
    padding-left:20px;
}

.custom-list li{
    padding:8px 0;
    color:#555;
}

/* Back Button */
.back-btn{
    margin:30px 0 20px;
}
</style>
</head>

<body>

<!-- Banner -->
<div class="dept-banner">
    <div>
        <h1>Modern Office Management</h1>
        <p class="fs-5">Department of Management Studies</p>
    </div>
</div>

<div class="container py-5">

    <!-- Back Button -->
    <a href="departments.php" class="btn btn-secondary back-btn">
        ← Back to Departments
    </a>

    <!-- Introduction -->
    <div class="section-box">
        <h3 class="section-title">Introduction</h3>
        <p class="info-text">
            Modern Office Management is a three-year diploma course that prepares students for office administration,
            communication skills, computer applications and modern office technologies used in organizations.
        </p>
    </div>
  <!-- HOD Section -->
  <div class="section-box">
        <h3 class="section-title">Head of Department</h3>

        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="assets/images/hod_mom.jpg"
                     class="hod-img"
                     onerror="this.src='https://via.placeholder.com/180'">
            </div>

            <div class="col-md-9">
                <h4 class="fw-bold">Dr. R.G. GUPTA</h4>
                <p class="mb-0">
                Dr. R.G. GUPTA leads the department with extensive
                    academic and expertise in Modern Office Management
                </p>
            </div>
        </div>
    </div>

    <!-- Job Opportunities -->
    <div class="section-box">
        <h3 class="section-title">Job Opportunities</h3>
        <ul class="custom-list">
            <li>Office Assistant / Clerk</li>
            <li>Data Entry Operator</li>
            <li>Stenographer</li>
            <li>MIS Executive</li>
            <li>Personal Assistant / Secretary</li>
            <li>Computer Operator</li>
            <li>Accounts Assistant</li>
        </ul>
    </div>

    <!-- Self Employment -->
    <div class="section-box">
        <h3 class="section-title">Self Employment Opportunities</h3>
        <ul class="custom-list">
            <li>Typing Institute</li>
            <li>Computer Training Centre</li>
            <li>Reprography Centre</li>
            <li>Freelance Typing Services</li>
        </ul>
    </div>

    <!-- Intake -->
    <div class="section-box">
        <h3 class="section-title">Intake (Category Wise)</h3>

        <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>UR</th>
                    <th>SC</th>
                    <th>ST</th>
                    <th>OBC</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>20</td>
                    <td>06</td>
                    <td>08</td>
                    <td>06</td>
                    <td>40</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>

    <!-- Qualification -->
    <div class="section-box">
        <h3 class="section-title">Minimum Qualification</h3>
        <p class="info-text">
            Candidate must have passed Class 10th examination from a recognized board under the 10+2 system.
        </p>
    </div>

    <!-- Faculty -->
    <div class="section-box">
        <h3 class="section-title">Faculty Members</h3>

        <div class="faculty-item">
            <h5>Dr. Ram Gopal Gupta</h5>
            <p>Experience: 29 Years</p>
        </div>

        <div class="faculty-item">
            <h5>Ms. Rani Sinha</h5>
            <p>Experience: 2 Years</p>
        </div>

        <div class="faculty-item">
            <h5>Charu Awasthy</h5>
            <p>Experience: 10 Years</p>
        </div>

        <div class="faculty-item">
            <h5>Dr. Kishore Sahu</h5>
            <p>Experience: 20 Years</p>
        </div>

    </div>

</div>

</body>
</html>