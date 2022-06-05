<?php
/*
Template Name: lessons
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>パッチワーク教室 | Cotton house - コットンハウス -</title>
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

    <link href="<?php echo get_template_directory_uri(); ?>/css/micromodal.css" rel="stylesheet" type="text/css"><!--モーダルウィンドウ ポップアップ-->


    <!-- CSS -->
    <link rel="stylesheet" href="http://unpkg.com/ress/dist/ress.min.css"><!--CSS初期リセット-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"><!--google fonts-->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/img1/favicon.png"><!-- ファビコン -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lessons.css">

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

    <main><!-- パッチワーク教室 -->

        <div class="title">
            <h2><img class="main-title1" src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-ja.png" alt="パッチワーク教室"></h2>
            <img  class="main-subtitle1" src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-en.png" alt="patchwork lessons">
        </div>

        <div class="line">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/img1/line1.png" alt="">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/img1/line1@2x.png" alt="">
        </div>

        <nav>
          <ul class="breadcrumbs">
            <li><a href="https://hcr13.cmnet.co.jp/wp/">ホーム</a></li>
            <li><a href="https://hcr13.cmnet.co.jp/wp/fabrication-lessons/">制作と教室について</a></li>
            <li>パッチワーク教室</li>
          </ul>
        </nav>

        <section>
            <div class="workshop-title">
                <h3><span class="lessons-afterline">ワークショップコース</span></h3>
                <p>
                   ６つのコースからご自分の作りたいものをお選びいただけます。 １回（１〜３時間）のレッスンでお作りいただけます。<br>
                   写真は一例ですので、ご自分の好みに合わせて、お好きな布や柄で組み合わせできます。
                 </p>
            </div>

            <div class="workshop">
                <!-- 画像1 -->
                <div class="one-course" data-micromodal-trigger="modal-1" role="button"><!-- 1列 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img1.png" alt="">
                    <h4>マスクコース</h4>
                    <p>料金　５００円</p>
                </div>
                <!-- 画像2 -->
                <div class="one-course" data-micromodal-trigger="modal-2" role="button">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img2.png" alt="">
                    <h4>キーケースコース</h4>
                    <p>料金　１５００円</p>
                </div>
                <!-- 画像3 -->
                <div class="one-course" data-micromodal-trigger="modal-3" role="button">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img3.png" alt="">
                    <h4>ポーチコース</h4>
                    <p>料金　２０００円</p>
                </div>    
                <!-- 画像4 -->
                <div class="one-course" data-micromodal-trigger="modal-4" role="button"><!-- 1列 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img4.png" alt="">
                    <h4>カードケースコース</h4>
                    <p>料金　２５００円</p>
                </div>
                <!-- 画像5 -->
                <div class="one-course" data-micromodal-trigger="modal-5" role="button">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img5.png" alt="">
                    <h4>ペンケースコース</h4>
                    <p>料金　３０００円</p>
                </div>
                <!-- 画像6 -->
                <div class="one-course" data-micromodal-trigger="modal-6" role="button">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img6.png" alt="">
                    <h4>バッグコース</h4>
                    <p>料金　４０００円</p>
                </div>             
            </div>
            
            <!-- モーダル1 -->
            <div id="modal-1" aria-hidden="true" class="micromodal-slide modal">
                <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title" >
                      <header class="modal__header">
                        <h2 id="modal-1-title" class="modal__title">マスクコース</h2>
                        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                      </header>
                      <div id="modal-1-content" class="modal__content">
                          <p>
                              料金：５００円<br>
                              制作時間：約１時間<br>
                              お好きな色・柄をお選びいただけます。
                          </p>                         
                      </div>
                      <div class="modal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img1.png" alt="">                      
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img1-1.png" alt="">
                      </div>                      
                      <footer class="modal__footer"></footer>
                    </div>
                  </div>
            </div>
            <!-- モーダル2 -->
            <div id="modal-2" aria-hidden="true" class="micromodal-slide modal">
                <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-2-title" >
                      <header class="modal__header">
                        <h2 id="modal-2-title" class="modal__title">キーケースコース</h2>
                        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                      </header>
                      <div id="modal-2-content" class="modal__content">
                        <p>
                            料金：１５００円<br>
                            制作時間：約１.５時間<br>
                            茶系・ピンク系・青系からお選びいただけます。
                        </p>
                      </div>
                      <div class="modal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img2.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img2-2.png" alt="">
                      </div>
                      <footer class="modal__footer"></footer>
                    </div>
                  </div>
            </div>
            <!-- モーダル3 -->
            <div id="modal-3" aria-hidden="true" class="micromodal-slide modal">
                <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-3-title" >
                      <header class="modal__header">
                        <h2 id="modal-3-title" class="modal__title">ポーチコース</h2>
                        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                      </header>
                      <div id="modal-3-content" class="modal__content">
                        <p>
                            料金：２０００円<br>
                            制作時間：約２時間<br>
                            お好きな色・柄をお選びいただけます。
                        </p>
                      </div>
                      <div class="modal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img3.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img3-3.png" alt="">
                      </div>                      
                      <footer class="modal__footer"></footer>
                    </div>
                  </div>
            </div>
            <!-- モーダル4 -->
            <div id="modal-4" aria-hidden="true" class="micromodal-slide modal">
                <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-4-title" >
                      <header class="modal__header">
                        <h2 id="modal-4-title" class="modal__title">カードケースコース</h2>
                        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                      </header>
                      <div id="modal-4-content" class="modal__content">
                        <p>
                            料金：２５００円<br>
                            制作時間：約２時間<br>
                            お好きな色・柄をお選びいただけます。
                        </p>
                      </div>
                      <div class="modal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img4.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img4-4.png" alt="">
                      </div>                      
                      <footer class="modal__footer"></footer>
                    </div>
                  </div>
            </div>
            <!-- モーダル5 -->
            <div id="modal-5" aria-hidden="true" class="micromodal-slide modal">
                <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-5-title" >
                      <header class="modal__header">
                        <h2 id="modal-5-title" class="modal__title">ペンケースコース</h2>
                        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                      </header>
                      <div id="modal-5-content" class="modal__content">
                        <p>
                            料金：３０００円<br>
                            制作時間：約３時間<br>
                            お好きな色・柄をお選びいただけます。
                        </p>
                      </div>
                      <div class="modal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img5.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img5-5.png" alt="">
                      </div>                     
                      <footer class="modal__footer"></footer>
                    </div>
                  </div>
            </div>
            <!-- モーダル6 -->
            <div id="modal-6" aria-hidden="true" class="micromodal-slide modal">
                <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-6-title" >
                      <header class="modal__header">
                        <h2 id="modal-6-title" class="modal__title">バッグコース</h2>
                        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                      </header>
                      <div id="modal-6-content" class="modal__content">
                        <p>
                            料金：４０００円<br>
                            制作時間：約３時間<br>
                            赤系・青系・茶色系からお選びいただけます。
                        </p>
                      </div>
                      <div class="modal-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img6.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img6-6.png" alt="">
                      </div>
                      <footer class="modal__footer"></footer>
                    </div>
                  </div>
            </div>

    
            <div class="lesson">
                <h3 id="lesson"><span class="lessons-afterline">レッスンコース</span></h3>
                <p>
                   レッスンコースでは週に１度、講師の元で学びながらご自分の好きなものを作ることができます。<br>
                   バッグ、布小物、インテリア用品など、型紙作りから丁寧にサポート致します。
                </p>

                <div class="lesson-course">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img7.png" alt="">
                    </div>                   
                    <div class="course-description">
                        <p>【日時】<br>
                            毎週火曜日<br>
                           午後１４：００〜１６：００<br>
                           <br>
                           【金額】<br>
                           月５,０００円 ※布代含みます<br>
                        </p>
                    </div>                   
                </div>  
            </div>
            
    
    
            <div class="button1">
                <a href="https://hcr13.cmnet.co.jp/wp/contact/">教室のお申し込みはこちら</a>
            </div>
    
            <div class="osusume">
                <h3><span class="lessons-afterline">こんな人におすすめ</span></h3>

                <div class="thirty-sixty">
                    <div class="person">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img9.png" alt="">
                        <h4>- 30代-</h4>
                        <p>自分の趣味の時間でほっと息抜きしたい方</p>
                    </div>
                    <div class="person">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img10.png" alt="">
                        <h4>- 40代-</h4>
                        <p>
                           お子さんのスクール用品や<br class="br-pc">
                           ご家族とお揃いの物を作りたい方
                        </p>
                    </div>
                    <div class="person">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img4/lessons-img11.png" alt="">
                        <h4>- 60代-</h4>
                        <p>
                            バッグ、布小物、インテリア用品など<br class="br-pc">
                            日用品をパッチワークで作りたい方</p>
                    </div>
                </div>
            </div>
            
        </section>

    </main><!-- パッチワーク教室 -->

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

<!-- micromodal -->

<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>

<script>
    MicroModal.init({
    disableScroll: true
  });
</script>


</body>
</html>

