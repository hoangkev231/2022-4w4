<footer class="site__footer">

    <!-- Première rangé de colonne -->
    <div class="site__footer__colonne">
        <section class="footer__article">
            <?php get_sidebar('footer_colonne_1'); ?>
        </section>
        <section class="footer__adresse">
            <?php get_sidebar('footer_colonne_2'); ?>
        </section>
        <section class="footer__liens">
            <?php get_sidebar('footer_colonne_3'); ?>
        </section>
    </div>
    <?php
    wp_nav_menu(array("menu" => "externe"));
    ?>

    <!-- Section de plusieurs lignes -->
    <div class="site__footer__ligne">
        <section class="footer__description"></section>
        <section class="footer__nav"></section>
        <section class="footer__copyright"></section>
        <section class="footer__auteur"></section>
        <?php get_sidebar('footer_colonne_3'); ?>
    </div>

    <?php
    // $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#f00"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
    wp_nav_menu(array(
        "menu" => "simple",
        // "container" => "nav",
        // "container_class"=>"site__footer__menu",
        // "menu_class"=>"site__footer__menu__ul",
        //"link_before"=>$icone
    )); ?>

    <br>
    <?php get_search_form(); ?>
    <br>

    <h2 class="footer__titre">3800, rue Sherbrooke Est Montréal (Québec) H1X 2A2</h2>
    <p class="footer__presentation">Copyright © 2014 - Collège de Maisonneuve. Tous droits réservés.</p>

</footer>

<div class="boite__modale">
    <button class="boite__modale__fermeture">x</button>
    <p class="boite__modale__texte"></p>
</div>

<!-- Étant donné que la boîte carrousel ne fonctionne pas, elle est mise en commentaire. -->
<!-- <div class="boite__carrousel">
    <button class="boite__carrousel__fermeture">X</button>
    <section class="boite__carrousel__navigation"></section>
    <section class="boite__carrousel__img"></section>
</div> -->

<?php wp_footer(); ?>
</body>

</html>