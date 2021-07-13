<?php

/**
 * Template Name: сведения о проектах
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
$num = 2;

?>

<?php get_header(); ?>

  <main class="main">
    <div class="container">
        <div class="main__wrap main__wrap-data-org">
          <div class="main__doc main__doc-data-org">
            <h1 class="resource-link data-org-link complete__title">
            СВЕДЕНИЯ О ВЫПОЛНЕННЫХ ПРОЕКТАХ РАЗРАБОТЧИКОМ
            </h1>

            <div class="data-org__nav">

              <?php for ($i = 0; $i < $custom_fields["complete_nav"][0]; $i++): ?>
              <div class="data-org__nav-item">
                <span class="data-org__nav-count"><?= $custom_fields["complete_nav_". $i ."_poryadkovyj_nomer"][0];?></span>
                <a href="<?= $custom_fields["complete_nav_". $i ."_url"][0];?>" class="data-org__nav-link"><?= $custom_fields["complete_nav_". $i ."_text_link"][0];?></a><span class="data-org__nav-link-page"><?= $custom_fields["complete_nav_". $i ."_num_page"][0];?></span>
              </div>
              <?php endfor; ?>

            </div>



            <? render_template('template/bottom-block', compact('custom_fields', 'list_num', 'num')); ?>

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

        <div class="main__wrap main__wrap-data-org main__wrap--margin">
          <div class="main__doc main__doc-data-org complete">

            <div id="info" class="complete__region">
                <h3 class="complete__region-title"><?= $custom_fields["region_title"][0];?></h3>
                <p class="complete__region-sub-title">
                  <?= $custom_fields["region_sub_title"][0];?>
                </p>

                <div class="complete__region-map">
                  <img src="<?= wp_get_attachment_url($custom_fields["region_map_img"][0]); ?>" class="complete__region-map-img" alt="карта">
                </div>

            </div>

            <div class="complete__project">
              <h3 class="complete__region-title"><?= $custom_fields["region_title_two"][0];?></h3>
              <p class="complete__region-text">
                <?= $custom_fields["region_text"][0];?>
              </p>
              <div class="complete__project-table">
                <h4 class="table__name">Таблица 1</h4>
                <table class="table" border="2" cellpadding="10">
                  <tr class="table-head">
                    <th class="cell-head cell-num">№</th>
                    <th class="cell-head cell-client">Заказчик</th>
                    <th class="cell-head cell-year">Год</th>
                    <th class="cell-head cell-obj">Наименование объекта</th>
                  </tr>
                  <?php for ($i = 0; $i < $custom_fields["table"][0]; $i++): ?>
                  <tr class="table-row">
                    <td class="cell-num"><?= $custom_fields["table_". $i ."_num"][0];?></td>
                    <td class="cell-client"><?= $custom_fields["table_". $i ."_client"][0];?></td>
                    <td class="cell-year"><?= $custom_fields["table_". $i ."_year"][0];?></td>
                    <td class="cell-obj"><?= $custom_fields["table_". $i ."_obj"][0];?></td>
                  </tr>
                  <? endfor; ?>
                </table>
              </div>
            </div>



                    <? $list_num = 2 ?>

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




    </div>
  </main>

<?php get_footer(); ?>
