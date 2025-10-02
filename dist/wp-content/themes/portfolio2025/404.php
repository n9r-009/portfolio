<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */
?>
<?php get_header(); ?>

<div class="l-container">

  <div class="p-notfound">

    <?php
    get_file('headmenu');
    ?>

    <main id="main" class="l-main l-main-ir">

      <div class="l-mv l-mv-under">
        <div class="l-mv-under__img">
          <picture>
            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'notfound/sp-mv.jpg')) ?>" media="(max-width: 767px)" type="image/webp">
            <source media="(max-width: 767px)" srcset="<?php echo AST_IMG ?>notfound/sp-mv.jpg">
            <source srcset="<?php echo esc_url(setConverterForMedia(AST_IMG . 'notfound/mv.jpg')) ?>" type="image/webp">
            <img src="<?php echo AST_IMG ?>notfound/mv.jpg" alt="">
          </picture>
          <div class="l-mv-under__tit">
            <h2 class="m-tit">
              <span class="m-tit__ja">404</span>
              <span class="m-tit__en">ERROR</span>
            </h2>
          </div>
        </div>
      </div>

      <div class="l-pankuzu">
        <ol class="l-pankuzu__list">
          <li><a href="<?php echo URL_TOP ?>">HOME</a></li>
          <li>404エラー</li>
        </ol>
      </div>

      <div class="l-main__spacer">

        <section class="l-section p-notfound">
          <div class="l-section__inner">
            <h3 class="m-tit">
              <span class="m-tit__ja">お探しのページは<br class="m-hide--pc">見つかりませんでした</span>
            </h3>
            <div class="p-notfound__body">
              <p class="p-notfound__bodyTxt">お探しいただいたページは一時的にアクセスできない状況にあるか、移動または削除された可能性があります。<br> お手数をおかけしますが、下記よりもう一度お探しください。</p>
            </div>
          </div>
        </section>

      </div>

    </main>

    <?php
    get_file('footcontact');
    get_file('footmenu');
    ?>

  </div>

</div>

<?php get_footer(); ?>