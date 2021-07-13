<?php

/**
 * Template Name: данные об организации page
 */

$custom_fields = get_post_meta($post->ID);

// $resultArr = [];

// for ($j = 0; $j < $custom_fields["diagram_block_list"][0]; $j++) {
//   $img_id = $custom_fields["diagram_block_list_" . $j . "_diagram_img"][0];

//   $resultArr[] = [
//     'one_title' => $custom_fields["diagram_block_list_" . $j . "_one_part_text"][0],
//     'two_title' => $custom_fields["diagram_block_list_" . $j . "_two_part_text"][0],
//     'img' => wp_get_attachment_url($img_id),
//     'img_pos' => $custom_fields["diagram_block_list_" . $j . "_img_position"][0],
//   ];
// }

// echo "<pre>",var_dump($custom_fields),"</pre>";

$list_num = 1;
$num = 3;

?>

<?php get_header(); ?>

  <main class="main">
    <div class="container">
        <div class="main__wrap main__wrap-data-org">
          <div class="main__doc main__doc-data-org">
            <h1 class="resource-link data-org-link main-title-data-org">
            ДАННЫЕ ОБ ОРГАНИЗАЦИИ-РАЗРАБОТЧИКЕ <span>SEG</span> №1
            </h1>

            <div class="data-org__nav">

              <?php for ($i = 0; $i < $custom_fields["org_nav"][0]; $i++): ?>
              <div class="data-org__nav-item">
                <span class="data-org__nav-count"><?= $custom_fields["org_nav_". $i ."_poryadkovyj_nomer"][0];?></span>
                <a href="<?= $custom_fields["org_nav_". $i ."_get_block"][0];?>" class="data-org__nav-link"><?= $custom_fields["org_nav_". $i ."_tekst_ssylki"][0];?></a><span class="data-org__nav-link-page"><?= $custom_fields["org_nav_". $i ."_num_page"][0];?></span>
              </div>
              <?php endfor; ?>

            </div>



            <?   render_template('template/bottom-block', compact('custom_fields', 'list_num', 'num')); ?>

            <div class="block-left">
              <div class="top">
                <p class="top-text t1">Инв. № подл.</p>
                <p class="top-text t2">Подп. и дата</p>
                <p class="top-text t3">Взам. инв. №</p>
              </div>

              <div class="bottom">
                <p class="bottom-text t1"></p>
                <p class="bottom-text t2"></p>
                <p class="bottom-text t3"></p>
              </div>
            </div>

          </div>
        </div>


        <div id="general" class="main__wrap main__wrap-data-org ">
          <div class="main__doc main__doc-data-org">
            <div class="data-org__general-block-top">
              <h3 class="resource-link data-org-link">

                <?= $custom_fields["pervyj_zagolovok"][0];?>

              </h3>
              <p class="data-org-text">
                <?= $custom_fields["tekst_pod_pervym_zagolovkom"][0];?>
              </p>
            </div>

            <div class="data-org__general-block-leader">
              <h3 id="leader"  class="resource-link data-org-link">
              <?= $custom_fields["vtoroj_zagolovok"][0];?>
              </h3>
              <div class="leader-images">
                <?php for ($i = 0; $i < $custom_fields["img_txt_two_block"][0]; $i++): ?>
                <div class="img-dir">
                  <img src="<?= wp_get_attachment_url($custom_fields["img_txt_two_block_". $i ."_foto_leader"][0]); ?>" alt="директор">
                  <p class="leader-text-top"><?= $custom_fields["img_txt_two_block_". $i ."_dolzhnost"][0];?></p>
                  <p class="leader-text-bottom"><?= $custom_fields["img_txt_two_block_". $i ."_fio"][0];?></p>
                </div>
                <?php endfor; ?>


              </div>
            </div>

            <div class="data-org__general-principle principle">

              <h3 id="principle" href="#" class="resource-link data-org-link">
              <?= $custom_fields["zagolovok_tretij"][0];?>
              </h3>
              <p class="principle-title"><?= $custom_fields["podzagolovok_princzipy"][0];?></p>
              <div class="principle-features">
                <?php for ($j = 0; $j < $custom_fields["principles"][0]; $j++): ?>

                <p class="principle-features__item">
                  <span class="principle-features__item-count"><?= $custom_fields["principles_". $j ."_vydelennyj_tekst"][0];?></span> <?= $custom_fields["principles_". $j ."_osnovnoj_tekst"][0];?>
                </p>

                <?php endfor; ?>

              </div>
            </div>

                  <? $list_num = 2; ?>

            <? render_template('template/bottom-block', compact('custom_fields', 'list_num', 'num')); ?>

            <div class="block-left">
              <div class="top">
                <p class="top-text t1">1</p>
                <p class="top-text t2">2</p>
                <p class="top-text t3">3</p>
              </div>

              <div class="bottom">
                <p class="bottom-text t1"></p>
                <p class="bottom-text t2"></p>
                <p class="bottom-text t3"></p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div id="partners" class="main__wrap main__wrap-data-org">
        <div class="main__doc main__doc-data-org">
          <div  class="data-org__general-block-top partners">
            <h3  class="resource-link data-org-link">
            <?= $custom_fields["chetvyortyj_zagolovok"][0]; ?>
            </h3>
            <div class="partners-block">

              <?php for ($i = 0; $i < $custom_fields["partners"][0]; $i++): ?>
              <div>
                <img src="<?= wp_get_attachment_url($custom_fields["partners_". $i ."_img"][0]); ?>" alt="">
              </div>

              <?php endfor; ?>

            </div>
          </div>

          <?php for ($i = 0; $i < $custom_fields["prilozheniya"][0]; $i++): ?>
            <? $images = $custom_fields["prilozheniya_". $i ."_images_list"][0] ?>
            <div class="data-org__general-principle principle principle-list">

              <h3  class="resource-link data-org-link prilojenie">
                <?= $custom_fields["prilozheniya_". $i ."_zagolovok"][0];?>
              </h3>

                <div class="modal-box">
                  <div class="modal-box-slider">



                    <!-- <span class="modal-box__close"></span> -->
                    <? for ($j = 0; $j < $images; $j++): ?>

                      <? $url_img = $custom_fields["prilozheniya_" . $i . "_images_list_" . $j . "_image"][0] ?>

                        <a class="modal-box__img  modal-box__img<?= $i?>" href="<?= wp_get_attachment_url($url_img) ?>" data-fancybox="gallery<?= $i?>">
                          <img src="<?= wp_get_attachment_url($url_img) ?>" alt="">
                          <!-- data-lightbox="roadtrip<?//= $i?> -->
                        </a>

                    <? endfor; ?>
                  </div>
                </div>

              <p class="data-org-text">
                <?= $custom_fields["prilozheniya_". $i ."_tekst"][0];?>
              </p>


            </div>
          <?php endfor; ?>


                      <? $list_num = 3; ?>

            <?   render_template('template/bottom-block', compact('custom_fields', 'list_num', 'num')); ?>

          <div class="block-left">
            <div class="top">
              <p class="top-text t1">1</p>
              <p class="top-text t2">2</p>
              <p class="top-text t3">3</p>
            </div>

            <div class="bottom">
              <p class="bottom-text t1"></p>
              <p class="bottom-text t2"></p>
              <p class="bottom-text t3"></p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>


<?php get_footer(); ?>
