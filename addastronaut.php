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
  <h3> add a new astronaut</h3>
  
  <?php
  // this is the code for the database we have created and connected to mysqli.
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
	   <label>astronaut name</label><br>
	   <input type="text" name="astronaut_name"><br>
	   <label>Number of missions<label><br>
	   <input type="text" name="no_missions">
	   <input type="submit" name="submit">
   </form>
  
   
   <?php
   // these are the variables for  addastronaut where we can put the  information and later on we can get access to it whenever we want.
   if(isset($_POST['astronaut_name']) && isset($_POST['no_missions'])) {
	      $astronaut_name = $_POST['astronaut_name'];
	   $no_missions = $_POST['no_missions'];
	   
		$sql = "INSERT INTO astronaut (astronaut_name, no_missions) VALUES ('$astronaut_name','$no_missions')";
		 // this is also connected to mysqli with if statement like if we put any wrong information we will get a error.
		if (mysqli_query($link, $sql)) {
			 echo "astronaut has been added";
		} else {
			echo "Error: problem adding mission";
		}
		header('Location: addastronaut.php');
   }
   
	mysqli_close($link);
   ?>
   </body>
   </html>
   
   