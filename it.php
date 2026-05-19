<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Information Technology (IT)</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body{
    background:#f5f7fb;
    font-family:'Segoe UI', sans-serif;
    color:#333;
}

/* Banner */
.dept-banner{
    background:linear-gradient(rgba(0,33,71,0.75), rgba(0,33,71,0.75)),
               url('assets/images/it.jpg') center/cover no-repeat;
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

/* HOD Image */
.hod-img{
    width:180px;
    height:180px;
    object-fit:cover;
    border-radius:50%;
    border:5px solid #8b0000;
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
        <h1>Information Technology</h1>
        <p class="fs-5">Department of Modern Computing</p>
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
            The main objective of the course is to make students well versed
            with the latest trends in Information Technology. After completion
            of the course, students become competent in various fields of IT
            and its real-world applications.
        </p>
    </div>

    <!-- HOD Section -->
    <div class="section-box">
        <h3 class="section-title">Head of Department</h3>

        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="assets/images/hod_it.jpg"
                     class="hod-img"
                     onerror="this.src='https://via.placeholder.com/180'">
            </div>

            <div class="col-md-9">
                <h4 class="fw-bold">Mrs. Tulja Jyoti Bhuarya</h4>
                <p class="mb-0">
                Mrs. Tulja Jyoti Bhuarya leads the Information Technology department
                    with strong expertise in software development, programming,
                    and modern IT technologies.
                </p>
            </div>
        </div>
    </div>

    <!-- Job Prospects -->
    <div class="section-box">
        <h3 class="section-title">Job Prospects</h3>
        <ul class="custom-list">
            <li>Data Entry Operator</li>
            <li>Lab Technician</li>
            <li>Assistant Programmer</li>
            <li>Software Developer</li>
            <li>Web Designer & Animator</li>
        </ul>
    </div>

    <!-- Faculty Members -->
    <div class="section-box">
        <h3 class="section-title">Faculty Members</h3>

        <div class="faculty-item">
            <h5>Rupesh Kumar</h5>
            <p>Qualification: B.Tech (IT)</p>
            <p>Experience: 10 Years</p>
            <p>Specialization: Information Technology</p>
        </div>

        <div class="faculty-item">
            <h5>Dipti Aglawe</h5>
            <p>Qualification: B.E. (IT), M.E. (CTA)</p>
            <p>Experience: 15 Years</p>
            <p>Specialization: Information Technology</p>
        </div>

        <div class="faculty-item">
            <h5>Navin Baghel</h5>
            <p>Qualification: B.E. (IT)</p>
            <p>Experience: 10 Years</p>
            <p>Specialization: Information Technology</p>
        </div>

        <div class="faculty-item">
            <h5>Mrs. Tulja Jyoti Bhuarya</h5>
            <p>Qualification: Electronics & Telecommunication Engineering</p>
            <p>Experience: 10 Years</p>
            <p>Specialization: Electronics & Telecommunication Engineering</p>
        </div>
    </div>

    <!-- Laboratories -->
    <div class="section-box">
        <h3 class="section-title">Laboratories</h3>
        <ul class="custom-list">
            <li>Advance Programming Lab</li>
            <li>Database Lab</li>
            <li>Multimedia Lab</li>
            <li>Programming Lab</li>
        </ul>
    </div>

    <!-- Intake -->
    <div class="section-box">
        <h3 class="section-title">Intake (Category-Wise)</h3>

        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Category</th>
                        <th>UR</th>
                        <th>SC</th>
                        <th>ST</th>
                        <th>OBC</th>
                        <th>Total Intake</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Seats</td>
                        <td>15</td>
                        <td>04</td>
                        <td>07</td>
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
            10th pass with Mathematics and Science from a recognized board
            (10+2 system). Admission is through the Pre Polytechnic Test (PPT)
            conducted by CG VYAPAM.
        </p>
    </div>

</div>

</body>
</html>