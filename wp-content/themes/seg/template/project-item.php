<?php

/**
 * Template Name: шаблон скана
 */

$custom_fields = get_post_meta($post->ID);
$child_page = get_children($post->ID);
$lists = [];

$result_arr = [];

for ($i = 0; $i < $custom_fields["project_nav"][0]; $i++){
  $id_lista = str_replace([".", " "], "", $custom_fields["project_nav_". $i ."_poryadkovyj_nomer"][0]);

  $result_arr[$id_lista] = $custom_fields["project_nav_". $i ."_text_link"][0];

}

// echo "<pre>",var_dump($name_prilojenie),"</pre>";


foreach(get_children($post->ID) as $oo){
  $num_page = get_post_meta($oo->ID, 'nomer_straniczy', true);
  $name_pril = get_post_meta($oo->ID, 'nazvanie_prilozheniya', true);
  $content = $oo->post_content;

  $content = str_replace("<h3>", "<h3 class='mini-title'>", $content);

  $lists[$num_page] = [
    'num_page' => $num_page,
    'content' => $content,
    'name_pril' => $name_pril,
  ];
  // echo "<pre>",var_dump($oo),"</pre>";
}

ksort($lists);

// echo "<pre>",var_dump($lists),"</pre>";

?>

<?php get_header(); ?>

  <main class="main">
    <div class="container">


        <? render_template('template/project-nav', compact('custom_fields', 'child_page', 'name_pril')); ?>

        <? foreach($lists as $list):?>

          <?//= "<pre>",var_dump($list['name_pril']),"</pre>";?>

           <? render_template('template/project-list', compact('list', 'child_page', 'name_pril')); ?>
           <?//= $list["num_page", "content"]; ?>

        <? endforeach; ?>


    </div>
  </main>


<?php get_footer(); ?>

