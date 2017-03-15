<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 */
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

	    <div class="container" id="welcomeSection">
	      <!-- <div class="row" id="todayMessage">
	        <div class="twelve columns h-centred v-centred">
	          <img alt="Today's inspiration: Do that thing!" src="<?php theActiveThemeDirectory(); ?>images/AimeeTodayLogoHandwriting.svg">
	        </div>
	      </div> -->
	      <div class="row" id="welcomeImage">  
	        <!-- <div class="twelve columns headerImage h-centred v-centred">    -->
	        <div class="twelve columns">
	          <img alt="Drawing of Aimee's studio and photo of Aimee smiling, super happy that you're here!" src="<?php theActiveThemeDirectory(); ?>images/AimeeTodayheaderImage_heart.png">
	          <!-- <section class="h-centred v-centred headerAboutBlurb"> -->
	          <p>Pep-talks to be brave and<br>take your <b>very next step</b></p>
	          <!-- </section> -->
	        </div> 
	      </div>
	    </div>
			
		<div class="container" id="mainBlogFeed">
			<div class="row">
				<!-- <div class="twelve columns h-centred v-centred"> -->
				<div class="twelve columns">
					
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

						<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

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