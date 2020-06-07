<?php
        get_header();
         while ( have_posts() ) {
        the_post();
?>
         <?php  the_post_thumbnail(); ?>
        <h2>
        <?php the_title();
         ?>
        </h2>
       
        <?php the_content();

        get_footer();
         ?>

 
<?php }

?>