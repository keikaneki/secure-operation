<?php
	session_name('CONTACT');
	session_start();

	require_once "definition.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'vendors/PHPMailer-6.0.2/src/Exception.php';
	require 'vendors/PHPMailer-6.0.2/src/PHPMailer.php';
	require 'vendors/PHPMailer-6.0.2/src/SMTP.php';

	mb_language("japanese");
	mb_internal_encoding("UTF-8");

	$mail = new PHPMailer();
	$mail->Encoding = "7bit";
	$mail->CharSet = "UTF-8";

	require_once "./initfile/setting.php";

/*	$mail->SMTPDebug = 1; */

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
	<meta property="og:url" content="https://guarden.jp/">
	<meta property="og:image" content="/assets/img/share.png">
	<meta property="og:site_name" content="入退室管理・防犯カメラなど、オフィスセキュリティのことならセキュア">
	<meta property="og:locale" content="ja_JP">
	<link rel="stylesheet" href="/assets/css/common.css?v=20021303">
	<script src="/assets/js/jquery1.8.3.js"></script>
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
				<img src="/assets/img/logo/secure_w.png" alt="" class="white noSP">
				<img src="/assets/img/logo/secure_k.png" alt="" class="black noSP">
				<img src="/assets/img/logo/secure_sp_w.png" alt="" class="white noPC">
				<img src="/assets/img/logo/secure_sp_k.png" alt="" class="black noPC">
			</a></h1>
		</div>
	</header>
	<section class="send l-inner">
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
<?php
	if (isset($_SESSION['NAME1'])) {
		$mailtoAddress = "secure-info@secureinc.co.jp
";
		$returnMailtoAddress = mb_convert_kana($_SESSION['MAIL1'],"aK");

		$num = substr($_SESSION['TYPE'],4,1);
		$typePrint = $type_array[$num];

		switch ($num) {
			case 0:
				$subj = "「商品、サービスに関する」お問い合わせ";
				$thxmes = "お問い合わせありがとうございました";
				break;
			case 1:
				$subj = "「弊社へのご提案に関する」お問合せ";
				$thxmes = "お問い合わせありがとうございました";
				break;
			case 2:
				$subj = "「その他に関する」お問い合わせ";
				$thxmes = "お問い合わせありがとうございました";
				break;
			case 3:
				$subj = "3分で分かる「SECURE」ダウンロード";
				$thxmes = "ダウンロードのお申込みありがとうございました";
				break;
		}

		$mail->FromName		= mb_encode_mimeheader($fromUserName,"ISO-2022-JP","UTF-8"); // "表示名" <メールアドレス>
		$mail->Subject		= mb_encode_mimeheader("[SECURE]".$subj,"ISO-2022-JP", "UTF-8");
		$mail->AddAddress($mailtoAddress);
//		$mail->AddCC($mailCcAddress);
		$mail->Body		= mb_convert_encoding(
					"【 お問い合わせ種別 】 ".			$typePrint . "\n".
					"【 お名前 】 ". 					mb_convert_kana($_SESSION['NAME1']." ".$_SESSION['NAME2'],"aK") . "\n".
					"【 ふりがな 】 ". 					mb_convert_kana($_SESSION['FURIGANA1']." ".$_SESSION['FURIGANA2'],"aK") . "\n".
					"【 会社名 】 ". 					mb_convert_kana($_SESSION['COMPANY'],"aK") . "\n".
					"【 ご連絡先電話番号 】 ". 			mb_convert_kana($_SESSION['TEL'],"aK") . "\n".
					"【 メールアドレス 】 ". 				mb_convert_kana($_SESSION['MAIL1'],"aK") . "\n".
					"\n【 お問い合わせ内容 】 \n". 		mb_convert_kana($_SESSION['BODY'],"aK") . "\n"
					,"UTF-8","auto");

		if ( $mail->send() ) {

			$mail->FromName		= mb_encode_mimeheader($fromUserName,"ISO-2022-JP","UTF-8"); // "表示名" <メールアドレス>
			$mail->Subject		= mb_encode_mimeheader("株式会社セキュア自動返信メール","ISO-2022-JP", "UTF-8");
			$mail->AddAddress($returnMailtoAddress);
//			$mail->AddCC($mailCcAddress);
			$mail->Body		= mb_convert_encoding(
						mb_convert_kana($_SESSION['NAME1']." ".$_SESSION['NAME2'],"aK")." 様\n".
						"\n".
						$thxmes."\n".
						"以下の内容で受け付けました。\n".
						"------------------------------\n".
						"【 お問い合わせ種別 】 ".			$typePrint . "\n".
						"【 お名前 】 ". 					mb_convert_kana($_SESSION['NAME1']." ".$_SESSION['NAME2'],"aK") . "\n".
						"【 ふりがな 】 ". 					mb_convert_kana($_SESSION['FURIGANA1']." ".$_SESSION['FURIGANA2'],"aK") . "\n".
						"【 会社名 】 ". 					mb_convert_kana($_SESSION['COMPANY'],"aK") . "\n".
						"【 ご連絡先電話番号 】 ". 			mb_convert_kana($_SESSION['TEL'],"aK") . "\n".
						"【 メールアドレス 】 ". 				mb_convert_kana($_SESSION['MAIL1'],"aK") . "\n".
						"\n【 お問い合わせ内容 】 \n". 		mb_convert_kana($_SESSION['BODY'],"aK") . "\n"
						,"UTF-8","auto");

			if ( $mail->send() ) {

				session_destroy();
?>

		<article class="mainsection ta-c">
			<div class="ta-c orangeunderline fs-30 fw-700">送信が完了しました</div>
			<p class="ta-c fs-20 fw-700"><?php print($thxmes) ?></p>
			<p class="ta-c fs-14 fw-400">
<?php
				if ($num == 0) {
					// 正常処理 | 種別：お問い合わせ
?>
				ご入力いただきましたメールアドレスに、<br>
				問い合わせ完了メールを送信いたしました。<br>
				担当者よりご連絡が入るまで、今しばらくお待ちください。<br>
				<br>
				完了メールが届かない場合、処理が正常に行われていない可能性があります。<br>
				大変お手数ですが、再度お問い合わせフォームよりお問い合わせいただくか、<br>
				お急ぎの場合はお電話でお問い合わせいただくようお願い致します。
			</p>
<?php
				} else {
					// 正常処理 | 種別：「3分で分かる～のお申し込み」
?>
				ご入力いただきましたメールアドレスに、<br>
				お申し込み完了メールを送信いたしました。<br>
				お問い合わせ内容をご記入いただいた場合には
				担当者よりご連絡が入るまで、今しばらくお待ちください。<br>
				<br>
				完了メールが届かない場合、処理が正常に行われていない可能性があります。<br>
				大変お手数ですが、再度お問い合わせフォームよりお問い合わせいただくか、<br>
				お急ぎの場合はお電話でお問い合わせいただくようお願い致します。
			</p>
			<div class="dlbox">
				<a href="https://secureinc.co.jp/download/leaflet/OfficeSecurityfor3min.pdf" class="btn orange shadow">
					3分で分かる「SECURE」<br>
					<em class="dl fs-30"><span class="fw-700">資料ダウンロード</span>はコチラ</em>
				</a><br><br>
			</div>
		<div class="dlbox">
				<a href="https://secureinc.co.jp/download/leaflet/withcorona.pdf" class="btn orange shadow">
					「With  コロナ」時代のオフィスワーク<br>
					<em class="dl fs-30"><span class="fw-700">資料ダウンロード</span>はコチラ</em>
				</a>
			</div>
<?php
				}
			} else {
				// 自動返信メールの送信失敗
?>

		<article class="mainsection ta-c">
			<div class="ta-c orangeunderline fs-30 fw-700">自動返信メールの送信に失敗しました。</div>
			<p class="ta-c fs-20 fw-700">ご入力いただいたメールアドレスに誤りがある可能性があります。<br>
			お手数ですが再度フォームから情報を入力して送信してください。</p>

<?php
			}
		} else {
			// メールの送信失敗
?>

		<article class="mainsection ta-c">
			<div class="ta-c orangeunderline fs-30 fw-700">メールの送信に失敗しました。</div>
			<p class="ta-c fs-20 fw-700">お手数ですが再度フォームから情報を入力して送信してください。</p>

<?php
		}
	} else {
		// 入力値が前のページから渡ってきていない
?>

		<article class="mainsection ta-c">
			<div class="ta-c orangeunderline fs-30 fw-700">入力値が正常に取得できませんでした。</div>
			<p class="ta-c fs-20 fw-700">お手数ですが再度フォームから情報を入力して送信してください。</p>
<?php
	}
