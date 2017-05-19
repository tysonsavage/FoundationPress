<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.

/* 
MS: Original featured-image html / code:
<header id="featured-hero" role="banner" data-interchange="[<?php echo the_post_thumbnail_url('featured-small'); ?>, small], [<?php echo the_post_thumbnail_url('featured-medium'); ?>, medium], [<?php echo the_post_thumbnail_url('featured-large'); ?>, large], [<?php echo the_post_thumbnail_url('featured-xlarge'); ?>, xlarge]">
</header>
*/
if ( has_post_thumbnail( $post->ID ) ) : ?>
    <div id="featured-hero" role="banner" style="background-image:'<?php echo the_post_thumbnail_url('featured-large'); ?>'" data-interchange="[<?php echo the_post_thumbnail_url('featured-large'); ?>, default], [<?php echo the_post_thumbnail_url('featured-small'); ?>, small], [<?php echo the_post_thumbnail_url('featured-medium'); ?>, medium], [<?php echo the_post_thumbnail_url('featured-large'); ?>, large], [<?php echo the_post_thumbnail_url('featured-xlarge'); ?>, xlarge]">
    </div>
<?php endif;
