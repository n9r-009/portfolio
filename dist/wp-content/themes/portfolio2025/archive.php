<?php

/**
 * 御祈祷一覧
 *
 * @package WordPress
 */

?>
<?php get_header(); ?>

<div class="l-container">

  <div class="p-information p-information-archive">

    <?php
    get_file('headmenu');
    ?>

    <?php
    $url = $_SERVER['REQUEST_URI'];

    //テストサーバー確認用
    // $base_path = "/";
    // $base_path = "fierte/wp/";
    // $url = str_replace($base_path, '', $url);


    $pages = [
      'post-all' => ['すべて', 'POSTALL', URL_NEWS_ALL],
      'news' => ['お知らせ', 'NEWS', URL_NEWS],
      'expert' => ['専門情報', 'EXPERT', URL_EXPERT],
    ];

    $current = "";
    $tit = "";
    $subtit = "";
    $posttype_label = esc_html(get_post_type_object(get_post_type())->label);

    foreach ($pages as $key => $page) {
      if (strstr($url, "?$key")) {
        list($tit, $subtit, $postLink) = $page;
        $current = "is-active";
        break;
      }
    }

    if ($url === '/news/') {
      $tit = 'お知らせ';
      $subtit = 'NEWS';
      $postLink = URL_NEWS;
      $current = "is-active";
    } elseif ($url === '/expert/') {
      $tit = '専門情報';
      $subtit = 'EXPERT';
      $postLink = URL_EXPERT;
      $current = "is-active";
    }


    ?>

    <main id="main" class="l-main l-main-news">

      <div class="l-mv l-mv-under">
        <div class="l-mv-under__img">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo AST_IMG ?>information/sp-mv.jpg">
            <img src="<?php echo AST_IMG ?>information/mv.jpg" alt="">
          </picture>
          <div class="l-mv-under__tit">
            <h2 class="m-tit">
              <span class="m-tit__ja m-tit__ja--big"><?php echo $tit ?></span>
              <span class="m-tit__en"><?php echo $subtit ?></span>
            </h2>
          </div>
        </div>
      </div>

      <div class="l-pankuzu">
        <ol class="l-pankuzu__list">
          <li><a href="<?php echo URL_TOP ?>">ホーム</a></li>
          <li><?php echo $tit ?></li>
        </ol>
      </div>

      <div class="l-main__spacer">

        <div class="l-tab l-tab--black">
          <div class="l-tab__switch">
            <a class="l-tab__switchItem <?php echo ($tit === "すべて") ? $current : ""; ?>" href="<?php echo URL_NEWS_ALL ?>">すべて</a>
            <a class="l-tab__switchItem <?php echo ($tit === "お知らせ") ? $current : ""; ?>" href="<?php echo URL_NEWS ?>">お知らせ</a>
            <a class="l-tab__switchItem <?php echo ($tit === "専門情報") ? $current : ""; ?>" href="<?php echo URL_EXPERT ?>">専門情報</a>
          </div>
        </div>

        <!-- content -->
        <div class="p-information-archive-content">
          <div class="l-section__inner">

            <?php if (strstr($url, "?" . $key)) : ?>

              <?php
              $args = array(
                'post_type' => array('post', 'expert'),
                'posts_per_page' => -1,
                'paged' => $paged
              );
              $post_all = new WP_Query($args);
              ?>

              <div class="p-information-archive__list">

                <?php if ($post_all->have_posts()) : ?>
                  <?php while ($post_all->have_posts()) : $post_all->the_post();
                  ?>

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

                    <div class="p-information-archive__listItem">
                      <div class="m-card">
                        <a href="<?php echo $link ?>" class="m-card__link">
                          <picture class="m-card__img">
                            <source srcset="<?php echo $img_webp ?>" type="image/webp">
                            <img src="<?php echo $img ?>" alt="<?php echo $img ?>">
                          </picture>
                          <p class="m-card__tit"><?php echo $title ?></p>
                        </a>
                      </div>
                    </div>

                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                <?php else : ?>
                  <div class="m-noposts">まだ投稿がありません。</div>
                <?php endif; ?>

              </div>

            <?php else : ?>

              <div class="p-information-archive__list">

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
                      $img = esc_url(setConverterForMedia(AST_IMG . 'dummy/thumb.jpg'));
                      $img_webp = esc_url(setConverterForMedia(AST_IMG . 'dummy/thumb.jpg'));
                    }
                    if (the_title_attribute(['echo' => false])) {
                      $alt = esc_html(the_title_attribute(['echo' => false]));
                    }
                    $date = get_the_time('Y.m.d');
                    $dataDate = esc_html(str_replace(".", "-", $date));
                    $date = esc_html($date);
                    ?>

                    <div class="p-information-archive__listItem">
                      <div class="m-card">
                        <a href="<?php echo $link; ?>" class="m-card__link">
                          <picture class="m-card__img">
                            <source srcset="<?php echo $img_webp; ?>" type="image/webp">
                            <img src="<?php echo $img; ?>" alt="<?php echo $alt; ?>">
                          </picture>
                          <time class="m-card__data" datetime="<?php echo $dataDate; ?>"><?php echo $date; ?></time>
                          <p class="m-card__tit"><?php echo $title; ?></p>
                        </a>
                      </div>
                    </div>

                  <?php endwhile; ?>
                <?php else : ?>
                  <div class="m-noposts">まだ投稿がありません。</div>
                <?php endif; ?>
              </div>

              <div class="m-pagenavi">
                <?php wp_pagenavi(); ?>
              </div>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

          </div>
        </div>
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