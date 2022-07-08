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
   <h3> add a new target</h3>
    <?php
	// this is code of database where we need to give the information and if we will give any wrong informtion we will get a error of false.
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
   
	   <label>target name</label><br>
	   <input type="text" name="target_name">
	   <br><br>
	   
	   <label>first mission</label><br>
	   <input type="date" name="first_mission">
	   <br><br>
	   
	   <label>target type</label><br>
	   <input type="text" name="target_type">
	   <br><br>
	   
	   <label>number of mission </label><br>
	   <input type="number" name="no_mission">
	   <br><br>
	   
	   <input type="submit">
   </form>
   <?php
   // these are the variables which are different from other pages but  like that we need to give a correct information to run this.
   if(isset($_POST['target_name']) && isset($_POST['first_mission']) && isset($_POST['target_type']) && isset($_POST['target_type'])){
    $target_name =$_POST['target_name'];
	$first_mission =$_POST['first_mission'];
    $target_type =$_POST['target_type'];
    $no_mission =$_POST['no_mission'];


  
	
	$sql ="INSERT INTO target (target_name, first_mission, target_type, no_mission) VALUES ('$target_name' , '$first_mission' , '$target_type' ,  '$no_mission')";
	// this is also connected to the mysqli and if we will give any false input we will receive a error through if statement.
	if (mysqli_query($link, $sql)) {
		 echo "target has been added";
	} else {
		echo "Error: problem adding target";
	}
	header('Location: addtarget.php');
   }
   // this code is for to close the link.
	 mysqli_close($link);
   ?>
   </body>
   </html>