
<?php

include 'dbconnection.php';



// $sql = "SELECT * FROM details JOIN doctor ON details.Doctors_id = doctor.id";

$sql = "SELECT
  details.id as doctor_id, season, major_foes,
  doctor.name as doctorName, incarnation, year
FROM details JOIN doctor ON doctor.id = details.Doctors_id";

$result = $conn->query($sql);
?>





<html lanf="en">
<link rel="stylesheet" type="text/css" href="styles/style.css">


<body>

  <div class="body">
    <a href ="#"><img src="images/doctorwho.jpg"  alt="doc" /></a>
  </div>

  <div class="doctors">
    <a href = "doctorform.php"><h1>ADD DOCTOR</h1></a>
  </div>
  <div class="details">
    <a href = "detailsform.php"><h1>ADD DETAILS</h1></a>
  </div>


 <div class = "information">
  <?php
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
        $row['season'] . " | " . 
        $row['incarnation'] . " | " .
        $row['doctorName'] . " | " . 
        $row['major_foes'] . " | " .  
        $row['year'] ." | " . 
         " | <a href= deleteDoctor.php?doctor_id=" . $row['doctor_id']  ."> delete </a>" .

         " | <a href= detailsform.php?doctor_id=" . $row['doctor_id']  ."> update </a>" .
         "<br>";
      }
  }
  ?>
</div>

</body>
</html>

