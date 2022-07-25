var NEWS_API_ENDPOINT = {
  "list": "../api.php?endpoint=news_index_data%3Fmode%3Daistorelab",
  "details": "../api.php?endpoint=news_article%3Fid%3D",
};
// for dev
//ENDPOINT['list'] = "/lp/aistorelab/business/assets/js/posts-20200613.json";
//ENDPOINT['details'] = "/lp/aistorelab/business/assets/js/post-";

/*
<li class="swiper-slide">
  <div class="card">
    <div class="card-image"><img src="assets/img/news-article-1-thumbnail.jpg" alt="thumbnail"></div>
    <div class="card-title">第三者割当増資の実施に関するお知らせ</div>
    <div class="card-content">株式会社セキュア（本社：東京都新
宿区、代表取締役：谷口辰成、以下「セキュア」という）は、今般、i-nest１号
投資事業有限責任組合、株式会社モルフォ、株式会社ブレインパッド、株式会社
ラックプロパティエージェント株式会社、とうほう・ふるさと総活躍...</div>
    <div class="card-footer"><time>2020.01.08</time></div>
  </div>
</li>
*/
var to_news_time = function(date) {
  var year = date.year;
  var month = ("0" + date.month).slice(-2);
  var day = ("0" + date.day).slice(-2);
  return $("<time>").append(year + "." + month + "." + day);
};
var to_news_img = function(body) {
  var src = "assets/img/news-article-default.png";
  var alt = "thumbnail";
  for (var i = 0; i < body.length; i++) {
    if (body[i].contents_gallery_repeater) {
      if (body[i].contents_gallery_repeater.length > 0) {
        var first_image = body[i].contents_gallery_repeater[0].contents_gallery_repeater_item_image;
        console.log("first image", first_image);
        if (first_image) {
          src = first_image.sizes.medium_large;
          alt = first_image.title;
          break;
        }
      }
    }
  }
  return $("<img>").attr("src", src).attr("alt", alt);
};
var to_news_content = function(body) {
  var text = "";
  for (var i = 0; i < body.length; i++) {
    if (body[i].contents_text_wysiwyg) {
      text += body[i].contents_text_wysiwyg;
      if (text.length > 100) {
        console.log("text", text);
        break;
      }
    }
  }
  return $(text).text();
};
var to_news = function(news) {
  console.log("news", news);
  var image = $("<div class='card-image'>")
    .append(to_news_img(news.contents.body));
  var title = $("<div class='card-title'>")
    .append(news.contents.title);
  var content = $("<div class='card-content'>")
    .append(to_news_content(news.contents.body));
  var footer = $("<div class='card-footer'>")
    .append(to_news_time(news.contents.date));
  var news = $("<li class='swiper-slide'>")
    .append($("<a>")
      .append(
        $("<div class='card'>")
          .append(image)
          .append(title)
          .append(content)
          .append(footer)
      )
    );
  return news;
};
