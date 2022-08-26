<?php
  header("Location: https://secureinc.co.jp/");
  exit;
	session_name('CONTACT');
	session_start();

	require_once "definition.php";

	$type_check_b = array();
	for ($i=0; $i<sizeof($type_array);  $i++) { $type_check_b[$i] = "";   }
	if (isset($_GET['id'])) $_SESSION['TYPE_B'] = htmlspecialchars($_GET['id']);

	$type_b     =(isset($_SESSION['TYPE_B']))     ? $_SESSION['TYPE_B']     : "";
	$name1_b    =(isset($_SESSION['NAME1_B']))    ? $_SESSION['NAME1_B']    : "";
	$name2_b    =(isset($_SESSION['NAME2_B']))    ? $_SESSION['NAME2_B']    : "";
	$company_b  =(isset($_SESSION['COMPANY_B']))    ? $_SESSION['COMPANY_B']    : "";
	$mail1_b    =(isset($_SESSION['MAIL1_B']))    ? $_SESSION['MAIL1_B']    : "";
	$tel_b    =(isset($_SESSION['TEL_B']))    ? $_SESSION['TEL_B']    : "";
	$demo_b    =(isset($_SESSION['DEMO_B']))    ? $_SESSION['DEMO_B']    : "";
	$param_b 		=(isset($_SESSION['PARAM_B'])) 		? $_SESSION['PARAM_B']		: "";
	$body_b     =(isset($_SESSION['BODY_B']))     ? $_SESSION['BODY_B']     : "";

	if ($type_b!="") {
		$num = substr(htmlspecialchars($type_b),4);
		$type_check_b[$num] = " selected ";
	}
?>
<!DOCTYPE html>
<html>

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
	<title>クラウド型 顔認証・入退室管理 SECURE AI Office Base</title>
	<meta name="description" content="職場はクラウドで管理する。入退室管理、顔認証の「SECURE AI Office Base」。ABWや職場3密対策に！" />
	<meta name="keywords" content="ABW,職場3密対策,サテライトオフィス,,SECURE,SECURE AI Office Base,職場リモート管理,健康経営,クラウドオフィス管理" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="クラウド型 顔認証・入退室管理 SECURE AI Office Base｜職場はクラウドで管理する" />
	<meta property="og:image" content="https://secureinc.co.jp/aioffice/images/og2207.png" />
	<meta property="og:url" content="https://secureinc.co.jp/aioffice/" />
	<meta property="og:site_name" content="クラウド型 顔認証・入退室管理 SECURE AI Office Base｜職場はクラウドで管理する" />
	<meta property="og:description" content="職場はクラウドで管理する。入退室管理、顔認証の「SECURE AI Office Base」。ABWや職場3密対策に！" />
	<link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@600&family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/html5reset-1.6.1.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	
	<link rel="shortcut icon" href="./images/favicon.ico">
	<link rel="apple-touch-icon" href="./images/apple-touch-icon.png" sizes="180x180">
	<link rel="stylesheet" type="text/css" href="./css/main.css?202206">
	<noscript>
		<link rel="stylesheet" type="text/css" href="./css/noscript.css">
	</noscript>
	<script src="./js/jquery1.8.3.js"></script>

	<script src="./js/common.min.js"></script>
	<script src="./js/bundle.js"></script>
	<script src="//cdn.jsdelivr.net/npm/vue@2.6.0"></script>

	<script src="./js/top.js"></script>
	
<!-- User Heat Tag -->
<script type="text/javascript">
(function(add, cla){window['UserHeatTag']=cla;window[cla]=window[cla]||function(){(window[cla].q=window[cla].q||[]).push(arguments)},window[cla].l=1*new Date();var ul=document.createElement('script');var tag = document.getElementsByTagName('script')[0];ul.async=1;ul.src=add;tag.parentNode.insertBefore(ul,tag);})('//uh.nakanohito.jp/uhj2/uh.js', '_uhtracker');_uhtracker({id:'uhn2dqF69h'});
</script>
<!-- End User Heat Tag -->


