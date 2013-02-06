<?php get_header(); ?>
	
<!-- START CONTENT -->
<div id="content">
	
	<?php get_sidebar(); ?>

	<!-- Begin Text -->
    <div id="text">
    <h2><?php the_title(); ?></h2>
    <?php while (have_posts()) : the_post(); ?>
	<p class="postmetadata"><small>Posted on <?php the_time('F jS, Y') ?></small></p>
	<?php the_content(); ?>
    <?php edit_post_link('Edit', '<p><small>', '</small></p>'); ?>
    <?php endwhile; ?>
    </div>
    <!-- End Text -->
    
    <!-- Begin Clear -->
    <div class="clear">&nbsp;</div>
    <!-- End Clear -->
    
</div>
<!-- END CONTENT -->

<!-- START FOOTER -->
<?php get_footer(); ?>
<!-- END FOOTER -->
