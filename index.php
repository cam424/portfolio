<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row row-fw">

		    <main id="main" class="small-12 columns" role="main">

			    <?php get_template_part( 'parts/content', 'hero' ); ?>

					<?php get_template_part( 'parts/content', 'about' ); ?>

					<?php get_template_part( 'parts/content', 'portfolio' ); ?>

		    </main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
