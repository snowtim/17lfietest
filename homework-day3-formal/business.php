<?php
	
	//連接資料庫並抓取所有詢價記錄
	require 'Connection.php';

	$query = "SELECT (SELECT username FROM user a WHERE c.quesioner_id = a.id) AS guestname,
				c.inquiry_item, c.quantity, c.price, c.reply_status, c.ask_time, c.reply_time 
				FROM inquiry_record c";

	$result = mysqli_query($my_link, $query);

	if(!$result) {
		echo mysqli_error($my_link);
	}

	$count = mysqli_num_rows($result);

?>

<html>

<?php
	if(isset($_GET['mid']) && isset($_GET['name'])) {
		echo "Hello, {$_GET['name']}";
	} elseif(isset($_POST['mid']) && isset($_POST['name'])) {
		echo "Hello, {$_POST['name']}";
	}

?>

<head>
	<h1>(業務用頁面)</h1>
</head>

<body>
	<form method="POST" action="reply.php">
		<input type="hidden" name="mid" value="<?php echo $_GET['mid']; ?>">
		<input type="hidden" name="name" value="<?php echo $_GET['name']; ?>">
		<input type="submit" value="回覆詢價" class="button">
	</form>

	<form method="POST" action="index.view.php">
		<input type="submit" value="登出" class="button">
	</form>

	<h5>客戶詢價回覆歷史</h5>

	<table style="width:100%">
		<tr>
			<th>客戶姓名</th>
			<th>客戶欲詢問之商品</th>
			<th>數量</th>
			<th>價格回覆</th>
			<th>結果</th>
			<th>提問時間</th>
			<th>回覆時間</th>
		</tr>

	<?php 
		for($i=0; $i<$count; $i++) { 
		list($guestname, $item, $quantity, $price, $reply_result, $ask, $reply) 
		= mysqli_fetch_row($result); ?>

		<tr>
			<td><?php echo $guestname; ?></td>
			<td><?php echo $item; ?></td>
			<td><?php echo $quantity; ?></td>
			<td><?php echo $price; ?></td>

		<?php	if($reply_result == 1) { ?>
			<td><?php echo "已回覆"; ?></td>
		<?php } elseif($reply_result == 0) { ?>
			<td><?php echo "未回覆"; ?></td>
		<?php } ?>

			<td><?php echo $ask; ?></td>
			<td><?php echo $reply; ?></td>
		</tr>
	<?php } ?>
	</table>

<?php 

	mysqli_free_result($result);

	mysqli_close($my_link);

?>

</body>


</html>