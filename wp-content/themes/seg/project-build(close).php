<?php

/**
 * Template Name: проект
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


        <? render_template('template/project-nav', compact('custom_fields')); ?>

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

                <div class="project-build__block-img">
                  <p class="project-build__block-img-title">Рис. 1</p>
                  <img src="<?= wp_get_attachment_url($custom_fields["image"][0]); ?>" alt="">
                </div>


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


        <div class="main__wrap main__wrap-data-org main__wrap--margin">
          <div class="main__doc main__doc-data-org complete project-build">

            <div class="complete__region project-build__block">
                <p class="complete__region-sub-title">
                  <?= $custom_fields["list_three_title"][0];?>
                </p>

                <p class="project-build__text">
                  <?= $custom_fields["list_three_txt1"][0];?>
                </p>

                <p class="project-build__text">
                  <?= $custom_fields["list_three_txt2"][0];?>
                </p>

                <div class="project-build__list">
                  <?php for ($i = 0; $i < $custom_fields["list_three_list"][0]; $i++): ?>
                    <div class="project-build__item">
                      <p class="project-build__item-text">
                        <span><?= $custom_fields["list_three_list_". $i ."_num"][0];?></span>
                        <?= $custom_fields["list_three_list_". $i ."_text"][0];?>
                      </p>
                    </div>
                  <?php endfor; ?>
                </div>

                <p class="project-build__text">
                  <?= $custom_fields["list_three_txt3"][0];?>
                </p>

                <p class="project-build__text">
                  <?= $custom_fields["list_three_txt4"][0];?>
                </p>

                <div class="project-build__block-img">
                  <p class="project-build__block-img-title">Рис. 2</p>
                  <img src="<?= wp_get_attachment_url($custom_fields["ist_three_img"][0]); ?>" alt="">
                </div>


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

        <div class="main__wrap main__wrap-data-org main__wrap--margin">
          <div class="main__doc main__doc-data-org complete project-build">

            <div class="complete__region project-build__block">
              <p class="complete__region-sub-title">
                <?= $custom_fields["list_four_title"][0];?>
              </p>

                <?php for ($i = 0; $i < $custom_fields["texts_list_four"][0]; $i++): ?>
                    <p class="project-build__text">
                      <?= $custom_fields["texts_list_four_". $i ."_txt"][0];?>
                    </p>

                <?php endfor; ?>

              <div class="project-build__block-img">
                <p class="project-build__block-img-title">Рис. 3</p>
                <img src="<?= wp_get_attachment_url($custom_fields["list_four_img"][0]); ?>" alt="">
              </div>


            </div>


            <?   render_template('template/bottom-block', compact('custom_fields')); ?>



            <!-- <div class="resource-bottom-block">
              <div class="colls-block-left">
                <div class="row-left row-left-one">
                  <div class="cell-one"></div>
                  <div class="cell-two"></div>
                  <div class="cell-three"></div>
                  <div class="cell-four"></div>
                  <div class="cell-five"></div>
                  <div class="cell-six"></div>
                </div>

                <div class="row-left row-left-two">
                  <div class="cell-one"></div>
                  <div class="cell-two"></div>
                  <div class="cell-three"></div>
                  <div class="cell-four"></div>
                  <div class="cell-five"></div>
                  <div class="cell-six"></div>
                </div>

                <div class="row-left row-left-three">
                  <div class="cell-one"><p>Изм.</p></div>
                  <div class="cell-two"><p>Кол.уч</p></div>
                  <div class="cell-three"><p>Лист</p></div>
                  <div class="cell-four"><p>№док</p></div>
                  <div class="cell-five"><p>Подп.</p></div>
                  <div class="cell-six">Дата</div>
                </div>

                <div class="row-left row-left-four">
                  <div class="cell-one"><p>Разработал</p></div>
                  <div class="cell-two"><p>Соломатин</p></div>
                  <div class="cell-three">
                    <img src="<?= get_template_directory_uri() ?>/build/img/solomatin.png" alt="">
                  </div>
                  <div class="cell-four"><p>10.01.21</p></div>
                </div>

                <div class="row-left row-left-five">
                  <div class="cell-one"><p>Проверил</p></div>
                  <div class="cell-two"><p>Иващенко</p></div>
                  <div class="cell-three">
                    <img src="<?= get_template_directory_uri() ?>/build/img/ivashenko.png" alt="">
                  </div>
                  <div class="cell-four"><p>10.01.21</p></div>
                </div>

                <div class="row-left row-left-six">
                  <div class="cell-one"></div>
                  <div class="cell-two"></div>
                  <div class="cell-three"></div>
                  <div class="cell-four"></div>
                </div>

                <div class="row-left row-left-seven">
                  <div class="cell-one"><p>Н. контр</p></div>
                  <div class="cell-two"><p>Круглов</p></div>
                  <div class="cell-three">
                    <img src="<?= get_template_directory_uri() ?>/build/img/kruglov.png" alt="">
                  </div>
                  <div class="cell-four"><p>10.01.21</p></div>
                </div>

                <div class="row-left row-left-eight">
                  <div class="cell-one"><p>ГИП</p></div>
                  <div class="cell-two"><p>Семенякин</p></div>
                  <div class="cell-three">
                    <img src="<?= get_template_directory_uri() ?>/build/img/semenakin.png" alt="">
                  </div>
                  <div class="cell-four"><p>10.01.21</p></div>
                </div>
              </div>
              <div class="colls-block-right">
                <div class="row-right-top">
                  <p>Раздел 6-ПОС</p>
                </div>
                <div class="row-right-bottom">
                  <div class="wrap-left">
                    <p>Проект организации строительства</p>
                  </div>

                  <div class="wrap-right">
                    <div class="row-right row-right-one">
                      <div class="cell-one"><p>Стадия</p></div>
                      <div class="cell-two"><p>Лист</p></div>
                      <div class="cell-three"><p>Листов</p></div>
                    </div>

                    <div class="row-right row-right-two">
                      <div class="cell-one">П</div>
                      <div class="cell-two">1</div>
                      <div class="cell-three">100</div>
                    </div>

                    <div class="block-logo">
                      <a href="/"><span>SEG</span> №1</a>
                    </div>

                  </div>

                </div>
              </div>
            </div> -->

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
          <div class="main__doc main__doc-data-org complete project-build">

            <div id="data-list" class="complete__region project-build__block">
                <h3 class="complete__region-title"><?= $custom_fields["list_five_title1"][0];?></h3>

                <div class="project-build__list">
                  <?php for ($i = 0; $i < $custom_fields["list_five_list"][0]; $i++): ?>
                    <div class="project-build__item">
                      <p class="project-build__item-text">
                        <span><?= $custom_fields["list_five_list_". $i ."_num"][0];?></span>
                        <?= $custom_fields["list_five_list_". $i ."_text"][0];?>
                      </p>
                    </div>
                  <?php endfor; ?>
                </div>

                <h3 class="complete__region-title"><?= $custom_fields["list_five_title2"][0];?> </h3>

                <?php for ($i = 0; $i < $custom_fields["five_list_texts"][0]; $i++): ?>
                    <p class="project-build__text">
                      <?= $custom_fields["five_list_texts_". $i ."_txt"][0];?>
                    </p>

                <?php endfor; ?>



                <h3 class="complete__region-title"><?= $custom_fields["list_five_title3"][0];?> </h3>

                <?php for ($i = 0; $i < $custom_fields["five_list_texts2"][0]; $i++): ?>
                    <p class="project-build__text">
                      <?= $custom_fields["five_list_texts2_". $i ."_txt"][0];?>
                    </p>

                <?php endfor; ?>



                <h3 class="complete__region-title"><?= $custom_fields["list_five_title4"][0];?></h3>

                <div class="complete__project-table">
                    <h4 class="table__name">Таблица 1</h4>
                  <table class="table" border="2" cellpadding="10">
                    <tr class="table-head">
                      <th class="cell-head cell-num">№</th>
                      <th class="cell-head cell-client">Заказчик</th>
                      <th class="cell-head cell-year">Год</th>
                      <th class="cell-head cell-obj">Наименование объекта</th>
                    </tr>
                    <?php for ($i = 0; $i < $custom_fields["table_project"][0]; $i++): ?>
                    <tr class="table-row">
                      <td class="cell-num"><?= $custom_fields["table_project_". $i ."_num"][0];?></td>
                      <td class="cell-client"><?= $custom_fields["table_project_". $i ."_client"][0];?></td>
                      <td class="cell-year"><?= $custom_fields["table_project_". $i ."_year"][0];?></td>
                      <td class="cell-obj"><?= $custom_fields["table_project_". $i ."_obj"][0];?></td>
                    </tr>
                    <? endfor; ?>
                  </table>
                </div>


            </div>



            <?   render_template('template/bottom-block', compact('custom_fields')); ?>


            <!-- <div class="resource-bottom-block">
              <div class="colls-block-left">
                <div class="row-left row-left-one">
                  <div class="cell-one"></div>
                  <div class="cell-two"></div>
                  <div class="cell-three"></div>
                  <div class="cell-four"></div>
                  <div class="cell-five"></div>
                  <div class="cell-six"></div>
                </div>

                <div class="row-left row-left-two">
                  <div class="cell-one"></div>
                  <div class="cell-two"></div>
                  <div class="cell-three"></div>
                  <div class="cell-four"></div>
                  <div class="cell-five"></div>
                  <div class="cell-six"></div>
                </div>

                <div class="row-left row-left-three">
                  <div class="cell-one"><p>Изм.</p></div>
                  <div class="cell-two"><p>Кол.уч</p></div>
                  <div class="cell-three"><p>Лист</p></div>
                  <div class="cell-four"><p>№док</p></div>
                  <div class="cell-five"><p>Подп.</p></div>
                  <div class="cell-six">Дата</div>
                </div>

                <div class="row-left row-left-four">
                  <div class="cell-one"><p>Разработал</p></div>
                  <div class="cell-two"><p>Соломатин</p></div>
                  <div class="cell-three">
                    <img src="<?= get_template_directory_uri() ?>/build/img/solomatin.png" alt="">
                  </div>
                  <div class="cell-four"><p>10.01.21</p></div>
                </div>

                <div class="row-left row-left-five">
                  <div class="cell-one"><p>Проверил</p></div>
                  <div class="cell-two"><p>Иващенко</p></div>
                  <div class="cell-three">
                    <img src="<?= get_template_directory_uri() ?>/build/img/ivashenko.png" alt="">
                  </div>
                  <div class="cell-four"><p>10.01.21</p></div>
                </div>

                <div class="row-left row-left-six">
                  <div class="cell-one"></div>
                  <div class="cell-two"></div>
                  <div class="cell-three"></div>
                  <div class="cell-four"></div>
                </div>

                <div class="row-left row-left-seven">
                  <div class="cell-one"><p>Н. контр</p></div>
                  <div class="cell-two"><p>Круглов</p></div>
                  <div class="cell-three">
                    <img src="<?= get_template_directory_uri() ?>/build/img/kruglov.png" alt="">
                  </div>
                  <div class="cell-four"><p>10.01.21</p></div>
                </div>

                <div class="row-left row-left-eight">
                  <div class="cell-one"><p>ГИП</p></div>
                  <div class="cell-two"><p>Семенякин</p></div>
                  <div class="cell-three">
                    <img src="<?= get_template_directory_uri() ?>/build/img/semenakin.png" alt="">
                  </div>
                  <div class="cell-four"><p>10.01.21</p></div>
                </div>
              </div>
              <div class="colls-block-right">
                <div class="row-right-top">
                  <p>Раздел 6-ПОС</p>
                </div>
                <div class="row-right-bottom">
                  <div class="wrap-left">
                    <p>Проект организации строительства</p>
                  </div>

                  <div class="wrap-right">
                    <div class="row-right row-right-one">
                      <div class="cell-one"><p>Стадия</p></div>
                      <div class="cell-two"><p>Лист</p></div>
                      <div class="cell-three"><p>Листов</p></div>
                    </div>

                    <div class="row-right row-right-two">
                      <div class="cell-one">П</div>
                      <div class="cell-two">1</div>
                      <div class="cell-three">100</div>
                    </div>

                    <div class="block-logo">
                      <a href="/"><span>SEG</span> №1</a>
                    </div>

                  </div>

                </div>
              </div>
            </div> -->

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

