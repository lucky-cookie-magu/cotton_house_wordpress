<?php
/*
Template Name: shop
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>お店について | Cotton house - コットンハウス -</title>
    <meta name="descriprion" content="Cotton house -コットンハウス-はパッチワーク制作・販売、オーダーメイド、パッチワーク教室のお店です。「私のいいもの、すてきなもの」とずっと一緒に。パッチワークの物を暮らしの中で使うたのしさ、自分好みにつくるよろこびを通じてみなさんの毎日にハンドメイドの温かみを添えたい。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- レスポンシブ対応 -->

    <!-- ロードでふわっと表示 -->
    <script type="text/javascript">
        function load_effect() {
          var element = document.getElementsByClassName('load-fade');
          if(!element) return; // 要素がない場合は終了
          
          for(var i = 0; i < element.length; i++) { 
            element[i].classList.add('is-show');
          }
        }
        setTimeout(load_effect, 600); // 600ミリ秒経過後に実行
    </script>

    <noscript> <!--JS無効化対策-->
        <style>
          .load-fade, .scroll-up {
           opacity: 1;
           visibility: visible;
           transform: translateY(0px);
         }
        </style>
    </noscript>


    <!-- CSS -->
    <link rel="stylesheet" href="http://unpkg.com/ress/dist/ress.min.css"><!--CSS初期リセット-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"><!--google fonts-->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/img1/favicon.png"><!-- ファビコン -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/shop.css">

</head>

<body>
    <button id="scroll-to-top-btn"><!-- スクロールアップ　ボタン -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/img1/scrool-button.png" alt="">
    </button>

    <header><!-- ヘッダー -->
        <div class="logo-and-list">
            <h1><a href="index.html"><img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/img1/logo.png" alt="Cotton house-コットンハウス- パッチワーク制作・販売、オーダーメイド、パッチワーク教室のお店"></a></h1>
            <h1><a href="index.html"><img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/img1/logo3@2x.png" alt="Cotton house-コットンハウス- パッチワーク制作・販売、オーダーメイド、パッチワーク教室のお店"></a></h1>
            <nav class="header-list">
                <ul>
                <li><a href="https://hcr13.cmnet.co.jp/wp/">ホーム　</a></li>        
                    <li><a href="https://hcr13.cmnet.co.jp/wp/concept/">私たちの想い　</a></li>
                    <li><a href="https://hcr13.cmnet.co.jp/wp/shop/">お店について　</a></li>
                    <li><a href="https://hcr13.cmnet.co.jp/wp/fabrication-lessons/">制作と教室　</a></li>
                    <li><a href="https://hcr13.cmnet.co.jp/wp/blog-news/">お知らせ　</a></li>
                    <li><a href="https://hcr13.cmnet.co.jp/wp/contact/">お問い合わせ　</a></li>
                    <li><a href="https://hcr13.cmnet.co.jp/wp/netshop/">ネットショップ　</a></li>
                </ul>
            </nav>
       </div>

       <div class="hamburger-menu"><!-- ハンバーガーメニュー -->
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="menu-btn"><span></span></label>
        <!--ここからメニュー-->
        <div class="menu-content">
            <ul>
                <li><a href="https://hcr13.cmnet.co.jp/wp/"><span>ホーム</span></a></li>        
                <li><a href="https://hcr13.cmnet.co.jp/wp/concept/"><span>私たちの想い</span></a></li>
                <li><a href="https://hcr13.cmnet.co.jp/wp/shop/"><span>お店について</span></a></li>
                <li><a href="https://hcr13.cmnet.co.jp/wp/fabrication-lessons/"><span>制作と教室</span></a></li>
                <li><a href="https://hcr13.cmnet.co.jp/wp/fabrication/"><span>制作とオーダーメイド</span></a></li>
                <li><a href="https://hcr13.cmnet.co.jp/wp/lessons/"><span>パッチワーク教室</span></a></li>
                <li><a href="https://hcr13.cmnet.co.jp/wp/blog-news/"><span>お知らせ</span></a></li>
                <li><a href="https://hcr13.cmnet.co.jp/wp/contact/"><span>お問い合わせ</span></a></li>
                <li><a href="https://hcr13.cmnet.co.jp/wp/netshop/"><span>ネットショップ</span></a></li>
            </ul>
        </div>
        <!--ここまでメニュー-->
       </div>

    </header><!-- /ヘッダー -->

    <main><!-- お店について -->

        <div class="title">
            <h2><img class="main-title1" src="<?php echo get_template_directory_uri(); ?>/img/img2/shop-ja.png" alt="お店について"></h2>
            <img  class="main-subtitle1" src="<?php echo get_template_directory_uri(); ?>/img/img2/shop-en.png" alt="about the shop">
        </div>

        <div class="line">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/img1/line4.png" alt="">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/img1/line4@2x.png" alt="">
        </div>


        <div class="contents">

            <div class="artist">
                <div class="contents-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img2/shop-img1.png" alt="作家画像">
                </div>
                <div class="contents-description">
                    <h3><span class="artist-afterline">キルト作家　サトウ　ユウコ</span></h3><br>
                    <p>
                       子供の頃から手作りが好きで、編み物や刺繍を嗜む。<br>
                       娘の誕生をきっかけに、パッチワークキルティングの世界へ。<br>
                       2015年、「Cotton house -コットンハウス-」をオープン。<br>
                    </p>
                </div>               
            </div>

            <img class="shop-line pc" src="<?php echo get_template_directory_uri(); ?>/img/img2/shop-line.png" alt="">
            <img class="shop-line sp" src="<?php echo get_template_directory_uri(); ?>/img/img2/shop-line@2x.png" alt="">

            <div class="shop-interior">
                <div class="contents-img" >
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img2/shop-img2.png" alt="店内内装">
                </div>
                <div class="contents-description">
                    <h3><span class="shop-interior-afterline">店舗内装</span></h3><br>
                    <p>
                        店舗・アトリエ・教室を兼ねています。<br>
                        １階が店舗、２階がアトリエ・教室です。<br>
                        店舗以外でも、creemaやminneでも作品をご購入頂けます。<br>
                    </p>
                </div>               
            </div>

            <img class="shop-line pc" src="<?php echo get_template_directory_uri(); ?>/img/img2/shop-line.png" alt="">
            <img class="shop-line sp" src="<?php echo get_template_directory_uri(); ?>/img/img2/shop-line@2x.png" alt="">

            <div class="map-wrapper">
                <div class="contents-img2">
                    <div class="location-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3386.660060849054!2d131.42199151577486!3d31.915832431240553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3538b741d652e62b%3A0xcb47180e323b94f!2z44CSODgwLTA4MDUg5a6u5bSO55yM5a6u5bSO5biC5qmY6YCa5p2x77yT5LiB55uu77yV!5e0!3m2!1sja!2sjp!4v1652666451676!5m2!1sja!2sjp" width="450" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="location-info contents-description">
                    <h3><span class="location-afterline">Cotton house -コットンハウス- </span></h3><br>
                    <p>
                        〒880-0805<br>
                        宮崎県宮崎市橘通東３丁目５−１<br>
                        TEL  0985 - 25 - 0000<br>
                        営業時間 9:30~18:00<br>
                       （水曜定休）<br>
                    </p>
                </div>
            </div>
    
            <div class="button1">
                <a href="https://hcr13.cmnet.co.jp/wp/netshop/">ネットショップはこちら</a>
            </div>  
                
        </div>
    </main><!-- お店について -->


    <footer><!-- フッター -->
        
        <div class="line">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/img1/line7.png" alt="">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/img1/line7@2x.png" alt="">
        </div>
        
        <div class="footer-area">
             <div class="footer-area-left">
                 <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/img1/logo2.png" alt="Cotton house-コットンハウス-">
                 <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/img1/logo4@2x.png" alt="Cotton house-コットンハウス-">      
                 <div class="adress">
                    <span>〒880-0805</span>
                    <span><br>宮崎県宮崎市橘通東３丁目５−１</span>
                    <span><br>TEL  0985 - 25 - 0000</span>
                    <span><br>営業時間 9:30~18:00</span>
                    <span><br>（水曜定休）</span>
                 </div>
             </div>

             <div class="footer-area-right">
                <nav class="footer-list">
                    <ul>
                        <div class="footer-nav1">
                           <li><a href="https://hcr13.cmnet.co.jp/wp/">ホーム</a></li>        
                           <li><a href="https://hcr13.cmnet.co.jp/wp/concept/">私たちの想い</a></li>
                           <li><a href="https://hcr13.cmnet.co.jp/wp/shop/">お店について</a></li>
                           <li><a href="https://hcr13.cmnet.co.jp/wp/privacypolicy/">プライバシーポリシー</a></li>
                        </div>
                        <div class="footer-nav2">
                           <li><a href="https://hcr13.cmnet.co.jp/wp/fabrication-lessons/">制作と教室</a></li>
                           <li><a href="https://hcr13.cmnet.co.jp/wp/fabrication/">制作とオーダーメイド</a></li>
                           <li><a href="https://hcr13.cmnet.co.jp/wp/lessons/">パッチワーク教室</a></li>
                        </div>
                        <div class="footer-nav3">
                           <li><a href="https://hcr13.cmnet.co.jp/wp/blog-news/">お知らせ</a></li>
                           <li><a href="https://hcr13.cmnet.co.jp/wp/contact/">お問い合わせ</a></li>
                           <li><a href="https://hcr13.cmnet.co.jp/wp/netshop/">ネットショップ</a></li>
                        </div>
                    </ul>
                </nav>
                <div class="sns-icon">
                    <a href="https://twitter.com/?lang=ja"><img src="<?php echo get_template_directory_uri(); ?>/img/img1/icon-twitter.png" alt="twitter"></a>
                    <a href="https://www.instagram.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/img1/icon-instagram.png" alt="instagram"></a>
                    <a href="https://ja-jp.facebook.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/img1/icon-facebook.png" alt="facebook"></a>
                 </div>
             </div>
        </div>
        
        <div class="rights">
            <p>©️ 2022  Cotton  house -コットンハウス-  RIGHTS  RESERVED. </p>
         </div>

    </footer><!-- /フッター -->

<!-- 最上部スクロールボタン -->
<script>
    //ボタン
const scroll_to_top_btn = document.querySelector('#scroll-to-top-btn');

//クリックイベントを追加
scroll_to_top_btn.addEventListener( 'click' , scroll_to_top );

function scroll_to_top(){
	window.scroll({top: 0, behavior: 'smooth'});
};


//スクロール時のイベントを追加
window.addEventListener( 'scroll' , scroll_event );

function scroll_event(){
	
	if(window.pageYOffset > 400){
		scroll_to_top_btn.style.opacity = '1';
	}else	if(window.pageYOffset < 400){
		scroll_to_top_btn.style.opacity = '0';
	}
	
};
</script>

</body>
</html>
