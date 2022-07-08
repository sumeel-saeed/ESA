<html>
  <head>
  <title>european space agency</title>
  </head>
  <body>
  <h1>european space agency</h1>
  <hr>
  <p>choose an option below:</p>
  <a href="index.php">homepage</a> | 
     <a href="addastronaut.php">add a astronaut</a> | 
     <a href="addmission.php">add a mission</a> | 
     <a href="addtarget.php">add a target</a> | 
     <a href="seeastronauts.php">see all astronauts</a>
     <a href="seemission.php">see all mission</a> |
     <a href="seetargets.php">see all targets</a> |
  <hr>
  <h3> add a new mission</h3>
   
   <?php
   // this is the database that needs the some kind of  compulsory information you need to put. 
    $host ="localhost";
   $username ="root";
   $password ="";
   $database_name ="esa";
   $link = mysqli_connect($host, $username, $password, $database_name);
    if($link === false) {
	die("Error: could not connect");		
	}  
    ?>
	
   <form method="post">
	   <label>mission name</label><br>
	   <input type="text" name="mission_name">
	   <br><br>
	   
	   <label>mission destination:<label><br>
	   <input type="text" name="mission_destination">
	   <br><br>
	   
	    <label>launch date:<label><br>
	   <input type="date" name="launch_date">
	   <br><br>
	   
	   <label>mission type:<label><br>
	   <input type="text" name="mission_type">
	   <br><br>
	   
	   <label>crew size:<label><br>
	   <input type="number" name="crew_size">
	   <br><br>
	   
		<label>Select target:</label>
		<select name="target_id">
			<?php
			// this is the target id code connected to mysqli where we need to put the correct information to get the right values.
			$sql = mysqli_query($link, "SELECT target_id, target_name FROM target");
			while ($row = $sql->fetch_assoc()){
			echo "<option value='{$row['target_id']}'>{$row['target_name']}</option>";
			}
			?>
		</select>
	   <br><br>
	   
	   		<label>Select astronaut:</label>
		<select name="astronaut_id">
			<?php
			// this is the astronaut id and also connected to the mysqli.
			$sql = mysqli_query($link, "SELECT astronaut_id, astronaut_name FROM astronaut");
			while ($row = $sql->fetch_assoc()){
			echo "<option value='{$row['astronaut_id']}'>{$row['astronaut_name']}</option>";
			}
			?>
		</select>
	   <br><br>
	   <input type="submit" name="submit">

   </form>
   
   <?php
   // these are variables that are different from others and we need to put these information correctly to get the right value.
   if (isset($_POST['submit'])) {
	   
   $mission_name =$_POST['mission_name'];
   $mission_destination =$_POST['mission_destination'];
   $launch_date =$_POST['launch_date'];
   $mission_type =$_POST['mission_type'];
   $crew_size =$_POST['crew_size'];
   $astronaut_id =$_POST['astronaut_id'];
   $target_id =$_POST['target_id'];
   
   
   
	
	$sql ="INSERT INTO mission (mission_name, mission_destination, launch_date, mission_type, crew_size, astronaut_id, target_id) VALUES ('$mission_name' , '$mission_destination' ,'$launch_date' , '$mission_type' , '$crew_size', '$astronaut_id', '$target_id')";
	// this also connected to mysqli query with if statement so that if we will put any wrong thing in it we will get a error.
	if (mysqli_query($link, $sql)) {
		 echo "mission has been added";
	} else {
		echo "Error: problem adding target";
	}
	header('Location: addmission.php');
   }
   // this is the code to close the link of mysqli.
	 mysqli_close($link);
   ?>
   </body>
   </html>