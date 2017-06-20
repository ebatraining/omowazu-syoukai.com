<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>思わず紹介.com</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="css/nivo-slider.css" rel="stylesheet">
<link href="css/default.css" rel="stylesheet">
<meta name="viewport" content="width=device-width">
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<!--スライドショー-->
<script src="./js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:5,
		animSpeed:100, //画像が切り替わるスピード
		pauseTime:5000, //画像が切り替わるまでの時間
		startSlide:0, //最初に表示する画像
		directionNav:true, //矢印を表示する
		directionNavHide:true, //マウスを乗せたときに矢印を表示
		controlNav:true, //1,2,3...
		controlNavThumbsSearch: '.jpg',
		controlNavThumbsReplace: '_thumb.jpg',
		keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //オンマウスで画像が止まる
		manualAdvance:false, //Force manual transitions
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){}
	});
});
</script>
</head>
<body class="about">
	<header>
		<?php include( $_SERVER['DOCUMENT_ROOT'] . '/global_menu.php'); ?>
	</header>
	<div class="background mar10">
		<h2>このサイトについて</h2>
	</div>
	<div class="contents">
		<article class="about_lead">
			<p>
				当サイトは、様々なサイト（ホームページ）を紹介するサイトです。<br>
				世界で１０億以上あるとされるWebサイトの中から、思わず皆様にもオススメしたくなるようなサイトをご紹介させていただきます。
			</p>
			<p>
				お知り合いのサイトなどもありますが、そうしたサイトも含めて、運営者の判断で様々なサイトを気ままに紹介していきます。
			</p>
			<p>
				当サイトへのご要望、ご不明点等がございましたら、お気軽にお問い合わせくださいませ。
			</p>
			<p>
				日の目にはあまり当たっていないサイトでも、多くのユーザーの方からニーズのあるようなサイトもあると思いますので、そうしたサイト<br>
				などもご紹介していきたいと思っております。
			</p>
		</article>
		<div class="about_lead_right">
			<img src="img/mv2.png" width="455" height="500" alt="">
		</div>
	</div>
	<footer>
		<small>Copyrights(C)2015-2016 思わず紹介.com,Inc.<br>
			All Rights Reserved.
		</small>
	</footer>
</body>
</html>
