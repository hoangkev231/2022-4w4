<?php get_header() ?>
<main class="site_main">
    <?php
        if (have_posts(): while(have_posts()):
    ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer() ?>