<?php
	mb_internal_encoding("UTF-8");

	session_name('CONTACT');
	session_start();

	require_once "definition.php";

	// 文字種変換
	$mail1_b 		= (isset($_POST['mail1_b'])) ? mb_convert_kana($_POST['mail1_b'], "as") : "";

	// 末尾空白削除
	$mail1_b	=rtrim($mail1_b);

	// セッションに入力値を代入
	$_SESSION['TYPE_B'] = 		htmlspecialchars($_POST['type_b']);
	$_SESSION['NAME1_B'] = 		htmlspecialchars($_POST['name1_b']);
	$_SESSION['NAME2_B'] = 		htmlspecialchars($_POST['name2_b']);
	$_SESSION['COMPANY_B'] = 		htmlspecialchars($_POST['company_b']);
	$_SESSION['MAIL1_B'] = 		htmlspecialchars($mail1_b);
	$_SESSION['DEMO_B'] = 		isset($_POST['demo_b']) ? implode(" / ", $_POST["demo_b"]) : '';
	$_SESSION['PARAM_B'] = 		htmlspecialchars($_POST['param_b']);
	$_SESSION['BODY_B'] = 		htmlspecialchars($_POST['body_b']);

	$num = substr($_SESSION['TYPE_B'],4,1);
	if($num == ""){
		$typePrint = "";
	}else{
		$typePrint = $type_array[$num];
	}


?>
<!DOCTYPE html>
<html lang="ja-JP">
<head>
	<meta charset="UTF-8">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5873P36');</script>
<!-- End Google Tag Manager -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>確認｜お問い合わせ｜SECURE AI Office Base：社員を守り、事業も継続！オフィスはクラウドで管理する</title>
	<meta name="description" content="ABWやオフィス3密対策に！オフィスはクラウドで管理する。入退室管理、顔認証の「SECURE AI Office Base」を提供いたします。" />
	<meta name="keywords" content="ABW,オフィス3密対策,サテライトオフィス,,SECURE,SECURE AI Office Base,オフィスリモート管理,健康経営,クラウドオフィス管理" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="SECURE AI Office Base：社員を守り、事業も継続！オフィスはクラウドで管理する" />
	<meta property="og:image" content="https://secureinc.co.jp/aioffice/images/og.png" />
	<meta property="og:url" content="https://secureinc.co.jp/aioffice/" />
	<meta property="og:site_name" content="SECURE AI Office Base：社員を守り、事業も継続！オフィスはクラウドで管理する" />
	<meta property="og:description" content="ABWやオフィス3密対策に！オフィスはクラウドで管理する。入退室管理、顔認証の「SECURE AI Office Base」を提供いたします。" />
	<link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@600&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/html5reset-1.6.1.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="shortcut icon" href="./images/favicon.ico">
	<link rel="apple-touch-icon" href="./images/apple-touch-icon.png" sizes="180x180">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="./js/common.min.js"></script>
	<script src="./js/bundle.js"></script>

<body id="thanks">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5873P36"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div id="wrap">
	<div id="mv">
	  <div class="bg-orange-btm"></div>
	  <div class="bg-img">
		<div></div>
	  </div>
	  <header>
		<h2><span class="pc-view">ニューノーマル時代のリモート×AIオフィス運用システム</span><img src="./images/head_logo.png" alt="SECURE AI Office Base"/></h2>
		<button class="hamburger sp-view"><span></span><span></span><span></span></button>
		<div>
		  <p><span><i>お電話でのお問い合わせは</i><a href="tel:08009199500"><img src="./images/icon_tel.svg"/></a><strong><a href="tel:08009199500">0800-919-9500</a></strong></span><small>フリーコール (土日祝日除く9:30 ～ 18:00)</small></p>
		</div>
	  </header>
	  <div id="mv__inner">
		<div>
		  <h1> <span>お問い合わせ内容確認</span></h1>
		</div>
	  </div>
	</div>
	<section class="formsection">

		<article>
			<dl>
				<dt class="req">会社名</dt>
				<dd><?php print($_SESSION['COMPANY_B']) ?></dd>
			</dl>
			<dl>
				<dt class="req">お名前</dt>
				<dd><?php print($_SESSION['NAME1_B']." ".$_SESSION['NAME2_B']) ?></dd>
			</dl>
			<dl>
				<dt class="req">メールアドレス</dt>
				<dd><?php print($_SESSION['MAIL1_B']) ?></dd>
			</dl>
			<dl>
				<dt class="any">デモ希望</dt>
				<dd><?php print($_SESSION['DEMO_B']) ?></dd>
			</dl>
			<dl>
				<dt class="any">導入予定時期</dt>
				<dd><?php print($typePrint) ?></dd>
			</dl>
			<dl>
				<dt class="any">お問い合わせの内容</dt>
				<dd><?php print(nl2br($_SESSION['BODY_B'])) ?></dd>
			</dl>
			<div class="submitbtn">
				<div class="flexbtn">
					<form method="post" action="index.php#form_b">
						<input type="submit" value="修正する" class="white">
					</form>
					<form method="post" action="send_b.php">
						<input type="submit" value="送信する">
					</form>
				</div>
			</div>
		</article>
	</section>

	<footer>
	  <div><img src="./images/foot_logo.svg" alt="SECURE"/>
		<ul>
		  <li><a href="https://secureinc.co.jp/company/" target="_blank">運営会社</a></li>
		  <li><a href="https://secureinc.co.jp/sitepolicy/" target="_blank">サイトポリシー</a></li>
		  <li><a href="https://secureinc.co.jp/privacy/" target="_blank">個人情報保護方針</a></li>
		</ul>
	  </div><small>Copyright(c)2020 SECURE Inc. All Rights Reserved.</small>
	</footer><a class="pagetop" href="#wrap"></a>
	<div class="mask"></div>
</div>
</body>
</html>