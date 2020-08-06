<?php
	
	//連接資料庫抓取尚未回覆之報價單資料
	require 'Connection.php';

	$query = "SELECT (SELECT username FROM user a WHERE c.quesioner_id = a.id) AS guestname,
				c.id, c.inquiry_item, c.quantity, c.reply_status, c.ask_time FROM inquiry_record c";

	$result = mysqli_query($my_link, $query);

	if(!$result) {
		echo mysqli_error($my_link);
	}

	$count = mysqli_num_rows($result);
	
?>

<html>

<head>
	<h2>未回覆之報價單</h2>
	<form method="GET" action="business.php">
		<input type="hidden" name="mid" value="<?php echo $_POST['mid'] ?>">
		<input type="hidden" name="name" value="<?php echo $_POST['name'] ?>">	
		<input type="submit" value="回上頁" class="button">
	</form>
</head>

<body>
	<div class="title">
		<label name="guesttitle" style="padding:20px">客戶姓名</label>
		<label name="itemtitle" style="padding:20px">詢價商品</label>
		<label name="quantitytitle" style="padding:20px">詢價商品數量</label>
		<label name="itempricetitle" style="padding:20px">商品報價總額</label>
		<label name="asktimetitle" style="padding:70px">詢問時間</label>
	</div>

	<?php 
		for($i=0; $i<$count; $i++) {
			list($guestname,$id, $item, $quantity, $reply_status, $ask) 
			= mysqli_fetch_row($result);

			if($reply_status == 0) {
	?>

	<div class="dashboard">
		<form method="POST" action="reply.php">
			<input type="hidden" name="mid" value="<?php echo $_POST['mid'] ?>">
			<input type="hidden" name="name" value="<?php echo $_POST['name'] ?>">
			<input type="hidden" name="id[]" value="<?php echo $id; ?>">

			<label name="guest[]" style="padding:40px"><?php echo $guestname; ?></label>
			<label name="item[]" style="padding:20px"><?php echo $item; ?></label>
			<label name="quantity[]" style="padding:80px"><?php echo $quantity; ?></label>
			<input type="text" name="itemprice[]" style="width:160px" required>
			<label name="asktime[]" style="padding:20px"><?php echo $ask; ?></label>

			<input type="submit" value="回覆" class="button">
		</form>
	</div>

	<?php }
	} ?>

</body>

<?php

	//回覆客戶價格後詢價記錄資料庫更新
	if(isset($_POST['itemprice'])) {
		$time = date("Y-m-d H:i:s", time());

		$query = "UPDATE inquiry_record SET price='{$_POST['itemprice'][0]}', answerer_id='{$_POST['mid']}', reply_status=1, reply_time='$time' WHERE id='{$_POST['id'][0]}'";

		$result = mysqli_query($my_link, $query);

		if(!$result) {
			echo mysqli_error($my_link);
		}

		header("Location:business.php?mid={$_POST['mid']}&name={$_POST['name']}");

		//mysqli_free_result($result);
	}

	mysqli_close($my_link);

?>


</html>