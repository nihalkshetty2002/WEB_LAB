<?php
include 'conn.php';
$sql = "DELETE FROM tblbook WHERE accno = ?";
if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("i", $_GET['id']);

    if ($stmt->execute()) {
        $stmt->close();
        header('Location: index.php?action=deleted');
    } else {
        die("Unable to delete.");
    }
}
?>