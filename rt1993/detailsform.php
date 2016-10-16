
<?php

include 'dbConnection.php';

$sql = "SELECT id, name FROM doctor";
$doctor = $conn->query($sql);


//Check if a doctor_id was supplied in the URL Query Parameter
if (isset($_GET['doctor_id'])) {
  $doctor_id = $_GET['doctor_id'];
 
  $doctorSQL = "SELECT * FROM details where id = $doctor_id";
  $details =  $conn->query($doctorSQL)->fetch_assoc();

      //print_r($details); die;
}



?>

<h1>Add / Update details</h1>

<html>
<link rel="stylesheet" type="text/css" href="styles/style.css">

<body bgcolor="#000000">

<div class="body">
    <a href ="index.php"><img src="images/doctorwho.jpg"  alt="doc" /></a>
</div>

   <form action="adddetails.php" method="post">
    

    <?php 
    if(isset($doctor_id)) 
     echo "<input type='hidden' name='doctor_id' value=" . $doctor_id . " >";
    ?>

    <div>
        <label for="season"><h1>Season</h1></label>
        <input type="varchar" name="season" required <?php if (isset($details['season'])) echo "value='" . $details['season'] . "'"; ?> />

    </div>

    
    
      <div>
        <label for="Doctors_id"><h1>Doctor</h1></label>
         <select name="Doctors_id" required/>
          <?php
          if ($doctor->num_rows > 0) {
              // output data of each row
              while($row = $doctor->fetch_assoc()) {
                  echo "<option value='" . $row["id"]. "'";
                  if (isset($details) and  $details[Doctors_id] == $row["id"]) echo "selected";
                  echo ">" . $row["name"] . "</option>";
              }
          }
          ?>
         </select>

      </div>



    <div>
        <label for="major_foes"><h1>Major Foes</h1></label>
        <input type="varchar" name="major_foes" required <?php if (isset($details['major_foes'])) echo "value='" . $details['major_foes'] . "'"; ?> />
    </div>
    <div class="button">
        <button type="submit"><h1>Create</h1>
        </button>
    </div>
</form>

</body>
</html>