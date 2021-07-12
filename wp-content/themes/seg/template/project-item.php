<?php

/**
 * Template Name: шаблон скана
 */

$custom_fields = get_post_meta($post->ID);
$child_page = get_children($post->ID);
$lists = [];


foreach(get_children($post->ID) as $oo){
  $num_page = get_post_meta($oo->ID, 'nomer_straniczy', true);

  $lists[$num_page] = [
    'num_page' => $num_page,
    'content' => $oo->post_content,
  ];
  // echo "<pre>",var_dump($oo),"</pre>";
}

ksort($lists);

// echo "<pre>",var_dump($lists),"</pre>";

?>

<?php get_header(); ?>

  <main class="main">
    <div class="container">


        <? render_template('template/project-nav', compact('custom_fields', 'child_page')); ?>

        <? foreach($lists as $list):?>

          <?//= "<pre>",var_dump($list['num_page']),"</pre>";?>

           <? render_template('template/project-list', compact('list', 'child_page')); ?>
           <?//= $list["num_page", "content"]; ?>

        <? endforeach; ?>


    </div>
  </main>


<?php get_footer(); ?>

