<?php
	session_name('CONTACT');
	session_start();

	require_once "definition.php";

	$type_check = array();

	for ($i=0; $i<sizeof($type_array); 	$i++) {	$type_check[$i] = "";		}

	if (isset($_GET['id'])) $_SESSION['TYPE'] = htmlspecialchars($_GET['id']);

	$type 		=(isset($_SESSION['TYPE'])) 		? $_SESSION['TYPE'] 		: "";
	$name1 		=(isset($_SESSION['NAME1'])) 		? $_SESSION['NAME1']		: "";
	$name2 		=(isset($_SESSION['NAME2'])) 		? $_SESSION['NAME2']		: "";
	$furigana1 	=(isset($_SESSION['FURIGANA1'])) 	? $_SESSION['FURIGANA1']	: "";
	$furigana2 	=(isset($_SESSION['FURIGANA2'])) 	? $_SESSION['FURIGANA2']	: "";
	$company 	=(isset($_SESSION['COMPANY'])) 		? $_SESSION['COMPANY']		: "";
	$tel 		=(isset($_SESSION['TEL'])) 			? $_SESSION['TEL']			: "";
	$mail1 		=(isset($_SESSION['MAIL1'])) 		? $_SESSION['MAIL1']		: "";
	$mail2 		=(isset($_SESSION['MAIL2'])) 		? $_SESSION['MAIL2']		: "";
	$body 		=(isset($_SESSION['BODY'])) 		? $_SESSION['BODY']			: "";

	if ($type!="") {
		$num = substr(htmlspecialchars($type),4);
		$type_check[$num] = " selected ";
	}
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
	<title>お問い合わせ｜顔認証セキュリティはセキュアのSECURE | SECURE</title>
	<meta name="description" content="監視カメラシステムや入退室システム等のセキュリティソリューションを提供する株式会社セキュアのブランド「SECURE」のお問い合わせページの入力画面です。">
	<meta name="keywords" content="セキュア,SECURE,お問い合わせ,入力">
	<link rel="shortcut icon" href="/assets/img/fav.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta property="og:title" content="お問い合わせ｜顔認証セキュリティはセキュアのSECURE">
	<meta property="og:type" content="website">
	<meta property="og:description" content="監視カメラシステムや入退室システム等のセキュリティソリューションを提供する株式会社セキュアのブランド「SECURE」のお問い合わせページの入力画面です。">
	<meta property="og:url" content="https://guarden.jp/">
	<meta property="og:image" content="/assets/img/share.png">
	<meta property="og:site_name" content="入退室管理・防犯カメラなど、オフィスセキュリティのことならセキュア">
	<meta property="og:locale" content="ja_JP">
	<link rel="stylesheet" href="/assets/css/common.css?v=20021303">
	<script src="/assets/js/jquery1.8.3.js"></script>
	<script src="/assets/js/common.min.js"></script>
	<script src="/assets/js/bundle.js"></script>
	<script src="//cdn.jsdelivr.net/npm/vue@2.6.0"></script>

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

		<article class="block">
			<div class="grayarea ta-c">
				<p class="fs-14 ta-c whiteunderline">概算でのお見積りや、製品や導入場所に関するお問い合わせなど、以下のフォームに必要項目を入力しお問い合わせください。<br>
				お急ぎの方は、お電話でもお問い合わせいただけます。</p>
				<div class="phone">
					<div><img src="/assets/img/contact/free-dial.png" alt=""></div>
					<div class="fs-20 ico free-dial">フリーコール</div>
					<div class="fs-14">（営業時間 9:30～18:00土日祝日を除く）</div>
				</div>
				<em><span data-telno="08009199500" class="free-dial fs-rennermedium fs-45 js-telto">0800-919-9500</span></em><br>
				<span class="fs-12">携帯・PHSからもご利用可能です</span>
			</div>
		</article>

		<article class="block w900">
			<form id="formarea" method="post" action="confirm.php">
				<dl>
					<dt class="req">お問い合わせ種別</dt>
					<dd>
						<div class="err err1_1" v-if="typeerr">
							<div class="errbox fs-12">{{typeerr}}</div>
						</div>
						<div class="cp_ipselect">
							<select name="type" v-model="type" @blur="typecng">
								<option value="" hidden>選択してください</option>
<?php
	for ($i=0; $i<sizeof($type_array); $i++) {
?>
								<option value="type<?php print($i) ?>"><?php print($type_array[$i]) ?></option>
<?php
	}
