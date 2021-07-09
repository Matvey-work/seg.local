<?php

/**
 * Template Name: Main page
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

?>
 <?php get_header(); ?>

  <main class="main">
    <div class="container">
      <div class="main__wrap">
        <div class="main__doc">
          <div class="block-left">
            <div class="top">
              <p class="top-text t1">Инв. № подл.</p>
              <p class="top-text t2">Подп. и дата</p>
              <p class="top-text t3">Инв. № дубл.</p>
              <p class="top-text t4">Взам. инв. №</p>
              <p class="top-text t5">Подп. и дата</p>
            </div>
            <div class="bottom">
              <p class="bottom-text t1"></p>
              <p class="bottom-text t2"></p>
              <p class="bottom-text t3"></p>
              <p class="bottom-text t4"></p>
              <p class="bottom-text t5"></p>
            </div>
          </div>

          <div class="block-top">
            <a href="#" class="main__doc-link">
              <span class="link-text-top">seg</span>
              <span class="link-text-bottom">№1</span>
            </a>
            <div class="title-box">
              <p class="title-box__text"><?= $custom_fields["tekst_nad_zagolovkom"][0]?></p>
              <h1 class="main-title">
              <?= $custom_fields["main_title"][0]?>
              </h1>
            </div>
          </div>

          <div class="block-dev">
            <a href="/sostav-resursa/" class="block-dev-title">
            <?= $custom_fields["main_link"][0]?>
            </a>
            <p class="block-dev-sub-text">
            <?= $custom_fields["year_sub_link"][0]?><span><?= $custom_fields["abreviatura"][0]?></span> №1
            </p>
          </div>

          <div class="block-bottom">
            <?php for ($i = 0; $i < $custom_fields["dolzhnosti"][0]; $i++): ?>

            <div class="leader-block">
              <p class="leader-title"><?= $custom_fields["dolzhnosti_". $i ."_nazvanie_dolzhnosti"][0];?></p>
              <div class="leader-signature">

                  <img src="<?= wp_get_attachment_url($custom_fields["dolzhnosti_". $i ."_podpis"][0]); ?>" alt="Подпись руководителя">

              </div>
              <p class="leader-name"><?= $custom_fields["dolzhnosti_". $i ."_dannye_rukovoditelya"][0];?></p>

            </div>
            <?php endfor; ?>

            <div class="block-bottom-before">

                <img src="<?= wp_get_attachment_url($custom_fields["pechat"][0]); ?>" alt="Печать">

            </div>
          </div>
          <span class="year"><?= date('Y') ?></span>
        </div>
      </div>

    </div>

  </main>




 <?php get_footer(); ?>
