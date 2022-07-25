<?php
	session_name('DOWNLOAD');
	session_start();

	//require_once "definition.php";

	/*$type_check = array();

	for ($i=0; $i<sizeof($type_array); 	$i++) {	$type_check[$i] = "";		}

	if (isset($_GET['id'])) $_SESSION['TYPE'] = htmlspecialchars($_GET['id']);*/

	//$type 		=(isset($_SESSION['TYPE'])) 		? $_SESSION['TYPE'] 		: "";
	$name1 		=(isset($_SESSION['NAME1'])) 		? $_SESSION['NAME1']		: "";
	$name2 		=(isset($_SESSION['NAME2'])) 		? $_SESSION['NAME2']		: "";
	//$furigana1 	=(isset($_SESSION['FURIGANA1'])) 	? $_SESSION['FURIGANA1']	: "";
	//$furigana2 	=(isset($_SESSION['FURIGANA2'])) 	? $_SESSION['FURIGANA2']	: "";
	$company 	=(isset($_SESSION['COMPANY'])) 		? $_SESSION['COMPANY']		: "";
	//$tel 		=(isset($_SESSION['TEL'])) 			? $_SESSION['TEL']			: "";
	$mail1 		=(isset($_SESSION['MAIL1'])) 		? $_SESSION['MAIL1']		: "";
	//$mail2 		=(isset($_SESSION['MAIL2'])) 		? $_SESSION['MAIL2']		: "";
	$param 		=(isset($_SESSION['PARAM'])) 		? $_SESSION['PARAM']		: "";
	//$body 		=(isset($_SESSION['BODY'])) 		? $_SESSION['BODY']			: "";

	/*if ($type!="") {
		$num = substr(htmlspecialchars($type),4);
		$type_check[$num] = " selected ";
	}*/
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
	<title>資料ダウンロード｜SECURE AI Office Base：社員を守り、事業も継続！職場はクラウドで管理する</title>
	<meta name="description" content="ABWや職場3密対策に！職場はクラウドで管理する。入退室管理、顔認証の「SECURE AI Office Base」を提供いたします。" />
	<meta name="keywords" content="ABW,オフィス3密対策,サテライトオフィス,,SECURE,SECURE AI Office Base,オフィスリモート管理,健康経営,クラウドオフィス管理" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="資料ダウンロード｜SECURE AI Office Base：社員を守り、事業も継続！職場はクラウドで管理する" />
	<meta property="og:image" content="https://secureinc.co.jp/aioffice/images/og.png" />
	<meta property="og:url" content="https://secureinc.co.jp/aioffice/docs/toranomaki02/" />
	<meta property="og:site_name" content="資料ダウンロード｜SECURE AI Office Base：社員を守り、事業も継続！職場はクラウドで管理する" />
	<meta property="og:description" content="ABWやオフィス3密対策に！オフィスはクラウドで管理する。入退室管理、顔認証の「SECURE AI Office Base」を提供いたします。" />
	<link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@600&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/html5reset-1.6.1.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="shortcut icon" href="./images/favicon.ico">
	<link rel="apple-touch-icon" href="./images/apple-touch-icon.png" sizes="180x180">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
	<script src="../../js/jquery1.8.3.js"></script>
	<script src="../../js/common.min.js"></script>
	<script src="../../js/bundle.js"></script>
	<script src="//cdn.jsdelivr.net/npm/vue@2.6.0"></script>
	<script src="../../js/function.js"></script>
