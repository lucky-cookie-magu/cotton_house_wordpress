<?php
/*
Template Name: fabrication
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>制作とオーダーメイド | Cotton house - コットンハウス -</title>
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


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/photoswipe.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/default-skin.css"><!-- photoswipe -->


    <!-- CSS -->
    <link rel="stylesheet" href="http://unpkg.com/ress/dist/ress.min.css"><!--CSS初期リセット-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"><!--google fonts-->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/img1/favicon.png"><!-- ファビコン -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fabrication.css">

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

    <main><!-- 制作とオーダーメイド -->

        <div class="title">
            <h2><img class="main-title1" src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-ja.png" alt="制作とオーダーメイド"></h2>
            <img  class="main-subtitle1" src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-en.png" alt="fabrication & ordermade">
        </div>

        <div class="line">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/img1/line2.png" alt="">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/img1/line2@2x.png" alt="">
        </div>

        <nav>
            <ul class="breadcrumbs">
              <li><a href="https://hcr13.cmnet.co.jp/wp/">ホーム</a></li>
              <li><a href="https://hcr13.cmnet.co.jp/wp/fabrication-lessons/">制作と教室について</a></li>
              <li>制作とオーダーメイド</li>
            </ul>
        </nav>

        <section>

            <div class="seisaku-title">
                <h3><span class="seisaku-afterline">制作物</span></h3>
                <p>
                    バッグ、ポシェット、キーケースなど普段使いできる小物やインテリアを制作しております。<br>
                    ご自分用にはもちろん、ご家族やお子様、お友達へのプレゼントにも最適です。<br>
                    下記以外でも用途に合わせてお作りいたしますので、お気軽にご相談ください。
                </p>
            </div>
    
            <div class="seisaku-example">
                <p>ご自分やご家族、お友達へのプレゼント用に</p>
            </div>


            <!-- photoswipe -->
            <div class="gallery">
                <div class="data-pswp-gallery">
                    <div class="present" data-pswp>
                        <div class="present-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img7.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img7.jpg" alt=""></a>
                            <p>バッグ</p>
                        </div>
                        <div class="present-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img8.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img8.jpg" alt=""></a>
                            <p>ポシェット</p>
                        </div>
                        <div class="present-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img9.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img9.jpg" alt=""></a>
                            <p>タペストリー</p>
                        </div>
                        <div class="present-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img10.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img10.jpg" alt=""></a>
                            <p>キーケース</p>
                        </div>
                        <div class="present-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img11.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img11.jpg" alt=""></a>
                            <p>ポーチ</p>
                        </div>
                        <div class="present-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img12.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img12.jpg" alt=""></a>
                            <p>ペンケース</p>
                        </div>
                        <div class="present-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img13.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img13.jpg" alt=""></a>
                            <p>マスク</p>
                        </div>
                        <div class="present-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img14.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img14.jpg" alt=""></a>
                            <p>メガネ入れ</p>
                        </div>      
                    </div>
                </div>
            </div>
    
            <div class="seisaku-example">
                <p>お子さんやお孫さんの保育園や幼稚園、学校用に</p>
            </div>
            
            <div class="gallery">
                <div class="data-pswp-gallery">
                    <div class="for-child" data-pswp>
                        <div class="for-child-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img15.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img15.jpg" alt=""></a>
                            <p>リコーダー入れ</p>
                        </div>
                        <div class="for-child-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img16.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img16.jpg" alt=""></a>
                            <p>体操着入れ</p>
                        </div>
                        <div class="for-child-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img17.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img17.jpg" alt=""></a>
                            <p>水筒入れ</p>
                        </div>
                        <div class="for-child-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img18.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img18.jpg" alt=""></a>
                            <p>教科書バッグ</p>
                        </div>
                        <div class="for-child-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img19.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img19.jpg" alt=""></a>
                            <p>図書バッグ</p>
                        </div>
                        <div class="for-child-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img20.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img20.jpg" alt=""></a>
                            <p>シューズ入れ</p>
                        </div>
                        <div class="for-child-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img21.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img21.jpg" alt=""></a>
                            <p>定規ケース</p>
                        </div>
                        <div class="for-child-item">
                            <!-- Detect image links from internal elements and generate PhotoSwipe objects. -->
                            <!-- If you want to display captions and authors, specify the data-caption and data-author attributes. -->
                            <a href="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img22.jpg" data-size="800x600" target="_blank" data-caption="Caption Here." data-author="Photo by cotton house"><img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img22.jpg" alt=""></a>
                            <p>お弁当入れ</p>
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="ordermade-title">
                <h3><span class="ordermade-afterline">オーダーメイド承ります</span></h3>
                <p>
                    お好みに合わせて、オーダーメイドでお作り致します。<br>
                    ご希望を詳しく伺うため、来店のみのご対応とさせていだだきます。<br>
                    お問い合わせより、ご来店日時の予約やご相談も可能です。
                </p>
            </div>
    
             
            <h4>ご注文方法</h4>

                
            <div class="ordermade">
                <div class="order-method"><!-- 1列 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img1.png" alt="">
                    <p>①ご来店<br>（来店日時を予約）<br>    
                    </p>
                </div>
                
                <div class="order-method">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img2.png" alt="">
                    <p>②作るもののご相談</p>
                    <br>
                </div>
                
                <div class="order-method">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img3.png" alt="">
                    <p>③生地や色選び</p>
                    <br>
                </div>
    
                <div class="order-method"><!-- 1列 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img4.png" alt="">
                    <p>④サイズを決める</p>
                    <br>
                </div>
                
                <div class="order-method">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img5.png" alt="">
                    <p>⑤仕上がり予定のご連絡</p>
                    <br>
                </div>
                
                <div class="order-method">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img3/fabrication-img6.png" alt="">
                    <p>⑥お渡し</p>
                    <br>
                </div>
            </div>

            <div class="button1">
                <a href="https://hcr13.cmnet.co.jp/wp/contact/">オーダーメイドのお問い合わせはこちら</a>
            </div>

        </section>

        
        

    </main><!-- 制作とオーダーメイド -->

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


<!-- photoswipe -->
<script src="<?php echo get_template_directory_uri(); ?>/js/photoswipe.js" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/photoswipe-ui-default.js" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/photoswipe-simplify.js" charset="utf-8"></script>

<script charset="utf-8">
    photoswipeSimplify.init();
</script>


</body>
</html>

