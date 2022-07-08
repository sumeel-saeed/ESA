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
  <h3> see all astronauts</h3>
  
  <?php
  // this is the thing where we need to put correct information if you want to run this and if you are doing something wrong you will get a error.
  $host ="localhost";
   $username ="root";
   $password ="";
   $database_name ="esa";
   $link = mysqli_connect($host, $username, $password, $database_name);
    if($link === false) {
	die("Error: could not connect");		
	}
	?>
	 <table>
	 <tr>
	   <th width="100px">astronauts id<br><hr></th>
	   <th width="100px">astronauts name<br><hr></th>
	   <th width="100px">no_missions<br><hr></th>
       </tr>
	   <?php
	   // this is the code that shows it is also connected to mysqli and and whatever input you will give you can check it through this link.
	   $sql =mysqli_query($link, "SELECT astronaut_id, astronaut_name, no_missions FROM astronaut");
	   while ($row =$sql->fetch_assoc()){
		   echo "
			<tr>
				<th>{$row['astronaut_id']}</th>
				<th>{$row['astronaut_name']}</th>
				<th>{$row['no_missions']}</th>
			</tr>
	";
	   }
	   ?>
	   </table>
	<?php
	// this is the code  that close link. 
	 mysqli_close($link);
   ?>
   </body>
   </html>