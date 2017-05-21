<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row row-fw">

		    <main id="main" class="small-12 columns" role="main">

					<section class="block hero-block">
			    	<?php get_template_part( 'parts/content', 'hero' ); ?>
					</section>

					<section class="block about-block ltgreen">
						<?php get_template_part( 'parts/content', 'about' ); ?>
					</section>

					<section class="block portfolio-block">
						<?php get_template_part( 'parts/content', 'portfolio' ); ?>
					</section>

					<section class="block resume-block ltgreen">
						<?php get_template_part( 'parts/content', 'resume' ); ?>
					</section>

					<section class="block contact-block ltblue">
						<?php get_template_part( 'parts/content', 'contact' ); ?>
					</section>

		    </main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
