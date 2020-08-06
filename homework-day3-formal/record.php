<?php
	
	//詢價單送出後將詢價內容寫入資料庫
	require 'Connection.php';

	print_r($_POST);

	$query = "INSERT INTO inquiry_record(inquiry_item, quantity, price, quesioner_id, answerer_id, reply_status, reply_time) VALUES('{$_POST['items']}', '{$_POST['quantity']}', NULL, '{$_POST['mid']}', NULL, 0, NULL)";

	$result = mysqli_query($my_link, $query);

	if(!$result) {
		echo mysqli_error($my_link);
	}

	header("Location:guest.php?mid={$_POST['mid']}&name={$_POST['name']}");

?>