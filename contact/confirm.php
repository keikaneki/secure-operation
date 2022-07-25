<?php
	mb_internal_encoding("UTF-8");

	session_name('CONTACT');
	session_start();

	require_once "definition.php";

	// 文字種変換
	$mail1 		= (isset($_POST['mail1'])) ? mb_convert_kana($_POST['mail1'], "as") : "";
	$mail2 		= (isset($_POST['mail2'])) ? mb_convert_kana($_POST['mail2'], "as") : "";
	$tel 		= (isset($_POST['tel'])) ? mb_convert_kana($_POST['tel'], "as") : "";

	// 末尾空白削除
	$mail1	=rtrim($mail1);
	$mail2	=rtrim($mail2);
	$tel	=rtrim($tel);

	// セッションに入力値を代入
	$_SESSION['TYPE'] = 		htmlspecialchars($_POST['type']);
	$_SESSION['NAME1'] = 		htmlspecialchars($_POST['name1']);
	$_SESSION['NAME2'] = 		htmlspecialchars($_POST['name2']);
	$_SESSION['FURIGANA1'] = 	htmlspecialchars($_POST['furigana1']);
	$_SESSION['FURIGANA2'] = 	htmlspecialchars($_POST['furigana2']);
	$_SESSION['COMPANY'] = 		htmlspecialchars($_POST['company']);
	$_SESSION['TEL'] = 			htmlspecialchars($tel);
	$_SESSION['MAIL1'] = 		htmlspecialchars($mail1);
	$_SESSION['MAIL2'] = 		htmlspecialchars($mail2);
	$_SESSION['BODY'] = 		htmlspecialchars($_POST['body']);

	$num = substr($_SESSION['TYPE'],4,1);
	$typePrint = $type_array[$num];

?>
<!DOCTYPE html>
<html lang="ja-JP">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5873P36');</script>
<!-- End Google Tag Manager -->
	<meta charset="UTF-8">
	<title>お問い合わせ｜送信完了｜顔認証セキュリティはセキュアのSECURE | SECURE</title>
	<meta name="description" content="監視カメラシステムや入退室システム等のセキュリティソリューションを提供する株式会社セキュアのブランド「SECURE」のお問い合わせページの送信完了画面です。">
	<meta name="keywords" content="セキュア,SECURE,お問い合わせ,送信完了">
	<link rel="shortcut icon" href="/assets/img/fav.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta property="og:title" content="お問い合わせ｜送信完了｜顔認証セキュリティはセキュアのSECURE">
	<meta property="og:type" content="website">
	<meta property="og:description" content="監視カメラシステムや入退室システム等のセキュリティソリューションを提供する株式会社セキュアのブランド「SECURE」のお問い合わせページの送信完了画面です。">
	<meta property="og:url" content="https://SECURE.jp/">
	<meta property="og:image" content="/assets/img/share.png">
	<meta property="og:site_name" content="入退室管理・防犯カメラなど、オフィスセキュリティのことならセキュア">
	<meta property="og:locale" content="ja_JP">
	<link rel="stylesheet" href="/assets/css/common.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="/assets/js/common.min.js"></script>
	<script src="/assets/js/bundle.js"></script>

<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5873P36"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header class="nonav">
		<div class="l-inner">
			<h1><a>
				<img src="/assets/img/logo/SECURE_w.png" alt="" class="white noSP">
				<img src="/assets/img/logo/SECURE_k.png" alt="" class="black noSP">
				<img src="/assets/img/logo/SECURE_sp_w.png" alt="" class="white noPC">
				<img src="/assets/img/logo/SECURE_sp_k.png" alt="" class="black noPC">
			</a></h1>
		</div>
	</header>
	<section class="contact l-inner">
		<nav class="breadcrumb">
			<ul>
				<li><a href="/">TOP</a></li>
				<li><span>お問い合わせ</span></li>
			</ul>
		</nav>

		<div class="ttlarea ta-c">
			<h1 class="fs-rennermedium fs-50">CONTACT</h1>
			<h2 class="fs-20">お問い合わせ</h2>
		</div>

		<article class="block w900">
			<dl>
				<dt class="req">お問い合わせ種別</dt>
				<dd><?php print($typePrint) ?></dd>
			</dl>
			<dl>
				<dt class="req">お名前</dt>
				<dd><?php print($_SESSION['NAME1']." ".$_SESSION['NAME2']) ?></dd>
			</dl>
			<dl>
				<dt class="any">ふりがな</dt>
				<dd><?php print($_SESSION['FURIGANA1']." ".$_SESSION['FURIGANA2']) ?></dd>
			</dl>
			<dl>
				<dt class="any">会社名</dt>
				<dd><?php print($_SESSION['COMPANY']) ?></dd>
			</dl>
			<dl>
				<dt class="req">ご連絡先電話番号</dt>
				<dd><?php print($_SESSION['TEL']) ?></dd>
			</dl>
			<dl>
				<dt class="req">メールアドレス</dt>
				<dd><?php print($_SESSION['MAIL1']) ?></dd>
			</dl>
			<dl>
				<dt class="any">お問い合わせの内容</dt>
				<dd><?php print(nl2br($_SESSION['BODY'])) ?></dd>
			</dl>
			<div class="submitbtn">
				<div class="flexbtn">
					<form method="post" action="index.php">
						<input type="submit" value="修正する">
					</form>
					<form method="post" action="send.php">
						<input type="submit" value="送信する">
					</form>
				</div>
			</div>
		</article>
	</section>


	<div class="dlbox noPC">
		<a href="/download/" class="btn orange shadow">
			3分で分かる「オフィスセキュリティ」に関する資料<br>
			<em class="dl fs-30"><span class="fw-700">資料ダウンロード</span>はコチラ</em>
		</a>
		<strong class="casenum orangeunderline fs-30 fw-500 noSP">導入実績<span class="fc-orange number"><span class="fs-60 fw-700 number">4,000</span>社</span>以上</strong>
	</div>


	<footer class="nonav">
		<div class="l-inner">
			<div class="l-cols2 wrap">
				<div class="col order-1">
					<p class="copy">Copyright(C)2020 SECURE Inc. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer>
	<div class="mask"></div>

</body>
</html>