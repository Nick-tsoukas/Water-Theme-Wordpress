<!-- 
    wp-functions:
        - bloginfo(params) what info from header
        - have_posts() , has sister functions 
            - the_title()
            - the_content()
            - the_permalink()
            - get_foooter
            - get_header
        

        notes - single.php is used for the detail page of a post else --- index.php 
        - wp_head 
        - wp_enqueue_style
        - include scripts and styles wp docs

        ? how to loop through a collection php
            - while loop while(){}

 -->
<!-- loop through posts using wp functions -->
<?php  get_header(); ?>
<section class="posts">

    <?php
    // get header function 
    
    //  loop through all posts
         while ( have_posts() ) {
    // What does the_post function do 
        the_post(); 
    ?>
    <section class="home_body">
        <div>
            <h2> <a style="color: inherit; font-style: none;" href="<?php the_permalink() ?>"> <?php the_title(); ?>
                </a></h2>
        </div>
        <div class="content_post">
            <?php the_content();?>
        </div>
    </section>


    <?php }
    ?>
</section>
<?php get_footer(); ?>