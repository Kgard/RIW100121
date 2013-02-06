<!-- START SIDEBAR -->
<div id="sidebar">
    
    <!-- Begin Wigets -->
    <?php if ( is_home() || is_single() || is_archive() ) { ?> 
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
    					
	<?php endif; ?>
    <?php } ?>
    <!-- Begin Wigets -->
    
    <!-- Begin Sub Pages -->
	<?php //list sub-pages 
    if($post->post_parent)
    $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0" ); else
    $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
    if ($children) { ?>
    <h2 id="sub-navigation-head"><a href="<?php bloginfo('url'); ?>/<?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?>/"><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?></a></h2>
    <ul id="sub-navigation-items">
    <?php echo $children; ?>
    </ul>
    <?php } ?> 
    <!-- End Sub Pages -->
       
</div>
<!-- END SIDEBAR -->