?>
			<div class="tel ta-c">
				<p class="fs-20 fw-700">電話でのお問い合わせ</p>
				<div>
					<div>
						<img src="/assets/img/contact/free-dial.png" alt="">
					</div>
					<div class="fs-rennermedium fs-60">0800-919-9599</div>
				</div>
				<p class="ta-c fs-20 fw-700">（営業時間 9:30～18:00 土日祝日を除く）</p>
			</div>
		</article>

		<div class="ta-c goback">
			<a href="/" class="btn"><span class="more fs-20 fw-700"><span>トップページへ戻る</span></span></a>
		</div>
	</section>


	<div class="dlbox noPC">
		<a href="/download/" class="btn orange shadow">
			3分で分かる「オフィスセキュリティ対策」<br>
			<em class="dl fs-30"><span class="fw-700">資料ダウンロード</span>はコチラ</em>
		</a>
		<strong class="casenum orangeunderline fs-30 fw-500 noSP">導入実績<span class="fc-orange number"><span class="fs-60 fw-700 number">4,000</span>社</span>以上</strong>
	</div>


	<footer class="nonav">
		<div class="l-inner">
			<div class="l-cols2 wrap">
				<div class="col order-1">
					<p class="copy">Copyright(C)2019 SECURE Inc. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer>
	<div class="mask"></div>

</body>
</html>

</body>
</html>