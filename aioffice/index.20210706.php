<?php
	session_name('CONTACT');
	session_start();

	//require_once "definition.php";

	/*$type_check = array();

	for ($i=0; $i<sizeof($type_array);  $i++) { $type_check[$i] = "";   }

	if (isset($_GET['id'])) $_SESSION['TYPE'] = htmlspecialchars($_GET['id']);*/

	//$type     =(isset($_SESSION['TYPE']))     ? $_SESSION['TYPE']     : "";
	$name1    =(isset($_SESSION['NAME1']))    ? $_SESSION['NAME1']    : "";
	$name2    =(isset($_SESSION['NAME2']))    ? $_SESSION['NAME2']    : "";
	//$furigana1  =(isset($_SESSION['FURIGANA1']))  ? $_SESSION['FURIGANA1']  : "";
	//$furigana2  =(isset($_SESSION['FURIGANA2']))  ? $_SESSION['FURIGANA2']  : "";
	$company  =(isset($_SESSION['COMPANY']))    ? $_SESSION['COMPANY']    : "";
	//$department  =(isset($_SESSION['DEPARTMENT']))    ? $_SESSION['DEPARTMENT']    : "";
	//$tel    =(isset($_SESSION['TEL']))      ? $_SESSION['TEL']      : "";
	$mail1    =(isset($_SESSION['MAIL1']))    ? $_SESSION['MAIL1']    : "";
	//$mail2    =(isset($_SESSION['MAIL2']))    ? $_SESSION['MAIL2']    : "";
	//$kind     =(isset($_SESSION['KIND']))     ? $_SESSION['KIND']     : "";
	$param 		=(isset($_SESSION['PARAM'])) 		? $_SESSION['PARAM']		: "";
	//$body     =(isset($_SESSION['BODY']))     ? $_SESSION['BODY']     : "";

	/*if ($type!="") {
		$num = substr(htmlspecialchars($type),4);
		$type_check[$num] = " selected ";
	}*/
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
	<meta property="og:image" content="https://secureinc.co.jp/aioffice/images/og.png" />
	<meta property="og:url" content="https://secureinc.co.jp/aioffice/" />
	<meta property="og:site_name" content="クラウド型 顔認証・入退室管理 SECURE AI Office Base｜職場はクラウドで管理する" />
	<meta property="og:description" content="職場はクラウドで管理する。入退室管理、顔認証の「SECURE AI Office Base」。ABWや職場3密対策に！" />
	<link href="https://fonts.googleapis.com/css2?family=Hind+Guntur:wght@600&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/html5reset-1.6.1.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	
	<link rel="shortcut icon" href="./images/favicon.ico">
	<link rel="apple-touch-icon" href="./images/apple-touch-icon.png" sizes="180x180">
	<link rel="stylesheet" type="text/css" href="./css/main.css?202103">
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

<script type="text/javascript">
  var param = document.location.search;
  console.log(param);
</script>

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

