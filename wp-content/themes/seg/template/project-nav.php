<?php

/**
 * Template Name: шаблон проекта
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


        <div class="main__wrap main__wrap-data-org">
          <div class="main__doc main__doc-data-org">
            <h1 class="resource-link data-org-link complete__title main-title-data-org"><? wp_title("", true) ?></h1>

            <div class="data-org__nav">

              <?php for ($i = 0; $i < $custom_fields["project_nav"][0]; $i++): ?>
                <div class="data-org__nav-item">
                  <span class="data-org__nav-count"><?= $custom_fields["project_nav_". $i ."_poryadkovyj_nomer"][0];?></span>
                  <a href="<?= $custom_fields["project_nav_". $i ."_url"][0];?>" class="data-org__nav-link"><?= $custom_fields["project_nav_". $i ."_text_link"][0];?></a><span class="data-org__nav-link-page"><?= $custom_fields["project_nav_". $i ."_num_page"][0];?></span>
                </div>
              <?php endfor; ?>

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



<?php get_footer(); ?>
