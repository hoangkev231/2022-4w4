<?php
/**
* Template Name: Évenement
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>

<?php get_header() ?>
<main class="site__main">
   <article class="evenement">
    <!-- <h1>---- Template evenement ------</h1> -->
     <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <section class="evenement__resume">
            <?php the_field('resume'); ?>   
        </section>
        </article>
   <?php endif ?>
</main>
<?php get_footer() ?>