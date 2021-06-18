<?php 



$dbhost = 'localhost';
$dbname = 'cont_arm';
$dbusername = 'root';
$dbpass = '';

$eng_1 = $_POST['myRange1'];
$eng_2 = $_POST['myRange2'];
$eng_3 = $_POST['myRange3'];
$eng_4 = $_POST['myRange4'];
$eng_5 = $_POST['myRange5'];
$eng_6 = $_POST['myRange6'];



$mysqli= mysqli_connect($dbhost, $dbusername, $dbpass, $dbname);

//Database connection
$conn = new mysqli('localhost','root','','cont_arm');
if(mysqli_connect_error()){
    die('Connection Failed ('.mysqli_connect_error().')'.
                               mysqli_connect_error());
}else{
    $stmt = $conn->prepare("INSERT INTO arm_values(1st_value, 2nd_value, 
                                3rd_value, 4th_value,5th_value,6th_value)
                    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss",$eng_1, $eng_2, $eng_3, $eng_4, $eng_5, $eng_6);
    $stmt->execute();
 

 header('Location:1.html');

    $stmt->close();
    $conn->close();


    

}

   
?>
