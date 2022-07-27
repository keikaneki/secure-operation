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
	<title>ニュース｜顔認証セキュリティはSECURE | 株式会社セキュア</title>
	<meta name="description" content="監視カメラシステムや入退室システム等のセキュリティソリューションを提供する株式会社セキュアのニュース一覧ページです。">
	<meta name="keywords" content="セキュア,SECURE,ニュース,お知らせ,プレスリリース,セキュリティ">
	<link rel="shortcut icon" href="/assets/img/fav.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta property="og:title" content="ニュース｜AI、顔認証セキュリティはSECURE">
	
	<meta property="og:type" content="website">
	<meta property="og:description" content="監視カメラシステムや入退室システム等のセキュリティソリューションを提供する株式会社セキュアのニュース一覧ページです。">
	<meta property="og:url" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
	<meta property="og:image" content="/assets/img/share.png">
	<meta property="og:site_name" content="入退室管理・防犯カメラなど、オフィスセキュリティのことならセキュア">
	<meta property="og:locale" content="ja_JP">
	<link rel="stylesheet" href="/assets/css/common.css?v=20021303">
	<script src="/assets/js/jquery1.8.3.js"></script>
	<script src="/assets/js/common.min.js"></script>
	<script src="/assets/js/bundle.js"></script>
<script src="/assets/js/include.js" type="text/javascript"></script></head>

<body><!-- Google Tag Manager (noscript) -->
	{{ news_detail_data['contents']['sub_title'] }}
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5873P36"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header class="header-include"></header>
	<section class="news l-inner news_detail_page">
		<nav class="breadcrumb">
			<ul>
				<li><a href="/">TOP</a></li>
				<li><a href="/news/">NEWS一覧</a></li>
				<li><span>NEWS詳細</span></li>
			</ul>
		</nav>
		
		<div class="ttlarea ta-c">
			<h1 class="fs-rennermedium fs-50">NEWS</h1>
			<h2 class="fs-20">ニュース</h2>
		</div>

		<div class="pager">
			<div v-if="around_pages && around_pages.length && around_pages[0]['before']" class="prev">
				<a :href="'/news/detail.html?id=' + around_pages[0]['before']['ID']">PREV NEWS</a></div>
			<div class="pagination">
				<ul>
					<li><a href="/news/"><img src="/assets/img/ico/back.png" alt="" width="20" heigth="19"></a></li>
				</ul>
			</div>
			<div v-if="around_pages && around_pages.length && around_pages[0]['after']" class="next">
				<a :href="'/news/detail.html?id=' + around_pages[0]['after']['ID']">NEXT NEWS</a></div>
		</div>

<!-- 		<div class="case-pager">
			<ul>
				<li class="prev"><a href="case01.html"><span class="noPC">PREV CASE</span><span class="noSP">PREV NEWS</span></a></li>
				<li class="home"><a href="index.html"><img src="../assets/img/ico/back.png" class="back">一覧へ戻る</a></li>
				<li class="next"><a href="case03.html"><span class="noPC">NEXT CASE</span><span class="noSP">NEXT NEWS</span></a></li>
			</ul>
		</div> -->
		
		<div class="l-cols">
			<div class="main col">
				<article v-if="news_detail_data">
					<div class="box ta-c">
						<h1 v-if="news_detail_data['contents']['title']" class="fs-30">
							{{ news_detail_data['contents']['title'] }}</h1>
						<h2 v-if="news_detail_data['contents']['sub_title']" class="fs-24">
							{{ news_detail_data['contents']['sub_title'] }}</h2>
					</div>
					<div class="block" v-if="news_detail_data['contents']['body'].length"
						v-for="(body_item,index) in news_detail_data['contents']['body']">
						<div v-if="body_item['acf_fc_layout'] && body_item['acf_fc_layout'] == 'contents_text'"
							v-html="body_item['contents_text_wysiwyg']"></div>
						<div v-if="body_item['acf_fc_layout'] && body_item['acf_fc_layout'] == 'contents_gallery'"
							class="l-cols auto center">
							<div v-for="(repeater_gallery_item,index) in body_item['contents_gallery_repeater']"
								class="col">
								<img :src="repeater_gallery_item['contents_gallery_repeater_item_image']['url']"
									:alt="repeater_gallery_item['contents_gallery_repeater_item_caption']">
								<p v-html="repeater_gallery_item['contents_gallery_repeater_item_caption']"></p>
							</div>
						</div>
					</div>
				</article>
			</div>

			<div class="sub col">
				<div class="moarch block">
					<ul>
						<li v-for="(archive_data_year,year_index) in archive_data" class="maincat">
							<a class="btn arrow" :href="'/news/?year=' + year_index"><span>{{ year_index }}</span></a>
							<!-- <ul>
								<li v-for="(archive_data_month,index) in archive_data_year">
									<a :href="'/news/?year=' + year_index + '&month=' + archive_data_month">{{ archive_data_month }}</a>
								</li>
							</ul> -->
						</li>
					</ul>
				</div>

				<div class="catarch block">
					<ul>
						<li v-for="(item,index) in category_data">
							<a :href="'/news/?cat=' + item['term_id']" class="btn black xs fs-12">{{ item['name'] }}</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="pager">
			<div v-if="around_pages && around_pages.length && around_pages[0]['before']" class="prev">
				<a :href="'/news/detail.html?id=' + around_pages[0]['before']['ID']">PREV NEWS</a></div>
			<div class="pagination">
				<ul>
					<li><a href="/news/"><img src="/assets/img/ico/back.png" alt="" width="20" heigth="19"></a></li>
				</ul>
			</div>
			<div v-if="around_pages && around_pages.length && around_pages[0]['after']" class="next">
				<a :href="'/news/detail.html?id=' + around_pages[0]['after']['ID']">NEXT NEWS</a></div>
		</div>

	</section>
	<aside>
<div class="contact-include"></div>
<div class="case-include"></div>
<div class="solution-include"></div>
</aside>

	<div class="dlbox noPC">
		<a href="/download/" class="btn orange shadow">
			3分で分かる「オフィスセキュリティ対策」<br>
			<em class="dl fs-30"><span class="fw-700">資料ダウンロード</span>はコチラ</em>
		</a>
		<strong class="casenum orangeunderline fs-30 fw-500 noSP">導入実績<span class="fc-orange number"><span class="fs-60 fw-700 number">4,000</span>社</span>以上</strong>
	</div>


	<div class="pagetop">
		<span class="fs-renner">PAGE TOP</span>
	</div>
	<footer class="footer-include"></footer>
	<div class="mask"></div>
</body>
</html>