<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php (is_front_page()) ? blogInfo('title') : wp_title('')?></title>
    <?php wp_head()?>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
  </head>
  <body>
    <header class="header bg--accent py--1">
      <div class="container">
        <div class="header__grid flex justify--between align--center">
          <figure class="header__logo">
          <?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }?>
          </figure>

          <div class="header__nav">
           <?php wp_nav_menu(array(
            'theme_location' => 'header_menu',
            
           ))
           ?>

           <button class="btncart"><i class="fas fa-cart-shopping"></i><span class="count"></span></button>
          </div>
        </div>
      </div>
    </header>