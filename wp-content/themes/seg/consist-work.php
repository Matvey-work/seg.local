<?php

/**
 * Template Name: состав работ, выполняемых разработчиком
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
      <div class="main__wrap-resource">
        <div class="main__doc-resource">
          <h1 href="#" class="resource-link data-org-link consist__title">
          СОСТАВ РАБОТ ВЫПОЛНЯЕМЫХ РАЗРАБОТЧИКОМ <span>SEG</span>№1
          </h1>

          <div class="navigation consist__nav">
            <div class="navigation__row row-one">
              <p class="symbol">
                Обозначение
              </p>
              <p class="name">
                Наименование
              </p>
              <p class="page">
                Страница
              </p>
            </div>

            <div class="navigation__row row-two">
              <p class="symbol">1</p>
              <p class="name">2</p>
              <p class="page">3</p>
            </div>

            <?php for ($i = 0; $i < $custom_fields["consist_nav"][0]; $i++): ?>
            <div class="navigation__row navigation__row-link row-three">
              <p class="symbol consist__symbol"><?= $custom_fields["consist_nav_". $i ."_oboznachenie"][0];?></p>
              <a href="<?= unserialize($custom_fields["consist_nav_". $i ."_url"][0])["url"]; ?>" class="name"><?= $custom_fields["consist_nav_". $i ."_text_link"][0];?></a>
              <p class="page"><?= $custom_fields["consist_nav_". $i ."_num_page"][0];?></p>
            </div>
            <?php endfor; ?>

          </div>

          <div class="resource-bottom-block">
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
                <p>2021.<span>SEG</span> №1.СР</p>
              </div>
              <div class="row-right-bottom">
                <div class="wrap-left">
                  <p>Состав работ, выполняемых разработчиком</p>
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
                    <div class="cell-three">3</div>
                  </div>

                  <div class="block-logo">
                    <a href="/"><span>SEG</span> №1</a>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main__wrap-resource consist__wrap">
        <div class="main__doc-resource">


          <div class="navigation consist__nav consist__nav--two">


            <?php for ($i = 0; $i < $custom_fields["nav_block"][0]; $i++): ?>
              <?php
                $left = $custom_fields["nav_block_". $i ."_oboznachenie"][0];
                $right = $custom_fields["nav_block_". $i ."_num_page"][0];
                $emptyCheck = false;
                if( $left == "" && $right == "") {
                  $emptyCheck = true;
                 }
                 ?>
            <div class="navigation__row navigation__row-link row-three">

              <p class="symbol consist__symbol"><?= $custom_fields["nav_block_". $i ."_oboznachenie"][0];?></p>

              <a href="<?= unserialize($custom_fields["nav_block_". $i ."_url"][0])["url"]; ?>" class="name <?php if($emptyCheck) { echo "weight-font"; } ?>"><?= $custom_fields["nav_block_". $i ."_text_link"][0];?></a>

              <p class="page"><?= $custom_fields["nav_block_". $i ."_num_page"][0];?></p>

            </div>
            <?php endfor; ?>

          </div>

          <div class="resource-bottom-block resource-bottom-block-sp">
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
                <p>2021.<span>SEG</span> №1.СР</p>
              </div>
              <div class="row-right-bottom">
                <div class="wrap-left">
                  <p>Состав работ, выполняемых разработчиком</p>
                </div>

                <div class="wrap-right">
                  <div class="row-right row-right-one">
                    <div class="cell-one"><p>Стадия</p></div>
                    <div class="cell-two"><p>Лист</p></div>
                    <div class="cell-three"><p>Листов</p></div>
                  </div>

                  <div class="row-right row-right-two">
                    <div class="cell-one">П</div>
                    <div class="cell-two">2</div>
                    <div class="cell-three">3</div>
                  </div>

                  <div class="block-logo">
                    <a href="/"><span>SEG</span> №1</a>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main__wrap-resource consist__wrap">
        <div class="main__doc-resource main__doc-data-org">


          <div class="navigation consist__nav consist__nav--two">


            <?php for ($i = 0; $i < $custom_fields["nav_block_two"][0]; $i++): ?>
              <?php
                $left = $custom_fields["nav_block_two_". $i ."_oboznachenie"][0];
                $right = $custom_fields["nav_block_two_". $i ."_num_page"][0];
                $emptyCheck = false;
                if( $left == "" && $right == "") {
                  $emptyCheck = true;
                 }
                 ?>
            <div class="navigation__row navigation__row-link row-three">

              <p class="symbol consist__symbol"><?= $custom_fields["nav_block_two_". $i ."_oboznachenie"][0];?></p>

              <a href="<?= unserialize($custom_fields["nav_block_two_". $i ."_url"][0])["url"]; ?>" class="name <?php if($emptyCheck) { echo "weight-font"; } ?>"><?= $custom_fields["nav_block_two_". $i ."_text_url"][0];?></a>

              <p class="page"><?= $custom_fields["nav_block_two_". $i ."_num_page"][0];?></p>

            </div>
            <?php endfor; ?>

          </div>

          <div class="resource-bottom-block resource-bottom-block-consist">
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

            </div>
            <div class="colls-block-right">
              <div class="row-right-top">
                <p>2021.<span>SEG</span> №1.СP</p>
              </div>
              <div class="row-right-bottom">

                <div class="wrap-right">
                  <div class="row-right row-right-one">
                    <div class="cell-two"><p>Лист</p></div>
                  </div>
                  <div class="row-right row-right-two">
                    <div class="cell-two">3</div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </main>

<?php get_footer(); ?>
