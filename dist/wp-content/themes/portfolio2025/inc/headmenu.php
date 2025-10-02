<?php
global $siteUrl;
global $astUrl;
$fields = get_fields();
$allowed_html = [
  "br" => [],
];
?>
<header id="header" class="l-header">
  <div class="l-header__inner">
    <div class="l-header__doboz">
      <div class="l-header__dobozSplit">
        <h1 class="l-header__logo">
          <a class="l-header__logoLink" href="<?php echo URL_TOP ?>">
            <div class="l-header__logoImg">
              <img src="<?php echo AST_IMG ?>global/header/logo.png" alt="株式会社xxx">
            </div>
          </a>
        </h1>
      </div>
      <div class="l-header__dobozSplit">
        <ul class="l-header__gnav">
          <li class="l-header__gnavItem js-megamenuTrigger">
            <a href="javascipt:void(0)" onclick="return false;" data-megamenu="0" class="l-header__gnavLink">サービス紹介</a>
          </li>
          <li class="l-header__gnavItem">
            <a href="<?php echo URL_TOP_COMPANY ?>" class="l-header__gnavLink">会社概要</a>
          </li>
          <li class="l-header__gnavItem">
            <a href="<?php echo URL_TOP_MAP ?>" class="l-header__gnavLink">アクセス</a>
          </li>
          <li class="l-header__gnavItem js-megamenuTrigger">
            <a href="javascipt:void(0)" onclick="return false;" data-megamenu="1" class="l-header__gnavLink">情報</a>
          </li>
        </ul>
        <div class="m-button">
          <a href="<?php echo URL_TOP_CONTACT ?>" class="m-buttonLink m-buttonLink--contact">お問合せ</a>
        </div>

        <div class="l-header__contact">
          <a href="<?php echo URL_TOP_CONTACT ?>" class="l-header__contactLink"></a>
        </div>

        <div class="l-header__hmb">
          <button class="l-header__hmbButton js-hmb" id="js-hmb">
            <div></div>
            <div></div>
            <div></div>
          </button>
        </div>

        <!-- megamenu -->
        <div class="l-header__megamenu">
          <div class="l-header__megamenuItem js-megamenuItem-0">
            <div class="l-header__megamenuDoboz">
              <ul class="l-header__megamenuList">
                <?php
                $num = 1;
                $args = [
                  'post_type'      => 'page',
                  'meta_key'       => '_wp_page_template',
                  'meta_value'     => 'page-service.php',
                  'posts_per_page' => -1,
                ];
                $query = new WP_Query($args);
                ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <?php
                    $mv = get_field("mv");
                    $title = esc_html(get_the_title());
                    $link = get_permalink();
                    ?>

                    <li class="l-header__megamenuListItem">
                      <a href="<?php echo $link ?>" class="l-header__megamenuListItemLink">
                        <span class="l-header__megamenuListItemLinkMain"><?php echo wp_kses($mv["mv_tit"], $allowed_html); ?></span>
                        <?php if (!empty($mv["mv_subtit"])): ?>
                          <span class="l-header__megamenuListItemLinkSub"><?php echo wp_kses($mv["mv_subtit"], $allowed_html); ?></span>
                        <?php endif; ?>

                      </a>
                    </li>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                <?php endif; ?>
              </ul>
            </div>
          </div>
          <div class="l-header__megamenuItem js-megamenuItem-1">
            <div class="l-header__megamenuDoboz">
              <ul class="l-header__megamenuList">
                <li class="l-header__megamenuListItem">
                  <a href="<?php echo URL_NEWS ?>" class="l-header__megamenuListItemLink">
                    <span class="l-header__megamenuListItemLinkMain">お知らせ</span>
                  </a>
                </li>
                <li class="l-header__megamenuListItem">
                  <a href="<?php echo URL_EXPERT ?>" class="l-header__megamenuListItemLink">
                    <span class="l-header__megamenuListItemLinkMain">専門情報</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /megamenu -->

      </div>
    </div>
  </div>
  <!-- drwNav -->
  <nav id="js-drwNav" class="l-header__drwNav js-drwNav">
    <div class=" l-header__drwNavDoboz">
      <div class="l-header__drwNavDobozList">

        <div class="l-header__drwNavDobozListItem">
          <div class="l-header__drwNavDobozAccordion">
            <div class="l-header__drwNavDobozSummary js-toggle__switch">
              <p class="l-header__drwNavDobozSummaryTit">サービス紹介</p>
            </div>
            <div class="js-toggle__next">
              <ul class="l-header__drwNavDobozLinks">
                <?php
                $num = 1;
                $args = [
                  'post_type'      => 'page',
                  'meta_key'       => '_wp_page_template',
                  'meta_value'     => 'page-service.php',
                  'posts_per_page' => -1,
                ];
                $query = new WP_Query($args);
                ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <?php
                    $title = esc_html(get_the_title());
                    $link = get_permalink();
                    ?>
                    <li class="l-header__drwNavDobozLinksItem">
                      <a href="<?php echo $link; ?>" class="l-header__drwNavDobozLinksAnchor">
                        <span class="l-header__drwNavDobozLinksNum"><?php echo sprintf('%02d', $num); ?></span>
                        <span class="l-header__drwNavDobozLinksTit"><?php echo $title; ?></span>
                      </a>
                    </li>
                  <?php
                    $num++;
                  endwhile;
                  ?>
                  <?php wp_reset_postdata(); ?>
                <?php endif; ?>

              </ul>
            </div>
          </div>

        </div>
        <div class="l-header__drwNavDobozListItem">
          <div class="l-header__drwNavDobozAccordion">
            <div class="l-header__drwNavDobozSummary js-toggle__switch">
              <p class="l-header__drwNavDobozSummaryTit">情報</p>
            </div>
            <div class="js-toggle__next">
              <ul class="l-header__drwNavDobozLinks">
                <li class="l-header__drwNavDobozLinksItem">
                  <a href="<?php echo URL_NEWS ?>" class="l-header__drwNavDobozLinksAnchor">
                    <span class="l-header__drwNavDobozLinksNum">01</span>
                    <span class="l-header__drwNavDobozLinksTit">お知らせ</span>
                  </a>
                </li>
                <li class="l-header__drwNavDobozLinksItem">
                  <a href="<?php echo URL_EXPERT ?>" class="l-header__drwNavDobozLinksAnchor">
                    <span class="l-header__drwNavDobozLinksNum">02</span>
                    <span class="l-header__drwNavDobozLinksTit">専門情報</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="l-header__drwNavDobozListItem">
          <div class="l-header__drwNavDobozSummary">
            <a href="<?php echo URL_TOP_COMPANY ?>" class="l-header__drwNavDobozSummaryAnchor">会社概要</a>
          </div>
        </div>
        <div class="l-header__drwNavDobozListItem">
          <div class="l-header__drwNavDobozSummary">
            <a href="<?php echo URL_TOP_MAP ?>" class="l-header__drwNavDobozSummaryAnchor">アクセス</a>
          </div>
        </div>
        <div class="l-header__drwNavDobozListItem">
          <div class="l-header__drwNavDobozSummary">
            <a href="<?php echo URL_PRIVACY ?>" class="l-header__drwNavDobozSummaryAnchor">プライバシーポリシー</a>
          </div>
        </div>

      </div>
      <div class="l-header__drwNavDobozButton">
        <div class="m-button">
          <a href="<?php echo URL_TEL ?>" class="m-buttonLink m-buttonLink--tel">
            <span class="m-buttonLink--small">TEL.</span>
            0123-45-6789</a>
        </div>
        <div class="m-button">
          <a href="<?php echo URL_TOP_CONTACT ?>" class="m-buttonLink m-buttonLink--contact">お問い合わせ</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- /drwNav -->
</header>