?>
							</select>
						</div>
					</dd>
				</dl>

				<dl>
					<dt class="req">お名前</dt>
					<dd>
						<div class="err err2_1" v-if="nameerr">
							<div class="errbox fs-12">{{nameerr}}</div>
						</div>
						<div class="ip2">
							<input type="text" name="name1" placeholder="鈴木" v-model.trim="name1" :value="name1" @blur="namecng">
							<input type="text" name="name2" placeholder="太郎" v-model.trim="name2" :value="name2" @blur="namecng">
						</div>
						<p class="fs-12">※全角でご入力ください</p>
					</dd>
				</dl>

				<dl>
					<dt class="any">ふりがな</dt>
					<dd>
						<div class="err err3_1" v-if="furiganaerr">
							<div class="errbox fs-12">{{furiganaerr}}</div>
						</div>
						<div class="ip2">
							<input type="text" name="furigana1" placeholder="すずき" v-model.trim="furigana1" :value="furigana1" @blur="furiganacng">
							<input type="text" name="furigana2" placeholder="たろう" v-model.trim="furigana2" :value="furigana2" @blur="furiganacng">
						</div>
						<p class="fs-12">※全角ひらがなでご入力ください</p>
					</dd>
				</dl>

				<dl>
					<dt class="any">会社名</dt>
					<dd>
						<input type="text" name="company" placeholder="株式会社セキュア" v-model.trim="company" :value="company">
					</dd>
				</dl>

				<dl>
					<dt class="req">ご連絡先電話番号</dt>
					<dd>
						<div class="err err4_1" v-if="telerr">
							<div class="errbox fs-12">{{telerr}}</div>
						</div>
						<input type="text" name="tel" placeholder="0123-45-6789" v-model.trim="tel" :value="tel" @blur="telcng">
						<p class="fs-12">※ハイフンありなしどちらでも可</p>
					</dd>
				</dl>

				<dl>
					<dt class="req">メールアドレス</dt>
					<dd>
						<div class="err err5_1" v-if="mail1err">
							<div class="errbox fs-12">{{mail1err}}</div>
						</div>
						<input type="text" name="mail1" placeholder="○○○@○○○○.jp" v-model.trim="mail1" :value="mail1" @blur="mail1cng">
						<p class="fs-12">※半角英数字でご入力ください<br>
						※入力いただいたアドレスに、送信いただいた内容の控えをお送りします<br>
						※メールアドレスに誤りがある場合、ご回答いたしかねますのでご注意ください</p>
					</dd>
				</dl>

				<dl>
					<dt>メールアドレス（確認用）</dt>
					<dd>
						<div class="err err6_1" v-if="mail2err">
							<div class="errbox fs-12">{{mail2err}}</div>
						</div>
						<input type="text" name="mail2" placeholder="○○○@○○○○.jp" v-model.trim="mail2" :value="mail2" @blur="mail2cng">
					</dd>
				</dl>

				<dl>
					<dt class="any">お問い合わせの内容</dt>
					<dd>
						<div class="err err7_1" v-if="bodyerr">
							<div class="errbox fs-12">{{bodyerr}}</div>
						</div>
						<textarea name="body" placeholder="記入例：会社のセキュリティを強化したいと考えています。事務所の扉に指紋か顔認証で出入りできるようにしたいのですが、予算感を教えてください。" v-model.trim="body" :value="body" @blur="bodycng"></textarea>
					</dd>
				</dl>

				<dl>
					<dt class="req">個人情報の取り扱いについて</dt>
					<dd>
						<div class="err err8_1" v-if="agreeerr">
							<div class="errbox fs-12">{{agreeerr}}</div>
						</div>
						<input type="checkbox" name="agree" id="ckbox" v-model="agree" :value="agree" @change="agreecng"><label for="ckbox">同意する</label>
						<p class="fs-12">※個人情報の取り扱いについては<a href="https://secureinc.co.jp/privacy.html" target="_blank" class="blackunderline">「個人情報の取り扱いページ」</a>をご確認ください。</p>
					</dd>
				</dl>

				<div class="submitbtn">
					<input type="submit" value="送信する" v-if="btnview==='submit'">
					<div class="graybtn" v-if="btnview===''">送信する</div>
				</div>

			</form>
		</article>

		<article class="block">
			<div class="ta-c">
				<p class="fs-20 fw-700">当サイトはSSLに対応しています。</p>
				<p class="fs-16 fw-500">当サイトのフォームはお客さまの大切な情報を暗号化して送信しています。<br>
				安心してご利用ください。</p>
			</div>
		</article>
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

