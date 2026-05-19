














<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title> GGP Raipur</title>

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

/* TOP BAR */
.top-bar{
background:#002147;
color:white;
padding:5px 0;
}

/* HEADER */
.main-header{
background:white;
padding:15px 0;
}

.logo{
width:100px;
}

/* NAVBAR */
.custom-navbar{
background:#8b0000;
}

/* SLIDER */
.carousel-item img{
height:500px;
object-fit:cover;
}

/* PRINCIPAL */
.principal{
margin-top:40px;
background:#fff;
padding:30px;
border-radius:15px;
box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.principal img{
width:200px;
border-radius:10px;
}

/* NOTICE */
.notice-section{
margin-top:40px;
}

.notice-box{
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.notice-list{
padding-left:20px;
}

footer{
background:#00152d;
color:white;
padding:40px 0;
margin-top:60px;
}

</style>

</head>

<body>

<!-- TOP BAR -->


<div class="top-bar">
<marquee behavior="scroll" direction="left" scrollamount="5">

<?php
include "db.php";
$result = mysqli_query($conn, "SELECT message FROM top_notice WHERE id=1");
$row = mysqli_fetch_assoc($result);
echo $row['message'];
?>

</marquee>
</div>

<!-- HEADER -->
<header class="main-header">

<div class="container">

<div class="row align-items-center">

<!-- LOGO -->
<div class="col-md-2 text-center">

<img src="assets/images/logo.png"
class="logo"
onerror="this.src='https://via.placeholder.com/100'">

</div>

<!-- TITLE -->
<div class="col-md-7 text-center">

<h3>GOVT. GIRLS POLYTECHNIC, RAIPUR</h3>
<p>Affiliated to CSVTU | AICTE Approved</p>

</div>

<!-- SEARCH -->
<div class="col-md-3">
  


<form method="GET" action="search.php">
    <input type="text" name="query" placeholder="Search..." class="form-control">
</form>


</div>

</div>

</div>

</header>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">

<div class="container">

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav mx-auto">

<li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
<li class="nav-item"><a class="nav-link" href="departments.php">Departments</a></li>
<li class="nav-item"><a class="nav-link" href="admission.php">Admission</a></li>
<li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
<li class="nav-item"><a class="nav-link" href="alumni.php">Alumni</a></li>
<li class="nav-item"><a class="nav-link" href="library.php">Library</a></li>
<li class="nav-item"><a class="nav-link" href="tutorial.php">Tutorial</a></li>
<li class="nav-item"><a class="nav-link" href="timetable.php">Timetable</a></li>
<li class="nav-item"><a class="nav-link" href="tpo.php">TPO</a></li>
<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

</ul>

</div>

</div>

</nav>
<!-- SLIDER -->
<div id="mainSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">

<!-- INDICATORS -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2"></button>
</div>

<div class="carousel-inner">

<div class="carousel-item active">
<img src="assets/images/slide1.jpg" class="d-block w-100">
</div>

<div class="carousel-item">
<img src="assets/images/slide2.jpg" class="d-block w-100">
</div>

<div class="carousel-item">
<img src="assets/images/slide3.jpg" class="d-block w-100">
</div>

</div>

<!-- CONTROLS -->
<button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>
<button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

</div>


<!-- PRINCIPAL SECTION -->
<div class="container principal">

<div class="row align-items-center">

<div class="col-md-4 text-center">
<img src="assets/images/principal.jpg">
</div>

<div class="col-md-8">

<h3>Principal's Message</h3>

<p>
Welcome to Govt. Girls Polytechnic Raipur. Our college focuses on quality education, discipline and skill development for bright future of students.
</p>

<h5>Dr. Varsha Chaurasia</h5>
<p>Principal</p>

</div>

</div>

</div>
<!-- NOTICE + ANNOUNCEMENT -->
<div class="container notice-section">

<div class="row">

<!-- LATEST NOTICES -->
<div class="col-md-6">

<div class="notice-box">




<h3>Latest Notices</h3>

<marquee direction="up"
         scrollamount="2"
         height="180"
         onmouseover="this.stop();"
         onmouseout="this.start();">

<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM notices ORDER BY date DESC");

while($row = mysqli_fetch_assoc($result)){

    if(!empty($row['link'])){
        $url = $row['link']; // External link
    } else {
        $url = "assets/uploads/notices/" . $row['file']; // Uploaded PDF
    }
?>
    <p style="margin-bottom:10px;">
        📢
        <a href="<?php echo $url; ?>" target="_blank">
            <?php echo $row['title']; ?>
        </a>
    </p>
<?php
}
?>

</marquee>
</div>
</div>

<!-- ANNOUNCEMENTS -->
<div class="col-md-6">

<div class="notice-box">

<h3>Announcements</h3>

<ul class="notice-list">
<li>New Tutorial PDFs Uploaded</li>
<li>Library Timing Updated</li>
<li>New Timetable Available</li>
<li>Sports Event Registration</li>
</ul>

</div>

</div>

</div>

</div>
<!-- FOOTER -->
<footer>

<div class="container">

<div class="row">

<div class="col-md-4">
<h5>About College</h5>
<p>Govt. Girls Polytechnic Raipur, established in 1987 under the World Bank Scheme, evolved from the former Govt. Technical High School to promote women's technical skills.

</p>
</div>


<div class="col-md-4">

<h4>Quick Links</h4>

<a href="admission.php" class="d-block">Admission</a>
<a href="departments.php" class="d-block">Departments</a>
<a href="gallery.php" class="d-block">Gallery</a>

</div>

<div class="col-md-4">
<h5>Contact</h5>
<p>Raipur, Chhattisgarh</p>
<p>Email: info@ggpraipur.in</p>
</div>

</div>

</div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
var myCarousel = document.querySelector('#mainSlider');

var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 2000,
  ride: 'carousel',
  pause: false
});
</script>

</body>
</html>

