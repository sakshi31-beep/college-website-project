<?php
include "db.php";

// fetch all alumni students
$result = $conn->query("SELECT * FROM alumni ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Alumni List</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f6f9;
}

.container{
    margin-top:30px;
}

.table img{
    width:60px;
    height:60px;
    border-radius:50%;
    object-fit:cover;
}
</style>

</head>

<body>

<div class="container">

<h2>Registered Alumni Students</h2>

<a href="admin_dashboard.php" class="btn btn-secondary mb-3">Back</a>

<table class="table table-bordered table-striped">

<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Degree</th>
<th>leaving_year</th>
<th>working_place</th>
<th>Photo</th>
</tr>
</thead>

<tbody>

<?php while($row = $result->fetch_assoc()){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['degree']; ?></td>
<td><?php echo $row['leaving_year']; ?></td>
<td><?php echo $row['working_place']; ?></td>
<td><?php echo $row['photo']; ?></td>

<td>
<img src="assets/uploads/registration_upload/<?php echo $row['photo']; ?>">
</td>
</tr>

<?php } ?>

</tbody>

</table>

</div>

</body>
</html>