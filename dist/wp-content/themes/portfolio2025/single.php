<?php

/**
 * 御祈祷詳細
 *
 * @package WordPress
 */

?>
<?php get_header(); ?>

<div class="l-container">

  <div class="p-information p-information-single">

    <?php
    get_file('headmenu');
    ?>

    <?php
    $url = $_SERVER['REQUEST_URI'];

    $pages = [
      'post' => ['お知らせ', URL_NEWS],
      'expert' => ['専門情報',  URL_EXPERT],
    ];

    $current = "";
    $tit = "";
    $postLink = "";
    $posttype_label = esc_html(get_post_type_object(get_post_type())->label);

    foreach ($pages as $key => $page) {
      if (strstr($url, "?$key")) {
        list($tit, $postLink) = $page;
        $current = "is-active";
        break;
      } elseif ($key === get_post_type()) {
        list($tit, $postLink) = $page;
        $current = "is-active";
        break;
      }
    }

    if ($url === '/expert/') {
      $tit = '専門情報';
      $postLink = URL_EXPERT;
      $current = "is-active";
    }
    ?>

    <main id="main" class="l-main l-main-information">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php
          $link = esc_url(get_the_permalink());
          $title = wp_kses_post(get_the_title());
          $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'common_thumb');
          $img = "";
          $img_webp = "";
          $alt = "";
          if ($thumbnail) {
            $img = esc_url($thumbnail[0]);
            $img_webp = setConverterForMedia($thumbnail[0]);
          } else {
            $img = esc_url(setConverterForMedia(AST_DUMMYTHUMB));
            $img_webp = esc_url(setConverterForMedia(AST_DUMMYTHUMB));
          }
          if (the_title_attribute(['echo' => false])) {
            $alt = esc_html(the_title_attribute(['echo' => false]));
          }
          ?>

          <div class="l-mv l-mv-under">
            <div class="l-mv-under__img">
              <picture>
                <source srcset="<?php echo $img_sp_webp; ?>" media="(max-width: 767px)" type="image/webp">
                <source srcset="<?php echo $img_sp; ?>" media="(max-width: 767px)">
                <source srcset="<?php echo $img_webp; ?>" type="image/webp">
                <img src="<?php echo $img; ?>" alt="<?php echo $alt; ?>">
              </picture>
              <div class="l-mv-under__tit">
                <h2 class="m-tit">
                  <span class="m-tit__ja m-tit__ja--big"><?php echo $title; ?></span>
                </h2>
              </div>
            </div>
          </div>

          <div class="l-pankuzu">
            <ol class="l-pankuzu__list">
              <li><a href="<?php echo URL_TOP ?>">ホーム</a></li>
              <li><a href="<?php echo $postLink; ?>"><?php echo $tit ?></a></li>
              <?php
              $title_raw = get_the_title();
              $title_clean = esc_html(str_replace(['<br>', '<br/>', '<br />'], ' ', $title_raw));
              $title_pankuzu = mb_strlen($title_clean) > 15 ? mb_substr($title_clean, 0, 15) . '…' : $title_clean;
              ?>
              <li><?php echo $title_pankuzu; ?></li>
            </ol>
          </div>

          <div class="l-main__spacer">


            <section class="l-section p-information-single-content">
              <div class="l-section__inner">
                <h2 class="p-information-single-content__tit"><?php echo $title; ?></h2>
                <div class="p-information-single-content__result">
                  <?php the_content(); ?>
                </div>
                <div class="m-button">
                  <a href="<?php echo $postLink; ?>" class="m-buttonLink m-buttonLink--reverse">一覧を見る</a>
                </div>
              </div>
            </section>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>
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