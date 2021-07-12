<?php
/**
 * Template Name: нижний блок
 */

$custom_fields = $variables["custom_fields"];
$child_page = $variables["child_page"];

$list = $variables['list'];

$page_num = $list['num_page'];

// echo "<pre>",var_dump($list),"</pre>";
?>


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
                  <p>2021.<span>SEG</span> №1.PЛ</p>
                </div>
                <div class="row-right-bottom">
                  <div class="wrap-left">
                      <p>
                        <? the_title(); ?>
                      </p>
                  </div>

                  <div class="wrap-right">
                    <div class="row-right row-right-one">
                      <div class="cell-one"><p>Стадия</p></div>
                      <div class="cell-two"><p>Лист</p></div>
                      <div class="cell-three"><p>Листов</p></div>
                    </div>

                    <div class="row-right row-right-two">
                      <div class="cell-one">П</div>
                      <div class="cell-two"><?= $page_num+1 ?></div>
                      <div class="cell-three"><?= count($child_page)+1 ?></div>
                    </div>

                    <div class="block-logo">
                      <a href="/"><span>SEG</span> №1</a>
                    </div>

                  </div>

                </div>
              </div>
            </div>
