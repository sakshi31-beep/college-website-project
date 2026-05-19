<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Electronics & Telecommunication Engineering (ETE)</title>

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
               url('assets/images/ete.jpg') center/cover no-repeat;
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
        <h1>Electronics & Telecommunication Engineering</h1>
        <p class="fs-5">Department of ETE</p>
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
            This course is intended to help students understand the basic
            concepts of electronic circuits and their applications in
            semiconductor devices, digital techniques, analog circuits,
            instrumentation, and process control.
            Students gain strong knowledge of processors, ICs, and
            microcontrollers.
            The program also includes principles of communication systems,
            antennas, and TV systems along with their maintenance and
            troubleshooting skills.
        </p>
    </div>

    <!-- HOD Section -->
    <div class="section-box">
        <h3 class="section-title">Head of Department</h3>

        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="assets/images/hod_ete.jpg"
                     class="hod-img"
                     onerror="this.src='https://via.placeholder.com/180'">
            </div>

            <div class="col-md-9">
                <h4 class="fw-bold">Dr. Piyush Lotia</h4>
                <p class="mb-0">
                    Dr. Piyush Lotia leads the department with extensive
                    experience in Electronics & Telecommunication Engineering,
                    communication systems, and advanced electronic technologies.
                </p>
            </div>
        </div>
    </div>

    <!-- Job Prospects -->
    <div class="section-box">
        <h3 class="section-title">Job Prospects</h3>
        <p class="info-text">
            Graduates can work as Junior Engineer, Sub Engineer, SOT, or
            Technician in government, public, and private sectors such as
            Railways, SAIL, GAIL, ECIL, BHEL, DVC, DRDO, IOC, NTPC,
            and Armed Forces.
        </p>
    </div>

    <!-- Faculty Members -->
    <div class="section-box">
        <h3 class="section-title">Faculty Members</h3>

        <div class="faculty-item">
            <h5>Dr. Piyush Lotia</h5>
            <p>Qualification: PhD (ETE), PG Certificate in Data Science</p>
            <p>Experience: 28 Years</p>
            <p>Specialization: Electronics & Telecommunication Engineering</p>
        </div>

        <div class="faculty-item">
            <h5>Mrs. Tulja Jyoti Bhuarya</h5>
            <p>Qualification: B.E.</p>
            <p>Experience: 10 Years</p>
            <p>Specialization: Electronics & Telecommunication Engineering</p>
        </div>

        <div class="faculty-item">
            <h5>Mrs. Akanksha Singh Gautam</h5>
            <p>Qualification: M.Tech</p>
            <p>Experience: 10 Years</p>
            <p>Specialization: Electronics & Telecommunication Engineering</p>
        </div>

        <div class="faculty-item">
            <h5>Mrs. Aarti Verma</h5>
            <p>Qualification: M.Tech</p>
            <p>Experience: 7 Years</p>
            <p>Specialization: Computer Science</p>
        </div>
    </div>

    <!-- Laboratories -->
    <div class="section-box">
        <h3 class="section-title">Laboratories</h3>
        <ul class="custom-list">
            <li>Microprocessor Lab</li>
            <li>Basic Electronics Lab</li>
            <li>Communication & TV Engineering Lab</li>
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
                        <td>10</td>
                        <td>03</td>
                        <td>07</td>
                        <td>03</td>
                        <td>23</td>
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