<?php
// include "db.php"; // future database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pharmacy Department</title>

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
               url('images/pharmacy_lab.jpg') center/cover no-repeat;
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
        <h1>Pharmacy Department</h1>
        <p class="fs-5">Health Science & Pharmaceutical Studies</p>
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
            Pharmacy is a branch of science that deals with drugs and medicines. It plays a vital role in healthcare
            and provides wide opportunities in hospitals, industries and research fields.
        </p>
    </div>
<!-- HOD Section -->
<div class="section-box">
        <h3 class="section-title">Head of Department</h3>

        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="assets/images/hod_pharmacy.jpg"
                     class="hod-img"
                     onerror="this.src='https://via.placeholder.com/180'">
            </div>

            <div class="col-md-9">
                <h4 class="fw-bold">>Mrs. Neelima Janardan</h4>
                <p class="mb-0">
                >Mrs. Neelima Janardan leads the department with extensive
                    experience in D pharmacy, and B pharmacy
                </p>
            </div>
        </div>
    </div>

    <!-- Job Prospects -->
    <div class="section-box">
        <h3 class="section-title">Job Prospects</h3>
        <ul class="custom-list">
            <li>Pharmaceutical Industries</li>
            <li>Hospital Pharmacist</li>
            <li>Chemist & Druggist</li>
            <li>Pharma Analyst</li>
            <li>Medical Representative</li>
        </ul>
    </div>

    <!-- Laboratories -->
    <div class="section-box">
        <h3 class="section-title">Laboratories</h3>
        <ul class="custom-list">
            <li>Pharmaceutics Lab I & II</li>
            <li>Pharmacy Practice Lab</li>
            <li>Pharmaceutical Chemistry Lab</li>
            <li>Pharmacology Lab</li>
        </ul>
    </div>

    <!-- Faculty -->
    <div class="section-box">
        <h3 class="section-title">Faculty Members</h3>

        <div class="faculty-item">
            <h5>Swati Singh</h5>
            <p>Qualification: M.Pharm (Pharmaceutical Chemistry)</p>
            <p>Experience: 10 Years</p>
        </div>

        <div class="faculty-item">
            <h5>Dhaneshwar Uraon</h5>
            <p>Qualification: B.Pharmacy</p>
            <p>Experience: 10 Years</p>
        </div>

        <div class="faculty-item">
            <h5>Mrs. Shailee Kesharwani</h5>
            <p>Qualification: M.Pharm</p>
            <p>Experience: 19 Years</p>
        </div>

        <div class="faculty-item">
            <h5>Mr. Mrutyunjaya Satpathy</h5>
            <p>Qualification: M.Pharm</p>
            <p>Experience: 21 Years</p>
        </div>

        <div class="faculty-item">
            <h5>Mr. R. Hinduja</h5>
            <p>Qualification: B.Pharm</p>
            <p>Experience: 16 Years</p>
        </div>

        <div class="faculty-item">
            <h5>Mrs. Neelima Janardan</h5>
            <p>Qualification: M.Pharm</p>
            <p>Experience: 13 Years</p>
        </div>

    </div>

    <!-- Intake D.Pharm -->
    <div class="section-box">
        <h3 class="section-title">Intake (D.Pharmacy)</h3>

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
                    <td>25</td>
                    <td>07</td>
                    <td>19</td>
                    <td>09</td>
                    <td>60</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>

    <!-- Intake B.Pharm -->
    <div class="section-box">
        <h3 class="section-title">Intake (B.Pharmacy)</h3>

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
                    <td>25</td>
                    <td>07</td>
                    <td>19</td>
                    <td>09</td>
                    <td>60</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>

    <!-- Qualification -->
    <div class="section-box">
        <h3 class="section-title">Minimum Qualification</h3>
        <p class="info-text">
            D.Pharmacy: 12th with PCB/PCM minimum 45% marks.<br><br>
            B.Pharmacy: Same eligibility with PCM/PCB in 12th.<br><br>
            Lateral Entry: Diploma in Pharmacy with minimum 45% marks.
        </p>
    </div>

</div>

</body>
</html>