<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alumni Portal - GGP Raipur</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background: linear-gradient(135deg, #f4f7fb, #e9f2ff);
    min-height:100vh;
}


/* HERO SECTION - Compact Version */
.alumni-hero{
    background: linear-gradient(rgba(0,33,71,0.78), rgba(139,0,0,0.78)),
                url('assets/images/alumni.jpg') center/cover no-repeat;
    padding: 55px 0;
    color: #fff;
    text-align: center;
}

.alumni-hero h1{
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 10px;
}

.alumni-hero p{
    font-size: 16px;
    max-width: 650px;
    margin: 0 auto;
    line-height: 1.7;
    opacity: 0.95;
}

@media(max-width:768px){
    .alumni-hero{
        padding: 40px 20px;
    }

    .alumni-hero h1{
        font-size: 28px;
    }

    .alumni-hero p{
        font-size: 14px;
        line-height: 1.6;
    }
}

/* MAIN CARD */
.alumni-section{
    margin-top: -60px;
    margin-bottom: 60px;
}

.alumni-card{
    background:#fff;
    border-radius: 25px;
    padding: 50px 40px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
}

.alumni-card h2{
    color:#8b0000;
    font-weight:700;
    margin-bottom:10px;
}

.alumni-card p{
    color:#6c757d;
    margin-bottom:35px;
}

/* ACTION CARDS */
.action-card{
    background:#fff;
    border:1px solid #e9ecef;
    border-radius:18px;
    padding:35px 25px;
    text-align:center;
    height:100%;
    transition:0.35s;
    box-shadow:0 5px 15px rgba(0,0,0,0.05);
}

.action-card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 35px rgba(0,0,0,0.12);
}

.action-icon{
    width:80px;
    height:80px;
    line-height:80px;
    border-radius:50%;
    margin:0 auto 20px;
    font-size:32px;
    color:#fff;
}

.register-icon{
    background:linear-gradient(135deg,#0d6efd,#0a58ca);
}

.login-icon{
    background:linear-gradient(135deg,#198754,#146c43);
}

.report-icon{
    background:linear-gradient(135deg,#dc3545,#b02a37);
}

.action-card h4{
    font-weight:600;
    color:#002147;
    margin-bottom:10px;
}

.action-card p{
    font-size:14px;
    color:#6c757d;
    min-height:48px;
}

.action-btn{
    border:none;
    padding:10px 24px;
    border-radius:10px;
    font-weight:600;
    color:#fff;
    transition:0.3s;
}

.btn-register{
    background:#0d6efd;
}

.btn-login{
    background:#198754;
}

.btn-report{
    background:#dc3545;
}

.action-btn:hover{
    opacity:0.9;
    transform:scale(1.03);
}

/* STATS */
.stats-section{
    margin-top:40px;
}

.stat-box{
    background:#f8f9fa;
    border-radius:15px;
    padding:20px;
    text-align:center;
    border:1px solid #e9ecef;
}

.stat-box h3{
    color:#8b0000;
    font-weight:700;
    margin-bottom:5px;
}

.stat-box p{
    margin:0;
    color:#6c757d;
    font-size:14px;
}

/* FOOTER */
footer{
    background:#00152d;
    color:#fff;
    text-align:center;
    padding:20px;
    margin-top:40px;
}

/* RESPONSIVE */
@media(max-width:768px){
    .alumni-hero{
        padding:70px 20px;
    }

    .alumni-hero h1{
        font-size:34px;
    }

    .alumni-card{
        padding:30px 20px;
    }

    .action-card p{
        min-height:auto;
    }
}
</style>
</head>
<body>

<!-- TOP BAR -->
<div class="top-bar">
    <marquee behavior="scroll" direction="left" scrollamount="5">
        Alumni Registration Open | Connect with Govt. Girls Polytechnic Raipur | Update Your Profile | Explore Alumni Reports
    </marquee>
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
                <p>Affiliated to CSVTU | AICTE Approved</p>
            </div>

            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Search...">
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

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="departments.php">Departments</a></li>
                <li class="nav-item"><a class="nav-link" href="admission.php">Admission</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link active" href="alumni.php">Alumni</a></li>
                <li class="nav-item"><a class="nav-link" href="library.php">Library</a></li>
                <li class="nav-item"><a class="nav-link" href="tutorial.php">Tutorial</a></li>
                <li class="nav-item"><a class="nav-link" href="timetable.php">Timetable</a></li>
                <li class="nav-item"><a class="nav-link" href="tpo.php">TPO</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

            </ul>
        </div>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="alumni-hero">
    <div class="container">
        <h1><i class="fas fa-user-graduate"></i> Alumni Portal</h1>
        <p>
           
            Reconnect with Govt. Girls Polytechnic, Raipur and become a part of our
    vibrant alumni community. Register your profile, stay in touch with fellow
    alumni, and explore career achievements and success stories.
        </p>
    </div>
</section>

<!-- MAIN SECTION -->
<section class="alumni-section">
    <div class="container">
        <div class="alumni-card text-center">

            <h2>Welcome to Alumni Network</h2>
            <p>
                Join our growing alumni community and keep in touch with
                Govt. Girls Polytechnic, Raipur.
            </p>

            <div class="row g-4">

                <!-- Registration -->
                <div class="col-md-4">
                    <div class="action-card">
                        <div class="action-icon register-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h4>Registration</h4>
                        <p>Create your alumni profile and become part of our network.</p>
                        <button class="action-btn btn-register"
                                onclick="openPage('registration.php')">
                            Register Now
                        </button>
                    </div>
                </div>

                <!-- Login -->
                <div class="col-md-4">
                    <div class="action-card">
                        <div class="action-icon login-icon">
                            <i class="fas fa-sign-in-alt"></i>
                        </div>
                        <h4>Login</h4>
                        <p>Access your account to update profile and connect.</p>
                        <button class="action-btn btn-login"
                                onclick="openPage('login.php')">
                            Login
                        </button>
                    </div>
                </div>

                <!-- Report -->
                <div class="col-md-4">
                    <div class="action-card">
                        <div class="action-icon report-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h4>Report</h4>
                        <p>View alumni records and branch-wise reports.</p>
                        <button class="action-btn btn-report"
                                onclick="openPage('report.php')">
                            View Report
                        </button>
                    </div>
                </div>

            </div>

            <!-- Stats -->
            <div class="row g-3 stats-section">
                <div class="col-md-4">
                    <div class="stat-box">
                        <h3>100+</h3>
                        <p>Registered Alumni</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-box">
                        <h3>8</h3>
                        <p>Departments</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-box">
                        <h3>25+</h3>
                        <p>Years of Legacy</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    © 2026 Govt. Girls Polytechnic, Raipur. All Rights Reserved.
</footer>

<script>
function openPage(page){
    window.location.href = page;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>