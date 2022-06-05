<?php
/*
Template Name: privacypolicy
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>プライバシーポリシー | Cotton house - コットンハウス -</title>
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/privacypolicy.css">

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

    <main><!-- プライバシーポリシー -->

        <div class="title">
            <h2><img class="main-title1" src="<?php echo get_template_directory_uri(); ?>/img/img5/privacypolicy-ja.png" alt="プライバシーポリシー"></h2>
            <img  class="main-subtitle1" src="<?php echo get_template_directory_uri(); ?>/img/img5/privacypolicy-en.png" alt="privacy policy">
        </div>

        <div class="line">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/img1/line3.png" alt="">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/img1/line3@2x.png" alt="">
        </div>

        <p class="privacy">
        Cotton house - コットンハウス -（以下，「当社」といいます。）は，本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。</p><br>

        <h3>第1条（個人情報）</h3><br>
        <p class="privacy">「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p><br>

        <h3>第2条（個人情報の収集方法）</h3><br>
        <p class="privacy">当社は，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を,当社の提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります</p><br>

        <h3>第3条（個人情報を収集・利用する目的）</h3><br>
        <p class="privacy">当社が個人情報を収集・利用する目的は，以下のとおりです。<br>
            当社サービスの提供・運営のため<br>
            ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）<br>
            ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び当社が提供する他のサービスの案内のメールを送付するため<br>
            メンテナンス，重要なお知らせなど必要に応じたご連絡のため<br>
            利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため<br>
            ユーザーにご自身の登録情報の閲覧や変更，削除，ご利用状況の閲覧を行っていただくため<br>
            有料サービスにおいて，ユーザーに利用料金を請求するため<br>
            上記の利用目的に付随する目的</p><br>

        <h3>第4条（利用目的の変更）</h3><br>
        <p class="privacy">当社は，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。<br>
            利用目的の変更を行った場合には，変更後の目的について，当社所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。</p><br>

        <h3>第5条（個人情報の第三者提供）</h3><br>
        <p class="privacy">当社は，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。<br>
            人の生命，身体または財産の保護のために必要がある場合であって，本人の同意を得ることが困難であるとき<br>
            公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって，本人の同意を得ることが困難であるとき<br>
            国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって，本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき<br>
            予め次の事項を告知あるいは公表し，かつ当社が個人情報保護委員会に届出をしたとき<br>
            利用目的に第三者への提供を含むこと<br>
            第三者に提供されるデータの項目<br>
            第三者への提供の手段または方法<br>
            本人の求めに応じて個人情報の第三者への提供を停止すること<br>
            本人の求めを受け付ける方法<br>
            前項の定めにかかわらず，次に掲げる場合には，当該情報の提供先は第三者に該当しないものとします。<br>
            当社が利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合<br>
            合併その他の事由による事業の承継に伴って個人情報が提供される場合<br>
            個人情報を特定の者との間で共同して利用する場合であって，その旨並びに共同して利用される個人情報の項目，共同して利用する者の範囲，利用する者の利用目的および当該個人情報の管理について責任を有する者の氏名または名称について，あらかじめ本人に通知し，または本人が容易に知り得る状態に置いた場合</p><br>

        <h3>第6条（個人情報の開示）</h3><br>
        <p class="privacy">当社は，本人から個人情報の開示を求められたときは，本人に対し，遅滞なくこれを開示します。ただし，開示することにより次のいずれかに該当する場合は，その全部または一部を開示しないこともあり，開示しない決定をした場合には，その旨を遅滞なく通知します。なお，個人情報の開示に際しては，1件あたり1，000円の手数料を申し受けます。<br>
            本人または第三者の生命，身体，財産その他の権利利益を害するおそれがある場合<br>
            当社の業務の適正な実施に著しい支障を及ぼすおそれがある場合<br>
            その他法令に違反することとなる場合<br>
            前項の定めにかかわらず，履歴情報および特性情報などの個人情報以外の情報については，原則として開示いたしません。</p><br>

        <h3>第7条（個人情報の訂正および削除）</h3><br>
        <p class="privacy">ユーザーは，当社の保有する自己の個人情報が誤った情報である場合には，当社が定める手続きにより，当社に対して個人情報の訂正，追加または削除（以下，「訂正等」といいます。）を請求することができます。<br>
            当社は，ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の訂正等を行うものとします。<br>
            当社は，前項の規定に基づき訂正等を行った場合，または訂正等を行わない旨の決定をしたときは遅滞なく，これをユーザーに通知します。</p><br>

        <h3>第8条（個人情報の利用停止等）</h3><br>
        <p class="privacy">当社は，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）を求められた場合には，遅滞なく必要な調査を行います。<br>
            前項の調査結果に基づき，その請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の利用停止等を行います。<br>
            当社は，前項の規定に基づき利用停止等を行った場合，または利用停止等を行わない旨の決定をしたときは，遅滞なく，これをユーザーに通知します。<br>
            前2項にかかわらず，利用停止等に多額の費用を有する場合その他利用停止等を行うことが困難な場合であって，ユーザーの権利利益を保護するために必要なこれに代わるべき措置をとれる場合は，この代替策を講じるものとします。</p><br>

        <h3>第9条（プライバシーポリシーの変更）</h3><br>
        <p class="privacy">本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。<br>
            当社が別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。</p><br>

        <h3>第10条（お問い合わせ窓口）</h3><br>
        <p class="privacy">本ポリシーに関するお問い合わせは，下記の窓口までお願いいたします。<br>
            住所：宮崎県宮崎市橘通東３丁目５−１<br>
            社名：Cotton house - コットンハウス -<br>
            Eメールアドレス：contact@cotton-house.co.jp<br>
            <br>以上
        </p>

        <div class="button1">
            <a href="https://hcr13.cmnet.co.jp/wp/contact/">お問い合わせに戻る</a>
        </div>

    </main><!-- プライバシーポリシー -->

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