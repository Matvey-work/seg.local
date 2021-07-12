<?php

/**
 * Template Name: лист проекта без таблицы
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


        <div class="main__wrap main__wrap-data-org main__wrap--margin">
          <?// the_content() ?>
          <div class="main__doc main__doc-data-org complete project-build">
            <div id="page-two" class="complete__region project-build__block">
                <h3 class="complete__region-title"><?= $custom_fields["list_two_title"][0];?></h3>

                <p class="project-build__text">

                  <?= $custom_fields["text_one"][0];?>

                </p>

                <p class="project-build__text">

                  <?= $custom_fields["text_two"][0];?>

                </p>

                <div class="project-build__list">
                <?php for ($i = 0; $i < $custom_fields["list_one"][0]; $i++): ?>
                  <div class="project-build__item">
                    <p class="project-build__item-text">
                      <span><?= $custom_fields["list_one_". $i ."_num"][0];?></span>
                      <?= $custom_fields["list_one_". $i ."_text"][0];?>
                    </p>
                  </div>
                  <?php endfor; ?>
                </div>

                <p class="project-build__text">
                  <?= $custom_fields["text_three"][0];?>
                </p>

                <p class="project-build__text">
                  <?= $custom_fields["text_four"][0];?>
                </p>

                <p class="project-build__text">
                  <?= $custom_fields["text_five"][0];?>
                </p>

                <div class="project-build__list">
                  <?php for ($i = 0; $i < $custom_fields["list_two"][0]; $i++): ?>
                    <div class="project-build__item">
                      <p class="project-build__item-text">
                        <span><?= $custom_fields["list_two_". $i ."_num"][0];?></span>
                        <?= $custom_fields["list_two_". $i ."_text"][0];?>
                      </p>
                    </div>
                  <?php endfor; ?>
                </div>

                <!-- <div class="project-build__block-img">
                  <p class="project-build__block-img-title">Рис. 1</p>
                  <img src="<?//= wp_get_attachment_url($custom_fields["image"][0]); ?>" alt="">
                </div> -->


            </div>


            <?   render_template('template/bottom-block', compact('custom_fields')); ?>





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

