<?php
/*
Template Name: メール送信フォーム
*/
?>
<?php
/*送信項目のデータ*/
$username01 = $_POST['username01'];
$username02 = $_POST['username02'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$content = $_POST['content'];
$to = "a.tech.sgate@gmail.com";
// $to = "yudishino0826@gmail.com";
$subject = "[A-TECH LP]お問合せがありました";
$fromname = "A-TECH LP";
$from = "https://www.s-tech-programming.com/test/";

$body = "お名前 : {$username01}\n"
	. "カナ : {$username02}\n"
	. "メールアドレス : {$email}\n"
	. "お問合せ内容 : {$content}\n";

$headers = "From: {$fromname} <{$from}>\r\n";

/*送信処理*/
mb_language("Japanese");
mb_internal_encoding('UTF-8');

	if($email != ""){
			if(strlen($username01) == mb_strlen($username01,'utf8')) {
			echo "英数字のみの内容は送信できません。";
			exit();
		}
		mb_send_mail($to, $subject, $body, $headers);
		mb_send_mail($to2, $subject, $body, $headers);
	}else{
		echo "メールアドレスは必ず入力してください。";
		exit();
	}

 header("Location: ". "https://www.s-tech-programming.com/test/");
/*------------------------------------*/
?>
