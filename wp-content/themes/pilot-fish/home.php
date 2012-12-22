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
	query_posts('cat=1');
	while (have_posts()) : the_post();
		echo "<h1>";
		the_title();
		echo "</h1>";
		the_content();
	endwhile;
?>

	<hr>
	
<?php get_sidebar('home'); ?>
<?php get_footer(); ?>
