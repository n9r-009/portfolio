<?php

/**
 * TOPページ
 *
 * @package WordPress
 */
?>
<?php get_header(); ?>

<div class="l-container">

  <div class="p-top">

    <?php
    get_file('headmenu');
    ?>

    <main id="main" class="l-main l-main-top">

      <!-- mv -->
      <div class="l-mv l-mv-top">
        <h2 class="l-mv__tit">
          <sapn class="js-fade"></sapn>
        </h2>
        <div class="swiper-container swiper-container__mv">
          <picture class="l-mv__img">
            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top/sp-mv01.jpg')) ?>" media="(max-width: 767px)" type="image/webp">
            <source media="(max-width: 767px)" srcset="<?php echo AST_IMG ?>top/sp-mv01.jpg">
            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top/mv01.jpg')) ?>" type="image/webp">
            <img src="<?php echo AST_IMG ?>top/mv01.jpg" alt="">
          </picture>
        </div>
      </div>
      <!-- /mv -->

      <div class="l-main__spacer">

        <!-- about -->
        <section class="l-section p-top-about">
          <div class="l-section__inner">
            <h2 class="m-tit">About</h2>
            <ul class="p-top-about__list">
              <li class="p-top-about__item">
                <div class="p-top-about__split">
                  <picture class="p-top-about__img">
                    <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top/sp-about_img_01.jpg')) ?>" media="(max-width: 767px)" type="image/webp">
                    <source media="(max-width: 767px)" srcset="<?php echo AST_IMG ?>top/sp-about_img_01.jpg">
                    <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top//about_img_01.jpg')) ?>" type="image/webp">
                    <img src="<?php echo AST_IMG ?>top/about_img_01.jpg" alt="">
                  </picture>
                </div>
                <div class="p-top-about__split">
                  <div class="p-top-about__letter">
                    <h3 class="p-top-about__letterTit">ダミータイトル</h3>
                    <p class="p-top-about__letterTxt">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト<br><br>
                      ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト<br><br>
                      ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
                  </div>
                </div>
              </li>
              <li class="p-top-about__item">
                <div class="p-top-about__split">
                  <picture class="p-top-about__img">
                    <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top/sp-about_img_01.jpg')) ?>" media="(max-width: 767px)" type="image/webp">
                    <source media="(max-width: 767px)" srcset="<?php echo AST_IMG ?>top/sp-about_img_01.jpg">
                    <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top//about_img_01.jpg')) ?>" type="image/webp">
                    <img src="<?php echo AST_IMG ?>top/about_img_01.jpg" alt="">
                  </picture>
                </div>
                <div class="p-top-about__split">
                  <div class="p-top-about__letter">
                    <h3 class="p-top-about__letterTit">ダミータイトル</h3>
                    <p class="p-top-about__letterTxt">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト<br><br>
                      ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト<br><br>
                      ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
                  </div>
                </div>
              </li>
              <li class="p-top-about__item">
                <div class="p-top-about__split">
                  <picture class="p-top-about__img">
                    <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top/sp-about_img_01.jpg')) ?>" media="(max-width: 767px)" type="image/webp">
                    <source media="(max-width: 767px)" srcset="<?php echo AST_IMG ?>top/sp-about_img_01.jpg">
                    <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top//about_img_01.jpg')) ?>" type="image/webp">
                    <img src="<?php echo AST_IMG ?>top/about_img_01.jpg" alt="">
                  </picture>
                </div>
                <div class="p-top-about__split">
                  <div class="p-top-about__letter">
                    <h3 class="p-top-about__letterTit">ダミータイトル</h3>
                    <p class="p-top-about__letterTxt">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト<br><br>
                      ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト<br><br>
                      ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <!-- /about -->

        <!-- skill -->
        <section class="l-section p-top-skill">
          <div class="l-section__inner">
            <h2 class="m-tit">skill</h2>
            <ul class="p-top-skill__list">
              <li class="p-top-skill__item">
                <p class="p-top-skill__itemTit">ダミータイトル</p>
                <p class=" p-top-skill__itemTxt">ダミーテキスト、ダミーテキスト、ダミーテキスト、ダミーテキスト、ダミーテキスト、ダミーテキスト、ダミーテキスト</p>
              </li>
              <li class="p-top-skill__item">
                <p class="p-top-skill__itemTit">ダミータイトル</p>
                <p class=" p-top-skill__itemTxt">ダミーテキスト、ダミーテキスト、ダミーテキスト、ダミーテキスト、ダミーテキスト、ダミーテキスト、ダミーテキスト</p>
              </li>
              <li class="p-top-skill__item">
                <p class="p-top-skill__itemTit">ダミータイトル</p>
                <p class=" p-top-skill__itemTxt">ダミーテキスト、ダミーテキスト、ダミーテキスト、ダミーテキスト、ダミーテキスト、ダミーテキスト、ダミーテキスト</p>
              </li>
            </ul>
          </div>
        </section>
        <!-- /skill -->

        <!-- gallery -->
        <section class="l-section p-top-gallery">
          <div class="l-section__inner"></div>
        </section>
        <!-- /gallery -->

        <!-- works -->
        <section class="l-section p-top-works">
          <div class="l-section__inner"></div>
        </section>
        <!-- /works -->

        <!-- information -->
        <section class="l-section p-top-information" id="news">
          <div class="l-section__inner">
            <h2 class="m-tit m-tit--white">Information</h2>

            <div class="l-tab js-tab js-fade">
              <div class="l-tab__switch js-tab__switch">
                <div class="l-tab__switchItem js-tab__switchItem is-active" data-tabindex="0">すべて</div>
                <div class="l-tab__switchItem js-tab__switchItem" data-tabindex="1">お知らせ</div>
                <div class="l-tab__switchItem js-tab__switchItem" data-tabindex="2">専門情報</div>
              </div>
              <div class="l-tab__main js-tab__main">
                <div class="l-tab__mainItem js-tab__mainItem is-active">
                  <div class="p-top-information__list" id="simpleBar01">

                    <div class="p-top-information__listItem">
                      <div class="m-card">
                        <a href="<?php echo $link; ?>" class="m-card__link">
                          <picture class="m-card__img">
                            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top/sp-about_img_01.jpg')) ?>" media="(max-width: 767px)" type="image/webp">
                            <source media="(max-width: 767px)" srcset="<?php echo AST_IMG ?>top/sp-about_img_01.jpg">
                            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top//about_img_01.jpg')) ?>" type="image/webp">
                            <img src="<?php echo AST_IMG ?>top/about_img_01.jpg" alt="">
                          </picture>
                          <p class="m-card__tit">スキル</p>
                        </a>
                      </div>
                    </div>

                    <div class="p-top-information__listItem">
                      <div class="m-card">
                        <a href="<?php echo $link; ?>" class="m-card__link">
                          <picture class="m-card__img">
                            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top/sp-about_img_01.jpg')) ?>" media="(max-width: 767px)" type="image/webp">
                            <source media="(max-width: 767px)" srcset="<?php echo AST_IMG ?>top/sp-about_img_01.jpg">
                            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top//about_img_01.jpg')) ?>" type="image/webp">
                            <img src="<?php echo AST_IMG ?>top/about_img_01.jpg" alt="">
                          </picture>
                          <p class="m-card__tit">スキル</p>
                        </a>
                      </div>
                    </div>

                    <div class="p-top-information__listItem">
                      <div class="m-card">
                        <a href="<?php echo $link; ?>" class="m-card__link">
                          <picture class="m-card__img">
                            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top/sp-about_img_01.jpg')) ?>" media="(max-width: 767px)" type="image/webp">
                            <source media="(max-width: 767px)" srcset="<?php echo AST_IMG ?>top/sp-about_img_01.jpg">
                            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top//about_img_01.jpg')) ?>" type="image/webp">
                            <img src="<?php echo AST_IMG ?>top/about_img_01.jpg" alt="">
                          </picture>
                          <p class="m-card__tit">スキル</p>
                        </a>
                      </div>
                    </div>

                    <div class="p-top-information__listItem">
                      <div class="m-card">
                        <a href="<?php echo $link; ?>" class="m-card__link">
                          <picture class="m-card__img">
                            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top/sp-about_img_01.jpg')) ?>" media="(max-width: 767px)" type="image/webp">
                            <source media="(max-width: 767px)" srcset="<?php echo AST_IMG ?>top/sp-about_img_01.jpg">
                            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'top//about_img_01.jpg')) ?>" type="image/webp">
                            <img src="<?php echo AST_IMG ?>top/about_img_01.jpg" alt="">
                          </picture>
                          <p class="m-card__tit">スキル</p>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="m-button">
                    <a href="<?php echo URL_NEWS_ALL ?>" class="m-buttonLink">一覧を見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /information -->

        <!-- skills -->
        <section class="l-section p-top-skills">
          <div class="l-section__inner"></div>
        </section>
        <!-- /skills -->

        <!-- contact -->
        <section class="l-sectio p-top-contact" id="contact">
          <div class="l-section__inner">

            <h2 class="m-tit js-fade">
              <span class="m-tit__ja">お問い合わせ</span>
              <span class="m-tit__en">CONTACT</span>
            </h2>

            <div class="l-form js-fade">
              <div class="l-form__doboz l-form__complete">
                <div class="l-form__dobozWrap">
                  <div class="l-form__completeLetter">
                    <p id="comp" class="l-form__completeLetterTit">お問い合わせありがとうございます。</p>
                    <p class="l-form__completeLetterTxt">このたびは、株式会社xxxへお問い合わせ頂き誠にありがとうございます。</p>
                    <p class="l-form__completeLetterTxt">お送り頂きました内容を確認の上、折り返しご連絡させて頂きます。<br>また、ご記入頂いたメールアドレスへ、自動返信の確認メールをお送りしております。</p>
                    <p class="l-form__completeLetterTxt">しばらく経ってもメールが届かない場合は、入力頂いたメールアドレスが間違っているか、迷惑メールフォルダに振り分けられている可能性がございます。<br>お手数ですが、ご確認の上、もう一度フォームよりお問い合わせ頂きますようお願い申し上げます。</p>
                  </div>
                </div>
              </div>

              <script src="https://yubinbango.github.io/yubinbango/yubinbango.js"></script>
              <?php echo do_shortcode('[contact-form-7 id="93db105" title="お問い合わせ" html_class="h-adr"]'); ?>
            </div>

          </div>
        </section>
        <!-- /contact -->

      </div>

    </main>

    <?php
    get_file('footmenu');
    ?>

  </div>

</div>

<?php get_footer(); ?>