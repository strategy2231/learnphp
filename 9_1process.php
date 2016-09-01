
<head>
<meta http-equiv= "content-type" content= "text/html; charset=utf-8">
<link rel = "stylesheet" type= "text/css" media "screen "href= "style.css">
	<title>簡易訂單</title>
	</head>
	<?php
// check name
if(empty($_POST['username']))
{ die("沒填名字");}

//check email
if(empty($_POST['email'])){die("dear {$_POST['username']}, plz enter your email");}
elseif(!eregi("^[_.0-9a-z-]+@([0-9a-z-]+.)+[a-z]{2,3}$",$_POST['email']))
	{die("dear {$_POST['username']},plz enter correct email.")
	}

$mail_content= "訂購者:{$_POST['username']}"
訂購者mail:{$_POST['email']}
訂購物品如:;

foreach($_POST['goods']as$goods)
{$mail_content .=$goods."\n";
}

$order_time=date("Y年m月d日H:i:s");
$mail_content.="下定時間:{$order_time}";

@mail("strategy2231@hotmail.com","{$_POST['username']}的訂單",$mail_content) or die("無法寄信");

@mail($_POST['email'],"訂單確認",$mail_content) or die ("無法寄信給{$_POST['email']}");

header("9_1result.php?email={$_POST['email']}");
//echo"以寄信 可到{$_POST['email']}收信";
?>