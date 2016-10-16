<?php 
include 'dbConnection.php';



$season = $_POST['season'];
$Doctors_id = $_POST['Doctors_id'];
$major_foes = $_POST['major_foes'];

//Check if a doctor_id was provided if so, we're updating a doctor, otherwise we're inserting
if (isset($_POST['doctor_id']))
{
  $doctor_id = $_POST['doctor_id'];
  $sql =  "UPDATE details SET season='$season', major_foes='$major_foes'
  WHERE id = $doctor_id";
} else {

   $sql = "INSERT INTO details(season, Doctors_id, major_foes) 
   VALUES ('$season', '$Doctors_id','$major_foes')";
}
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
          echo "<h2 class='form-signin-heading''>YOU DID IT !</h2> <br>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
       ?>
 
</body>
</html>

<?php echo $season ?>
<br>

<?php echo $major_foes ?>
<br>
</body>
</html>




