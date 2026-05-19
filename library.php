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

/* HERO */
.library-hero{
    height:300px;
    background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
    url('images/library.jpg');
    background-size:cover;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
}

/* RULES + NOTICE */
.notice-box{
    background:#f8f9fa;
    padding:15px;
    border-radius:10px;
}

/* BUTTON */
.library-btn{
    margin-top:10px;
}

/* FOOTER */
footer{
    background:#f1f1f1;
    padding:15px;
    text-align:center;
    margin-top:30px;
}

</style>

</head>

<body>

<!-- TOP BAR -->
<div class="top-bar">
  <marquee>Library - Govt Girls Polytechnic Raipur | Central Library | Digital Access</marquee>
</div>

<!-- HEADER -->
<div class="header container-fluid">
  <div class="row align-items-center">

    <div class="col-md-2 text-center">
      <img src="assets/images/logo.png" width="90">
    </div>

    <div class="col-md-7 text-center">
      <h4>GOVT. GIRLS POLYTECHNIC, RAIPUR</h4>
      <p>Central Library</p>
    </div>

    <div class="col-md-3 text-center">
        <a href="https://libraryggpraipur.wixsite.com/library"
           target="_blank"
           class="btn btn-success w-100">
           Online Library
        </a>
    </div>

  </div>
</div>

<!-- MENU -->
<nav class="menu">
  <ul>
  <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="departments.php">Departments</a></li>
    <li><a href="admission.php">Admission</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="alumni.php">Alumni</a></li>
    <li><a href="library.php">Library</a></li>
    
    <li><a href="tutorial.php">Toutorial</a></li>
    <li><a href="timetable.php">Timetable</a></li>
    <li><a href="tpo.php">TPO</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>

<!-- HERO -->
<div class="library-hero">

    <div>
        <h1>Central Library</h1>
        <p>Knowledge is Power</p>

        <a href="https://libraryggpraipur.wixsite.com/library"
           target="_blank"
           class="btn btn-warning library-btn">
           Visit Digital Library
        </a>

    </div>

</div>

<!-- RULES + NOTICE -->
<div class="container my-5">

<div class="row g-4">

    <div class="col-md-6">
        <h5>Library Rules</h5>
        <ul>
            <li>Maintain silence inside library</li>
            <li>Books must be returned on time</li>
            <li>No food allowed inside library</li>
            <li>Student ID is mandatory</li>
        </ul>
    </div>

    <div class="col-md-6">
        <h5>Notices</h5>
        <div class="notice-box">
            <ul>
                <li>New reference books available</li>
                <li>Library timing updated</li>
              
            </ul>
        </div>
    </div>

</div>

</div>

<!-- FOOTER -->
<footer>
  © 2026 Govt Girls Polytechnic, Raipur | Central Library
</footer>

</body>
</html>

















