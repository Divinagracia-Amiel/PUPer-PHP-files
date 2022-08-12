<?php
header('Access-Control-Allow-Origin: *');
$connect = mysqli_connect('localhost','root','','puper_accounts') or die ('unable to connect');

$database = mysqli_query($connect, "SELECT * FROM account");

$data = array();
if (mysqli_num_rows($database) > 0){
	while ($row = mysqli_fetch_assoc($database))
	{
		$data[] = array(
			"email" => $row['email'],
			"student_id" => $row['student_id'],
			"userName" => $row['userName'],
			"signupPass" => $row['signupPass'],
		);
	}
	echo json_encode($data);
	exit;
}
?>