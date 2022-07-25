<?php
	mb_internal_encoding("UTF-8");

	session_name('DOWNLOAD');
	session_start();

	//require_once "definition.php";

	// 文字種変換
	$mail1 		= (isset($_POST['mail1'])) ? mb_convert_kana($_POST['mail1'], "as") : "";
	//$mail2 		= (isset($_POST['mail2'])) ? mb_convert_kana($_POST['mail2'], "as") : "";
	//$tel 		= (isset($_POST['tel'])) ? mb_convert_kana($_POST['tel'], "as") : "";

	// 末尾空白削除
	$mail1	=rtrim($mail1);
	//$mail2	=rtrim($mail2);
	//$tel	=rtrim($tel);

	// セッションに入力値を代入
	//$_SESSION['TYPE'] = 		htmlspecialchars($_POST['type']);
	$_SESSION['NAME1'] = 		htmlspecialchars($_POST['name1']);
	$_SESSION['NAME2'] = 		htmlspecialchars($_POST['name2']);
	//$_SESSION['FURIGANA1'] = 	htmlspecialchars($_POST['furigana1']);
	//$_SESSION['FURIGANA2'] = 	htmlspecialchars($_POST['furigana2']);
	$_SESSION['COMPANY'] = 		htmlspecialchars($_POST['company']);
	//$_SESSION['TEL'] = 			htmlspecialchars($tel);
	$_SESSION['MAIL1'] = 		htmlspecialchars($mail1);
	//$_SESSION['MAIL2'] = 		htmlspecialchars($mail2);
	$_SESSION['PARAM'] = 		htmlspecialchars($_POST['param']);
	//$_SESSION['BODY'] = 		htmlspecialchars($_POST['body']);

	//$num = substr($_SESSION['TYPE'],4,1);
	//$typePrint = $type_array[$num];

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
	<title>確認｜資料ダウンロード｜SECURE AI Office Base</title>
	<meta name="description" content="ニューノーマル時代のリモート・AI職場運用システムのAI Offce Baseがお届けする無料資料ダウンロード" />
	<meta name="keywords" content="ABW,オフィス3密対策,サテライトオフィス,,SECURE,SECURE AI Office Base,オフィスリモート管理,健康経営,クラウドオフィス管理" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="資料ダウンロード｜SECURE AI Office Base" />
	<meta property="og:image" content="https://secureinc.co.jp/aioffice/images/og.png" />
	<meta property="og:url" content="https://secureinc.co.jp/aioffice/" />
	<meta property="og:site_name" content="SECURE AI Office Base：社員を守り、事業も継続！職場はクラウドで管理する" />
	<meta property="og:description" content="ニューノーマル時代のリモート・AI職場運用システムのAI Offce Baseがお届けする無料資料ダウンロード" />
	<link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@600&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/html5reset-1.6.1.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="shortcut icon" href="./images/favicon.ico">
	<link rel="apple-touch-icon" href="./images/apple-touch-icon.png" sizes="180x180">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="../../js/common.min.js"></script>
	<script src="../../js/bundle.js"></script>

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
		<h2><span class="pc-view">ニューノーマル時代のリモート×AIオフィス運用システム</span><img src="../../images/head_logo.png" alt="SECURE AI Office Base"/></h2>
		<button class="hamburger sp-view"><span></span><span></span><span></span></button>
		<div>
		  <p><span><i>お電話でのお問い合わせは</i><a href="tel:08009199500"><img src="../../images/icon_tel.svg"/></a><strong><a href="tel:08009199500">0800-919-9500</a></strong></span><small>フリーコール (土日祝日除く9:30 ～ 18:00)</small></p>
		</div>
	  </header>
	  <div id="mv__inner">
		<div>
		  <h1> <span>資料ダウンロードリクエスト確認</span></h1>
		</div>
	  </div>
	</div>
	<section class="formsection">

		<article>
			<!--<dl>
				<dt class="req">お問い合わせ種別</dt>
				<dd><?php print($typePrint) ?></dd>
			</dl>-->
			<dl>
				<dt class="req">お名前</dt>
				<dd><?php print($_SESSION['NAME1']." ".$_SESSION['NAME2']) ?></dd>
			</dl>
			<!--<dl>
				<dt class="any">ふりがな</dt>
				<dd><?php print($_SESSION['FURIGANA1']." ".$_SESSION['FURIGANA2']) ?></dd>
			</dl>-->
			<dl>
				<dt class="any">会社名</dt>
				<dd><?php print($_SESSION['COMPANY']) ?></dd>
			</dl>
			<!--<dl>
				<dt class="req">ご連絡先電話番号</dt>
				<dd><?php print($_SESSION['TEL']) ?></dd>
			</dl>-->
			<dl>
				<dt class="req">メールアドレス</dt>
				<dd><?php print($_SESSION['MAIL1']) ?></dd>
			</dl>
			<!--<dl>
				<dt class="any">お問い合わせの内容</dt>
				<dd><?php print(nl2br($_SESSION['BODY'])) ?></dd>
			</dl>-->
			<div class="submitbtn">
				<div class="flexbtn">
					<form method="post" action="index.php">
						<input type="submit" value="修正する" class="white">
					</form>
					<form method="post" action="send.php">
						<input type="submit" value="送信する">
					</form>
				</div>
			</div>
		</article>
	</section>

	<footer>
	  <div><img src="../../images/foot_logo.svg" alt="SECURE"/>
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