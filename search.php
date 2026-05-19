<?php
include "db.php";


$query = isset($_GET['query']) ? $_GET['query'] : '';

$sql = "SELECT * FROM pages 
        WHERE title LIKE '%$query%' 
        OR content LIKE '%$query%'";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

<h3>Search Results: "<?php echo $query; ?>"</h3>

<?php
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "
        <div class='card p-3 mt-3'>
            <h5>{$row['title']}</h5>
            <p>{$row['content']}</p>
            <a href='{$row['link']}' class='btn btn-primary btn-sm'>Open</a>
        </div>";
    }
}else{
    echo "<h5 class='text-danger mt-3'>No results found</h5>";
}
?>

</div>

</body>
</html>