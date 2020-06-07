<?php
get_header();
?>
<!-- later goal to add scroll magic -->
<!-- need header title and then think of a layout -->

<section>
    <h1>Hero Image</h1>
</section>

<section>
    <?php
    while(have_posts()) {
        the_post(); ?> 
          <!--  Add HTML HERE -->
          <h2><a class="post_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p>Posted by <?php the_author_link() ?></p>
          <p><?php the_date() ?></p>
          <P><?php the_excerpt() ?></P>
   <?php }
    ?>
</section>


<?php
get_footer();
?>