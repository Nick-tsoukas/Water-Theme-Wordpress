<?php
get_header();
         while ( have_posts() ) {
        the_post();
?>
        <h2>
        </h2>
        <?php the_content();

        get_footer();
         ?>

 
<?php }

?>