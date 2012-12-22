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
<a href=<?php echo '"'; the_permalink(); echo '"'; ?>><h1>
	<?php the_title(); ?>
</h1></a>
	<?php the_author(); the_content(); ?>
<?php
// TODO Check proper conventions for The Loop
endwhile;
?>

	<hr>
	
<?php get_sidebar('home'); ?>
<?php get_footer(); ?>
