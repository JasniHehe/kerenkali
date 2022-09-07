<?php
include "dbconnect.php";
if(isset($_POST['Submit'])){
	
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	$useremail = validate($_POST['useremail']);
	$userpass = validate($_POST['userpass']);
	
	if (empty($useremail)){
		header("Location: Sign_in.php?error=Email is required");
		exit();
	}
	else if (empty($userpass)){
		header("Location: Sign_in.php?error=Password is required");
		exit();
	}else{
		$sql = "SELECT * FROM user WHERE Email='$useremail' and Password='$userpass'";
		
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) === 1){
			$row = mysqli_fetch_assoc($result);
			if($row['Email'] === $useremail && $row['Password'] === $userpass){
				header("Location:UserHome.php?Email=$useremail");
		exit();
			}
		}else{
			header("Location: Sign_in.php?error=Incorrect Username or password");
			exit();
		}

	}
}
$conn->close();
?>