</head>


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
		<h2><span class="pc-view">ニューノーマル時代のリモート×AIオフィス運用システム</span>
			<a href="../../"><img src="../../images/head_logo.png" alt="SECURE AI Office Base"/></a></h2>
		<button class="hamburger sp-view"><span></span><span></span><span></span></button>
		<div>
		  <p><span><i>お電話でのお問い合わせは</i><a href="tel:08009199500"><img src="../../images/icon_tel.svg"/></a><strong><a href="tel:08009199500">0800-919-9500</a></strong></span><small>フリーコール (土日祝日除く9:30 ～ 18:00)</small></p>
		</div>
	  </header>
	  <div id="mv__inner">
		<div>
		  <h1> <span style="color:#000;">オフィスセキュリティシステム会社が考えた<br>安心できる職場のガイドライン<br>「職場の3密対策 虎の巻」無料ダウンロード</span></h1>
		  <figure><img src="../../images/doc_thumbnail_pages02.png" width="306" height="238">
		  	<figcaption style="color:#000;">今職場のあり方が大きく転換を求められている時代です。<br />
		  	デジタル化がすすみテレワークの浸透もしていますが、実際のところ業務的に職場出社する必要があったり、テレワークと職場出社のハイブリット運用であったり、サテライトオフィス導入といった分散化をするなど様々な職場運用が試されています。<br />
		  	本資料ではその時代変化に適用できるために、働き方改革をはじめ新型コロナウィルス対策として三密対応・社員の健康管理そしてセキュリティ対策を満たすために、運用手法・ノウハウを虎の巻としてご紹介いたします。</figcaption></figure>
		</div>
	  </div>
	</div>
	<section class="formsection">
		<p class="lead">以下のフォームに必要項目を入力の上、送信していただきますと、<br>資料閲覧URLをお送りいたします。</p>
		<form id="formarea" method="post" action="confirm.php">
			<!--<dl>
				<dt class="req">お問い合わせ種別</dt>
				<dd>
					<div class="err err1_1" v-if="typeerr">
						<div class="errbox">{{typeerr}}</div>
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
			</dl>-->

			<dl>
				<dt class="req">お名前</dt>
				<dd>
					<div class="err err2_1" v-if="nameerr">
						<div class="errbox">{{nameerr}}</div>
					</div>
					<div class="ip2">
						<input type="text" name="name1" placeholder="関谷" v-model.trim="name1" :value="name1" @blur="namecng">
						<input type="text" name="name2" placeholder="太郎" v-model.trim="name2" :value="name2" @blur="namecng">
					</div>
					<p class="annotation">※全角でご入力ください</p>
				</dd>
			</dl>

			<!--<dl>
				<dt class="any">ふりがな</dt>
				<dd>
					<div class="err err3_1" v-if="furiganaerr">
						<div class="errbox">{{furiganaerr}}</div>
					</div>
					<div class="ip2">
						<input type="text" name="furigana1" placeholder="せきや" v-model.trim="furigana1" :value="furigana1" @blur="furiganacng">
						<input type="text" name="furigana2" placeholder="たろう" v-model.trim="furigana2" :value="furigana2" @blur="furiganacng">
					</div>
					<p class="annotation">※全角ひらがなでご入力ください</p>
				</dd>
			</dl>-->

			<dl>
				<dt class="any">会社名</dt>
				<dd>
					<input type="text" name="company" placeholder="株式会社セキュア" v-model.trim="company" :value="company">
				</dd>
			</dl>

			<!--<dl>
				<dt class="req">ご連絡先電話番号</dt>
				<dd>
					<div class="err err4_1" v-if="telerr">
						<div class="errbox">{{telerr}}</div>
					</div>
					<input type="text" name="tel" placeholder="03-6911-0660" v-model.trim="tel" :value="tel" @blur="telcng">
					<p class="annotation">※ハイフンありなしどちらでも可</p>
				</dd>
			</dl>-->

			<dl>
				<dt class="req">メールアドレス</dt>
				<dd>
					<div class="err err5_1" v-if="mail1err">
						<div class="errbox">{{mail1err}}</div>
					</div>
					<input type="text" name="mail1" placeholder="info@secureinc.co.jp" v-model.trim="mail1" :value="mail1" @blur="mail1cng">
					<p class="annotation">※半角英数字でご入力ください<br>
					※入力いただいたアドレスに、送信いただいた内容の控えをお送りします<br>
					※メールアドレスに誤りがある場合、ご回答いたしかねますのでご注意ください</p>
				</dd>
			</dl>

			<!--<dl>
				<dt>メールアドレス（確認用）</dt>
				<dd>
					<div class="err err6_1" v-if="mail2err">
						<div class="errbox">{{mail2err}}</div>
					</div>
					<input type="text" name="mail2" placeholder="info@secureinc.co.jp" v-model.trim="mail2" :value="mail2" @blur="mail2cng">
				</dd>
			</dl>

			<dl>
				<dt class="any">お問い合わせの内容</dt>
				<dd>
					<div class="err err7_1" v-if="bodyerr">
						<div class="errbox">{{bodyerr}}</div>
					</div>
					<textarea name="body" placeholder="記入例：会社のセキュリティを強化したいと考えています。事務所の扉に指紋か顔認証で出入りできるようにしたいのですが、予算感を教えてください。" v-model.trim="body" :value="body" @blur="bodycng"></textarea>
				</dd>
			</dl>-->

			<dl>
				<dt class="req">個人情報の取り扱いについて</dt>
				<dd class="mt">
					<div class="err err8_1" v-if="agreeerr">
						<div class="errbox">{{agreeerr}}</div>
					</div>
					<input type="checkbox" name="agree" id="ckbox" v-model="agree" :value="agree" @change="agreecng"><label for="ckbox">同意する</label>
					<p class="annotation">※個人情報の取り扱いについては<a href="https://secureinc.co.jp/privacy/" target="_blank" class="blackunderline">「個人情報の取り扱いページ」</a>をご確認ください。</p>
				</dd>
			</dl>
			<dl>
				<dt></dt>
				<dd>
					<div class="submitbtn">
						<input type="submit" value="送信する" v-if="btnview==='submit'">
						<div class="graybtn btn" v-if="btnview===''"><span>確認する</span></div>
						<input id="param" name="param" type="hidden">
					</div>
				</dd>
		</form>

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

