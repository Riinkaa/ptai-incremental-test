<?php
// login.php - Second file added later to test incremental scan
$conn = mysqli_connect("localhost", "root", "", "testdb");
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = " . $id;
$result = mysqli_query($conn, $query);
?>