<?php
/*
Template Name: concept
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>私たちの想い | Cotton house - コットンハウス -</title>
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

    <!-- スクロールでふわっと表示 -->
    <script type="text/javascript">
        function scroll_effect() {
          var element = document.getElementsByClassName('scroll-up');
          if(!element) return;
                              
          var scrollY = window.pageYOffset;
          var windowH = window.innerHeight;
          var showTiming = 200; // 要素を表示するタイミング
          for(var i = 0; i < element.length; i++) { 
            var elemClientRect = element[i].getBoundingClientRect(); 
            var elemY = scrollY + elemClientRect.top; 
            if(scrollY > elemY - windowH + showTiming) {
              element[i].classList.add('is-show');
            }
          }
        }
        window.addEventListener('scroll', scroll_effect); // スクロール時に実行
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/concept.css">

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

    <main><!-- 私たちの想い -->

        <div class="title">
            <h2><img class="main-title1" src="<?php echo get_template_directory_uri(); ?>/img/img2/concept-ja.png" alt="私たちの想い"></h2>
            <img  class="main-subtitle1" src="<?php echo get_template_directory_uri(); ?>/img/img2/concept-en.png" alt="concept">
        </div>

        <div class="line">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/img1/line2.png" alt="">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/img1/line2@2x.png" alt="">
        </div>


        <section>

            <h3 class="concept-title load-fade">「私のいいもの、素敵なもの」と<br class="br-sp">ずっと一緒に。</h3>
 
            <div class="description scroll-up">
                <div>
                    <h3><span class="description-afterline">「パッチワーク」</span></h3><br>
                    <p>
                        それはいろいろな柄や色、形の生地を組み合わせて作る手芸のことをいいます。<br>
                        <br>
                        Cotton house-コットンハウス-は、パッチワークの制作販売、オーダーメイド、<br class="br-pc">
                        レッスンの小さなハンドメイドのお店です。<br>
                    </p>
                </div>
                <div class="concept-illust">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img2/concept-img1.png" alt="">
                </div>
            </div>
            
                    
            <div class="concept-img apple">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img2/concept-img2.png" alt="">
            </div>
            

            <div class="description description2 scroll-up">
                <div class="concept-illust concept-misin">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img2/concept-img3.png" alt="">
                </div>                        
                <div>
                    <p>
                        １９８９年、お腹の赤ちゃんのためにおくるみを作ったのがきっかけで
                        <br class="br-pc">パッチワーク・キルティングの世界に入りました。<br>
                        <br>
                        最初は子どものために、次はお友達や両親のために<br class="br-pc">
                        そして今ではみなさんの「これいいな、素敵だな。」その思いのために、<br>
                        <br>
                        ひと針 ひと針 を丁寧に、心をこめて縫っています。
                    </p>
                </div>
            </div>
            
    
            <div class="description scroll-up">
                <p>
                大きさ、かたち、好みは人それぞれ。<br>
                    <br>
                    お店にある全ての作品は世界でたったひとつ、<br class="br-pc">
                    どれをとっても全く同じものはありません。<br>
                    <br>
                    みなさんの、自分だけのお気に入りを見つけてみてください。
                </p>

                <div class="concept-illust concept-hasami">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img2/concept-img5.png" alt="">
                </div>    
            </div>

            
            <div class="setsumei setsumei-sp scroll-up">
                <p>
                    パッチワークの物を暮らしのなかで使うたのしさ、<br class="br-pc">
                    <br class="br-pc">
                    自分好みにつくるよろこびを通じて<br class="br-pc">
                    <br class="br-pc">
                    「みなさんの毎日にハンドメイドの温かみを添えたい」<br>
                    <br>
                    それが私たちの想いです。
                </p>
            </div>
    
            <div class="concept-img horizontal">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img2/concept-img4.png" alt="">
            </div>
                
            <div class="setsumei scroll-up">
                <p>皆さんの毎日に、</p>
            </div>

            <div class="setsumei scroll-up">
                <h3><span class="description-afterline3">「私のいいもの、素敵なもの」を<br class="br-sp">ずっとそばに。</span></h3>
            </div>
            
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img1/logo2.png" alt="Cotton house - コットンハウス -">
            </div>
            

        </section>
        
    </main><!-- 私たちの想い -->


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

