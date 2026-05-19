<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Departments - GGP Raipur</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#f5f7fb;
}



/* DEPARTMENT SECTION */

.department-section{
padding:80px 0;
}

/* DEPARTMENT CARD */

.dept-card{
background:white;
border-radius:18px;
overflow:hidden;
box-shadow:0 5px 20px rgba(0,0,0,0.08);
transition:0.4s;
cursor:pointer;
height:100%;
}

.dept-card:hover{
transform:translateY(-10px);
box-shadow:0 10px 30px rgba(0,0,0,0.15);
}

.dept-card img{
width:100%;
height:220px;
object-fit:cover;
}

.dept-content{
padding:25px;
text-align:center;
}

.dept-content h3{
font-size:24px;
font-weight:600;
color:#002147;
margin-bottom:10px;
}

.dept-content p{
font-size:15px;
color:#666;
line-height:1.7;
}

.dept-btn{
margin-top:15px;
padding:10px 25px;
border:none;
background:#b30000;
color:white;
border-radius:5px;
transition:0.3s;
}

.dept-btn:hover{
background:#870000;
}

/* FOOTER */

.footer{
background:#00152d;
color:white;
padding:60px 0 20px;
margin-top:60px;
}

.footer h4{
margin-bottom:20px;
}

.footer p{
color:#ccc;
}

.footer-bottom{
text-align:center;
margin-top:30px;
padding-top:20px;
border-top:1px solid rgba(255,255,255,0.2);
color:#bbb;
}

/* RESPONSIVE */

@media(max-width:768px){

.page-banner h1{
font-size:35px;
}

.dept-card img{
height:180px;
}

}

</style>

</head>

<body>

<!-- TOP BAR -->

<div class="top-bar">
<marquee behavior="scroll" direction="left" scrollamount="5">
Admission Open 2026 | Online Admission Started | Exam Form Available | New Notices Released
</marquee>
</div>

</div>

</div>

<!-- HEADER -->

<header class="main-header">

<div class="container">

<div class="row align-items-center">

<div class="col-md-2 text-center">

<img src="assets/images/logo.png"
class="logo"
onerror="this.src='https://via.placeholder.com/100'">

</div>

<div class="col-md-7 text-center college-title">

<h1>GOVT. GIRLS POLYTECHNIC, RAIPUR</h1>

<p>
Affiliated to CSVTU | AICTE Approved
</p>

</div>

<div class="col-md-3">

<input type="text"
placeholder="Search..."
class="form-control">

</div>

</div>

</div>

</header>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">

<div class="container">

<button class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse"
id="navbarNav">

<ul class="navbar-nav mx-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="about.php">About Us</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="departments.php">Departments</a>
</li>

<li class="nav-item">
<a class="nav-link" href="admission.php">Admission</a>
</li>

<li class="nav-item">
<a class="nav-link" href="gallery.php">Gallery</a>
</li>
<li class="nav-item">
<a class="nav-link" href="alumni.php">Alumni</a>
</li>
<li class="nav-item">
<a class="nav-link" href="library.php">Library</a>
</li>

<li class="nav-item">
<a class="nav-link" href="tutorial.php">Tutorial</a>
</li>

<li class="nav-item">
<a class="nav-link" href="timetable.php">Timetable</a>
</li>

<li class="nav-item">
<a class="nav-link" href="tpo.php">TPO</a>
</li>

<li class="nav-item">
<a class="nav-link" href="contact.php">Contact</a>
</li>

</ul>

</div>

</div>

</nav>

<!-- PAGE BANNER -->

<section class="page-banner">

<div>

<h1>Our Departments</h1>

<p>
Technical Education With Innovation & Excellence
</p>

</div>

</section>

<!-- DEPARTMENT SECTION -->

<section class="department-section">

<div class="container">

<div class="row g-4">

<!-- CSE -->

<div class="col-md-3">

<div class="dept-card"
onclick="openDept('cse.php')">

