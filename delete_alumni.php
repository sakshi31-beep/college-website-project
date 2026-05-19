<?php
session_start();
include "db.php";

// केवल admin delete कर सके
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// URL से id लेना
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // पहले photo का नाम निकालें
    $result = $conn->query("SELECT photo FROM alumni WHERE id = $id");

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Photo delete करें
        if (!empty($row['photo']) && file_exists("uploads/" . $row['photo'])) {
            unlink("uploads/" . $row['photo']);
        }

        // Database record delete करें
        $conn->query("DELETE FROM alumni WHERE id = $id");
    }
}

// वापस report page पर जाएँ
header("Location: report.php");
exit();
?>