<?php
/*
Template Name: No Spotlight
*/
?>
<?php get_header(); ?>

<!-- Begin Content -->
<div id="content">

    <?php get_sidebar(); ?>
    
    <!-- Begin Text -->
    <div id="text">    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php edit_post_link('edit', '<p><small>', '</small></p>'); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
    <!-- End Text -->
    
    <!-- Begin Clear -->
    <div class="clear">&nbsp;</div>
    <!-- End Clear -->
    
</div>
<!-- End Content -->

<?php get_footer(); ?>