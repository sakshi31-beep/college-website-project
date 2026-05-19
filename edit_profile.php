<?php
session_start();
include "db.php";

if(!isset($_SESSION['student'])){
    header("Location: login.php");
    exit();
}

$email = $_SESSION['student'];

/* Current student data */
$result = $conn->query("SELECT * FROM alumni WHERE email='$email'");
$row = $result->fetch_assoc();

/* Update Profile */
if(isset($_POST['update'])){

    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $mobile = $_POST['mobile'];
    $present_status = $_POST['present_status'];
    $working_place = $_POST['working_place'];
    $contribution = $_POST['contribution'];
    $message = $_POST['message'];

    /* Photo Upload */
    $photo = $row['photo'];

    if(!empty($_FILES['photo']['name'])){
        $photo = time() . "_" . $_FILES['photo']['name'];
        $tmp = $_FILES['photo']['tmp_name'];

        move_uploaded_file(
            $tmp,
            "assets/uploads/registration/" . $photo
        );
    }

    $sql = "UPDATE alumni SET
            name='$name',
            father_name='$father_name',
            mobile='$mobile',
            present_status='$present_status',
            working_place='$working_place',
            contribution='$contribution',
            message='$message',
            photo='$photo'
            WHERE email='$email'";

    if($conn->query($sql)){
        $_SESSION['name'] = $name;
        header("Location: profile.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Profile - GGP Raipur</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f5f7fb;
    font-family:'Segoe UI', sans-serif;
}

.form-card{
    max-width:850px;
    margin:40px auto;
    background:#fff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 8px 25px rgba(0,0,0,0.08);
}

.profile-img{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    border:4px solid #0d6efd;
}

h2{
    font-weight:700;
    color:#002147;
}

.btn{
    border-radius:10px;
    padding:10px 20px;
}
</style>
</head>
<body>

<div class="container">

    <div class="form-card">

        <h2 class="text-center mb-4">Edit Profile</h2>

        <div class="text-center mb-4">
            <img
                src="assets/uploads/registration/<?php echo htmlspecialchars($row['photo']); ?>"
                class="profile-img"
                onerror="this.src='assets/images/default-user.png'">
        </div>

        <form method="POST" enctype="multipart/form-data">

            <div class="row g-3">

                <div class="col-md-6">
                    <label>Name</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="<?php echo htmlspecialchars($row['name']); ?>"
                           required>
                </div>

                <div class="col-md-6">
                    <label>Father's Name</label>
                    <input type="text"
                           name="father_name"
                           class="form-control"
                           value="<?php echo htmlspecialchars($row['father_name']); ?>">
                </div>

                <div class="col-md-6">
                    <label>Mobile Number</label>
                    <input type="text"
                           name="mobile"
                           class="form-control"
                           value="<?php echo htmlspecialchars($row['mobile']); ?>">
                </div>

                <div class="col-md-6">
                    <label>Present Status</label>
                    <input type="text"
                           name="present_status"
                           class="form-control"
                           value="<?php echo htmlspecialchars($row['present_status']); ?>">
                </div>

                <div class="col-md-12">
                    <label>Working Place</label>
                    <input type="text"
                           name="working_place"
                           class="form-control"
                           value="<?php echo htmlspecialchars($row['working_place']); ?>">
                </div>

                <div class="col-md-12">
                    <label>Contribution</label>
                    <input type="text"
                           name="contribution"
                           class="form-control"
                           value="<?php echo htmlspecialchars($row['contribution']); ?>">
                </div>

                <div class="col-md-12">
                    <label>Message</label>
                    <textarea
                        name="message"
                        class="form-control"
                        rows="4"><?php echo htmlspecialchars($row['message']); ?></textarea>
                </div>

                <div class="col-md-12">
                    <label>Change Photo</label>
                    <input type="file"
                           name="photo"
                           class="form-control">
                </div>

            </div>

            <div class="text-center mt-4">

                <button type="submit"
                        name="update"
                        class="btn btn-primary me-2">
                    Update Profile
                </button>

                <a href="profile.php"
                   class="btn btn-secondary">
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>