</style>

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5873P36" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="wrap" class="column-2">
		<main>
			<div id="mv" class="dl2_index">
				<header>
					<h2><span class="pc-view">AI顔認証クラウド型入退管理システム</span><img src="./images/head_logo.png" alt="SECURE AI Office Base" /></h2>
					<button class="hamburger sp-view"><span></span><span></span><span></span></button>
					<div>
						<p><span><i>お電話でのお問い合わせは</i><a href="tel:08009199500"><img src="./images/icon_tel.svg" /></a><strong><a href="tel:08009199500">0800-919-9500</a></strong></span><small>フリーコール (土日祝日除く9:30 ～ 18:00)</small></p><a class="blink btn e-head-btn" href="#form"><span>資料請求・お問い合わせ</span></a>
						<ul>
							<li><a href="#anchor-1">よくあるお悩み</a></li>
							<li><a href="#anchor-2">AI Office Baseとは</a></li>
							<li><a href="#anchor-3">機能</a></li>
							<li><a href="#anchor-5">セキュリティ、スピード導入</a></li>
							<li><a href="#anchor-7">導入事例</a></li>
							<li><a href="#anchor-6">活用場所</a></li>
						</ul>
					</div>
				</header>
				<div id="mv__inner" class="txt_up">
					<h2><strong>職場の感染症対策から<br class="sp" />オフィスセキュリティ・管理まで</strong></h2>
					<div>
						<h1> <span>顔認証でクラウド入退室管理<br>測温・マスク検知・3密対策も</span></h1>
						<p><!--<a class="btn" href="https://airrsv.net/ai-officebase/calendar" target="_blank"><img src="./images/icon_demo.svg" width="25" /><span>オンラインデモ・<br>
						ショールーム見学を依頼する</span></a>
			
						modal youtube
						<a class="btn youtube-modal" href="https://www.youtube.com/embed/NK-3bnrImRQ?autoplay=1&loop=1&playlist=NK-3bnrImRQ&amp;wmode=transparent"><img src="./images/icon_video.svg" width="26" /><span>動画での説明を見る</span></a>
						//modal youtube-->
					</p>
					</div>
				</div>
				<div class="dl2 sp-view">
					<a href="#form" class="blink e-mv-btn">
						<div class="inner">
							<figure><img src="./images/doc_thumbnail_2.png" /></figure>
							<p><small>簡単導入！顔認証クラウド型入退室管理システム</small><span>SECURE AI Office Base 概要資料</span></p><div class="ai_dl_btn"><img src="./images/icon_dl_white.svg" width="18" /><span> 資料ダウンロード</span></div>
						</div>				
					</a>
				</div>
			<!-- 
				<div class="dl3">
					<a class="youtube-modal" href="https://www.youtube.com/embed/1id3_e4XGck?autoplay=1&loop=1&playlist=1id3_e4XGck&amp;wmode=transparent">
						<div class="inner"><img src="./images/bn_yt_officebae.png" width="500" height="110" alt="動画でわかる SECURE AI OFFICE BASEサービス紹介動画" />
						</div>
					</a>
				</div> -->
			
			</div>
			
			<!--logo slider-->
			<div id="logoslide">
				<div class="caseslide">
					<ul class="js-slide">
						<li><a href="https://www.d1-kougei.co.jp/" target="_blank"><img src="./images/top/logo_daichikogesha.png" alt="株式会社第一工芸社"></a></li>
						<li class="noSP"><a href="https://www.dfc.ne.jp/" target="_blank"><img src="./images/top/logo_diamondkeieishaclub.png" alt="ダイヤモンド経営者倶楽部"></a></li>
						<li><a href="https://www.pacific.co.jp/" target="_blank"><img src="./images/top/logo_pacific-consultants.png" alt="Pacific Consultants"></a></li>
						<li class="noSP"><a href="https://www.smartnews.com/ja/" target="_blank"><img src="./images/top/logo_smartnews.png" alt="SmartNews"></a></li>
						<li class="noSP"><a href="https://www.sd-net.jp/" target="_blank"><img src="./images/top/logo_systemdesign.png" alt="株式会社システムデザイン"></a></li>
			
						<li><a href="https://www.d1-kougei.co.jp/" target="_blank"><img src="./images/top/logo_daichikogesha.png" alt="株式会社第一工芸社"></a></li>
						<li class="noSP"><a href="https://www.dfc.ne.jp/" target="_blank"><img src="./images/top/logo_diamondkeieishaclub.png" alt="ダイヤモンド経営者倶楽部"></a></li>
						<li><a href="https://www.pacific.co.jp/" target="_blank"><img src="./images/top/logo_pacific-consultants.png" alt="Pacific Consultants"></a></li>
						<li class="noSP"><a href="https://www.smartnews.com/ja/" target="_blank"><img src="./images/top/logo_smartnews.png" alt="SmartNews"></a></li>
						<li class="noSP"><a href="https://www.sd-net.jp/" target="_blank"><img src="./images/top/logo_systemdesign.png" alt="株式会社システムデザイン"></a></li>
					</ul>
				</div>
			</div>
			<!--//logo slider-->
			
			
			<section id="worries">
				<p class="bg-arrow"><img src="./images/bg_arwgray.svg" /><img src="./images/bg_arwgray.svg" /><img src="./images/bg_arwgray.svg" /></p>
				<div class="inner">
					<h2 id="anchor-1">今後の職場、<br class="min-view">どうすれば良いの？</h2>
					<ul>
						<li><img src="./images/img_1_1.png" /><span>職場の3密対策<br>どうするの？</span></li>
						<li><img src="./images/img_1_2.png" /><span>職場の管理とセキュリティ<br>はどうしたらいいの？</span></li>
						<li><img src="./images/img_1_3.png" /><span>労務管理・健康管理を<br>どこまでやればいいの？</span></li>
						<li>こんなお悩み<strong>SECURE AI Office Base</strong>で解決</li>
					</ul>
				</div>
			</section>
			<section id="whatis">
				<div class="bg-orange-top"></div>
				<div class="bg-white-top"></div>
				<div class="inner">
					<h2 id="anchor-2">SECURE AI Office Baseとは？</h2>
					<p class="lead">SECURE AI Office Baseは職場のあり方が多様化する時代に、<br class="pc-view">AIを活用して社員の安全と働きやすさを追求する企業向け「クラウド型入退室管理システム」です。<br />従業員規模数十名から千人超えの企業まで幅広く対応することが可能です。</p>
					<div class="carousel">
						<div class="device-pc">
							<div class="item-wrap">
								<div class="item"><img src="./images/carousel_1_img1.png" /></div>
								<div class="item"><img src="./images/carousel_1_img2.png" /></div>
								<div class="item"><img src="./images/carousel_1_img3.png" /></div>
								<div class="item"><img src="./images/carousel_1_img4.png" /></div>
								<div class="item"><img src="./images/carousel_1_img5.png" /></div>
								<div class="item"><img src="./images/carousel_1_img6.png" /></div>
							</div>
						</div>
						<div class="device-sp">
							<div class="item-wrap">
								<div class="item"><img src="./images/carousel_1_img1_sp.png" /></div>
								<div class="item"><img src="./images/carousel_1_img2_sp.png" /></div>
								<div class="item"><img src="./images/carousel_1_img3_sp.png" /></div>
								<div class="item"><img src="./images/carousel_1_img4_sp.png" /></div>
								<div class="item"><img src="./images/carousel_1_img5_sp.png" /></div>
								<div class="item"><img src="./images/carousel_1_img6_sp.png" /></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="watchmovie">
				<div class="inner">
					<h2>動画でわかる</h2>
					<p>SECURE AI Office BASE サービス紹介動画はこちら</p>
					<figure>
						<a class="youtube-modal cboxElement" href="https://www.youtube.com/embed/1id3_e4XGck?autoplay=1&amp;loop=1&amp;playlist=1id3_e4XGck&amp;wmode=transparent" target="_blank"><img src="./images/bn_yt_officebae_l.jpg" alt="動画でわかる SECURE AI OFFICE BASEサービス紹介動画"></a>
					</figure>
				</div>
			</section>
			<section id="securegraph" style="z-index:8; position: relative;">
				<div class="bg-white-top"></div>
				<!--secure_graph-->
				<div class="secure_graph">
				  
					<div class="inner">
						<h2 id="anchor-8">プラン・機能</h2>
			
						<article>
						<table id="tbl" width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<th scope="row" class="bgw"></th>
									<td colspan="2" class="top_title bdbr">選べる2つのエントリープラン</td>
									<td colspan="2" class="bgw bdnone"></td>	
								</tr>
								<tr>
									<th scope="row" class="tt01">
										プラン</th>
									<td class="bdtr size18 plan01">顔認証入室管理<br>
										ライトプラン
									<div><img src="images/ic_01.png"></div></td>
									<td class="bdtr size18 plan02">コロナ対策<br>
										ライトプラン
									<div><img src="images/ic_02.png"></div></td>
									<td class="size18 plan03">顔認証入/退室<br>
										ベーシックプラン
									<div><img src="images/ic_03.png"></div></td>
									<td class="size18 plan04">コロナ対策入/退室<br>
										プレミアムプラン
									<div><img src="images/ic_04.png"></div></td>
								</tr>
								<tr>
									<th scope="row" class="tt01">こんな企業に</th>
									<td class="plan01">・スタートアップ企業に<br>
										・まずは入退室管理を導入したい企業に<br>
										・カード運用をしたくない企業に</td>
									<td class="plan02">・とにかく早く導入したい企業に<br>
										・測温管理だけしたい企業に<br>
										・マスク着用を徹底したい企業に</td>
									<td class="plan03">・セキュリティを強化したい企業に<br>
										・Pマーク、ISMS取得企業に<br>
										・顧客の個人情報取扱い企業に</td>
									<td class="plan04">・コロナ対策を徹底したい企業に<br>
										・サービス連携をしたい企業に<br>
										・AIによる異常検知をしたい企業に</td>
								</tr>
								<tr>
									<th scope="row" class="tt01">料金</th>
									<td class="plan01"><span class="size18">10,000</span>円~<br>
										顔認証ターミナル1台/月額</td>
									<td class="plan02"><span class="size18">12,000</span>円~ <br>
										顔認証ターミナル1台/月額</td>
									<td class="plan03"><span class="size18">20,000</span>円~<br>
										顔認証ターミナル1台/月額</td>
									<td class="plan04"><span class="size18">22,000</span>円<br>
										顔認証ターミナル1台/月額</td>
								</tr>
								<tr>
									<th scope="row" class="tt01">規模</th>
									<td class="plan01"><span class="size18">30名~100名</span><br>
										1扉</td>
									<td class="plan02"><span class="size18">30名~100名</span><br>
										※扉連動無し</td>
									<td class="plan03"><span class="size18">100名~500名</span><br>
										2扉~8扉</td>
									<td class="plan04"><span class="size18">100名~500名</span><br>
										4扉~8扉</td>
									</tr>
									
									<tr class="toggle">
										<th scope="row">顔認証</th>
										<td>○</td><td>○</td><td>○</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>ログ管理</th>
										<td>○</td><td>○</td><td>○</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>通知機能</th>
										<td>○</td><td>○</td><td>○</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>クラウド管理</th>
										<td>○</td><td>○</td><td>○</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>測温</th>
										<td>×</td><td>○</td><td>×</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>マスク管理</th>
										<td>×</td><td>○</td><td>×</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>在室管理</th>
										<td>×</td><td>×</td><td>○</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>勤怠管理</th>
										<td>×</td><td>×</td><td>○</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>マップ機能</th>
										<td>×</td><td>×</td><td>○</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>アクセス制限（予定）</th>
										<td>×</td><td>×</td><td>○</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>混雑管理</th>
										<td>×</td><td>×</td><td>○</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>ワンタイムパス</th>
										<td>×</td><td>×</td><td>○</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>利用率(稼働率)</th>
										<td>×</td><td>×</td><td>×</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>API（予定）</th>
										<td>×</td><td>×</td><td>×</td><td>○</td>
									</tr>
									<tr class="toggle">
										<th>AI解析</th>
										<td class="bdbr">×</td><td class="bdbr">×</td><td>×</td><td>○</td>
									</tr>
								</tbody>
							</table>
						</article>
							
						</div>
					</div><!--//secure_graph .inner-->
			
					<div style="text-align:center; margin:20px;">
						<button class="btn">プラン詳細を見る</button>
				
					</div>
					<p>デバイス＋取付工事費の「初期費用」とクラウドサービスの「年額費用」でご利用が可能です。</p>
					<figure><img src="images/price.png" alt="" class="pc-view"><img src="images/price_sp.png" alt="" class="sp-view"></figure>
				<!--//secure_graph-->
			</section>
			
			<section id="suggest">
				<div class="inner">
					<h2 id="anchor-3">新しい職場運用のご提案</h2>
					<p class="lead">SECURE AI Office Baseがニューノーマル時代の職場のあり方を提唱します。<br>　職場のフリーアドレス化やサテライトオフィスの活用、場所を自由に選択して働くABW（Activity Based Working）といった今までにない多様性のある働き方ができる職場をスピーディに構築。</p>
					<figure><img class="pc-view" src="./images/img_3_1.png" /><img class="sp-view" src="./images/img_3_1_sp.png" width="320" /></figure>
				</div>
			</section>
			<section id="ifsecure">
				<div class="inner">
					<h2 id="anchor-4">AI Office Baseなら</h2>
					<p class="lead">社員の安全を守りながら管理部門は遠隔で<br class="min-view">少人数運用が可能</p>
					<div class="row">
						<figure><img src="./images/img_3_2.png" /></figure>
						<div class="row__item">
							<picture><img src="./images/img_3_icn01.svg" /></picture>
							<figure><img src="./images/img_3_num01.svg" /></figure>
							<h3>体調管理 ＋ 自動運用</h3>
							<p>入室時に検温＋マスクチェック、<br>発熱者は入室STOPアラート</p>
						</div>
					</div>
					<div class="row">
						<figure><img src="./images/img_3_3.png" /></figure>
						<div class="row__item">
							<picture><img src="./images/img_3_icn02.svg" /></picture>
							<figure><img src="./images/img_3_num02.svg" /></figure>
							<h3>入退室管理 ＋ 遠隔運用</h3>
							<p>フルリモートでも行える<br>万全なセキュリティ対策</p>
						</div>
					</div>
					<div class="row">
						<figure><img src="./images/img_3_4.png" /></figure>
						<div class="row__item">
							<picture><img src="./images/img_3_icn03.svg" /></picture>
							<figure><img src="./images/img_3_num03.svg" /></figure>
							<h3>混雑可視化 ＋ 職場稼働分析</h3>
							<p>職場の混雑状況を<br>自宅からリモート監視</p>
						</div>
					</div>
					<h3>社員と職場の安心安全な環境を<br class="min-view">構築する機能</h3>
					<ul class="card large">
						<li><img src="./images/img_4_1.png" />
							<h4>入退室のセキュリティを担保</h4>
							<ul>
								<li>ユーザー・ゲート・スケジュール管理</li>
								<li>異常アラート管理</li>
								<li>遠隔施錠・解錠</li>
							</ul>
						</li>
						<li><img src="./images/img_4_2.png" />
							<h4>職場の利用状況を把握</h4>
							<ul>
								<li>混雑度表示</li>
								<li>使用率表示</li>
								<li>カメラ映像</li>
							</ul>
						</li>
						<li><img src="./images/img_4_3.png" />
							<h4>社員の出社/健康状態を把握</h4>
							<ul>
								<li>AI測温機能</li>
								<li>マスク着用判断機能</li>
								<li>出勤・同一出社履歴</li>
							</ul>
						</li>
					</ul>
					<h3>職場のデジタル化の運用機能</h3>
					<ul class="card large">
						<li><img src="./images/img_4_4.jpg" />
							<h4>少人数かつリモートで職場運営</h4>
							<ul>
								<li>来客対応不要</li>
								<li>入退室カード管理不要</li>
							</ul>
						</li>
						<li><img src="./images/img_4_5.jpg" />
							<h4>複数拠点もラクラク一括管理</h4>
							<ul>
								<li>本社と拠点を1システムで管理</li>
							</ul>
						</li>
						<li><img src="./images/img_4_6.jpg" />
							<h4>ワンタイムパス</h4>
							<ul>
								<li>ゲストはスマホで撮った写真を送付</li>
								<li>管理者はクラウド上で確認・承認</li>
							</ul>
						</li>
					</ul>
					<h3>その他の機能</h3>
					<ul class="card small">
						<li ontouchstart="">
							<div>
								<p><span>セキュリティ機能</span></p><small>権限設定<br>スケジュール<br>認証制限<br>遠隔解除<br>ワンタイムパス<br>マップ管理<br>アクセスグループ（予定）<br>在室管理<br>イベント通知<br>長期認証してない人リスト</small>
							</div>
						</li>
						<li ontouchstart="">
							<div>
								<p><span>打刻管理</span></p><small>打刻集計<br>CSV出力<br>出退勤傾向の表示</small>
							</div>
						</li>
						<li ontouchstart="">
							<div>
								<p><span>AI顔認証</span></p><small>なりすまし対策<br>マスク着用判断機能</small>
							</div>
						</li>
						<li ontouchstart="">
							<div>
								<p><span>API（予定）</span></p><small>勤怠API連携<br>ビジネスチャット連携<br>デバイス連携<br>ユーザー情報連携<br>イベントログ連携</small>
							</div>
						</li>
						<li ontouchstart="">
							<div>
								<p><span>ダッシュボード</span></p><small>登録情報の表示<br>職場内の混雑情報表示<br>職場の利用率表示<br>認証ログの表示<br>エラーログの表示<br>解析ログの表示<br></small>
							</div>
						</li>
						<li ontouchstart="">
							<div>
								<p><span>分析</span></p><small>顔温度異常検出<br>入退室異常検出<br>職場使用率分析<br>混雑度分析<br>表情分析<br>勤怠分析</small>
							</div>
						</li>
						<li ontouchstart="">
							<div>
								<p><span>アラート管理</span></p><small>登録なし入室<br>時間帯許可してない人入室<br>傾向が変わってきた人<br>土日出社アラート<br>チェックイン通知</small>
							</div>
						</li>
					</ul>
				</div>
			</section>
			
			
			<div id="security">
				<div class="bg-gray-top"></div>
				<div class="inner">
					<h2 id="anchor-5">安心のセキュリティ、<br class="min-view">スピード導入</h2>
					<p class="lead">セキュリティ専用回線で安心。SIMが内蔵されているので社内ネットワークと切り離して運用できます。<br class="pc-view">AIエージェントがターミナルを自動接続するから設定手間いらず。</p>
					<figure><img class="pc-view" src="./images/img_5.png" /><img class="sp-view" src="./images/img_5_sp.png" /></figure>
				</div>
			</div>
			<div id="list-case">
				<div class="bg-gray-top"></div>
				<div class="inner">
					<h2 id="anchor-7">導入事例</h2>
					<ul>
						<li><a href="https://secureinc.co.jp/case/detail.html?id=738" target="_blank"><img src="./images/img_7_1.jpg" alt=""><h5>株式会社テス・デザイン</h5><h4>顔認証で高いセキュリティと空間の有効活用を目指して</h4><p>運用と管理が簡単な顔認証クラウド入退室管理システムを導入。ワンタイムパス機能で撮影用の空間提供や、クラウド管理なので執務室やスタジオの管理・運用がどこにいても行えるようになった。</p></a></li>
						<li><a href="https://secureinc.co.jp/case/detail.html?id=756" target="_blank"><img src="./images/img_7_2.jpg" alt=""><h5>ダイヤモンド経営者倶楽部</h5><h4>AI顔認証を活用した安心できる空間づくり</h4><p>すべての会員様が使いやすく安心できる入退室管理を目指して、顔写真を送り登録が完了できる機能で、全国どこからでも会員様の顔登録が可能になった。</p></a></li>
						<li><a href="https://secureinc.co.jp/case/detail.html?id=895" target="_blank"><img src="./images/img_7_3.jpg" alt=""><h5>株式会社ブロードバンドタワー</h5><h4>AI Office BASEの利便性を活かした運用</h4><p>
						顔認証と同時に測温する機能があるため、確実にスクリーニングできるようになりました。顔認証時のエラーはほとんど無くなり、測温の正確性は高いです。</p></a></li>
					</ul>
				</div>
			</div>
			<div id="util">
				<div class="bg-white-top"></div>
				<div class="inner">
					<h2 id="anchor-6">様々な場所で活用可能です</h2>
					<ul>
						<li>
							<figure><img src="./images/img_6_1.png" /></figure>
							<p>派遣会社での現場</p>
						</li>
						<li>
							<figure><img src="./images/img_6_2.png" /></figure>
							<p>イベント会場</p>
						</li>
						<li>
							<figure><img src="./images/img_6_3.png" /></figure>
							<p>フィットネス<br>スポーツジム</p>
						</li>
						<li>
							<figure><img src="./images/img_6_4.png" /></figure>
							<p>工場・物流施設</p>
						</li>
						<li>
							<figure><img src="./images/img_6_5.png" /></figure>
							<p>店舗・<br class="min-view">バックヤード</p>
						</li>
						<li>
							<figure><img src="./images/img_6_6.png" /></figure>
							<p>学校・学習塾</p>
						</li>
						<li>
							<figure><img src="./images/img_6_7.png" /></figure>
							<p>ホテル</p>
						</li>
						<li>
							<figure><img src="./images/img_6_10.png" /></figure>
							<p>エンターテイ<br class="sp-view">メント施設</p>
						</li>
						<li>
							<figure><img src="./images/img_6_8.png" /></figure>
							<p>介護・医療施設</p>
						</li>
						<li>
							<figure><img src="./images/img_6_9.png" /></figure>
							<p>建設・工事現場</p>
						</li>
						<li>
							<p>...etc</p>
						</li>
					</ul>
				</div>
			
				
			</div><!--//util-->
		</main>
		<aside>
			<div id="form">
				<div class="scroll">
					<div class="bg-white-top"></div>
					<div class="inner">
						<h2 id="anchor-7"><span>無料資料DLはこちら</span></h2>
						<section class="formsection">
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
									<dt class="req">会社名</dt>
									<dd>
										<div class="err err10_1" v-if="comperr">
											<div class="errbox">{{comperr}}</div>
										</div>
										<input type="text" name="company" placeholder="株式会社セキュア" v-model.trim="company" :value="company" @blur="compcng">
									</dd>
								</dl>
								<!--<dl>
									<dt class="any">部署名</dt>
									<dd>
										<input type="text" name="department" placeholder="総務部" v-model.trim="department" :value="department">
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
										<!-- p class="annotation">※全角でご入力ください</p -->
									</dd>
								</dl>
								
								<!--<dl>
									<dt class="req">ふりがな</dt>
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
									<dt class="req">メールアドレス</dt>
									<dd>
										<div class="err err5_1" v-if="mail1err">
											<div class="errbox">{{mail1err}}</div>
										</div>
										<input type="text" name="mail1" placeholder="info@secureinc.co.jp" v-model.trim="mail1" :value="mail1" @blur="mail1cng">
										<!-- p class="annotation">※半角英数字でご入力ください<br>
										※入力いただいたアドレスに、送信いただいた内容の控えをお送りします<br>
										※メールアドレスに誤りがある場合、ご回答いたしかねますのでご注意ください</p -->
									</dd>
								</dl>
								
								<!--<dl>
									<dt class="req">メールアドレス（確認用）</dt>
									<dd>
										<div class="err err6_1" v-if="mail2err">
											<div class="errbox">{{mail2err}}</div>
										</div>
										<input type="text" name="mail2" placeholder="info@secureinc.co.jp" v-model.trim="mail2" :value="mail2" @blur="mail2cng">
									</dd>
								</dl>-->
								
								<!-- <dl>
									<dt class="req">電話番号</dt>
									<dd>
										<div class="err err4_1" v-if="telerr">
											<div class="errbox">{{telerr}}</div>
										</div>
										<input type="text" name="tel" placeholder="03-6911-0660" v-model.trim="tel" :value="tel" @blur="telcng">
										<p class="annotation">※ハイフンありなしどちらでも可</p>
									</dd>
								</dl> -->
								<!-- <dl>
									<dt class="req">お問い合わせ種別</dt>
									<dd>
										<div class="err err9_1" v-if="kinderr">
											<div class="errbox">{{kinderr}}</div>
										</div>
										<ul>
											<li>
												<label>
													<input type="checkbox" name="kind[]" id="kind1" value="資料請求" v-model="kind" @change="kindcng" /><span>資料請求</span>
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="kind[]" id="kind2" value="デモ依頼" v-model="kind" @change="kindcng" /><span>デモ依頼</span>
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="kind[]" id="kind3" value="見積もり依頼" v-model="kind" @change="kindcng" /><span>見積もり依頼</span>
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="kind[]" id="kind4" value="導入を検討したい" v-model="kind" @change="kindcng" /><span>導入を検討したい</span>
												</label>
											</li>
											<li>
												<label>
													<input type="checkbox" name="kind[]" id="kind5" value="顧客に提案したい" v-model="kind" @change="kindcng" /><span>顧客に提案したい</span>
												</label>
											</li>
										</ul>
									</dd>
								</dl> -->
								<!-- <dl>
									<dt class="any">お問い合わせの内容</dt>
									<dd>
										<div class="err err7_1" v-if="bodyerr">
											<div class="errbox">{{bodyerr}}</div>
										</div>
										<textarea name="body" placeholder="記入例：会社のセキュリティを強化したいと考えています。事務所の扉に指紋か顔認証で出入りできるようにしたいのですが、予算感を教えてください。" v-model.trim="body" :value="body" @blur="bodycng"></textarea>
									</dd>
								</dl> -->
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
								</dl>
							</form>
						</section>
								
								
								
								
					</div>
				</div></div>
		</aside>

		<!-- free download -->
		<div id="bottom_btn">
			<img id="bottom_btn-control" src="/assets/img/ic_close.png" />
			<picture>
				<source media="(min-width:768px)" srcset="/aioffice/images/btn_aioffice_dl.jpg 2000w">
				<source media="(max-width:640px)" srcset="/aioffice/images/btn_aioffice_dl_sp.jpg 870w">
					<a href="#form" class="blink e-scroll-btn"><img srcset="/aioffice/images/btn_aioffice_dl_sp.jpg 870w, /aioffice/images/btn_aioffice_dl.jpg 2000w" alt="ニューノーマル時代のオフィスのあり方虎の巻　無料ダウンロード"></a>
			</picture>
		</div>
		<!-- free download end -->

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
	el: '#formarea',
	data: {
		/*type:       '<?php print($type) ?>',*/
		name1:      '<?php print($name1) ?>',
		name2:      '<?php print($name2) ?>',
		/*furigana1:    '<?php print($furigana1) ?>',*/
		/*furigana2:    '<?php print($furigana2) ?>',*/
		company:    '<?php print($company) ?>',
		/*department:    '<?php print($department) ?>',*/
		mail1:      '<?php print($mail1) ?>',
		/*mail2:      '<?php print($mail2) ?>',*/
		param: 			'<?php print($param) ?>',
		/*body:       `<?php print($body) ?>`,*/
		agree:      false,

		/*typeerr:    '',*/
		nameerr:    '',
		/*furiganaerr:  '',*/
		comperr:    '',
		mail1err:     '',
		/*mail2err:     '',*/
		/*bodyerr:    '',*/
		agreeerr:     '',

		/*typeflg:    <?php if($type!="")             { print('0'); } else { print('1'); } ?>,*/
		nameflg:    <?php if($name1!="" && $name2!="")      { print('0'); } else { print('1'); } ?>,
		/*furiganaflg:  <?php if($furigana1!="" && $furigana2!="")      { print('0'); } else { print('1'); } ?>,*/
		compflg:  <?php if($company!="")              { print('0'); } else { print('1'); } ?>,
		mail1flg:     <?php if($mail1!="")            { print('0'); } else { print('1'); } ?>,
		/*mail2flg:     <?php if($mail2!="")            { print('0'); } else { print('1'); } ?>,*/
		/*bodyflg:    0,*/
		agreeflg:     1,
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
			if(furigana1data && furigana2data){
				this.furiganaflg = 0;
				this.furiganaerr = "";
			}
			if(!furigana1data.match(/^[ぁ-んー　]+$/) && furigana1data) {
				this.furiganaflg = 1;
				this.furiganaerr = "全角ひらがなでご入力ください";
			}
			if(!furigana2data.match(/^[ぁ-んー　]+$/) && furigana2data) {
				this.furiganaflg = 1;
				this.furiganaerr = "全角ひらがなでご入力ください";
			}
			if(!furigana1data || !furigana2data){
				this.furiganaflg = 1;
				this.furiganaerr = "ふりがなが入力されていません";
			}
		},*/
		compcng: function () {
			let compdata = this.company;
			if(!compdata){
				this.compflg = 1;
				this.comperr = "会社名が入力されていません";
			}else{
				this.compflg = 0;
				this.comperr = "";
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
		/*mail2cng: function () {
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
			//let typeflg =     this.typeflg;
			let nameflg =     this.nameflg;
			//let furiganaflg =   this.furiganaflg;
			let compflg =   this.compflg;
			let mail1flg =    this.mail1flg;
			//let mail2flg =    this.mail2flg;
			//let bodyflg =     this.bodyflg;
			let agreeflg =    this.agreeflg;
			if (/*typeflg==0 && */nameflg==0 && /*furiganaflg==0 && */compflg==0 && mail1flg==0 && /*mail2flg==0 && bodyflg==0 &&*/  agreeflg==0) {
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
<!--for modal-->
	<link rel="stylesheet" type="text/css" href="./css/colorbox.css">
	<script src="./js/jquery.colorbox-min.js" type="text/javascript"></script>
	<script type="text/javascript"> 
	$(function(){
		$(document).ready(colorbox);
			$(window).on('resize',colorbox);
			function colorbox() {
				var baseWidth = $(window).width();
				var w = baseWidth*0.8;
				var h = w*0.57;
			$(".youtube-modal").colorbox({
				iframe:true,
				innerWidth: w,
				innerHeight: h,
				maxWidth: "90%"
			});
		};
	});
	</script>
	<!--//for modal-->

	<script type="text/javascript">
	// logo slider
	$(function() {
		$('.js-slide').slick({
			autoplay: true,
			slidesToShow: 6,
			autoplaySpeed: 0,
			cssEase: 'linear',
			speed: 5000,
			arrows: false,

			responsive: [{
			breakpoint: 639,
			settings: {
			slidesToShow: 3
			}
			},{
			breakpoint: 480,
			settings: {
			slidesToShow: 2
			}
			},]

		}); 
	});
	</script>

<!--for table-->
<script id="rendered-js" >
	$(function() {
		var el = $('.toggle');
		var btn = $('button');
		
		btn.on('click', function() {
			// el.toggleClass('show');
			
			if(el.eq(0).css('display') == 'none') {
				// 表示
				el.show();
				
				// ボタンテキスト変更
				btn.text('プラン詳細を閉じる');
			} else {
				// 非表示
				el.hide();
				
				// ボタンテキスト変更
				btn.text('プラン詳細を見る');
			}
		});
	});
	//# sourceURL=pen.js
</script>
<!--//for table-->
	<script type="text/javascript">
	// logo slider
	$(function() {
				$('.blink').on('click', function() {
					$('aside').addClass('blink');
					setTimeout(function() {
						$('aside').removeClass('blink');
					}, 300);
				});
	});
	</script>

</html>