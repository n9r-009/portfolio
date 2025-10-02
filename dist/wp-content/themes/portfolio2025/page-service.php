<?php
/*
Template Name:サービスページ / page-service.php
*/
?>
<?php get_header(); ?>

<div class="l-container">

  <div class="p-information p-information-single p-information-single-service">

    <?php
    get_file('headmenu');
    ?>

    <main id="main" class="l-main l-main-information">

      <?php
      $fields = get_fields();
      $allowed_html = [
        "br" => [],
      ];
      ?>

      <?php
      $mv = get_field("mv");
      $img = "";
      $img_webp = "";
      $img_sp = "";
      $img_sp_webp = "";
      $thumbnail = $mv["mv_img_pc"];
      $thumbnail_sp = $mv["mv_img_sp"];
      $title = esc_html(get_the_title());
      $alt = "";

      if ($thumbnail) {
        $img = $thumbnail;
        $img_webp = esc_url(setConverterForMedia($thumbnail));
      } else {
        $img = AST_DUMMYTHUMBMV;
        $img_webp = esc_url(setConverterForMedia(AST_DUMMYTHUMBMV));
      }
      if ($thumbnail_sp) {
        $img_sp = $thumbnail_sp;
        $img_sp_webp = esc_url(setConverterForMedia($thumbnail_sp));
      } else {
        $img_sp = AST_DUMMYTHUMBMV;
        $img_sp_webp = esc_url(setConverterForMedia(AST_DUMMYTHUMBMV));
      }
      if (the_title_attribute(['echo' => false])) {
        $alt = esc_html(the_title_attribute(['echo' => false]));
      }
      ?>

      <div class="l-mv l-mv-service">
        <div class="l-mv-service__img l-mv-service__img--bg">
          <picture class="l-mv__img">
            <source srcset="<?php echo $img_sp_webp ?>" media="(max-width: 767px)" type="image/webp">
            <source srcset="<?php echo $img_sp ?>" media="(max-width: 767px)">
            <source srcset="<?php echo $img_webp ?>" type="image/webp">
            <img src="<?php echo $img ?>" alt="<?php echo $alt ?>">
          </picture>
          <div class="l-mv-service__letter">
            <h2 class="l-mv-service__letterTit">
              <span class="l-mv-service__letterTitMain"><?php echo wp_kses($mv["mv_tit"], $allowed_html); ?></span>
              <span class="l-mv-service__letterTitSub"><?php echo wp_kses($mv["mv_subtit"], $allowed_html); ?></span>
            </h2>
            <ul class="l-mv-service__letterLavel">
              <li class="l-mv-service__letterLavelItem">
                <p class="l-mv-service__letterLavelItemTit">対象</p>
                <p class="l-mv-service__letterLavelItemTxt"><?php echo wp_kses($mv["mv_subject"], $allowed_html); ?></p>
              </li>
            </ul>
          </div>

        </div>
      </div>

      <div class="l-pankuzu">
        <ol class="l-pankuzu__list">
          <li><a href="<?php echo URL_TOP ?>">ホーム</a></li>
          <li><?php the_title() ?></li>
        </ol>
      </div>


      <div class="l-main__spacer">

        <!-- menu -->
        <?php $list_block = get_field("list_block"); ?>
        <?php if (!empty($list_block) && is_array($list_block) && !empty(array_filter($list_block))): ?>
          <section class="l-section p-service-menu">
            <div class="l-section__inner">
              <h2 class="m-tit">
                <span class="m-tit__ja"><?php echo esc_html($list_block["list_block_tit"]); ?></span>
                <span class="m-tit__en"><?php echo esc_html($list_block["list_block_subtit"]); ?></span>
              </h2>
              <ul class="l-flow__list">

                <?php while (have_rows('list_block')): the_row(); ?>
                  <?php if (have_rows('list_block_item')): ?>
                    <?php
                    $num = 1;
                    while (have_rows('list_block_item')): the_row(); ?>
                      <?php $list_block_item_tit = get_sub_field('list_block_item_tit'); ?>
                      <?php $list_block_item_txt = get_sub_field('list_block_item_txt'); ?>
                      <li class="l-flow__item">
                        <p class="l-flow__itemNum"><?php echo sprintf('%02d', $num); ?></p>
                        <div class="l-flow__itemLetter">
                          <p class="l-flow__itemLetterTit"><?php echo esc_html($list_block_item_tit); ?></p>
                          <?php if (!empty($list_block_item_txt)): ?>
                            <p class="l-flow__itemLetterTxt"><?php echo wp_kses($list_block_item_txt, $allowed_html); ?></p>
                          <?php endif; ?>

                        </div>
                      </li>

                    <?php
                      $num++;
                    endwhile;
                    ?>
                  <?php endif; ?>
                <?php endwhile; ?>

              </ul>
            </div>
          </section>
        <?php endif; ?>
        <!-- /menu -->

        <!-- kind -->
        <?php $tag_block = get_field("tag_block"); ?>
        <?php $tag_block_under = get_field("tag_block_under"); ?>
        <?php if (
          (!empty($tag_block) && is_array($tag_block) && !empty(array_filter($tag_block))) ||
          (!empty($tag_block_under) && is_array($tag_block_under) && !empty(array_filter($tag_block_under)))
        ): ?>
          <section class="l-section p-service-kind">
            <div class="l-section__inner">

              <?php if (!empty($tag_block) && is_array($tag_block) && !empty(array_filter($tag_block))): ?>
                <div class="p-service-kind__split">
                  <h2 class="m-tit">
                    <span class="m-tit__ja"><?php echo esc_html($tag_block["tag_block_tit"]); ?></span>
                    <span class="m-tit__en"><?php echo esc_html($tag_block["tag_block_subtit"]); ?></span>
                  </h2>
                  <div class="l-tag">
                    <div class="l-tag__inner">
                      <ul class="l-tag__list">
                        <?php while (have_rows('tag_block')): the_row(); ?>
                          <?php if (have_rows('tag_block_item')): ?>
                            <?php while (have_rows('tag_block_item')): the_row(); ?>
                              <?php $tag_block_item_txt = get_sub_field('tag_block_item_txt'); ?>
                              <li class="l-tag__item">
                                <p class="l-tag__itemTxt"><?php echo esc_html($tag_block_item_txt); ?></p>
                              </li>
                            <?php endwhile; ?>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      </ul>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

              <?php if (!empty($tag_block_under) && is_array($tag_block_under) && !empty(array_filter($tag_block_under))): ?>
                <div class="p-service-kind__split">
                  <h2 class="m-tit">
                    <span class="m-tit__ja"><?php echo esc_html($tag_block_under["tag_block_under_tit"]); ?></span>
                    <span class="m-tit__en"><?php echo esc_html($tag_block_under["tag_block_under_subtit"]); ?></span>
                  </h2>
                  <div class="l-tag">
                    <div class="l-tag__inner">
                      <ul class="l-tag__list">
                        <?php while (have_rows('tag_block_under')): the_row(); ?>
                          <?php if (have_rows('tag_block_under_item')): ?>
                            <?php while (have_rows('tag_block_under_item')): the_row(); ?>
                              <?php $tag_block_under_item_txt = get_sub_field('tag_block_under_item_txt'); ?>
                              <li class="l-tag__item">
                                <p class="l-tag__itemTxt"><?php echo esc_html($tag_block_under_item_txt); ?></p>
                              </li>
                            <?php endwhile; ?>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      </ul>
                    </div>
                  </div>

                </div>
              <?php endif; ?>

          </section>
        <?php endif; ?>
        <!-- kind -->

        <!-- feature -->
        <?php $media_block = get_field("media_block"); ?>
        <?php if (!empty($media_block) && is_array($media_block) && !empty(array_filter($media_block))): ?>
          <section class="l-section p-service-feature">
            <div class="l-section__inner">
              <h2 class="m-tit">
                <span class="m-tit__ja"><?php echo esc_html($media_block["media_block_tit"]); ?></span>
                <span class="m-tit__en"><?php echo esc_html($media_block["media_block_subtit"]); ?></span>
              </h2>

              <?php while (have_rows('media_block')): the_row(); ?>
                <?php if (have_rows('media_block_item')): ?>
                  <?php while (have_rows('media_block_item')): the_row(); ?>
                    <?php $media_block_item_img = get_sub_field('media_block_item_img'); ?>
                    <?php $media_block_item_img_txt = get_sub_field('media_block_item_img_txt'); ?>
                    <?php $media_block_item_txt = get_sub_field('media_block_item_txt'); ?>
                    <?php
                    $img = "";
                    if ($media_block_item_img) {
                      $img =  $media_block_item_img;
                      $img_webp = esc_url(setConverterForMedia($media_block_item_img));
                    } else {
                      $img = AST_DUMMYTHUMB;
                      $img_webp = esc_url(setConverterForMedia(AST_DUMMYTHUMB));
                    }
                    ?>
                    <div class="p-service-feature__doboz">
                      <?php if (!empty($media_block_item_img)): ?>
                        <picture class="p-service-feature__dobozImg">
                          <source srcset="<?php echo esc_url($img_webp); ?>" type="image/webp">
                          <img src="<?php echo esc_url($img); ?>" alt="">
                        </picture>
                      <?php endif; ?>

                      <?php if (!empty($media_block_item_img_txt)): ?>
                        <div class="p-service-feature__dobozLetter">
                          <p class="p-service-feature__dobozLetterTxt"><?php echo wp_kses($media_block_item_img_txt, $allowed_html); ?></p>
                        </div>
                      <?php endif; ?>

                    </div>
                    <?php if (!empty($media_block_item_txt)): ?>

                      <p class="p-service-feature__txt"><?php echo wp_kses($media_block_item_txt, $allowed_html); ?></p>
                    <?php endif; ?>


                  <?php endwhile; ?>
                <?php endif; ?>
              <?php endwhile; ?>

            </div>
          </section>
        <?php endif; ?>
        <!--  /feature -->

        <!-- trouble -->
        <?php $boxlist_block = get_field("boxlist_block"); ?>
        <?php if (!empty($boxlist_block) && is_array($boxlist_block) && !empty(array_filter($boxlist_block))): ?>
          <section class="l-section p-service-trouble">
            <div class="l-section__inner">
              <h2 class="m-tit">
                <span class="m-tit__ja"><?php echo esc_html($boxlist_block["boxlist_block_tit"]); ?></span>
                <span class="m-tit__en"><?php echo esc_html($boxlist_block["boxlist_block_subtit"]); ?></span>
              </h2>
              <ul class="p-service-trouble__list">
                <?php while (have_rows('boxlist_block')): the_row(); ?>
                  <?php if (have_rows('boxlist_block_item')): ?>
                    <?php while (have_rows('boxlist_block_item')): the_row(); ?>
                      <?php $boxlist_block_item_txt = get_sub_field('boxlist_block_item_txt'); ?>
                      <li class="p-service-trouble__item"><?php echo wp_kses($boxlist_block_item_txt, $allowed_html); ?></li>
                    <?php endwhile; ?>
                  <?php endif; ?>
                <?php endwhile; ?>
              </ul>
            </div>
          </section>
        <?php endif; ?>
        <!-- /trouble -->

        <!-- detail -->
        <?php $detail_block = get_field("detail_block"); ?>
        <?php if (!empty($detail_block) && is_array($detail_block) && !empty(array_filter($detail_block))): ?>
          <div class="p-service-detail">
            <div class="p-service-detail__inner">
              <h2 class="m-tit">
                <span class="m-tit__ja"><?php echo esc_html($detail_block["detail_block_tit"]); ?></span>
                <span class="m-tit__en"><?php echo esc_html($detail_block["detail_block_subtit"]); ?></span>
              </h2>
              <table class="l-table">
                <?php while (have_rows('detail_block')): the_row(); ?>
                  <?php if (have_rows('detail_block_item')): ?>
                    <?php while (have_rows('detail_block_item')): the_row(); ?>
                      <?php $detail_block_item_tit = get_sub_field('detail_block_item_tit'); ?>
                      <?php $detail_block_item_txt = get_sub_field('detail_block_item_txt'); ?>
                      <tr>
                        <th><?php echo esc_html($detail_block_item_tit); ?></th>
                        <td><?php echo wp_kses($detail_block_item_txt, $allowed_html); ?></td>
                      </tr>
                    <?php endwhile; ?>
                  <?php endif; ?>
                <?php endwhile; ?>
              </table>
            </div>
          </div>
        <?php endif; ?>
        <!-- /detail -->

        <!-- free -->
        <?php $free_block = get_field("free_block"); ?>
        <?php if (!empty($free_block) && is_array($free_block) && !empty(array_filter($free_block))): ?>
          <section class="l-section p-service-free">
            <div class="l-section__inner">
              <h2 class="m-tit">
                <span class="m-tit__ja"><?php echo esc_html($free_block["free_block_tit"]); ?></span>
                <span class="m-tit__en"><?php echo esc_html($free_block["free_block_subtit"]); ?></span>
              </h2>

              <?php while (have_rows('free_block')): the_row(); ?>
                <?php if (have_rows('free_block_item')): ?>
                  <?php while (have_rows('free_block_item')): the_row(); ?>
                    <?php $free_block_item_img = get_sub_field('free_block_item_img'); ?>
                    <?php $free_block_item_img_txt = get_sub_field('free_block_item_img_txt'); ?>
                    <?php $free_block_item_txt = get_sub_field('free_block_item_txt'); ?>
                    <?php
                    $img = "";
                    if ($free_block_item_img) {
                      $img =  $free_block_item_img;
                      $img_webp = esc_url(setConverterForMedia($free_block_item_img));
                    } else {
                      $img = AST_DUMMYTHUMB;
                      $img_webp = esc_url(setConverterForMedia(AST_DUMMYTHUMB));
                    }
                    ?>
                    <div class="p-service-free__doboz">
                      <?php if (!empty($free_block_item_img)): ?>
                        <picture class="p-service-free__dobozImg">
                          <source srcset="<?php echo esc_url($img_webp); ?>" type="image/webp">
                          <img src="<?php echo esc_url($img); ?>" alt="">
                        </picture>
                      <?php endif; ?>

                      <?php if (!empty($free_block_item_img_txt)): ?>
                        <div class="p-service-free__dobozLetter">
                          <p class="p-service-free__dobozLetterTxt"><?php echo wp_kses($free_block_item_img_txt, $allowed_html); ?></p>
                        </div>
                      <?php endif; ?>

                    </div>
                    <?php if (!empty($free_block_item_txt)): ?>

                      <p class="p-service-free__txt"><?php echo wp_kses($free_block_item_txt, $allowed_html); ?></p>
                    <?php endif; ?>


                  <?php endwhile; ?>
                <?php endif; ?>
              <?php endwhile; ?>

            </div>
          </section>
        <?php endif; ?>
        <!--  /free -->

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