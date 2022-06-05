<footer><!-- フッター -->
        
        <div class="line scroll-up">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/img1/line5-top-pc.png" alt="">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/img1/line5-top-sp@2x.png" alt="">
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


<!-- サイトオープン　ロゴフェードイン -->
<script>
    $(function() {
	setTimeout(function(){
		$('.logo_fadein p').fadeIn(1000);
	},500);
	setTimeout(function(){
		$('.logo_fadein').fadeOut(1000);
	},2500);
});
</script>

<!-- スライダー -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script>
           window.addEventListener('load', function(){
           var elem = document.querySelector(".swiper-container");
           if (elem !== null) { //swiper-containerがあれば…
           var mySwiper = new Swiper(".swiper-container", {
           loop: true, //ループさせる
           effect: "fade", //フェードのエフェクト
           autoplay: {
             delay: 3000, //3秒後に次の画像へ
             disableOnInteraction: false //ユーザー操作後に自動再生を再開する
           },
           speed: 2000, //2秒かけながら次の画像へ移動
           allowTouchMove: false, //マウスでのスワイプを禁止
           navigation: { //左右のページ送りを有効にする
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
           },
          pagination: { //円形のページネーションを有効にする
            el: ".swiper-pagination",
            clickable: true //クリックを有効にする
            }
            });
           }
          });
        </script>

<script>
    var swiper = new Swiper('.swiper-container');
  </script>

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

<?php wp_footer(); ?>
</body>
</html>