<img src="assets/images/cse.jpg"
onerror="this.src='https://via.placeholder.com/400x250'">

<div class="dept-content">

<h3>CSE</h3>

<p>
Computer Science & Engineering Department
</p>

<button class="dept-btn">
View Details
</button>

</div>

</div>

</div>

<!-- IT -->

<div class="col-md-3">

<div class="dept-card"
onclick="openDept('it.php')">

<img src="assets/images/it.jpg"
onerror="this.src='https://via.placeholder.com/400x250'">

<div class="dept-content">

<h3>IT</h3>

<p>
Information Technology Department
</p>

<button class="dept-btn">
View Details
</button>

</div>

</div>

</div>

<!-- ETE -->

<div class="col-md-3">

<div class="dept-card"
onclick="openDept('ete.php')">

<img src="assets/images/ete.jpg"
onerror="this.src='https://via.placeholder.com/400x250'">

<div class="dept-content">

<h3>ETE</h3>

<p>
Electronics & Telecommunication Engineering
</p>

<button class="dept-btn">
View Details
</button>

</div>

</div>

</div>

<!-- CDDM -->

<div class="col-md-3">

<div class="dept-card"
onclick="openDept('cddm.php')">

<img src="assets/images/cddm.png"
onerror="this.src='https://via.placeholder.com/400x250'">

<div class="dept-content">

<h3>CDDM</h3>

<p>
Costume Design & Dress Making
</p>

<button class="dept-btn">
View Details
</button>

</div>

</div>

</div>

<!-- MOM -->

<div class="col-md-3">

<div class="dept-card"
onclick="openDept('mom.php')">

<img src="assets/images/mom.png"
onerror="this.src='https://via.placeholder.com/400x250'">

<div class="dept-content">

<h3>MOM</h3>

<p>
Modern Office Management Department
</p>

<button class="dept-btn">
View Details
</button>

</div>

</div>

</div>

<!-- PHARMACY -->

<div class="col-md-3">

<div class="dept-card"
onclick="openDept('pharmacy.php')">

<img src="assets/images/pharmacy.png"
onerror="this.src='https://via.placeholder.com/400x250'">

<div class="dept-content">

<h3>Pharmacy</h3>

<p>
Diploma Pharmacy Department
</p>

<button class="dept-btn">
View Details
</button>

</div>

</div>

</div>

<!-- IDD -->

<div class="col-md-3">

<div class="dept-card"
onclick="openDept('idd.php')">

<img src="assets/images/idd.png"
onerror="this.src='https://via.placeholder.com/400x250'">

<div class="dept-content">

<h3>IDD</h3>

<p>
Interior Decoration & Design Department
</p>

<button class="dept-btn">
View Details
</button>

</div>

</div>

</div>

<!-- ARCHITECTURE -->

<div class="col-md-3">

<div class="dept-card"
onclick="openDept('architecture.php')">

<img src="assets/images/architecture.png"
onerror="this.src='https://via.placeholder.com/400x250'">

<div class="dept-content">

<h3>Architecture</h3>

<p>
Architecture Assistantship Department
</p>

<button class="dept-btn">
View Details
</button>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- FOOTER -->

<footer class="footer">

<div class="container">

<div class="row">

<div class="col-md-4">

<h4>About College</h4>

<p>
Government Girls Polytechnic Raipur official portal.
</p>

</div>

<div class="col-md-4">

<h4>Quick Links</h4>

<a href="admission.php" class="d-block">Admission</a>
<a href="departments.php" class="d-block">Departments</a>
<a href="gallery.php" class="d-block">Gallery</a>

</div>

<div class="col-md-4">

<h4>Contact</h4>

<p>Raipur, Chhattisgarh</p>

<p>Email: info@ggpraipur.in</p>

</div>

</div>

<div class="footer-bottom">

© 2026 Govt. Girls Polytechnic Raipur

</div>

</div>

</footer>

<!-- SCRIPT -->

<script>

function openDept(page){

window.location.href = page;

}

</script>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>