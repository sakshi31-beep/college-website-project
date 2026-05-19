
<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $conn->real_escape_string($_POST['email']);
    $name = $conn->real_escape_string($_POST['name']);
    $father_name = $conn->real_escape_string($_POST['father_name']);
    $degree = $conn->real_escape_string($_POST['degree']);
    $admission_year = $conn->real_escape_string($_POST['admission_year']);
    $leaving_year = $conn->real_escape_string($_POST['leaving_year']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $present_status = $conn->real_escape_string($_POST['present_status']);
    $working_place = $conn->real_escape_string($_POST['working_place']);

    // New fields for students

    $course_name = isset($_POST['course_name'])
    ? $conn->real_escape_string($_POST['course_name'])
    : '';

$college_name = isset($_POST['college_name'])
    ? $conn->real_escape_string($_POST['college_name'])
    : '';

    $contribution = $conn->real_escape_string($_POST['contribution']);
    $message = $conn->real_escape_string($_POST['message']);

    $photo = $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];

    move_uploaded_file($tmp, "uploads/" . $photo);

    $sql = "INSERT INTO alumni(
        email,
        name,
        father_name,
        degree,
        admission_year,
        leaving_year,
        mobile,
        password,
        present_status,
        working_place,
        course_name,
        college_name,
        contribution,
        message,
        photo
    ) VALUES (
        '$email',
        '$name',
        '$father_name',
        '$degree',
        '$admission_year',
        '$leaving_year',
        '$mobile',
        '$password',
        '$present_status',
        '$working_place',
        '$course_name',
        '$college_name',
        '$contribution',
        '$message',
        '$photo'
    )";

    if($conn->query($sql)){
        echo "<script>alert('Registration Successful ✔'); window.location.href='registration.php';</script>";
    } else {
        echo $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Alumni Registration - GGP Raipur</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#e9ecef;
    font-family:Arial;
}

.form-box{
    max-width:850px;
    margin:30px auto;
    background:#fff;
    border-radius:12px;
    box-shadow:0 5px 20px rgba(0,0,0,0.15);
    overflow:hidden;
}

.form-header{
    background: url('assets/images/college.jpg') center/cover no-repeat;
    height:200px;
    position:relative;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:white;
}

.form-header::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.45);
}

.header-content{
    position:relative;
    z-index:2;
}

.header-content h3{
    margin:0;
    font-size:24px;
    font-weight:bold;
}

.college-name{
    margin:5px 0 0;
    font-size:16px;
    font-weight:500;
}

.desc{
    margin-top:5px;
    font-size:13px;
    opacity:0.9;
}

.form-body{
    padding:25px;
}

label{
    font-weight:600;
    margin-top:10px;
}

.form-control, select, textarea{
    margin-bottom:12px;
    border-radius:8px;
}

.btn-submit{
    background:#0d6efd;
    color:white;
    width:100%;
    padding:10px;
    border:none;
    border-radius:8px;
    font-size:16px;
}

.btn-submit:hover{
    background:#084cdf;
}

#student_fields{
    display:none;
}
</style>
</head>

<body>

<div class="form-box">
   

    <div class="form-header">
        <div class="header-content">
            <h3>Alumni Registration</h3>
            <p class="college-name">Govt Girls Polytechnic Raipur</p>
            <p class="desc">Welcome to alumni registration portal. Please fill all details carefully.</p>
        </div>
    </div>

    <div class="form-body">
   

        <form method="POST" enctype="multipart/form-data">

            <label>Email *</label>
            <input type="email" name="email" class="form-control" required>

            <label>Name *</label>
            <input type="text" name="name" class="form-control" required>

            <label>Father's Name *</label>
            <input type="text" name="father_name" class="form-control" required>

            <label>Degree *</label>
            <select name="degree" class="form-control" required>
                <option value="">Select</option>
                <option>CSE</option>
                <option>IT</option>
                <option>ET&E</option>
                <option>MOM</option>
                <option>IDD</option>
                <option>Pharmacy</option>
                <option>CDDM</option>
            </select>

            <label>Admission Year *</label>
            <input type="number" name="admission_year" class="form-control" min="1990" max="2035" placeholder="e.g. 2021" required>

            <label>Leaving Year *</label>
            <input type="number" name="leaving_year" class="form-control" min="1990" max="2035" placeholder="e.g. 2024" required>

            <label>Mobile *</label>
            <input type="text" name="mobile" class="form-control" required>

            <label>Password *</label>
            <input type="password" name="password" class="form-control" required>

            <label>Present Status *</label>
            <select name="present_status" id="present_status" class="form-control" required>
                <option value="Student">Student</option>
                <option value="Working">Working</option>
                <option value="Self-Employed">Self-Employed</option>
                <option value="Unemployed">Unemployed</option>
            </select>

            <label>Working Place</label>
            <input type="text" name="working_place" class="form-control" placeholder="Company / Organization Name">

            <!-- Student-only fields -->
            <div id="student_fields">
                <label>Course Name</label>
                <input type="text" name="course_name" class="form-control" placeholder="e.g. B.Tech CSE, MCA, MBA">

                <label>College / Institute Name</label>
                <input type="text" name="college_name" class="form-control" placeholder="Enter college or institute name">
            </div>

            <label>Contribution *</label>
            <select name="contribution" class="form-control" required>
                <option>Guest Lecture</option>
                <option>Placement Help</option>
                <option>Internship</option>
                <option>Donation</option>
                <option>Mentorship</option>
                <option>Other</option>
            </select>

            <label>Message *</label>
            <textarea name="message" class="form-control" rows="3"></textarea>

            <label>Upload Photo *</label>
            <input type="file" name="photo" class="form-control" required>

            <br>
            <button type="submit" class="btn-submit">Submit Registration</button>
           
        </form>

    </div>
</div>

<script>
function toggleStudentFields() {
    const status = document.getElementById('present_status').value;
    const studentFields = document.getElementById('student_fields');

    if (status === 'Student') {
        studentFields.style.display = 'block';
    } else {
        studentFields.style.display = 'none';
    }
}

// Run on page load
window.onload = toggleStudentFields;

// Run when selection changes
document.getElementById('present_status').addEventListener('change', toggleStudentFields);
</script>

</body>
</html>

















