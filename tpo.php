<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Library - GGP Raipur</title>

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

/* PAGE BANNER */

.page-banner{
height:300px;
background:
linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
url('assets/images/about-banner.jpg');

background-size:cover;
background-position:center;

display:flex;
justify-content:center;
align-items:center;

color:white;
text-align:center;
}

.page-banner h1{
font-size:55px;
font-weight:700;
}




















































































/* HEADER */
.header{
background:#f8f9fa;
padding:20px;
}

/* MENU */
.menu{
background:#8b0000;
}

.menu ul{
display:flex;
justify-content:center;
list-style:none;
padding:10px;
margin:0;
flex-wrap:wrap;
}

.menu li{
margin:5px 15px;
}

.menu a{
color:white;
text-decoration:none;
}

/* WRAPPER */
.tpo-wrapper{
max-width:1000px;
margin:30px auto;
background:#fff;
padding:20px;
border-radius:10px;
box-shadow:0 3px 12px rgba(0,0,0,0.1);
}

/* IMAGE FIX (ONLY SIZE FIXED) */
.profile-img{
width:100px;   /* 🔥 reduced size */
height:100px;
border-radius:50%;
object-fit:cover;
display:block;
margin:auto;
border:3px solid #8b0000;
}

/* CARD */
.card-box{
background:#fff;
padding:15px;
border-radius:10px;
box-shadow:0 3px 10px rgba(0,0,0,0.08);
text-align:center;
height:100%;
}

/* STATS */
.stat{
text-align:center;
padding:15px;
background:#fff;
border-radius:10px;
box-shadow:0 3px 10px rgba(0,0,0,0.08);
}

.stat h2{
color:#0d6efd;
}

/* FOOTER */
footer{
text-align:center;
padding:15px;
background:#f1f1f1;
margin-top:30px;
}

</style>

</head>

<body>

<!-- TOP BAR -->
<div class="top-bar">
  <marquee>Training & Placement Cell | Govt Girls Polytechnic Raipur</marquee>
</div>

<!-- HEADER (ONLY ONCE) -->
<div class="header container-fluid">
  <div class="row align-items-center">

    <div class="col-md-2 text-center">
      <img src="assets/images/logo.png" width="70">
    </div>

    <div class="col-md-7 text-center">
      <h4>GOVT. GIRLS POLYTECHNIC, RAIPUR</h4>
      <p>Training & Placement Office</p>
    </div>


  </div>
</div>

<!-- MENU (ONLY ONCE FIXED) -->
<nav class="menu">
  <ul>
  <li class="nav-item">
<a class="nav-link active" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="about.php">About Us</a>
</li>

<li class="nav-item">
<a class="nav-link" href="departments.php">Departments</a>
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
</nav>

<!-- WRAPPER -->
<div class="container tpo-wrapper">

<h2 class="text-center mb-3">Training & Placement Cell</h2>

<!-- ABOUT -->
<div class="card-box">
<h5>About Placement Cell</h5>
<p>
The Training & Placement Cell works for student career development and placement opportunities.
</p>
</div>

<!-- PROFILE -->
<div class="row g-4 mt-2">

<div class="col-md-6">
<div class="card-box">
<img src="assets/images/principal.jpg" class="profile-img">
<h5 class="mt-2">Principal</h5>
<p>Dr. Varsha Chaurasia</p>
</div>
</div>

<div class="col-md-6">
<div class="card-box">
<img src="assets/images/tpo.jpg" class="profile-img">
<h5 class="mt-2">TPO Officer</h5>
<p>Mr. Ajay Chatter</p>
</div>
</div>

</div>

<!-- STATS -->
<div class="row g-3 mt-3">

<div class="col-md-3">
<div class="stat">
<h2>120+</h2>
<p>Placed</p>
</div>
</div>

<div class="col-md-3">
<div class="stat">
<h2>25+</h2>
<p>Companies</p>
</div>
</div>

<div class="col-md-3">
<div class="stat">
<h2>5 LPA</h2>
<p>Highest</p>
</div>
</div>

<div class="col-md-3">
<div class="stat">
<h2>90%</h2>
<p>Success</p>
</div>
</div>

</div>

<!-- CONTACT -->
<div class="card-box mt-3 text-center">

<h5>Placement Contact</h5>
<h4 class="text-primary">95759 06123</h4>

<p>For placement, internships and training support.</p>

</div>

</div>

<!-- FOOTER -->
<footer>
© 2026 Govt Girls Polytechnic, Raipur
</footer>

</body>
</html>