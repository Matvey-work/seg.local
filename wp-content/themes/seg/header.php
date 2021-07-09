
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>

  <?php

  $custom_fields = get_post_meta($post->ID);
  $main_pageID = get_post_meta(7);

  // echo "<pre>",var_dump($custom_fields),"</pre>";

  ?>

</head>

<body>
  <header class="header">
    <div class="contacts-icons">
      <div class="list-icons">
        <div class="list-icons-item icon-tel">
          <a href="tel:+7<?= $main_pageID["telefon"][0]; ?>">
            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 0C8.50725 0 0 8.50725 0 19C0 29.4928 8.50725 38 19 38C29.4928 38 38 29.4928 38 19C38 8.50725 29.4928 0 19 0ZM28.5 29.6875C17.3684 29.6875 8.3125 20.6316 8.3125 9.5C8.3125 8.8445 8.8445 8.3125 9.5 8.3125H13.8843C14.5398 8.3125 15.0718 8.8445 15.0718 9.5C15.0718 11.552 15.5183 13.5066 16.3994 15.3069C16.5395 15.5919 16.5585 15.9173 16.454 16.2165C16.3519 16.5158 16.1334 16.7604 15.8484 16.8981L14.0766 17.7531C15.5515 20.3205 17.6795 22.4509 20.2445 23.921L21.0995 22.1516C21.2372 21.8666 21.4819 21.6505 21.7811 21.546C22.0804 21.4439 22.4081 21.4629 22.6908 21.6006C24.4958 22.4818 26.448 22.9283 28.4976 22.9283C29.1531 22.9283 29.6851 23.4603 29.6851 24.1158V28.5H29.6875C29.6875 29.1555 29.1555 29.6875 28.5 29.6875Z" fill="#055786"/>
            </svg>
          </a>
        </div>
        <div class="list-icons-item icon-mail">
          <a href="mailto:<?= $main_pageID["pochta"][0]; ?>">
            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 0C8.50655 0 0 8.50655 0 19C0 29.4935 8.50655 38 19 38C29.4935 38 38 29.4935 38 19C38 8.50655 29.4935 0 19 0ZM27.56 10.5556L18.993 17.3284L10.1472 10.5556H27.56ZM28.4414 27.4444H9.26549V13.4159L18.1047 20.1205C18.3417 20.3017 18.6923 20.3923 18.975 20.3923C19.2644 20.3923 19.5156 20.2973 19.7552 20.108L28.4414 13.1983V27.4444Z" fill="#055786"/>
            </svg>
          </a>
        </div>
        <div class="list-icons-item icon-telegram">
          <a href="http://<?= $main_pageID["telegram"][0]; ?>">
            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 38C29.4934 38 38 29.4934 38 19C38 8.50659 29.4934 0 19 0C8.50659 0 0 8.50659 0 19C0 29.4934 8.50659 38 19 38Z" fill="#055786"/>
            <path d="M8.69401 18.5883L27.0132 11.525C27.8634 11.2179 28.606 11.7325 28.3305 13.0181L28.3321 13.0165L25.2129 27.7115C24.9818 28.7533 24.3627 29.0066 23.4966 28.5158L18.7466 25.015L16.4555 27.2222C16.2022 27.4755 15.9884 27.6893 15.4976 27.6893L15.8348 22.8554L24.6382 14.9023C25.0213 14.565 24.5527 14.375 24.0476 14.7107L13.1685 21.5602L8.47868 20.0972C7.46059 19.7742 7.43843 19.0791 8.69401 18.5883Z" fill="white"/>
            </svg>
          </a>
        </div>
      </div>

    </div>

  </header>


