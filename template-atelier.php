<?php

/**
 * Template Name: Atelier
 *
 * @package WordPress
 * @subpackage cidw_4w4
 */
?>

<?php get_header() ?>
<main class="site__main">
     <article class="atelier">
          <?php if (have_posts()) : the_post(); ?>
               <h1><?php the_title() ?></h1>

               <p class="atelier__description">
                    <?php the_field('description'); ?>
               </p>

               <p class="atelier__animateur">
                    <?php the_field('animateur'); ?>
               </p>

               <p class="atelier__date-debut">
                    <?php the_field('date-debut'); ?>
               </p>

               <p class="atelier__date-fin">
                    <?php the_field('date-fin'); ?>
               </p>

               <p class="atelier__jours">
                    <?php the_field('jours'); ?>
               </p>

               <p class="atelier__heure-debut">
                    <?php the_field('heure-debut'); ?>
               </p>

               <p class="atelier__heure-fin">
                    <?php the_field('heure-fin'); ?>
               </p>

               <p class="atelier__duree">
                    <?php the_field('duree'); ?>
               </p>

               <p class="atelier__local">
                    <?php the_field('local'); ?>
               </p>
     </article>
<?php endif ?>
</main>
<?php get_footer() ?>