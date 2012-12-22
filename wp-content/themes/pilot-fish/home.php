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
    
	<div id="featured" class="row span12 hidden-phone">
	<div id="banner-text" class="span12">     
		<h1 class="featured-title"><?php echo __('Hey!','pilotfish'); ?></h1>
	</div>
		<h2 class="featured-subtitle"><?php echo __('A Minimal, Responsive Portfolio Theme','pilotfish'); ?></h2>
            	<p><?php echo __('You can edit this section from home.php in the Edit Panel. Happy Blogging! ','pilotfish'); ?></p>
        </div><!-- end of #featured -->
        
        <hr>
	<?php
	query_posts('cat=1');
while (have_posts()) : the_post();
the_title();
the_content();
endwhile;
?>

	<div class="center"><h2><?php _e('Featured Widgets Area','pilotfish')?></h2></div>
	<hr>
	
<?php get_sidebar('home'); ?>
<?php get_footer(); ?>
