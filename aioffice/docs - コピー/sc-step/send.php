<?php
	session_name('DOWNLOAD');
	session_start();

	//require_once "definition.php";

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
	<meta charset="UTF-8">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5873P36');</script>
<!-- End Google Tag Manager -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>完了｜監視カメラシステムの必要性と導入ステップ｜資料ダウンロード｜株式会社セキュア</title>
	<meta name=”robots” content=”noindex” />
	<meta name="description" content="AI顔認証・入退室管理、監視カメラ、セキュリティのSECUREがお届けする監視カメラシステムの必要性と導入ステップ無料資料ダウンロード" />
	<meta name="keywords" content="入退室管理,ABW,顔認証,SECURE,クラウドオフィス管理" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="監視カメラシステムの必要性と導入ステップ｜資料ダウンロード｜株式会社セキュア" />
	<meta property="og:image" content="https://secureinc.co.jp/assets/img/og/top.png" />
	<meta property="og:url" content="https://secureinc.co.jp/aioffice/docs/officearuaru/" />
	<meta property="og:site_name" content="顔認証での入退室管理、監視カメラ、顔認証セキュリティはSECURE | 株式会社セキュア" />
	<meta property="og:description" content="AI顔認証・入退室管理、監視カメラ、セキュリティのSECUREがお届けする監視カメラシステムの必要性と導入ステップ無料資料ダウンロード" />
	<link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@600&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/html5reset-1.6.1.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="shortcut icon" href="./images/favicon.ico">
	<link rel="apple-touch-icon" href="./images/apple-touch-icon.png" sizes="180x180">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
	<script src="../../js/jquery1.8.3.js"></script>
	<script src="../../js/common.min.js"></script>
	<script src="../../js/bundle.js"></script>
	<style>
		header h2 a img{margin-top:-50px;}
		@media screen and (max-width: 960px){
			header h2 a img{margin-top:-35px;}
		}		
	</style>
<body id="thanks" class="recommend">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5873P36" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div id="wrap">
	<div id="mv">
	  <div class="bg-orange-btm"></div>
	  <div class="bg-img">
		<div></div>
	  </div>
	  <header>
		<h2><a href="/"><img src="/assets/img/logo/secure_k.png" alt="SECURE" width="200"/></a></h2>
		<button class="hamburger sp-view"><span></span><span></span><span></span></button>
		<div>
		  <p><span><i>お電話でのお問い合わせは</i><a href="tel:08009199500"><img src="../../images/icon_tel.svg"/></a><strong><a href="tel:08009199500">0800-919-9500</a></strong></span><small>フリーコール (土日祝日除く9:30 ～ 18:00)</small></p>
		</div>
	  </header>
