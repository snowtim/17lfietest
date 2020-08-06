<!--登入頁面-->
<html>

<head>
	<title>詢價系統登入頁面</title>
</head>

<body>
	<h1>商品詢價系統</h1>

	<h5>請先登入您的帳號</h5>

	<div class="dashboard">
		<form method="POST" action="authentication.php">
			<div class="loginac">
				<label name="userlabel">帳號(註冊信箱):</label>
				<input type="text" name="email" required>
			</div>

			<div class="loginpd">
				<label name="passwordlabel">密碼:</label>
				<input type="text" name="password" required>
			</div>

			<div class="submit">
				<input type="submit" value="送出" class="button">
			</div>
		</form>
	</div>
</body>

</html>