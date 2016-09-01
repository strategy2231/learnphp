<html>
<head>
<meta http-equiv= "content-type" content= "text/html; charset=utf-8">
<link rel = "stylesheet" type= "text/css" media "screen "href= "style.css">
	<title>簡易訂單</title>
	</head>
<body>
<div class = "order_form">
	<form action="process.php" method ="post">
	<div class = "order_col" >輸入姓名:<input type="text" name = "username"></div>
	<div class="ordere_col">輸入訂購物品<br><input type="checkbox" name="goods[]"value ="12 inch PowerBook">
	12 inch PowerBook NT $56,900 <br>
	<input type="checkbox" name="goods[]"value ="14 inch PowerBook">
	14 inch PowerBook NT $74,900 <br>
	<input type="checkbox" name="goods[]"value ="15 inch PowerBook">
	15 inch PowerBook NT $92,900 <br>
	</div>
	<input type= "submit"value="訂購">
	</form>
</div>
</body>
</html>