<?php
header('Access-Control-Allow-Origin: *');
$connect = mysqli_connect('localhost','root','','puper_accounts') or die ('unable to connect');
$userName = $_POST['username'];
$signupPass = $_POST['password'];
$student_id = $_POST['student_num'];
$sql = "UPDATE account
		SET userName = '$userName', signupPass = '$signupPass'
		WHERE student_id = '$student_id'";
$update = mysqli_query($connect,$sql);
if($update){
	echo "Successful!";
}
else{
	echo "unable to insert data";
}
mysqli_close($connect);
?>