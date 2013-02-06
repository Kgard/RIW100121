<?php get_header(); ?>

<!-- BEGIN CONTENT -->
<div id="content">

	<?php get_sidebar(); ?>

	<!-- Begin Text -->
    <div id="text">
    <?php while (have_posts()) : the_post(); ?>
    <div class="excerpts">
    <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
	<p class="postmetadata"><small>Posted on <?php the_time('F jS, Y') ?></small></p>
	<?php the_excerpt(); ?>
    <p><small class="full-post"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">More...</a></small></p>
    <?php edit_post_link('Edit', '<p><small>', '</small></p>'); ?>
    </div>
    <?php endwhile; ?>
    </div>
    <!-- End Text -->
    
    <!-- Begin Clear -->
    <div class="clear">&nbsp;</div>
    <!-- End Clear -->
    
</div>
<!-- END CONTENT -->


<!-- BEGIN FOOTER -->
<?php get_footer(); ?>
<!-- END FOOTER -->