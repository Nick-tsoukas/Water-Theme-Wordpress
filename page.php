<?php
    // get page header 
        get_header();
    while(have_posts()) {
        the_post(); ?>
    <section class="page_body">
        <h1><?php the_title(); ?></h1>
        <div class="bread">
         <?php 
         $theParent = wp_get_post_parent_id(get_the_ID());
         if($theParent) { ?>
            <div class="parent_page">
                <a href="<?php echo get_permalink($theParent) ?>"> <?php echo get_the_title($theParent) ?>   </a>
            </div>
            <div class="cur_page">
                <span class="cur_page_arrow"> < </span>
                <a href="<?php get_permalink($theParent) ?>"> <?php echo get_the_title(); ?></a>
            </div>
         <?php }
         ?>

        </div>
        <section class="content_flex">
            <div class="content">
            <?php the_content() ?>
            </div>
            <section class="pages">
            <ul class="page_list">
            <?php

function has_children() {
    global $post;

    $children = get_pages( array( 'child_of' => $post->ID ) );
    if( count( $children ) == 0 ) {
        return false;
    } else {
        return true;
    }
}



            if ($theParent) {
                $findChildof = $theParent;
            } else {
                $findChildof = get_the_ID();
                ?>
                <?php 
                if(has_children()) {
                    ?>
                    <li class="main_badge"><?php echo get_the_title($theParent) ?></li>
                    <?php
                }
                 wp_list_pages(array(
                    'title_li' => NULL,
                    'child_of' => $findChildof
                ));
            }
            ?>
            </ul>
        </section>
        </section>
    </section>
<?php }
?>

<section style="padding-bottom: 3em; padding-left: 3em;">
<!-- get theme file to ref images so far echo get_theme_file_uri('/images/bird.jpg')  -->
</section>


<?php get_footer(); ?>