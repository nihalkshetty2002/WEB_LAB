<?php
include 'conn.php';
$title = $_POST['title'];
$sql = "select accno, title, authors from tblbook where title LIKE '$title%'";
$result = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_array($result)) {
    echo "<p>" . $row['title'] . " " . $row['authors'] . "</p>";
}
?>