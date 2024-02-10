<?php
include 'dbconnection.php';

if(isset($_POST['b1']))
{

$name = $_POST['n1'];
$id = $_POST['n2'];
$rollno = $_POST['n3'];
$email = $_POST['n4'];
$pass = $_POST['n5'];
$gender = $_POST['gender'];
$image = $_POST['n6'];
echo "$name";
$instu = "INSERT INTO student(name, id, rollno, email, pass, gender, image) VALUES('$name','$id','$rollno','$email','$pass','$gender','$image')";
echo "$instu";
$result1 = $connec->query($instu);
if($result1 == TRUE)
   {
 	echo "record insert succesfully...!";
	header('Location:bca-report.php');
   }
}

?>
