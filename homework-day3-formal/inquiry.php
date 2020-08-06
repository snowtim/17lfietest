<?php
	
	//Connect with Database and get data of merchandise
	require 'Connection.php';

	$query = "SELECT * FROM merchandise";

	$result = mysqli_query($my_link, $query);

	if(!$result) {
		echo mysqli_error($my_link);
	}

	$count = mysqli_num_rows($result);
?>

<html>

<head>
	<h2>商品詢價</h2>

	<form method="GET" action="guest.php">
		<input type="hidden" name="mid" value="<?php echo $_POST['mid'] ?>">
		<input type="hidden" name="name" value="<?php echo $_POST['name'] ?>">	
		<input type="submit" value="回上頁" class="button">
	</form>
</head>

<body>
	<div class="dashboard">
		<form method="POST" action="record.php">
			<input type="hidden" name="mid" value="<?php echo $_POST['mid'] ?>">
			<input type="hidden" name="name" value="<?php echo $_POST['name'] ?>">

			<label name="itemform">商品選單</label>
			<select name="items">
				<?php for($i=0; $i<$count; $i++) { 
						list($id, $item) = mysqli_fetch_row($result); ?> 
					<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
				<?php } ?>	
			</select>

			<input type="text" name="quantity" placeholder="請輸入數量" style="width:90px">

			<input type="submit" value="詢價此商品" class="button">	
		</form>
	</div>
</body>

</html>