<?php
/*
Template Name: プライバシーポリシー page-privacy.php
*/
?>
<?php get_header(); ?>

<div class="l-container">

  <div class="p-privacy">

    <?php
    get_file('headmenu');
    ?>

    <main id="main" class="l-main l-main-privacy">

      <div class="l-mv l-mv-under">
        <div class="l-mv-under__img">
          <picture>
            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'privacy/sp-mv.jpg')) ?>" media="(max-width: 767px)" type="image/webp">
            <source media="(max-width: 767px)" srcset="<?php echo AST_IMG ?>privacy/sp-mv.jpg">
            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'privacy/mv.jpg')) ?>" type="image/webp">
            <img src="<?php echo AST_IMG ?>privacy/mv.jpg" alt="">
          </picture>
          <div class="l-mv-under__tit">
            <h2 class="m-tit">
              <span class="m-tit__ja">プライバシーポリシー</span>
              <span class="m-tit__en">PRIVACY</span>
            </h2>
          </div>
        </div>
      </div>

      <div class="l-pankuzu">
        <ol class="l-pankuzu__list">
          <li><a href="<?php echo URL_TOP ?>">ホーム</a></li>
          <li>プライバシーポリシー</li>
        </ol>
      </div>

      <div class="l-main__spacer">

        <?php
        $site_title = "株式会社xxx";
        ?>
        <!-- content -->
        <section class="l-section p-privacy-content">
          <div class="l-section__inner p-privacy-content__inner">
            <p class="p-privacy-content__txt">本プライバシーポリシーは、<?php echo esc_html($site_title); ?>( 以下、「当社」) の、各種サービス ( 当サイトによる情報提供、各種お問い合わせの受付等 ) において、当サイトの訪問者 ( 以下、「訪問者」とします。) の個人情報もしくはそれに準ずる情報を取り扱う際に、当サイトが遵守する方針を示したものです。</p>
            <ul class="p-privacy-content__list">
              <li class="p-privacy-content__item">
                <h2>1.基本方針</h2>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトは、個人情報の重要性を認識し、個人情報を保護することが社会的責務であると考え、個人情報に関する法令を遵守し、当サイトで取り扱う個人情報の取得、利用、管理を適正に行います。当サイトで収集した情報は、利用目的の範囲内で適切に取り扱います。</p>
              </li>
              <li class="p-privacy-content__item">
                <h2>2.適用範囲</h2>
                <p class="p-privacy-content__itemTxt">本プライバシーポリシーは、当サイトにおいてのみ適用されます。</p>
              </li>
              <li class="p-privacy-content__item">
                <h2>3.個人情報の取得と利用目的</h2>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトで取得する訪問者の個人情報と利用目的、保存期間等は下記の通りです。</p>
                <h3>3-1．コメントを残した際に個人情報を取得します</h3>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトでは、訪問者が当サイトにコメントを残した際に、以下の個人情報を取得します。</p>
                <p class="p-privacy-content__itemTxt">
                  ・コメントフォームに表示されている名前（HN）<br>
                  ・コメントフォームに表示されているメールアドレス<br>
                  ・コメントフォームに表示されているコメント内容<br>
                  ・コメントフォームに表示されているサイト名（任意項目）<br>
                  ・IPアドレス<br>
                  ・ブラウザユーザーエージェント文字列
                </p>
                <p class="p-privacy-content__itemTxt">これにより次回コメントを残す際に、「名前」や「メールアドレス」が自動的に表示されるため、それらを再入力する手間を省くことができます。</p>
                <h4>3-1-1．利用目的について</h4>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">荒し対策やスパム検出に役立てるためと、訪問者の利便性のためです。また、当サイト内で「訪問者からこのようなコメントがありました」と紹介させていただく場合もあります。</p>
                <p class="p-privacy-content__itemTxt">コメントが当サイトの管理人である荒居 健太（以下、「管理人」とします。）に承認されると、プロフィール画像がコメントとともに一般公開されます。</p>
                <h4>3-1-2．保存期間について</h4>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトに残されたコメントは、コメントとそのメタデータを３年間保存します。<br>
                  備考）訪問者は個人情報をブラウザに保存するか選択することが出来ます。<br>
                  訪問者は当サイトにコメントを残す際に、お名前、メールアドレス、お持ちのサイト情報（任意）を ブラウザに保存するかどうかを選択できます。</p>
                <h4>3-1-3．当サイトがコメントに対してできることについて</h4>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">訪問者が当サイトにコメントを残したことがある場合は、当サイトの管理人は、当サイトが保存する訪問者についての個人情報（提供したすべての情報を含む）をエクスポートファイルとして訪問者が「受け取りたい」というリクエストに応えることが出来ます。その際、訪問者のメールアドレスに確認のメールが送られます。
                  また、訪問者から訪問者本人の個人情報を「消去してほしい」というリクエストにも応えることが出来ます。これには、管理や法律、セキュリティ目的のために保持する義務がある情報は含まれません。また消去する際も、訪問者のメールアドレスに確認のメールが送られます。</p>
                <h3>3-2．お問い合せされた個人情報を取得します</h3>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトではお問い合わせフォーム（<a href="<?php echo URL_TOP_CONTACT ?>" class="p-privacy-content__itemTxtLink"><?php echo URL_TOP_CONTACT ?></a>）を設けています。</p>
                <p class="p-privacy-content__itemTxt">訪問者がそのお問い合わせフォームから問い合わせをされた際に入力された、以下の個人情報を取得します。</p>
                <p class="p-privacy-content__itemTxt">・お問い合わせフォームに入力された名前（HN）<br>
                  ・お問い合わせフォームに入力されたメールアドレス<br>
                  ・お問い合わせフォームに入力されたお電話番号<br>
                  ・お問い合わせフォームに入力されたお問合せ内容</p>
                <h4>3-2-1．利用目的について</h4>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">お問い合わせ対応をするためと、訪問者の管理のためです。訪問者からのお問い合わせ情報を保存しておくことによって、同じ訪問者が別のお問い合わせをした際に、過去の問い合わせ内容を踏まえた対応をすることが出来、より的確な対応をすることが出来ます。</p>
                <p class="p-privacy-content__itemTxt">また、当サイト内で「このようなお問合せがありました」と紹介させていただく場合もあります。</p>
                <h4>3-2-2．保存期間について</h4>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">お問い合わせフォームに入力された個人情報は、３年間保存します。</p>
                <h4>3-2-3．個人情報取得の同意について</h4>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトでは、お問い合わせフォームからお問い合わせをする前に、当プライバシーポリシーをご一読いただくよう案内しています。</p>
                <p class="p-privacy-content__itemTxt">お問い合わせをされた時点で、その訪問者は当プライバシーポリシーに同意されたとみなします。</p>
                <h3>3-3．Cookieによる個人情報の取得</h3>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトは、訪問者のコンピュータにCookieを送信することがあります。</p>
                <p class="p-privacy-content__itemTxt">Cookie（クッキー）とは、ウェブサイトを利用したときに、ブラウザとサーバーとの間で送受信した利用履歴や入力内容などを、訪問者のコンピュータにファイルとして保存しておく仕組みです。</p>
                <h4>3-3-1．利用目的について</h4>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">訪問者の当サイト閲覧時の利便性を高めるためです。</p>
                <p class="p-privacy-content__itemTxt">たとえば、次回同じページにアクセスするとCookieの情報を使って、ページの運営者は訪問者ごとに表示を変えることができます。
                  たとえばあるサイトを利用していて、初回はログインパスワードを入力する画面が表示されたけど、2回目以降はログイン画面は表示されずにアクセスできた、という経験ありませんか？それはCookieによるものです。</p>
                <p class="p-privacy-content__itemTxt">訪問者がブラウザの設定でCookieの送受信を許可している場合、ウェブサイトは、訪問者のブラウザからCookieキーを取得できます。</p>
                <p class="p-privacy-content__itemTxt">なお、訪問者のブラウザはプライバシー保護のため、そのウェブサイトのサーバーが送受信したCookieのみを送信します。
                </p>
                <h4>3-3-2．保存期間について</h4>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトに残されたコメントの Cookie は、1年間保存されます（コメントのCookieを1年間保存するのはWordPressのデフォルト設定です。）</p>
                <h4>3-3-3．第三者によるCookie情報の取得について</h4>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトでは、グーグル株式会社やヤフー株式会社などをはじめとする第三者から配信される広告が掲載される場合があり、これに関連して当該第三者が訪問者のCookie情報等を取得して、利用している場合があります。</p>
                <p class="p-privacy-content__itemTxt">当該第三者によって取得されたCookie情報等は、当該第三者のプライバシーポリシーに従って取り扱われます。</p>
                <h4>3-3-4．第三者へのCooke情報等の広告配信の利用停止について</h4>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">訪問者は、当該第三者のウェブサイト内に設けられたオプトアウト（個人情報を第三者に提供することを停止すること）ページにアクセスして、当該第三者によるCookie情報等の広告配信への利用を停止することができます。</p>
                <h4>3-3-5．Cookie情報の送受信の許可・拒否について</h4>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">訪問者は、Cookieの送受信に関する設定を「すべてのCookieを許可する」、「すべてのCookieを拒否する」、「Cookieを受信したらユーザーに通知する」などから選択できます。設定方法は、ブラウザにより異なります。Cookieに関する設定方法は、お使いのブラウザの「ヘルプ」メニューでご確認ください。</p>
                <p class="p-privacy-content__itemTxt">すべてのCookieを拒否する設定を選択されますと、認証が必要なサービスを受けられなくなる等、インターネット上の各種サービスの利用上、制約を受ける場合がありますのでご注意ください。</p>
              </li>
              <li class="p-privacy-content__item">
                <h2>4.個人情報の管理</h2>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトは、訪問者からご提供いただいた情報の管理について、以下を徹底します。</p>
                <h3>4-1. 情報の正確性の確保</h3>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">訪問者からご提供いただいた情報については、常に正確かつ最新の情報となるよう努めます。</p>
                <h3>4-2. 安全管理措置</h3>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトは、個人情報の漏えいや減失または棄損を防止するために、適切なセキュリティ対策を実施し、個人情報を保護します。</p>
                <h3>4-3. 個人情報の廃棄</h3>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">個人情報が不要となった場合には、すみやかに廃棄します。</p>
                <h3>4-4. 個人情報の開示、訂正、追加、削除、利用停止</h3>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">訪問者ご本人からの個人情報の開示、訂正、追加、削除、利用停止をご希望の場合には、ご本人であることを確認させていただいた上、すみやかに対応します。</p>
                <p class="p-privacy-content__itemTxt">上記を希望される場合は、<a href="<?php echo URL_TOP_CONTACT ?>" class="p-privacy-content__itemTxtLink">こちら</a>のフォームよりお問合せください</p>

              </li>
              <li class="p-privacy-content__item">
                <h2>5.個人情報の第三者への提供について</h2>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトは、訪問者からご提供いただいた個人情報を訪問者ご本人の同意を得ることなく、第三者へ提供することはありません。また、今後第三者提供を行うことになった場合には、提供する情報と目的を提示し、訪問者ご本人の同意を得た場合のみ第三者提供を行います。</p>
              </li>
              <li class="p-privacy-content__item">
                <h2>6.未成年の個人情報について</h2>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">未成年者が当サイトにコメントをしたり、お問い合わせフォームからお問い合わせされたりする場合は、必ず親権者からの同意を得るものとし、コメントやお問い合わせされた時点で、当プライバシーポリシーに対して親権者の同意があったものとみなします。</p>
              </li>
              <li class="p-privacy-content__item">
                <h2>7．お問い合わせ先</h2>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイト、又は個人情報の取扱いに関しては、<a href="<?php echo URL_TOP_CONTACT ?>" class="p-privacy-content__itemTxtLink">こちら</a>のフォームよりお問い合わせください。</p>
              </li>
              <li class="p-privacy-content__item">
                <h2>8.アクセス解析ツールについて</h2>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。<br>
                  このGoogleアナリティクスは、アクセス情報の収集のためにCookieを使用しています。このアクセス情報は匿名で収集されており、個人を特定するものではありません。</p>
                <p class="p-privacy-content__itemTxt">GoogleアナリティクスのCookieは、26か月間保持 ( 個々のGoogle Analyticsの設定により期間を変更 )されます。この機能は、Cookieを無効にすることで収集を拒否することができますので、お使いのブラウザの設定をご確認ください。</p>
              </li>
              <li class="p-privacy-content__item">
                <h2>9.プライバシーポリシーの変更について</h2>
                <p class="p-privacy-content__itemTxt p-privacy-content__itemTxt--nospace">当サイトは、個人情報に関して適用される日本の法令を遵守するとともに、本プライバシーポリシーの内容を適宜見直し、その改善に努めます。修正された最新のプライバシーポリシーは常に本ページにて開示されます。</p>
              </li>
          </div>
        </section>
        <!-- /content -->

      </div>

    </main>

    <?php
    get_file('footcontact');
    ?>

    <?php
    get_file('footmenu');
    ?>

  </div>

</div>

<?php get_footer(); ?>