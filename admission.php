<?php
// include "db.php"; // future backend ready
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admissions - GGP Raipur</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f5f7fb;
    font-family:'Segoe UI', sans-serif;
    color:#333;
}

/* Page Title */
.title{
    text-align:center;
    margin:30px 0;
    font-weight:700;
    color:#8b0000;
}

/* Card */
.card{
    border:none;
    border-radius:16px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
    transition:0.3s;
    margin-bottom:25px;
}

.card:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

/* Card Header */
.card-header{
    background:linear-gradient(45deg, #8b0000, #c40000);
    color:white;
    font-weight:600;
    border-radius:16px 16px 0 0 !important;
    padding:12px 15px;
}

/* Table */
.table thead{
    background:#343a40;
    color:white;
}

.table tbody tr:hover{
    background:#f1f1f1;
}

/* Qualification Box */
.qual-box{
    background:#f8f9fa;
    padding:12px;
    border-left:5px solid #8b0000;
    margin-top:10px;
    border-radius:6px;
    font-size:15px;
    color:#555;
}
</style>
</head>

<body>
<!-- Back Button -->
<div class="container mt-4">
    <a href="index.php" class="btn btn-secondary">
        ← Back to Home
    </a>
</div>
<div class="container">

<h2 class="title">Admission Details</h2>

<div class="row">

<!-- CSE -->
<div class="col-md-6">
<div class="card">
<div class="card-header">Computer Science & Engineering (CSE)</div>
<div class="card-body">

<table class="table table-bordered text-center">
<thead>
<tr><th>UR</th><th>SC</th><th>ST</th><th>OBC</th><th>Total</th></tr>
</thead>
<tbody>
<tr><td>23</td><td>07</td><td>09</td><td>06</td><td>45</td></tr>
</tbody>
</table>

<div class="qual-box">
<li>10th pass with Maths & Science + PPT (CG VYAPAM)</li>
<li>Lateral Entry: 12th pass with Mathematics as a subject</li>
</div>

</div>
</div>
</div>

<!-- IT -->
<div class="col-md-6">
<div class="card">
<div class="card-header">Information Technology (IT)</div>
<div class="card-body">

<table class="table table-bordered text-center">
<tr><th>UR</th><th>SC</th><th>ST</th><th>OBC</th><th>Total</th></tr>
<tr><td>15</td><td>04</td><td>07</td><td>04</td><td>30</td></tr>
</table>

<div class="qual-box">
10th pass with Maths & Science + PPT
</div>

</div>
</div>
</div>

<!-- ET&T -->
<div class="col-md-6">
<div class="card">
<div class="card-header">Electronics & Telecommunication (ET&T)</div>
<div class="card-body">

<table class="table table-bordered text-center">
<tr><th>UR</th><th>SC</th><th>ST</th><th>OBC</th><th>Total</th></tr>
<tr><td>10</td><td>03</td><td>07</td><td>03</td><td>23</td></tr>
</table>

<div class="qual-box">
10th + Maths & Science + PPT
</div>

</div>
</div>
</div>

<!-- MOM -->
<div class="col-md-6">
<div class="card">
<div class="card-header">Modern Office Management (MOM)</div>
<div class="card-body">

<table class="table table-bordered text-center">
<tr><th>UR</th><th>SC</th><th>ST</th><th>OBC</th><th>Total</th></tr>
<tr><td>20</td><td>06</td><td>08</td><td>06</td><td>40</td></tr>
</table>

<div class="qual-box">
10th pass from recognized board
</div>

</div>
</div>
</div>

<!-- IDD -->
<div class="col-md-6">
<div class="card">
<div class="card-header">Interior Decoration & Design (IDD)</div>
<div class="card-body">

<table class="table table-bordered text-center">
<tr><th>UR</th><th>SC</th><th>ST</th><th>OBC</th><th>Total</th></tr>
<tr><td>15</td><td>05</td><td>06</td><td>04</td><td>30</td></tr>
</table>

<div class="qual-box">
10th pass (10+2 system)
</div>

</div>
</div>
</div>

<!-- CDDM -->
<div class="col-md-6">
<div class="card">
<div class="card-header">Costume Design & Dress Making (CDDM)</div>
<div class="card-body">

<table class="table table-bordered text-center">
<tr><th>UR</th><th>SC</th><th>ST</th><th>OBC</th><th>Total</th></tr>
<tr><td>15</td><td>05</td><td>06</td><td>04</td><td>30</td></tr>
</table>

<div class="qual-box">
10th pass with minimum 35% marks
</div>

</div>
</div>
</div>

<!-- Architecture -->
<div class="col-md-6">
<div class="card">
<div class="card-header">Diploma in Architecture</div>
<div class="card-body">

<table class="table table-bordered text-center">
<tr><th>UR</th><th>SC</th><th>ST</th><th>OBC</th><th>Total</th></tr>
<tr><td>15</td><td>05</td><td>06</td><td>04</td><td>30</td></tr>
</table>

<div class="qual-box">
10th pass with Maths & Science
</div>

</div>
</div>
</div>

<!-- Pharmacy -->
<div class="col-md-12">
<div class="card">
<div class="card-header">Pharmacy (Diploma & Bachelor)</div>
<div class="card-body">

<table class="table table-bordered text-center">
<thead>
<tr><th>Course</th><th>UR</th><th>SC</th><th>ST</th><th>OBC</th><th>Total</th></tr>
</thead>
<tbody>
<tr><td>Diploma</td><td>25</td><td>07</td><td>19</td><td>09</td><td>60</td></tr>
<tr><td>Bachelor</td><td>25</td><td>07</td><td>19</td><td>09</td><td>60</td></tr>
</tbody>
</table>

<div class="qual-box">
12th PCB/PCM + 45% (UR) / 40% (Reserved). Admission via PPHT (CG VYAPAM)
</div>

</div>
</div>
</div>

</div>
</div>

</body>
</html>