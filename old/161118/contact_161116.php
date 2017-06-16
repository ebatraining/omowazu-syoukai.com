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
    <div class="max">
      <div class="logo"><a href="index.html"><img src="img/logo.png" width="145" height="68" alt=""/></a></div>
      <ul>
        <li><a href="index.html"><img src="img/button_top.png" width="140" height="40" alt="TOP"/></a></li>
        <li><a href="kuchikomi01.html"><img src="img/button_samazama.png" width="140" height="40" alt="様々なサイト"/></a></li>
        <li><a href="about.html"><img src="img/button_about.png" width="140" height="40" alt="このサイトについて"/></a></li>
        <li><a href="contact.php"><img src="img/button_contact.png" width="140" height="40" alt="お問い合わせ"/></a></li>
      </ul>
    </div>
  </div>
  <div class="mv"><img src="img/mv.gif" width="950" height="320" alt=""/></div>
</header>
<div class="background mar10">
  <h2>お問い合わせフォーム</h2>
</div>
<div class="contents">
<?
/*------------------------------
　入力フォーム
------------------------------*/
if(empty($_POST['input']))
{
$sex = $_POST['sex'];
?>
<form id="frmInput" name="frmInput" method="post" action="<? basename($_SERVER['PHP_SELF']);?>">
  <dl>
    <dt>
      <div class="form_yoha">
        <label for="name">名前</label>
        *</div>
    </dt>
    <dd>
      <input name="name" type="text" id="name" size="50" maxlength="100" class="form_text_zenkaku" value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES,'UTF-8'); ?>" />
      <?php if ($_POST['name'] == ''): ?>
      <?php endif; ?>
    </dd>
    <dt>
      <div class="form_yoha">
        <label for="name2">フリガナ </label>
      </div>
    </dt>
    <dd>
      <input name="name2" class="form_text_zenkaku" type="text" id="name2" size="50" maxlength="100" value="<?php echo htmlspecialchars($_POST['name2'], ENT_QUOTES,'UTF-8'); ?>" />
    </dd>
    <dt>
    <div class="form_yoha">
      <label for="mail">メールアドレス</label>
      *
    </div>
    </dt>
    <dd>
      <input name="mail" type="text" id="mail" size="50" class="form_text_hankaku" maxlength="150" value="<?php print(htmlspecialchars($_POST['mail'])); ?>" />
    </dd>
    <dt>
      <div class="form_yoha">
        <label for="telban">電話番号</label>
      </div>
    </dt>
    <dd>
      <input name="telban" class="form_text_hankaku" type="text" id="telban" size="50" maxlength="100" value="<?php echo htmlspecialchars($_POST['telban'], ENT_QUOTES,'UTF-8'); ?>"/>
    </dd>
    <dt>
    <div class="form_yoha">
      <label for="question">備考</label>
      *
      </div>
    </dt>
    <dd><textarea name="question" class="form_text_zenkaku" id="question" cols="45" rows="3" value="<?=$question;?>"/></textarea>
    </dd>
  </dl>
  <p>
    <input name="input" type="submit" value="送信する" id="submit" />
  </p>
</form>
<?
}

