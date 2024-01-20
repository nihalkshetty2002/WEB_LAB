<?php
$employeeId = $_GET['employeeId'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbLab";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tblEmp WHERE empno = $employeeId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Employee ID: " . $row["empno"] . "<br>";
    echo "Employee Name: " . $row["ename"] . "<br>";
    echo "Designation: " . $row["designation"] . "<br>";
    echo "Salary: ₹" . $row["salary"] . "<br>";
} else {
    echo "Employee not found.";
}

$conn->close();
?>