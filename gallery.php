<?php
include "db.php";

/* Get all categories */
$categories = $conn->query("SELECT DISTINCT category FROM gallery ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery - GGP Raipur</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f5f7fb;
    font-family:'Segoe UI', sans-serif;
}

/* Banner */
.banner{
    background:linear-gradient(rgba(0,33,71,0.75), rgba(0,33,71,0.75)),
               url('images/college_banner.jpg') center/cover no-repeat;
    height:280px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    text-align:center;
}

.banner h1{
    font-size:42px;
    font-weight:700;
}

/* Category Box */
.func-box{
    background:#fff;
    padding:20px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
    margin-bottom:40px;
}

/* Category Title */
.section-title{
    text-align:center;
    margin-bottom:25px;
    font-weight:700;
    color:#8b0000;
}

/* Image/Video */
.gallery-media{
    width:100%;
    height:220px;
    object-fit:cover;
    border-radius:12px;
    cursor:pointer;
    transition:0.3s;
}

.gallery-media:hover{
    transform:scale(1.03);
}

/* Modal Preview */
.modal-media{
    width:100%;
    max-height:90vh;
    object-fit:contain;
}
</style>
</head>
<body>


<!-- Banner -->
<div class="banner position-relative">
    
    <!-- Back Button -->
    <a href="index.php"
       class="btn btn-light position-absolute top-0 start-0 m-3 px-4 py-2 fw-semibold shadow">
        ← Back
    </a>

    <div>
        <h1>Government Girls Polytechnic Gallery</h1>
        <p class="fs-5">Events • Functions • Activities</p>
    </div>
</div>
<div class="container py-5">

<?php if($categories && $categories->num_rows > 0): ?>

    <?php while($cat = $categories->fetch_assoc()): ?>
        
        <div class="func-box">
            <h3 class="section-title">
                <?php echo htmlspecialchars($cat['category']); ?>
            </h3>

            <div class="row g-3">
                <?php
                $category = mysqli_real_escape_string($conn, $cat['category']);
                $media = $conn->query("SELECT * FROM gallery WHERE category='$category' ORDER BY id DESC");
                ?>

                <?php while($row = $media->fetch_assoc()): ?>
                    <div class="col-md-4">

                        <?php if($row['type'] == 'image'): ?>
                            <img src="<?php echo htmlspecialchars($row['file_path']); ?>"
                                 class="gallery-media"
                                 onclick="openImage(this.src)">
                        <?php else: ?>
                            <video class="gallery-media" controls>
                                <source src="<?php echo htmlspecialchars($row['file_path']); ?>">
                            </video>
                        <?php endif; ?>

                    </div>
                <?php endwhile; ?>
            </div>
        </div>

    <?php endwhile; ?>

<?php else: ?>
    <p class="text-center text-muted fs-5">No gallery items found.</p>
<?php endif; ?>

</div>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body text-center p-0">
                <img id="modalImage" class="modal-media rounded">
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
function openImage(src){
    document.getElementById('modalImage').src = src;
    new bootstrap.Modal(document.getElementById('imageModal')).show();
}
</script>

</body>
</html>