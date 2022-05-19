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
               <h1>Atelier: <?php the_title() ?></h1>

               <h2>Description de l'atelier</h2>

               <p class="atelier__animateur">L'animateur de l'atelier: <?php the_field('animateur'); ?></p>

               <p class="atelier__local">L'atelier sera donné au local: <?php the_field('local'); ?></p>

               <p class="atelier__description"><?php the_field('description'); ?></p>

               <h2>Horaire et dates de l'atelier</h2>

               <p class="atelier__duree">Durée de chacune des séances: <?php the_field('duree'); ?></p>

               <p class="atelier__date-debut">Date: <?php the_field('date-debut'); ?> à <?php the_field('date-fin'); ?></p>

               <p class="atelier__jours">La formation se donnera au <?php the_field('jours'); ?> de <?php the_field('heure-debut'); ?> à <?php the_field('heure-fin'); ?></p>
     </article>
<?php endif ?>
</main>
<?php get_footer() ?>