/*------------------------------
　確認画面
------------------------------*/
if($_POST['input'] == "送信する")
{

		/* 入力データ確認 */
		
		$err = "";
		if(empty($_POST['name'])){
		$err .= "お名前は必須です。<br />";
		}else{
			if(get_magic_quotes_gpc()){
				$name = stripslashes($_POST['name']);
				$name = htmlentities($name, ENT_QUOTES, "utf-8");
			}else{
				$name = htmlentities($_POST['name'], ENT_QUOTES, "utf-8");
			}
		}
				
			if(get_magic_quotes_gpc()){
				$name2 = stripslashes($_POST['name2']);
				$name2 = htmlentities($name2, ENT_QUOTES, "utf-8");
			}else{
				$name2 = htmlentities($_POST['name2'], ENT_QUOTES, "utf-8");
			}
		




		if(empty($_POST['mail'])){
		$err .= "メールアドレスは必須です。<br />";
		}else{
		$pattern = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iD';
		if(!preg_match($pattern,$_POST['mail'])){
		$err .= "メールアドレスの形式が正しくありません。<br />";
		}else{
			if(get_magic_quotes_gpc()){
				$mail = stripslashes($_POST['mail']);
				$mail = htmlentities($mail, ENT_QUOTES, "utf-8");
			}else{
				$mail = htmlentities($_POST['mail'], ENT_QUOTES, "utf-8");
			}
		}
		
		
					if(get_magic_quotes_gpc()){
				$telban = stripslashes($_POST['telban']);
				$telban = htmlentities($telban, ENT_QUOTES, "utf-8");
			}else{
				$telban = htmlentities($_POST['telban'], ENT_QUOTES, "utf-8");
			}
		}

				
		if(empty($_POST['question'])){
		$err .= "備考は必須です。<br />";
		}else{
			if(get_magic_quotes_gpc()){
				$question = stripslashes($_POST['question']);
				$question = htmlentities($question, ENT_QUOTES, "utf-8");
			}else{
				$question = htmlentities($_POST['question'], ENT_QUOTES, "utf-8");
			}
		}
		
			


  /* お問合せサービス「エラーメッセージ」 */



	


/*------------------------------
　空欄がある場合はエラーメッセージ表示
------------------------------*/
if(!empty($err)){
$sex = $_POST['sex'];
?>
<p style="font-weight:bold; color:#F00; margin-left:23px;">
  <?=$err;?>
</p>
<form id="frmInput" name="frmInput" method="post" action="<? basename($_SERVER['PHP_SELF']);?>">
  <dl>
    <dt>
      <div class="form_yoha">
        <label for="name">名前</label>
        *</div>
    </dt>
    <dd>
      <input name="name" type="text" class="form_text_zenkaku" id="name" size="50" maxlength="100" value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES,'UTF-8'); ?>" />
      <?php if ($_POST['name'] == ''): ?>
      <?php endif; ?>
    </dd>
    <dt>
      <div class="form_yoha">
        <label for="name2">フリガナ </label>
      </div>
    </dt>
    <dd>
      <input name="name2" type="text" class="form_text_zenkaku" id="name2" size="50" maxlength="100" value="<?php echo htmlspecialchars($_POST['name1'], ENT_QUOTES,'UTF-8'); ?>" />
    </dd>
    <dt>
      <div class="form_yoha">
        <label for="mail">メールアドレス</label>
        *</div>
    </dt>
    <dd>
      <input name="mail" type="text" id="mail" size="50" class="form_text_hankaku" maxlength="150" value="<?php print(htmlspecialchars($_POST['mail'])); ?>" />
    </dd>
    <dt>
      <div class="form_yoha">
        <label for="telban">電話番号</label>
      </div>
    </dt>
    <dd>
      <input name="telban" type="text" id="telban" size="50" class="form_text_hankaku" maxlength="100" value="<?php echo htmlspecialchars($_POST['telban'], ENT_QUOTES,'UTF-8'); ?>"/>
    </dd>
    <dt>
      <div class="form_yoha">
        <label for="question">備考</label>
        *</div>
    </dt>
    <dd>
      <textarea name="question" class="form_text_zenkaku" id="question" cols="45" rows="3"/><?=($_POST['question'])?></textarea>
    </dd>
  </dl>
  <p>
    <input type="submit" value="前のページへ戻る" id="submit2" />
    <input name="input" type="submit" value="送信する" id="submit1" />
  </p>
</form>
<?
} else {
		/*------------------------------
		　問題なければ確認画面表示
		------------------------------*/
?>
<p><br />
  以下の内容でよろしければ、『送信』ボタンをクリックしてください。</p>
<form id="frmInput" name="frmInput" method="post" action="thankyou.php">
  <dl>
  <dt>
    <div class="form_yoha">
      <label for="name">名前</label>
      *</div>
  </dt>
  <dd>
    <div class="form_yoha1">
      <?=$name;?>
      <input type="hidden" name="name" value="<?=$name;?>" />
    </div>
  </dd>
  <dt>
    <div class="form_yoha">
      <label for="name2">フリガナ </label>
    </div>
  </dt>
  <dd>
    <div class="form_yoha1">
      <?=$name2;?>
      <input type="hidden" name="name2" value="<?=$name2;?>" />
    </div>
  </dd>
  <dt>
    <div class="form_yoha">
      <label for="mail">メールアドレス</label>
      *</div>
  </dt>
  <dd>
    <div class="form_yoha1">
      <?=$mail;?>
      <input type="hidden" name="mail" value="<?=$mail;?>" />
    </div>
  </dd>
  <dt>
    <div class="form_yoha">
      <label for="telban">電話番号</label>
    </div>
  </dt>
  <dd>
    <div class="form_yoha1">
      <?=$telban;?>
      <input type="hidden" name="telban" value="<?=$telban;?>" />
    </div>
  </dd>
  <dt>
    <div class="form_yoha">
      <label for="question">備考</label>
    </div>
  </dt>
  <dd>
    <div class="form_yoha_question">
      <?="<FONT COLOR=\"BLACK\">$question</FONT>";?>
      <input type="hidden" name="question" value="<?=$question;?>" />
    </div>
  </dd>
  <p>
    <input type="button" onClick="history.back()" value="前のページへ戻る" id="submit2" />
    <input name="input" type="submit" value="送信する" id="submit3" />
  </p>
</form>
<?
	}
}
if($_POST['input'] == "送信する"){

	if(get_magic_quotes_gpc()){
		$name = stripslashes($_POST['name']);
		$name = htmlentities($name, ENT_QUOTES, "utf-8");
	}else{
		$name = htmlentities($_POST['name'], ENT_QUOTES, "utf-8");
	}


	if(get_magic_quotes_gpc()){
		$name2 = stripslashes($_POST['name2']);
		$name2 = htmlentities($name2, ENT_QUOTES, "utf-8");
	}else{
		$name2 = htmlentities($_POST['name2'], ENT_QUOTES, "utf-8");
	}



	if(get_magic_quotes_gpc()){
		$mail = stripslashes($_POST['mail']);
		$mail = htmlentities($mail, ENT_QUOTES, "utf-8");
	}else{
		$mail = htmlentities($_POST['mail'], ENT_QUOTES, "utf-8");
	}

	if(get_magic_quotes_gpc()){
		$telban = stripslashes($_POST['telban']);
		$telban = htmlentities($telban, ENT_QUOTES, "utf-8");
	}else{
		$telban = htmlentities($_POST['telban'], ENT_QUOTES, "utf-8");
	}

	
	
		if(get_magic_quotes_gpc()){
		$question = stripslashes($_POST['question']);
		$question = htmlentities($question, ENT_QUOTES, "utf-8");
	}else{
		$question = htmlentities($_POST['question'], ENT_QUOTES, "utf-8");
	}
	}

?>
</div>

<footer style="padding-top:30px;"> <small>Copyrights(C)2015-2016 思わず紹介.com,Inc.<br>
All Rights Reserved. 
</small></footer>
</body>
</html>