<style type="text/css">
<!---->
@media screen and (min-width: 680px){   
  .pc { display:block; }
  .sp { display:none; }
}
@media screen and (max-width: 680px){   
  .pc { display:none; }
  .sp { display:block; }
}
.redirect{
	margin: 0 auto 100px;
}
.redirect a{
	position: relative;
	margin: 0 auto;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 80px;
		padding: 5px 30px 0;
	    background: linear-gradient(90deg, #F56753, #FFBD66);
	    color: #fff;
	    font-weight: bold;
	    border-radius: 40px;
	    line-height: 1;
	    max-width: 480px;
	    box-shadow: 0 3px 6px rgb(0 0 0 / 15%);
}
.redirect a:hover{
	box-shadow: 0 10px 20px rgb(0 0 0 / 15%);
	filter: brightness(110%);
}
.redirect a::after{
	content: "";
	display: block;
	position: absolute;
	right: 30px;
	top: 50%;
	width: 12px;
	height: 12px;
	border-right: 2px solid #fff;
	border-bottom: 2px solid #fff;
	transform: translateY(-50%) rotate(-45deg);
}
</style>

</head>

<body class="cp cp2">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5873P36" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="wrap">
		<main>
			<header>
					<h2><img src="./images/acaas_logo.png" alt="SECURE ACaaS" width="256" /></h2>
					<div>
						<p><span><i>お電話でのお問い合わせは</i><a href="tel:08009199500"><img src="./images/icon_tel_black.svg" /></a><strong><a href="tel:08009199500">0800-919-9500</a></strong></span><small>フリーコール (土日祝日除く9:30 ～ 18:00)</small></p><a class="btn e-head-btn" href="https://secureinc.info/contact/"><i><img src="./images/cp_mail.svg" alt=""></i><span>お問い合わせ</span></a>
					</div>
				</header>
			<div id="mv2">
				<div class="bg"></div>
				<div id="mv2__inner">
					<div id="mv2__inner__text">
						<p class="fukidasi">今の入退室管理システム満足していますか？</p>
						<h2>他社から乗り換えの場合<br class="sp-view">最大6ヶ月無料キャンペーン中</h2>
						<p class="acaas">クラウド型入退室管理システムACaaSの</p>
						<h1><span><small>初期・月額</small><br>使用料が<em>「0」</em><span>円</span></h1>
						<small>〜顔認証も選べる！<br class="sp-view">設置工事・機器レンタル費全て込み込み〜</small>
						<div class="period">
							<p>キャンペーン期間：<strong>2022年8月末日</strong>まで</p>
						</div>
						<p class="annotation">※基本、最大3ヶ月間の月額使用料が無料。<br>　他社乗り換えの場合最大6ヶ月の月額使用料が無料。</p>
					</div>
				</div>
				<p class="subsidy"><img src="./images/cp2_subsidy2.png" alt="IT導入補助金2022採択商品※" width="294"></p>
				<p class="cv"><a href="https://secureinc.info/contact/">キャンペーン<br class="sp-view">ご応募・お問合せはこちら</a><small>※IT導入補助金2022とは経済産業省が推進する、中小企業・小規模事業者を対象とした補助金です。<br>本製品ではソフトウェア費用が1/2補助されます。</small></p>
			</div>
			<section id="problem">
				<div class="inner">
					<h2><span>スマートロック・入退室管理システムで</span>こんなお悩みありませんか？</h2>
					<ul class="problem__wrap">
						<li><figure><img src="./images/cp2_icon_1.png" alt=""><figcaption>両面テープ固定なので、<br>定期的に落ちる</figcaption></figure></li>
						<li><figure><img src="./images/cp2_icon_3.png" alt=""><figcaption>登録が専用PCで面倒</figcaption></figure></li>
						<li><figure><img src="./images/cp2_icon_4.png" alt=""><figcaption>ネットワーク障害時に<br>ドアが開かない事がある</figcaption></figure></li>
						<li><figure><img src="./images/cp2_icon_5.png" alt=""><figcaption>ドアで待たされる<br>（カードなのに認証リアクションスピードが遅い）</figcaption></figure></li>
						<li><figure><img src="./images/cp2_icon_6.png" alt=""><figcaption>電池交換が面倒</figcaption></figure></li>
						<li><figure><img src="./images/cp2_icon_7.png" alt=""><figcaption>遠隔開錠が出来ない</figcaption></figure></li>
						<li><figure><img src="./images/cp2_icon_8.png" alt=""><figcaption>オンプレ入退室管理<br>システムで<br>遠隔操作ができない</figcaption></figure></li>
						<li><figure><img src="./images/cp2_icon_9.png" alt=""><figcaption>堅牢性がない</figcaption></figure></li>
					</ul>
				</div>
			</section>
			<section id="about">
				<div class="inner">
					<h2>SECURE ACaaSとは？</h2>
					<div class="about__wrap">
						<div class="about__img">
							<figure><img src="./images/cp_about_1.png" alt=""></figure>
						</div>
						<div class="about__txt">
							<p>高いセキュリティを確保しながら、多様で利便性の高いログ機能を活用し、<strong>遠隔操作にてオフィスの管理を行うことが可能なクラウド型入退室管理システム</strong></p>
							<figure><img src="./images/cp_about_2.png" alt=""></figure>
						</div>
					</div>
					<h3>入退室管理・打刻管理・拠点の一元管理</h3>
					<figure><img src="./images/cp_about_3.png" alt=""></figure>
				</div>
			</section>
			<section id="campaign">
				<div class="inner">
					<h2>今だけ、導入特別キャンペーン<small>〜設置工事・機器レンタル費全て込み込み〜</small></h2>
					<p class="lead"><em>キャンペーン期間中に“SECURE ACaaS”を設置したお客様に限り、</em><strong>月額費用がお得になります！<br>しかも、人気プラン４選からお選びいただけます！</strong></p>
					<div class="plans">
						<div class="plans-inner">
							<div class="plans-row title">
								<div class="blank"></div>
								<div class="item"><div class="item-inner">Aプラン<small>（顔認証またはカード認証）</small></div></div>
								<div class="item"><div class="item-inner">Bプラン<small>（顔認証またはカード認証）</small></div></div>
								<div class="item"><div class="item-inner">Cプラン<small>（顔認証）</small></div></div>
								<div class="item"><div class="item-inner">Dプラン<small>（顔認証）</small></div></div>
							</div>
							<div class="plans-row function">
								<div class="name">機能</div>
								<div class="item">
									<figure><img src="./images/cp_fnc_1.svg" alt=""><figcaption>顔認証</figcaption></figure>
									<figure><img src="./images/cp_fnc_2.svg" alt=""><figcaption>入室</figcaption></figure>
									<figure><img src="./images/cp_fnc_4.svg" alt=""><figcaption>遠隔操作</figcaption></figure>
									<figure><img src="./images/cp_fnc_5.svg" alt=""><figcaption>ログ機能</figcaption></figure>
								</div>
								<div class="item">
									<figure><img src="./images/cp_fnc_1.svg" alt=""><figcaption>顔認証</figcaption></figure>
									<figure><img src="./images/cp_fnc_2.svg" alt=""><figcaption>入室</figcaption></figure>
									<figure><img src="./images/cp_fnc_3.svg" alt=""><figcaption>退室</figcaption></figure>
									<div class="item-wrap"></div>
									<figure><img src="./images/cp_fnc_4.svg" alt=""><figcaption>遠隔操作</figcaption></figure>
									<figure><img src="./images/cp_fnc_5.svg" alt=""><figcaption>ログ機能</figcaption></figure>
								</div>
								<div class="item">
									<figure><img src="./images/cp_fnc_1.svg" alt=""><figcaption>顔認証</figcaption></figure>
									<figure><img src="./images/cp_fnc_2.svg" alt=""><figcaption>入室</figcaption></figure>
									<figure><img src="./images/cp_fnc_4.svg" alt=""><figcaption>遠隔操作</figcaption></figure>
									<div class="item-wrap"></div>
									<figure><img src="./images/cp_fnc_5.svg" alt=""><figcaption>ログ機能</figcaption></figure>
									<figure><img src="./images/cp_fnc_6.svg" alt=""><figcaption>マスク</figcaption></figure>
									<figure><img src="./images/cp_fnc_7.svg" alt=""><figcaption>測温</figcaption></figure>
								</div>
								<div class="item">
									<figure><img src="./images/cp_fnc_1.svg" alt=""><figcaption>顔認証</figcaption></figure>
									<figure><img src="./images/cp_fnc_2.svg" alt=""><figcaption>入室</figcaption></figure>
									<figure><img src="./images/cp_fnc_3.svg" alt=""><figcaption>退室</figcaption></figure>
									<figure><img src="./images/cp_fnc_4.svg" alt=""><figcaption>遠隔操作</figcaption></figure>
									<div class="item-wrap"></div>
									<figure><img src="./images/cp_fnc_5.svg" alt=""><figcaption>ログ機能</figcaption></figure>
									<figure><img src="./images/cp_fnc_6.svg" alt=""><figcaption>マスク</figcaption></figure>
									<figure><img src="./images/cp_fnc_7.svg" alt=""><figcaption>測温</figcaption></figure>
								</div>
							</div>
							<div class="plans-row target">
								<div class="name">対象</div>
								<div class="item">
									<div class="item-row">
										<div><figure><img src="./images/cp_fnc_2.svg" alt=""></figure><span class="plus"></span><figure><img src="./images/cp_device_1.png" width="50" alt=""></figure></div><p>入室　＋　顔認証ターミナル1台</p>
									</div>
									<div class="item-and"><span>または</span></div>
									<div class="item-row">
										<div><figure><img src="./images/cp_fnc_2.svg" alt=""></figure><span class="plus"></span><figure><img src="./images/cp_device_3.png" width="50" alt=""></figure></div><p>入室　＋　カードリーダー1台</p>
									</div>
								</div>
								<div class="item">
									<div class="item-row">
										<div><figure><img src="./images/cp_fnc_2.svg" alt=""><img src="./images/cp_fnc_3.svg" alt=""></figure><span class="plus"></span><figure><img src="./images/cp_device_1.png" width="50" alt=""><img src="./images/cp_device_1.png" width="50" alt=""></figure></div><p>入室・退室　＋　顔認証ターミナル2台</p>
									</div>
									<div class="item-and"><span>または</span></div>
									<div class="item-row">
										<div><figure><img src="./images/cp_fnc_2.svg" alt=""><img src="./images/cp_fnc_3.svg" alt=""></figure><span class="plus"></span><figure><img src="./images/cp_device_3.png" width="50" alt=""><img src="./images/cp_device_3.png" width="50" alt=""></figure></div><p>入室・退室　＋　カードリーダー2台</p>
									</div>
								</div>
								<div class="item">
									<div class="item-row">
										<div><figure><img src="./images/cp_fnc_2.svg" alt=""></figure><span class="plus"></span><figure><img src="./images/cp_device_2.png" width="50" alt=""></figure></div><p>入室　＋　顔認証ターミナル1台(マスク・測温)</p>
									</div>
								</div>
								<div class="item">
									<div class="item-row">
										<div><figure><img src="./images/cp_fnc_2.svg" alt=""><img src="./images/cp_fnc_3.svg" alt=""></figure><span class="plus"></span><figure><img src="./images/cp_device_2.png" width="50" alt=""><img src="./images/cp_device_2.png" width="50" alt=""></figure></div><p>入室・退室　＋　顔認証ターミナル2台(マスク・測温)</p>
									</div>
								</div>
							</div>
							<div class="plans-row price">
								<div class="name">料金</div>
								<div class="item">
									<div class="item-row">顔認証またはカード認証（月額）<span><small>通常価格</small><del>15,000</del><small>円</small></span><strong>12,000<small>円</small></strong></div>
									<div class="item-row">システム登録費用<strong>125,000<small>円</small></strong></div>
								</div>
								<div class="item">
									<div class="item-row">顔認証またはカード認証（月額）<span><small>通常価格</small><del>25,000</del><small>円</small></span><strong>22,000<small>円</small></strong></div>
									<div class="item-row">システム登録費用<strong>125,000<small>円</small></strong></div>
								</div>
								<div class="item">
									<div class="item-row">顔認証（月額）<span><small>通常価格</small><del>21,000</del><small>円</small></span><strong>18,000<small>円</small></strong></div>
									<div class="item-row">システム登録費用<strong>125,000<small>円</small></strong></div>
								</div>
								<div class="item">
									<div class="item-row">顔認証（月額）<span><small>通常価格</small><del>40,000</del><small>円</small></span><strong>32,000<small>円</small></strong></div>
									<div class="item-row">システム登録費用<strong>125,000<small>円</small></strong></div>
								</div>
							</div>
							<p class="annotation">
								※デバイスのレンタル費/電気錠工事費/設置工事費が含まれております。<br>※共有扉ではなくPT扉が対象となります。<br>※モータ錠の場合は別途ご相談<br>※内容および期間は予告なく変更する場合がございます。
							</p>
						</div>
					</div>
				</div>
			</section>
				<div id="list-case">
				<div class="inner">
					<h2 id="anchor-7">導入事例</h2>
					<ul>
						<li><img src="./images/img_7_0.jpg" alt=""><h5>スマートニュース株式会社</h5><h4>ベンダーが異なる顔認証システムが2つあり、管理が煩雑だった</h4><p>顔登録作業がオンラインですぐ終わるようになった他、体温の記録・管理の自動化が実現。入退室データからオフィスの在室者数の把握が可能になった。</p></li>
						<li><img src="./images/img_7_1.jpg" alt=""><h5>株式会社テス・デザイン</h5><h4>顔認証で高いセキュリティと空間の有効活用を目指して</h4><p>運用と管理が簡単な顔認証クラウド入退室管理システムを導入。ワンタイムパス機能で撮影用の空間提供や、クラウド管理なので執務室やスタジオの管理・運用がどこにいても行えるようになった。</p></li>
						<li><img src="./images/img_7_2.jpg" alt=""><h5>ダイヤモンド経営者倶楽部</h5><h4>AI顔認証を活用した安心できる空間づくり</h4><p>すべての会員様が使いやすく安心できる入退室管理を目指して、顔写真を送り登録が完了できる機能で、全国どこからでも会員様の顔登録が可能になった。</p></li>
						<li><img src="./images/img_7_3.jpg" alt=""><h5>株式会社ブロードバンドタワー</h5><h4>AI Office BASEの利便性を活かした運用</h4><p>
						顔認証と同時に測温する機能があるため、確実にスクリーニングできるようになりました。顔認証時のエラーはほとんど無くなり、測温の正確性は高いです。</p></li>
						<li><img src="./images/img_7_4.jpg" alt=""><h5>株式会社Clappers</h5><h4>新オフィスに顔認証でカードレス運用と正確な勤怠確認</h4><p>短納期で問題無く納品していただきました。カード紛失リスクが無くなった他、ピンポイントで出力できる入退出履歴がとても使いやすいです。</p></li>
						<li><img src="./images/img_7_5.jpg" alt=""><h5>一般社団法人企業研究会</h5><h4>ICカードから顔認証でなりすまし防止、セキュリティ強化</h4><p>貸し借りや複製も防げるセキュリティ性に満足。メイン出入口だけではなく機密情報を保管している部屋全てで利用しています。</p></li>
						<li><img src="./images/img_7_6.jpg" alt=""><h5>株式会社東京天竜</h5><h4>コロナ禍を踏まえた非接触・マスク検知・測温機能の　入退室管理システム導入</h4><p>顔認証と同時に測温を行い、且つ履歴も保管されるため、受付対応の負担が無くなりました。</p></li>
						<li><img src="./images/img_7_7.jpg" alt=""><h5>株式会社リーチ</h5><h4>レンタルオフィスでのカード管理の煩雑さをクリアに</h4><p>テナントの入れ替わりが多く、その都度発生していたカード発行コストや待たせる時間が無くなりました。</p></li>
					</ul>
				</div>
			</div>
			<section id="campaign">
				<div class="inner">
					<h2>対応デバイス一覧</h2>
					<div class="table-wrap">
						<table>
							<tr class="device">
								<th></th>
								<td><figure><img src="./images/cp_device_1.png" alt=""><figcaption>顔認証ターミナル</figcaption></figure></td>
								<td><figure><img src="./images/cp_device_2.png" alt=""><figcaption>測温顔認証ターミナル</figcaption></figure></td>
								<td><figure><img src="./images/cp_device_3_all.png" alt=""><figcaption>屋外対応コンパクトRFIDデバイス</figcaption></figure></td>
							</tr>
							<tr>
								<th><span>顔認証</span></th>
								<td>〇</td>
								<td>〇</td>
								<td></td>
							</tr>
							<tr>
								<th><span>登録上限（顔）</span></th>
								<td>300</td>
								<td>50,000</td>
								<td></td>
							</tr>
							<tr>
								<th><span>顔認証</span></th>
								<td>1:1または1:N</td>
								<td>1:1または1:N</td>
								<td></td>
							</tr>
							<tr>
								<th><span>顔検知距離</span></th>
								<td>0.3m~1.5m</td>
								<td>0.3m~3.0m</td>
								<td></td>
							</tr>
							<tr>
								<th><span>マスク認証</span></th>
								<td></td>
								<td>〇<sup>*</sup></td>
								<td></td>
							</tr>
							<tr>
								<th><span>測温</span></th>
								<td></td>
								<td>〇<sup>*</sup></td>
								<td></td>
							</tr>
							<tr>
								<th><span>カード</span></th>
								<td></td>
								<td></td>
								<td>〇</td>
							</tr>
							<tr>
								<th><span>カード登録可能数</span></th>
								<td>300</td>
								<td>50,000</td>
								<td>200,000</td>
							</tr>
						</table>
						<p class="annotation">
							※コロナ感染予防対策推奨
						</p>
					</div>
				</div>
			</section>
			

			<div id="form_b">
				<div class="inner">
					<h2 id="contact">キャンペーンご応募・お問い合わせ</h2>
					<section class="formsection">
						<p class="redirect"><a href="https://secureinc.info/contact/">お問い合わせ</a></p>
						<!-- <form id="formarea_b" method="post" action="confirm_c.php">


							<dl>
								<dt class="req">会社名</dt>
								<dd>
									<div class="err err10_1" v-if="comperr_b">
										<div class="errbox">{{comperr_b}}</div>
									</div>
									<input type="text" name="company_b" placeholder="株式会社セキュア" v-model.trim="company_b" :value="company_b" @blur="compcng_b" required>
								</dd>
							</dl>
							<dl>
								<dt class="req">お名前</dt>
								<dd>
									<div class="err err2_1" v-if="nameerr_b">
										<div class="errbox">{{nameerr_b}}</div>
									</div>
									<div class="ip2">
										<input type="text" name="name1_b" placeholder="関谷" v-model.trim="name1_b" :value="name1_b" @blur="namecng_b" required>
										<input type="text" name="name2_b" placeholder="太郎" v-model.trim="name2_b" :value="name2_b" @blur="namecng_b" required>
									</div>
									<p class="annotation">※全角でご入力ください</p>
								</dd>
							</dl>

							<dl>
								<dt class="req">メールアドレス</dt>
								<dd>
									<div class="err err5_1" v-if="mail1err_b">
										<div class="errbox">{{mail1err_b}}</div>
									</div>
									<input type="email" name="mail1_b" placeholder="info@secureinc.co.jp" v-model.trim="mail1_b" :value="mail1_b" @blur="mail1cng_b" required>
									<p class="annotation">※半角英数字でご入力ください</p>
								</dd>
							</dl>

							<dl>
								<dt class="any">電話番号</dt>
								<dd>
									<input type="text" name="tel_b" placeholder="03-1234-5678" v-model.trim="tel_b" :value="tel_b">
									<p class="annotation">※半角英数字でご入力ください</p>
								</dd>
							</dl>

							<dl>
								<dt class="any">デモ希望</dt>
								<dd class="mt">
									<div class="err err6_1" v-if="demoerr_b">
										<div class="errbox">{{demoerr_b}}</div>
									</div>
									<input type="checkbox" name="demo_b[]" id="demockbox_b" v-model="demo_b" value="デモを希望する" @change="democng_b"><label for="demockbox_b">ショールーム見学もしくはデモ希望（日本全国対応）</label>
								</dd>
							</dl>

							<dl>
								<dt class="any">導入予定時期</dt>
								<dd>
									<div class="err err1_1" v-if="typeerr_b">
										<div class="errbox">{{typeerr_b}}</div>
									</div>
									<div class="cp_ipselect">
										<select name="type_b" v-model="type_b" @blur="typecng_b">
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
								<dt class="any">お問い合わせの内容</dt>
								<dd>
									<div class="err err7_1" v-if="bodyerr_b">
										<div class="errbox">{{bodyerr_b}}</div>
									</div>
									<textarea name="body_b" placeholder="記入例：会社のセキュリティを強化したいと考えています。事務所の扉に指紋か顔認証で出入りできるようにしたいのですが、予算感を教えてください。" v-model.trim="body_b" :value="body_b" @blur="bodycng_b"></textarea>
								</dd>
							</dl>
							<dl>
								<dt class="req">個人情報の取り扱いについて</dt>
								<dd class="mt">
									<div class="err err8_1" v-if="agreeerr_b">
										<div class="errbox">{{agreeerr_b}}</div>
									</div>
									<input type="checkbox" name="agree_b" id="ckbox_b" v-model="agree_b" :value="agree_b" @change="agreecng_b" required><label for="ckbox_b">同意する</label>
									<p class="annotation">※個人情報の取り扱いについては<a href="https://secureinc.co.jp/privacy/" target="_blank" class="blackunderline">「個人情報の取り扱いページ」</a>をご確認ください。</p>
								</dd>
							</dl>
							<dl>
								<dt></dt>
								<dd>
									<div class="submitbtn" style="display:block !important;">
										<input type="submit" value="確認する" v-if="btnview_b==='submit'">
										<div class="graybtn btn" v-if="btnview_b===''"><span>確認する</span></div>
										<input id="param_b" name="param_b" type="hidden">
									</div>
								</dd>
							</dl>
						</form> -->
					</section>
				</div>
			</div>
		</main>

		<footer>
			<div><img src="./images/foot_logo.svg" alt="SECURE" />
				<ul>
					<li><a href="https://secureinc.co.jp/company/" target="_blank">運営会社</a></li>
					<li><a href="https://secureinc.co.jp/sitepolicy/" target="_blank">サイトポリシー</a></li>
					<li><a href="https://secureinc.co.jp/privacy/" target="_blank">個人情報保護方針</a></li>
				</ul>
			</div><small>Copyright(c)2020 SECURE Inc. All Rights Reserved.</small>
		</footer><a class="pagetop" href="#wrap"></a>
	</div>
	
	<script>

new Vue({
	el: '#formarea_b',
	data: {
		type_b:       '<?php print($type_b) ?>',
		name1_b:      '<?php print($name1_b) ?>',
		name2_b:      '<?php print($name2_b) ?>',
		company_b:    '<?php print($company_b) ?>',
		mail1_b:      '<?php print($mail1_b) ?>',
		tel_b:      '<?php print($tel_b) ?>',
		param_b: 			'<?php print($param_b) ?>',
		demo_b:      [],
		body_b:       `<?php print($body_b) ?>`,
		agree_b:      false,

		typeerr_b:    '',
		nameerr_b:    '',
		comperr_b:    '',
		mail1err_b:     '',
		demoerr_b:     '',
		bodyerr_b:    '',
		agreeerr_b:     '',

		typeflg_b:    <?php if($type_b!="")             { print('0'); } else { print('1'); } ?>,
		nameflg_b:    <?php if($name1_b!="" && $name2_b!="")      { print('0'); } else { print('1'); } ?>,
		compflg_b:  <?php if($company_b!="")              { print('0'); } else { print('1'); } ?>,
		mail1flg_b:     <?php if($mail1_b!="")            { print('0'); } else { print('1'); } ?>,
		demoflg_b:     1,
		bodyflg_b:    0,
		agreeflg_b:     1,
	},
	methods:{
		typecng_b: function () {
			let typedata = this.type_b;
			/*if(!typedata){
				this.typeflg_b = 1;
				this.typeerr_b = "お問い合わせ種別が選択されていません";
			}else{
				this.typeflg_b = 0;
				this.typeerr_b = "";
			};*/
				this.typeflg_b = 0;
				this.typeerr_b = "";
		},
		namecng_b: function () {
			let name1data = this.name1_b;
			let name2data = this.name2_b;
			if(!name1data || !name2data){
				this.nameflg_b = 1;
				this.nameerr_b = "お名前が入力されていません";
			}else if(!name1data.match(/^[^\x01-\x7E\xA1-\xDF]+$/) || !name2data.match(/^[^\x01-\x7E\xA1-\xDF]+$/)){
				this.nameflg_b = 1;
				this.nameerr_b = "全角でご入力ください";
			}else{
				this.nameflg_b = 0;
				this.nameerr_b = "";
			};
		},
		compcng_b: function () {
			let compdata = this.company_b;
			if(!compdata){
				this.compflg_b = 1;
				this.comperr_b = "会社名が入力されていません";
			}else{
				this.compflg_b = 0;
				this.comperr_b = "";
			};
		},
		mail1cng_b: function () {
			let mail1data = this.mail1_b;
			if(!mail1data){
				this.mail1flg_b = 1;
				this.mail1err_b = "メールアドレスが入力されていません";
			}else if(!mail1data.match(/^[\x20-\x7e]+$/)){
				this.mail1flg_b = 1;
				this.mail1err_b = "半角英数字でご入力ください";
			}else if(!mail1data.match(/^[^@]+@.+\..+$/)){
				this.mail1flg_b = 1;
				this.mail1err_b = "メールアドレスの書式でご入力ください";
			}else{
				this.mail1flg_b = 0;
				this.mail1err_b = "";
			};
		},
		bodycng_b: function () {
			let bodydata = this.body_b;
			if(bodydata.length > 1000 && bodydata){
				this.bodyflg_b = 1;
				this.bodyerr_b = "お問い合わせは1000文字以内でご入力下さい";
			}else{
				this.bodyflg_b = 0;
				this.bodyerr_b = "";
			};
		},
		agreecng_b: function () {
			let agreedata = this.agree_b;
			if(!agreedata){
				this.agreeflg_b = 1;
				this.agreeerr_b = "同意チェックボックスがチェックされていません";
			}else{
				this.agreeflg_b = 0;
				this.agreeerr_b = "";
			};
		},
		democng_b: function () {
			let demodata = this.demo_b;
			if(!demodata.length){
				this.demoflg_b = 1;
			}else{
				this.demoflg_b = 0;
			};
		}
	},
	computed:{
		btnview_b: function () {
			let typeflg_b =     this.typeflg_b;
			let nameflg_b =     this.nameflg_b;
			let compflg_b =   this.compflg_b;
			let mail1flg_b =    this.mail1flg_b;
			let demoflg_b =    this.demoflg_b;
			let bodyflg_b =     this.bodyflg_b;
			let agreeflg_b =    this.agreeflg_b;
			if (nameflg_b==0 && compflg_b==0 && mail1flg_b==0 && bodyflg_b==0 && agreeflg_b==0) {
				return "submit";
			} else {
				return "";
			}
		}
	}
})
</script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="./js/function.js"></script>

	

	<script type="text/javascript">
	$(function() {
		var query = location.search;
		var value = query.replace('?', '').replace(/&/g, '\r\n');
		$('#param_b').val(value);
	});
	</script>
</html>