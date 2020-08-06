<html>

<head>
	<title>輸入三座標求三角形面積</title>

	<style>
		input[type=text] {
			border: 2px solid red;
			border-radius: 10px;
			width: 20%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
		}

		.button {
			background-color: #2894FF;
			border: solid;
			border-radius: 5px;
			color: white;
			padding: 4px 8px;
			text-align: center;
			font-size: 16px;
			cursor: pointer;
		}

		.button:hover {
			background-color: red;
		}
	</style>
</head>

<body>
	<h5 style="color:purple">請輸入三個座標點以求三角形面積</h5>

	<form method="post" action="triangle-area-formal.php">
		<div class="coordinate1">
			<label name="coordi1">X1座標:</label>
			<input type="text" name="x1" required>
			<label name="coordi1">Y1座標:</label>
			<input type="text" name="y1" required>
		</div>	

		<div class="coordinate2">
			<label name="coordi2">X2座標:</label>
			<input type="text" name="x2" required>
			<label name="coordi2">Y2座標:</label>
			<input type="text" name="y2" required>
		</div>

		<div class="coordinate3">
			<label name="coordi3">X3座標:</label>
			<input type="text" name="x3" required>
			<label name="coordi3">Y3座標:</label>
			<input type="text" name="y3" required>
		</div>

		<div class="submit">
			<!--button type="submit" class="btn">送出</button-->
			<input type=submit value='送出' class="button">
		</div>
	</form>
</body>

</html>

<?php
	//include 'triangle-area.php';
?>