<?php get_header() ?>
<main class="site__main">
   <?php
   /* wp_nav_menu(array("menu"=>"menu_accueil",   
                        "container"=>"nav")); */
   ?>

   <h1>Le département TIM</h1>

   <?php
   /* --------------------------------------------- Menu accueil */
   wp_nav_menu(array(
      "menu" => "accueil",
      "container" => "nav"
   )); ?>

   <br>
   <br>
   <br>
   <br>
   <br>
   <br>

   <h1>Les événements à venir</h1>

   <?php
   /* --------------------------------------------- Menu evenement */
   wp_nav_menu(array(
      "menu" => "evenements",
      "container" => "nav"
   )); ?>

   <br>
   <br>
   <br>
   <br>
   <br>
   <br>

   <?php
   /* --------------------------------------------- Menu atelier */
   wp_nav_menu(array(
      "menu" => "atelier",
      "container" => "nav"
   )); ?>

   <?php if (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content() ?>

   <?php endif ?>

</main>
<?php get_footer() ?>