<?php get_header();?>
<?php if (have_posts()): while (have_posts()): the_post();?>
    <?php if (has_post_thumbnail()) {the_post_thumbnail();}?>
    <?php the_content();?>
<?php endwhile;endif;?>
<?php get_footer();?>