<script>

	new Vue({
		el: '#formarea',
		data: {
			/*type: 			'<?php print($type) ?>',*/
			name1: 			'<?php print($name1) ?>',
			name2: 			'<?php print($name2) ?>',
			/*furigana1: 		'<?php print($furigana1) ?>',
			furigana2: 		'<?php print($furigana2) ?>',*/
			company: 		'<?php print($company) ?>',
			/*tel: 			'<?php print($tel) ?>',*/
			mail1: 			'<?php print($mail1) ?>',
			/*mail2: 			'<?php print($mail2) ?>',*/
			param: 			'<?php print($param) ?>',
			/*body: 			`<?php print($body) ?>`,*/
			agree: 			false,

			/*typeerr: 		'',*/
			nameerr: 		'',
			furiganaerr: 	'',
			/*telerr: 		'',*/
			mail1err: 		'',
			/*mail2err: 		'',*/
			/*bodyerr: 		'',*/
			agreeerr: 		'',

			/*typeflg: 		<?php if($type!="") 						{ print('0'); } else { print('1'); } ?>,*/
			nameflg: 		<?php if($name1!="" && $name2!="") 			{ print('0'); } else { print('1'); } ?>,
			/*furiganaflg: 	0,*/
			/*telflg: 		<?php if($tel!="") 							{ print('0'); } else { print('1'); } ?>,*/
			mail1flg: 		<?php if($mail1!="") 						{ print('0'); } else { print('1'); } ?>,
			/*mail2flg: 		<?php if($mail2!="") 						{ print('0'); } else { print('1'); } ?>,*/
			/*bodyflg: 		0,*/
			agreeflg: 		1,
		},
		methods:{
			/*typecng: function () {
				let typedata = this.type;
				if(!typedata){
					this.typeflg = 1;
					this.typeerr = "お問い合わせ種別が選択されていません";
				}else{
					this.typeflg = 0;
					this.typeerr = "";
				};
			},*/
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
			/*furiganacng: function () {
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
			},*/
			mail1cng: function () {
				let mail1data = this.mail1;
				if(!mail1data){
					this.mail1flg = 1;
					this.mail1err = "メールアドレスが入力されていません";
				}else if(!mail1data.match(/^[\x20-\x7e]+$/)){
					this.mail1flg = 1;
					this.mail1err = "半角英数字でご入力ください";
				}else if(!mail1data.match(/^([a-zA-Z0-9\.\_\-\+\?\#\&\%])*@([a-zA-Z0-9\_\-])+([a-zA-Z0-9\.\_\-]+)+$/)){
					this.mail1flg = 1;
					this.mail1err = "メールアドレスの書式でご入力ください";
				}else{
					this.mail1flg = 0;
					this.mail1err = "";
				};
			},
			/*mail2cng: function () {
				let mail1data = this.mail1;
				let mail2data = this.mail2;
				if(!mail2data){
					this.mail2flg = 1;
					this.mail2err = "メールアドレスが入力されていません";
				}else if(!mail2data.match(/^[\x20-\x7e]+$/)){
					this.mail2flg = 1;
					this.mail2err = "半角英数字でご入力ください";
				}else if(!mail2data.match(/^([a-zA-Z0-9\.\_\-\+\?\#\&\%])*@([a-zA-Z0-9\_\-])+([a-zA-Z0-9\.\_\-]+)+$/)){
					this.mail2flg = 1;
					this.mail2err = "メールアドレスの書式でご入力ください";
				}else if(mail1data != mail2data){
					this.mail2flg = 1;
					this.mail2err = "メールアドレスが一致しません";
				}else{
					this.mail2flg = 0;
					this.mail2err = "";
				};
			},*/
			/*bodycng: function () {
				let bodydata = this.body;
				if(bodydata.length > 1000 && bodydata){
					this.bodyflg = 1;
					this.bodyerr = "お問い合わせは1000文字以内でご入力下さい";
				}else{
					this.bodyflg = 0;
					this.bodyerr = "";
				};
			},*/
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
				//let typeflg = 		this.typeflg;
				let nameflg = 		this.nameflg;
				//let furiganaflg = 	this.furiganaflg;
				//let telflg = 		this.telflg;
				let mail1flg = 		this.mail1flg;
				//let mail2flg = 		this.mail2flg;
				//let bodyflg = 		this.bodyflg;
				let agreeflg = 		this.agreeflg;
				if (/*typeflg==0 && */nameflg==0 && /*furiganaflg==0 && telflg==0 && */mail1flg==0 && /*mail2flg==0 && bodyflg==0 && */agreeflg==0) {
					return "submit";
				} else {
					return "";
				}
			}
		}
	})
</script>

</body>
</html>