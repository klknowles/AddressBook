<?php
include 'connect.php';
$fname = $_POST["fname"];
$lname = $_POST["lname"];

mysqli_query($conn, "DELETE FROM contacts WHERE firstName='$fname' AND lastName='$lname'");

header("Location: index.php");


?>