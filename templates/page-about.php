<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php
				// vars
				$heading = get_field('main_heading');
				$blogHeading = get_field('blog_heading');
			?>


    <!-- MAIN IMAGE -->
    <?php 
      $imageURL = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

    ?>

      <div class="container">
        <div class="row">
          <img class="u-max-full-width" src="<?php echo $imageURL; ?>">
        </div>
      </div>

    <!-- DETAIL -->
      


		<div class="container" id="mainBlogFeed">
			<div class="row">
				<!-- <div class="twelve columns h-centred v-centred"> -->
				<div class="twelve columns">
					
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h1><?php echo get_the_title(); ?></h1>

						<div class="entry">
							<?php the_content(); ?>
						</div>

					</article>

				</div>
			</div>
		</div>




		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<?php get_footer(); ?>