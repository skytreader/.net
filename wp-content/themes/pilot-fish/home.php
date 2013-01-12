<?php
/**
 * Front Page with Featured Content
 *
 *
 * @file           home.php
 * @package        Pilot Fish
 * @filesource     wp-content/themes/pilot-fish/home.php
 * @since          Pilot Fish 0.1
 */

get_header(); ?>
        
    <hr>
	<?php
		$temp = $wp_query;
		$wp_query= null;
		$wp_query = new WP_Query();
		$wp_query->query('posts_per_page=5'.'&paged='.$paged);
		if($wp_query->have_posts()):
			while ($wp_query->have_posts()) :
				$wp_query->the_post();
				if( !get_post_format() ) {
					get_template_part( 'content', 'standard' );
				} else {
					get_template_part( 'content', get_post_format() );
				}
					echo "<hr />";
				?>
		<?php
			endwhile;
			endif;
		?>
		<!-- TODO Fix div of this -->
		<nav id="post-nav" class="pager">
			<span class="previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> older posts', 'pilotfish')); ?></span>
			<span class="next"><?php previous_posts_link(__('newer posts <span class="meta-nav">&rarr;</span>', 'pilotfish')); ?></span>
		</nav>
	<hr>
	
<?php get_sidebar('home'); ?>
