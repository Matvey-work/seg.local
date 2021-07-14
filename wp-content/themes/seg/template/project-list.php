<?



// $custom_fields = get_post_meta($post->ID);

$custom_fields = $variables["custom_fields"];
$child_page = $variables["child_page"];
$list = $variables['list'];
$name_pril = $variables['name_pril'];
//  echo "<pre>",var_dump($list),"</pre>";


?>



        <div class="main__wrap main__wrap-data-org main__wrap--margin">
          <?// the_content() ?>
          <div class="main__doc main__doc-data-org complete project-build">


          <?= $list['content']?>


            <? render_template('template/bottom-block', compact('custom_fields', 'child_page', 'list', 'name_pril')); ?>


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
