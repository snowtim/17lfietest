<?php
	
	//登入
	require 'Connection.php';

	$email = $_POST['email'];
	$pw = $_POST['password'];

	$query = "SELECT * FROM user WHERE email='$email'";

	$result = mysqli_query($my_link, $query);

	if(!$result) {
		echo mysqli_error($my_link);
	} else {
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_row($result);
			
		//查驗帳號及密碼並判斷登入之帳號為客戶或公司業務
		if($email!=null && $pw!=null && $row[2]==$email && $row[4]==$pw) {
			if($row[3] == "guest") {
				header("Location:guest.php?mid={$row[0]}&name={$row[1]}");
			} else {
				header("Location:business.php?mid={$row[0]}&name={$row[1]}");
			}
		} else {
			header("Location:loginwrong.php");
		}

		mysqli_free_result($result);

	}

	mysqli_close($my_link);

?>