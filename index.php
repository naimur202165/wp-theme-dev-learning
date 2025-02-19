  <?php

    // This Template is for displaying header  
    ?>

  <!DOCTYPE html>
  <html lang=" <?php language_attributes(); ?>" class="no-js">

  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Wp Head -->
      <?php wp_head(); ?>
  </head>
  <!-- Wp Body -->

  <body <?php body_class(); ?>>


      <!-- wp-body -->
      <!-- To SHow -->
      <?php wp_footer(); ?>
  </body>

  </html>