<?php


/*****************************
   メール送信
*****************************/
mb_language("Japanese");
mb_internal_encoding("UTF-8");
// 宛先↓に小菅さんのメールアドレスを記載（問い合わせがきたときの、メール送信先アドレスを記載）
$to = "postmaster@ebacorp.jp";
// 差出人
$from ="<postmaster@ebacorp.jp>";
// 題名
$sbj .= "お問合せがきました";
// 本文
$msg = "お名前\n";
$msg .= html_entity_decode($_POST['name'], ENT_QUOTES)."\n\n";
$msg .= "フリガナ\n";
$msg .= html_entity_decode($_POST['name2'], ENT_QUOTES)."\n\n";
$msg .= "メールアドレス\n";
$msg .= html_entity_decode($_POST['mail'], ENT_QUOTES)."\n\n";
$msg .= "電話番号\n";
$msg .= html_entity_decode($_POST['telban'], ENT_QUOTES)."\n\n";
$msg .= "備考\n";
$msg .= html_entity_decode($_POST['question'], ENT_QUOTES)."\n\n";
// ヘッダ作成
$header = "From: {$from}";
// 送信
mb_send_mail($to, $sbj , $msg , $header);
/*****************************
   メール送信「完了」
*****************************/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>思わず紹介.com</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width">
</head>

<body class="contact">

<header>

<div class="background">
<div class="max"><div class="logo"><a href="index.html"><img src="img/logo.png" width="145" height="68" alt=""/></a></div>
<ul>
<li><a href="index.html"><img src="img/button_top.png" width="140" height="40" alt="TOP"/></a></li>
<li><a href="kuchikomi01.html"><img src="img/button_samazama.png" width="140" height="40" alt="様々なサイト"/></a></li>
<li><a href="about.html"><img src="img/button_about.png" width="140" height="40" alt="このサイトについて"/></a></li>
<li><a href="contact.html"><img src="img/button_contact.png" width="140" height="40" alt="お問い合わせ"/></a></li>
</ul></div>
</div>
<div class="mv"><img src="img/mv.gif" width="950" height="320" alt=""/></div>
</header>
<div class="background"><h2>お問い合わせフォーム</h2></div>

<div class="contents">
ありがとうございました。
</div>

<div class="about_lead_right">
<img src="" height="400px" width="300px">
</div>


<footer>
<small>Copyrights(C)2015 思わず紹介.com,Inc.<br>
All Rights Reserved. 
</small>
</footer>
</body>
</html>
