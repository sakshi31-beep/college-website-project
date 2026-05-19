<?php
// include "db.php"; // future database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Architecture Department</title>

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
               url('images/architecture_lab.jpg') center/cover no-repeat;
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

/* List */
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
        <h1>Architecture Department</h1>
        <p class="fs-5">Design • Planning • Construction</p>
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
            The Architecture Department trains students in building design, planning, construction techniques,
            and modern architectural practices for residential and commercial infrastructure.
        </p>
        <p class="info-text">
            Students learn to design buildings like homes, offices, hotels, and industrial structures using modern tools.
        </p>
    </div>
<!-- HOD Section -->
<div class="section-box">
        <h3 class="section-title">Head of Department</h3>

        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="assets/images/hod_cddm.jpg"
                     class="hod-img"
                     onerror="this.src='https://via.placeholder.com/180'">
            </div>

            <div class="col-md-9">
                <h4 class="fw-bold">Mamta Dewangan</h4>
                <p class="mb-0">
                Mamta Dewangan leads the department with vast experience
                    in garment stitching, textiles, and fashion design education.
                </p>
            </div>
        </div>
    </div>
   

    <!-- Job Prospects -->
    <div class="section-box">
        <h3 class="section-title">Job Prospects</h3>
        <ul class="custom-list">
            <li>Architectural Firms</li>
            <li>Town Planning Departments</li>
            <li>Public Works Department (PWD)</li>
            <li>Housing Board & Development Authorities</li>
            <li>Municipal Corporations</li>
            <li>Private Builders & Contractors</li>
            <li>Urban Development Agencies</li>
        </ul>
    </div>

    <!-- Self Employment -->
    <div class="section-box">
        <h3 class="section-title">Self Employment Opportunities</h3>
        <ul class="custom-list">
            <li>Independent Architect Practice</li>
            <li>Interior & Exterior Design Consultant</li>
            <li>Site Supervisor</li>
            <li>Model Maker</li>
            <li>Construction Consultancy Services</li>
            <li>Exhibition Designer</li>
        </ul>
    </div>

    <!-- Laboratories -->
    <div class="section-box">
        <h3 class="section-title">Laboratories</h3>
        <ul class="custom-list">
            <li>Material Lab</li>
            <li>Construction Lab</li>
            <li>Computer CAD Lab</li>
            <li>Exhibition Design Lab</li>
        </ul>
    </div>

    <!-- Faculty -->
    <div class="section-box">
        <h3 class="section-title">Faculty Members</h3>

        <div class="faculty-item">
            <h5>Jyoti Kanwar</h5>
            <p>Qualification: B.Arch</p>
            <p>Experience: 17 Years</p>
        </div>

        <div class="faculty-item">
            <h5>Deepak Kumar Borkar</h5>
            <p>Qualification: B.Arch</p>
            <p>Experience: 26 Years</p>
        </div>

        <div class="faculty-item">
            <h5>Mamta Dewangan</h5>
            <p>Qualification: B.Arch, M.Arch</p>
            <p>Experience: 15 Years</p>
        </div>

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
                    <td>15</td>
                    <td>05</td>
                    <td>06</td>
                    <td>04</td>
                    <td>30</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>

    <!-- Minimum Qualification -->
    <div class="section-box">
        <h3 class="section-title">Minimum Qualification</h3>
        <p class="info-text">
            Candidate must have passed Class 10th with Mathematics and Science from a recognized board under 10+2 system.
        </p>
    </div>

</div>

</body>
</html>