<script>

	new Vue({
		el: '#formarea',
		data: {
			type: 			'<?php print($type) ?>',
			name1: 			'<?php print($name1) ?>',
			name2: 			'<?php print($name2) ?>',
			furigana1: 		'<?php print($furigana1) ?>',
			furigana2: 		'<?php print($furigana2) ?>',
			company: 		'<?php print($company) ?>',
			tel: 			'<?php print($tel) ?>',
			mail1: 			'<?php print($mail1) ?>',
			mail2: 			'<?php print($mail2) ?>',
			body: 			`<?php print($body) ?>`,
			agree: 			false,

			typeerr: 		'',
			nameerr: 		'',
			furiganaerr: 	'',
			telerr: 		'',
			mail1err: 		'',
			mail2err: 		'',
			bodyerr: 		'',
			agreeerr: 		'',

			typeflg: 		<?php if($type!="") 						{ print('0'); } else { print('1'); } ?>,
			nameflg: 		<?php if($name1!="" && $name2!="") 			{ print('0'); } else { print('1'); } ?>,
			furiganaflg: 	0,
			telflg: 		<?php if($tel!="") 							{ print('0'); } else { print('1'); } ?>,
			mail1flg: 		<?php if($mail1!="") 						{ print('0'); } else { print('1'); } ?>,
			mail2flg: 		<?php if($mail2!="") 						{ print('0'); } else { print('1'); } ?>,
			bodyflg: 		0,
			agreeflg: 		1,
		},
		methods:{
			typecng: function () {
				let typedata = this.type;
				if(!typedata){
					this.typeflg = 1;
					this.typeerr = "お問い合わせ種別が選択されていません";
				}else{
					this.typeflg = 0;
					this.typeerr = "";
				};
			},
			namecng: function () {
				let name1data = this.name1;
				let name2data = this.name2;
				if(!name1data || !name2data){
					this.nameflg = 1;
					this.nameerr = "お名前が入力されていません";
				}else if(!name1data.match(/^[^\x01-\x7E\xA1-\xDF]+$/) || !name2data.match(/^[^\x01-\x7E\xA1-\xDF]+$/)){
					this.nameflg = 1;
					this.nameerr = "全角でご入力ください";
				}else{
					this.nameflg = 0;
					this.nameerr = "";
				};
			},
			furiganacng: function () {
				let furigana1data = this.furigana1;
				let furigana2data = this.furigana2;
				if(!furigana1data && !furigana2data){
					this.furiganaflg = 0;
					this.furiganaerr = "";
				}else if(!furigana1data.match(/^[ぁ-んー　]+$/) && furigana1data) {
					this.furiganaflg = 1;
					this.furiganaerr = "全角ひらがなでご入力ください";
				}else if(!furigana2data.match(/^[ぁ-んー　]+$/) && furigana2data) {
					this.furiganaflg = 1;
					this.furiganaerr = "全角ひらがなでご入力ください";
				}else{
					this.furiganaflg = 0;
					this.furiganaerr = "";
				};
			},
			telcng: function () {
				let teldata = this.tel;
				if(!teldata){
					this.telflg = 1;
					this.telerr = "ご連絡先電話番号が入力されていません";
				}else if(!teldata.match(/^[0-9-]+$/)){
					this.telflg = 1;
					this.telerr = "半角数字かハイフンでご入力ください";
				}else{
					this.telflg = 0;
					this.telerr = "";
				};
			},
			mail1cng: function () {
				let mail1data = this.mail1;
				if(!mail1data){
					this.mail1flg = 1;
					this.mail1err = "メールアドレスが入力されていません";
				}else if(!mail1data.match(/^[\x20-\x7e]+$/)){
					this.mail1flg = 1;
					this.mail1err = "半角英数字でご入力ください";
				}else if(!mail1data.match(/^[^@]+@.+\..+$/)){
					this.mail1flg = 1;
					this.mail1err = "メールアドレスの書式でご入力ください";
				}else{
					this.mail1flg = 0;
					this.mail1err = "";
				};
			},
			mail2cng: function () {
				let mail1data = this.mail1;
				let mail2data = this.mail2;
				if(!mail2data){
					this.mail2flg = 1;
					this.mail2err = "メールアドレスが入力されていません";
				}else if(!mail2data.match(/^[\x20-\x7e]+$/)){
					this.mail2flg = 1;
					this.mail2err = "半角英数字でご入力ください";
				}else if(!mail2data.match(/^[^@]+@.+\..+$/)){
					this.mail2flg = 1;
					this.mail2err = "メールアドレスの書式でご入力ください";
				}else if(mail1data != mail2data){
					this.mail2flg = 1;
					this.mail2err = "メールアドレスが一致しません";
				}else{
					this.mail2flg = 0;
					this.mail2err = "";
				};
			},
			bodycng: function () {
				let bodydata = this.body;
				if(bodydata.length > 1000 && bodydata){
					this.bodyflg = 1;
					this.bodyerr = "お問い合わせは1000文字以内でご入力下さい";
				}else{
					this.bodyflg = 0;
					this.bodyerr = "";
				};
			},
			agreecng: function () {
				let agreedata = this.agree;
				if(!agreedata){
					this.agreeflg = 1;
					this.agreeerr = "同意チェックボックスがチェックされていません";
				}else{
					this.agreeflg = 0;
					this.agreeerr = "";
				};
			}
		},
		computed:{
			btnview: function () {
				let typeflg = 		this.typeflg;
				let nameflg = 		this.nameflg;
				let furiganaflg = 	this.furiganaflg;
				let telflg = 		this.telflg;
				let mail1flg = 		this.mail1flg;
				let mail2flg = 		this.mail2flg;
				let bodyflg = 		this.bodyflg;
				let agreeflg = 		this.agreeflg;
				if (typeflg==0 && nameflg==0 && furiganaflg==0 && telflg==0 && mail1flg==0 && mail2flg==0 && bodyflg==0 && agreeflg==0) {
					return "submit";
				} else {
					return "";
				}
			}
		}
	})
</script>

</body>
</head>
</html>