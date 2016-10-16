<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "RT";

//check connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
//print_r($conn);

$name = $_POST['name'];
$incarnation = $_POST['incarnation'];
$year = $_POST['year'];

$sql = "INSERT INTO doctor(name, incarnation, year) 
VALUES ('$name', '$incarnation','$year')";


?>

<html>
<body>

<html>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<body bgcolor="#000000">
  <div class="body">
    <a href ="index.php"><img src="images/doctorwho.jpg"  alt="doc" /></a>
  </div>
  <?php
        if ($conn->query($sql) === TRUE) {
            echo "<h2> You Added a Doctor! </h2> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
      ?>
  
</body>
</html>
<?php echo $name ?>
<br> 
<?php echo $incarnation ?>
<br>
<?php echo $year ?>



</body>
</html>




