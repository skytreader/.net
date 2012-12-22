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
		while ($wp_query->have_posts()) : $wp_query->the_post();?>
			<h1><a href=<?php echo '"'; the_permalink(); echo '"'; ?> class="hentry">
			<?php the_title(); ?>
			</a></h1>
			<?php
				echo "<strong>";
				the_author();
				echo "</strong> ";
				echo "(";
				the_date();
				echo ")<br />";
				the_content();
				echo "<strong>Posted in: </strong>";
				the_category(", ");
				the_tags("<br /><strong>Tags: </strong>", ", ", "");
				echo "<br /><br /><hr />";
			?>
	<?php
		// TODO Check proper conventions for The Loop
		endwhile;
		posts_nav_link();
	?>

	<hr>
	
<?php get_sidebar('home'); ?>
<?php get_footer(); ?>
