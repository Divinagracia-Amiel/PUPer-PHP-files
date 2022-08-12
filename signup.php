<?php
header('Access-Control-Allow-Origin: *');
$connect = mysqli_connect('localhost','root','','puper_accounts') or die ('unable to connect');
$firstname = $_POST['firstname'];
$student_num = $_POST['student_num'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$sql = "INSERT INTO account VALUES ('$firstname','$email','NA','NA','$gender','$student_num')";
$insert = mysqli_query($connect,$sql);
if($insert){
	echo "Successful!";
}
else{
	echo "unable to insert data";
}
mysqli_close($connect);
?>