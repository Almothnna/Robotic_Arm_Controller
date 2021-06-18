<?php
$dbhost = 'localhost';
$dbname = 'cont_arm';
$dbusername = 'root';
$dbpass = '';


$conn = new mysqli('localhost','root','','cont_arm');
$c = "SELECT COUNT(1st_value) as total FROM arm_values ";

$res= mysqli_query($conn,$c);
$value = mysqli_fetch_assoc($res);
$row_num = $value['total'];




?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="5.css">

  <meta charset="utf-8">
  <title>
    Arm Controller
  </title>
</head>
<style>
input:hover a{
  background-color: black;
}
</style>
<body>

<?php


	$sql = 'SELECT * FROM arm_values ORDER by id desc limit 1';
	$result = mysqli_query($conn, $sql);
	$rescheck = mysqli_num_rows($result);
	if ($rescheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo  "<br>";
			echo "<form action='1.html'> 

			 <label>First Engine</label>
  <output class='slider'>"."= ".$row['1st_value']." "." Dgree"."</output>
			 <br>
			 <br>
			 <label>Second Engine</label>
  <output class='slider'>"."= ".$row['2nd_value']." "." Dgree"."</output>
			<br>
			<br>
			<label>Third Engine</label>
  <output class='slider'>"."= ".$row['3rd_value']." "." Dgree"."</output>
			 <br>
			 <br>
			 <label>Fourth Engine</label>
  <output class='slider'>"."= ".$row['4th_value']." "." Dgree"."</output>
			 <br>
			 <br>
			 <label>Fifth Engine</label>
  <output class='slider'>"."= ".$row['5th_value']." "." Dgree"."</output>
			 <br>
			 <br>
			 <label>Sixth Engine</label>
  <output class='slider'>"."= ".$row['6th_value']." "." Dgree"."</output>	
<br>
<br>
  <input type='submit' class= 'button' value='Arm Settings'>

</form>";

  		}
	}
	

?>
  </body>
  </html>

