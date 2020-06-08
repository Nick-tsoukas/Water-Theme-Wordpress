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
        wordpress comes with WP_Query() function/class 

 -->
<!-- loop through posts using wp functions -->
<?php  get_header(); ?>
<section class="posts">

    <?php
    // get header function 
    // name a query to get two latest posts 
        $homepagePosts = new WP_Query(array(
            'posts_per_page' => 2
        ));

         while ( $homepagePosts->have_posts() ) {
        $homepagePosts->the_post(); 
    ?>
    <section class="home_body">
        <div>
            <h2> <a style="color: inherit; font-style: none;" href="<?php the_permalink() ?>"> <?php the_title(); ?>
                </a></h2>
        </div>
        <div class="content_post">
          <?php the_title(); ?>
          <p>
              <?php 
                echo wp_trim_words(the_content(), 18)
              ?>
          </p>
        </div>
    </section>

            <!-- resets to default query ... good habit after custom query -->
    <?php } wp_reset_postdata();
    ?>
</section>
<?php get_footer(); ?>