<?php
	if (isset($_SESSION['NAME1'])) {

//		$mailtoAddress = "yoyuya@gmail.com";
		$mailtoAddress = '09c26344.secureinc.co.jp@apac.teams.ms,secure-info@secureinc.co.jp';
		$mailtoAddress = explode(',',$mailtoAddress);
		$returnMailtoAddress = mb_convert_kana($_SESSION['MAIL1'],"aK");

		//$num = substr($_SESSION['TYPE'],4,1);
		//$typePrint = $type_array[$num];

		/*switch ($num) {
			case 0:
				$subj = "資料ダウンロード";
				$thxmes = "資料ダウンロードありがとうございました";
				break;
			case 1:
				$subj = "入退室管理導入ステップダウンロード通知";
				$thxmes = "ダウンロードのお申込みありがとうございました";
				break;
		}*/
				$subj = "監視カメラシステムの必要性と導入ステップダウンロード通知";
				$thxmes = "資料ダウンロードのお申込みありがとうございました。\nこちらより閲覧いただけます。\nhttps://secureinc.co.jp/aioffice/docs/sc-step/necessity_of_camera_and_implement_step.pdf\n";

		$mail->FromName		= mb_encode_mimeheader($fromUserName,"ISO-2022-JP","UTF-8"); // "表示名" <メールアドレス>
		$mail->Subject		= mb_encode_mimeheader("".$subj,"ISO-2022-JP", "UTF-8");

//複数メールアドレス対応		
		for ($i = 0; $i < count($mailtoAddress); $i++) {
		  $mail->addAddress($mailtoAddress[$i]);
		}
//		$mail->AddAddress($mailtoAddress);

//		$mail->AddCC($mailCcAddress);
		$mail->Body		= mb_convert_encoding(
					//"【 お問い合わせ種別 】 ".			$typePrint . "\n".
					"【 訪問サイト 】 https://secureinc.co.jp/aioffice/docs/securitycamera/". "\n".
					"【 ダウンロード資料 】 https://secureinc.co.jp/aioffice/docs/sc-step/necessity_of_camera_and_implement_step.pdf". "\n".
					"【 URLパラメーター 】 ". 				mb_convert_kana($_SESSION['PARAM'],"aK") . "\n".
					"【 お名前 】 ". 					mb_convert_kana($_SESSION['NAME1']." ".$_SESSION['NAME2'],"aK") . "\n".
					//"【 ふりがな 】 ". 					mb_convert_kana($_SESSION['FURIGANA1']." ".$_SESSION['FURIGANA2'],"aK") . "\n".
					"【 会社名 】 ". 					mb_convert_kana($_SESSION['COMPANY'],"aK") . "\n".
					//"【 ご連絡先電話番号 】 ". 			mb_convert_kana($_SESSION['TEL'],"aK") . "\n".
					"【 メールアドレス 】 ". 				mb_convert_kana($_SESSION['MAIL1'],"aK") . "\n"
					/*"\n【 お問い合わせ内容 】 \n". 		mb_convert_kana($_SESSION['BODY'],"aK") . "\n"*/
					,"UTF-8","auto");

		if ( $mail->send() ) {
			$mail->ClearAddresses();
			$mail->FromName		= mb_encode_mimeheader($fromUserName,"ISO-2022-JP","UTF-8"); // "表示名" <メールアドレス>
			$mail->Subject		= mb_encode_mimeheader("【株式会社セキュア】 資料ダウンロードありがとうございます","ISO-2022-JP", "UTF-8");
			$mail->AddAddress($returnMailtoAddress);
//			$mail->AddCC($mailCcAddress);
			$mail->Body		= mb_convert_encoding(
						mb_convert_kana($_SESSION['NAME1']." ".$_SESSION['NAME2'],"aK")." 様\n".
						"\n".
						$thxmes."\n".
						"----------------------------------------------------\n".
						"■以下の内容でお決まりがあれば本メールにご返信いただけると、\n".
						"弊社専門スタッフがお答えいいたします。\n".
						"----------------------------------------------------\n".
						"　- どの製品にご興味がございますか？\n".
						"　　顔認証システム、入退室管理システム、監視カメラシステム、画像解析システム、\n".
						"　　AI Office Base、無人店舗AI Store Lab\n".
						"　- 導入の時期はお決まりでしょうか？\n".
						"　- ご予算はお決まりでしょうか？\n".
						"　- 設置場所の想定はございますか？\n".
						"　- ご検討内容詳細についてございましたらご記入ください。\n\n".

						"----------------------------------------------------\n".
						"■送信内容\n".
						"----------------------------------------------------\n".
						//"【 お問い合わせ種別 】 ".			$typePrint . "\n".
						"【 お名前 】 ". 					mb_convert_kana($_SESSION['NAME1']." ".$_SESSION['NAME2'],"aK") . "\n".
						//"【 ふりがな 】 ". 					mb_convert_kana($_SESSION['FURIGANA1']." ".$_SESSION['FURIGANA2'],"aK") . "\n".
						"【 会社名 】 ". 					mb_convert_kana($_SESSION['COMPANY'],"aK") . "\n".
						//"【 ご連絡先電話番号 】 ". 			mb_convert_kana($_SESSION['TEL'],"aK") . "\n".
						"【 メールアドレス 】 ". 				mb_convert_kana($_SESSION['MAIL1'],"aK") . "\n".
						"\n -------------------------------------------------------------- \n 株式会社セキュア \n https://secureinc.co.jp/ \n 〒163-0220 \n 東京都新宿区西新宿2-6-1新宿住友ビル20階 \n 電話番号：03-6911-0660 \n FAX番号：03-6911-0664". 	 "\n"
						,"UTF-8","auto");

			if ( $mail->send() ) {

				session_destroy();
?>

	  <div id="mv__inner">
		<div>
		  <h1> <span>資料ダウンロードリクエスト受付完了</span></h1>
		</div>
	  </div>
	</div>
	<section class="formsection">
		<article class="mainsection ta-c">
			<div></div>
			<p>送信が完了しました<br><br>資料ダウンロードのお申込みありがとうございました。<br>こちらより閲覧いただけます。<br><a href="https://secureinc.co.jp/aioffice/docs/sc-step/necessity_of_camera_and_implement_step.pdf" target="_blank">https://secureinc.co.jp/aioffice/docs/sc-step/necessity_of_camera_and_implement_step.pdf</a></p>
			<p>
<?php
				//if ($num == 0) {
					// 正常処理 | 種別：お問い合わせ
?>
				<!--ご入力いただきましたメールアドレスに、<br>
				問い合わせ完了メールを送信いたしました。<br>
				担当者よりご連絡が入るまで、今しばらくお待ちください。<br>
				<br>
				完了メールが届かない場合、処理が正常に行われていない可能性があります。<br>
				大変お手数ですが、再度お問い合わせフォームよりお問い合わせいただくか、<br>
				お急ぎの場合はお電話でお問い合わせいただくようお願い致します。
			</p>-->
<?php
				//} else {
					// 正常処理 | 種別：「3分で分かる～のお申し込み」
?>
				<br>また、ご入力いただきましたメールアドレスにも、<br>
				資料閲覧URLを記載したメールを送信いたしました。</p>

			<div class="recommend-docs">
				<h3>あわせてこちらの資料もこちらもいかがでしょうか？</h3>
				<ul>
					<li><a href="/aioffice/docs/ac-step/?utm_source=aiob-dl-fin"><img src="/aioffice/images/bnr_ac-step.jpg" alt=""></a></li>
				</ul>
			</div>
			<p>
				ご不明な点などございましたら、<br>お気軽にお電話、またはメールフォームよりお問い合わせくださいませ。
			</p>
<?php
				//}
			} else {
				// 自動返信メールの送信失敗
?>

	  <div id="mv__inner">
		<div>
		  <h1> <span>送信失敗</span></h1>
		</div>
	  </div>
	</div>
	<section class="formsection">
		<article class="mainsection">
			<div>自動返信メールの送信に失敗しました。</div>
			<p>ご入力いただいたメールアドレスに誤りがある可能性があります。<br>
			お手数ですが再度フォームから情報を入力して送信してください。<br><br><a style="text-decoration:underline;" href="../securitycamera/">資料ダウンロードフォームに戻る</a></p>

<?php
			}
		} else {
			// メールの送信失敗
?>

	  <div id="mv__inner">
		<div>
		  <h1> <span>送信失敗</span></h1>
		</div>
	  </div>
	</div>
	<section class="formsection">
		<article class="mainsection">
			<div>メールの送信に失敗しました。</div>
			<p>お手数ですが再度フォームから情報を入力して送信してください。<br><br><a style="text-decoration:underline;" href="../securitycamera/">資料ダウンロードフォームに戻る</a></p>

<?php
		}
	} else {
		// 入力値が前のページから渡ってきていない
?>

	  <div id="mv__inner">
		<div>
		  <h1> <span>送信失敗</span></h1>
		</div>
	  </div>
	</div>
	<section class="formsection">
		<article class="mainsection">
			<div>入力値が正常に取得できませんでした。</div>
			<p>お手数ですが再度フォームから情報を入力して送信してください。<br><br><a style="text-decoration:underline;" href="../securitycamera/">資料ダウンロードフォームに戻る</a></p>
<?php
	}
?>
			<div class="tel">
				<p>電話でのお問い合わせ</p>
				<div>
					<div>0800-919-9599</div>
				</div>
				<p><small>（営業時間 9:30～18:00 土日祝日を除く）</small></p>
			</div>
		</article>

		<div style="text-align:center;">
			<a href="/">株式会社セキュア トップページへ戻る</a>
		</div>
	</section>


	<!--<div>
		<a href="/download/" class="btn">
			3分で分かる「オフィスセキュリティ対策」<br>
			<em><span>資料ダウンロード</span>はコチラ</em>
		</a>
	</div>-->

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

</body>
</html>