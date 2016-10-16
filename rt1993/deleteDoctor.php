<?php
include 'dbConnection.php';
$doctor_id = $_GET['doctor_id'];
$sql = "DELETE FROM details WHERE id=$doctor_id";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
<html>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<body bgcolor="#000000">
  <div class="body">
    <a href ="index.php"><img src="images/doctorwho.jpg"  alt="doc" /></a>
  </div>

  <h1> You Deleted Successfully! </h1>
</body>
</html>