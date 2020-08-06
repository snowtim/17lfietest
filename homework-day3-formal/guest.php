<?php

	//連接資料庫並抓取客戶詢價之歷史詢息資料
	require 'Connection.php';

	$query = "SELECT quesioner_id, inquiry_item, quantity, price, ask_time, reply_time 
			FROM inquiry_record";

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

<body>
	<form method="POST" action="inquiry.php">
		<input type="hidden" name="mid" value="<?php echo $_GET['mid']; ?>">
		<input type="hidden" name="name" value="<?php echo $_GET['name']; ?>">
		<input type="submit" value="點此詢價" class="button">
	</form>

	<form method="POST" action="index.view.php">
		<input type="submit" value="登出" class="button">
	</form>

	<h5>您的詢價歷史</h5>

	<table style="width:100%">
		<tr>
			<th>欲詢問之商品</th>
			<th>數量</th>
			<th>廠商回覆商品價格</th>
			<th>提問時間</th>
			<th>回覆時間</th>
		</tr>

			<?php 
				for($i=0; $i<$count; $i++) { 
					list($quesioner_id, $item, $quantity, $price, $ask, $reply) = mysqli_fetch_row($result); 
					if($quesioner_id == $_GET['mid']) { ?>
				<tr>
					<td><?php echo $item; ?></td>
					<td><?php echo $quantity; ?></td>
					<td><?php echo $price; ?></td>
					<td><?php echo $ask; ?></td>
					<td><?php echo $reply; ?></td>
				</tr>
				<?php } ?>
			<?php } ?>
	</table>

	<?php 

		mysqli_free_result($result);

		mysqli_close($my_link);

	?>
</body>

</html>