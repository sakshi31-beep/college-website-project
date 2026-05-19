<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Costume Design & Dress Making (CDDM)</title>

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
               url('assets/images/cddm.png') center/cover no-repeat;
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
        <h1>Costume Design & Dress Making</h1>
        <p class="fs-5">Department of Fashion & Textile Design</p>
    </div>
</div>

<div class="container py-5">

    <!-- Back Button -->
    <a href="departments.php" class="btn btn-secondary back-btn">
        ← Back to Departments
    </a>

    <!-- Objectives -->
    <div class="section-box">
        <h3 class="section-title">Objectives</h3>
        <ul class="custom-list">
            <li>Design, draft, prepare patterns and grade them in different sizes.</li>
            <li>Fabricate different types of garments in different sizes.</li>
            <li>Coordinate design with fabric and ornamentation techniques for different age groups, seasons, and occasions.</li>
            <li>Work on computerized production units.</li>
        </ul>
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
                <h4 class="fw-bold">Dr. Mrs. MAMTA CHANDAK</h4>
                <p class="mb-0">
                Dr. Mrs. MAMTA CHANDAK leads the department with vast experience
                    in garment stitching, textiles, and fashion design education.
                </p>
            </div>
        </div>
    </div>

    <!-- Job Prospects -->
    <div class="section-box">
        <h3 class="section-title">Job Prospects</h3>
        <ul class="custom-list">
            <li>Readymade Industry</li>
            <li>Boutique Owner</li>
            <li>Merchandiser Manager</li>
            <li>Fashion Designer</li>
            <li>Fashion Show Coordinator</li>
            <li>Own Production Unit</li>
            <li>Freelance Designer</li>
        </ul>
    </div>

    <!-- Faculty Members -->
    <div class="section-box">
        <h3 class="section-title">Faculty Members</h3>

        <div class="faculty-item">
            <h5>Dr. Mamta Chandak</h5>
            <p>Qualification: M.H.Sc. (Clothing & Textiles), SET, 1 Year Stitching Diploma</p>
            <p>Experience: 29 Years</p>
            <p>Specialization: Garment Stitching</p>
        </div>

        <div class="faculty-item">
            <h5>Dr. Richa Thakur</h5>
            <p>Qualification: PG (Textile & Clothing), PhD, Diploma in CDDM, M.A. Hindi</p>
            <p>Experience: 12 Years</p>
            <p>Specialization: Design, Textile & Clothing</p>
        </div>

        <div class="faculty-item">
            <h5>Ms. Himika Gabel</h5>
            <p>Qualification: M.Sc. (Textile & Clothing), Master of Design, UGC NET</p>
            <p>Experience: 5 Years</p>
            <p>Specialization: Design, Textile & Clothing</p>
        </div>

        <div class="faculty-item">
            <h5>Mrs. Savitri Rani</h5>
            <p>Qualification: M.H.Sc. (Textiles & Clothing), M.Ed., UGC NET</p>
            <p>Experience: 13 Years</p>
            <p>Specialization: Textiles & Clothing</p>
        </div>
    </div>

    <!-- Laboratories -->
    <div class="section-box">
        <h3 class="section-title">Laboratories</h3>
        <ul class="custom-list">
            <li>Drafting & Cutting Lab</li>
            <li>Stitching Lab</li>
            <li>Textile Lab</li>
            <li>Computer Lab</li>
            <li>Advanced Machine & Embroidery Lab</li>
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
            10th pass from a recognized board with minimum 35% marks.
        </p>
    </div>

</div>

</body>
</html>