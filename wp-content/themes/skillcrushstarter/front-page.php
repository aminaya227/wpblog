<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<div class="social-btns">
				<a href="https://twitter.com/aminaya227" target="_blank" class="soc-icon tw"></a>		
			</div>

				<a href="<?php echo esc_url(get_permalink (get_page_by_title('blog'))); ?>" class="btn">View My Blog</a>
			
			<?php endwhile; ?>
		</div>
		
	</div>
</section>

<?php get_footer(); ?>