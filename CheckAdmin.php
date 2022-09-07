<?php
include "dbconnect.php";
if(isset($_POST['Submit'])){
	
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	$adminemail = validate($_POST['adminemail']);
	$adminpass = validate($_POST['adminpass']);
	
	if (empty($adminemail)){
		header("Location: LoginAdmin.php?error=Email is required");
		exit();
	}
	else if (empty($adminpass)){
		header("Location: LoginAdmin.php?error=Password is required");
		exit();
	}else{
		$sql = "SELECT * FROM admin WHERE email ='$adminemail' and password='$adminpass'";
		
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) === 1){
			$row = mysqli_fetch_assoc($result);
			if($row['Email'] === $adminemail && $row['Password'] === $adminpass){
				header("Location:AdminHome.php");
		exit();
			}
		}else{
			header("Location: LoginAdmin.php?error=Incorrect Username or password");
			exit();
		}

	}
}
$conn->close();
?>