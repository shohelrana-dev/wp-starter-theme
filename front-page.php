<?php
/**
 * The front page template file
 *
 * @package wp-starter-theme
 */

get_header();
?>

<?php get_template_part( 'template-parts/common/page-header' ); ?>
    <div class="container">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', 'page' );
			}
		} else {
			get_template_part( 'template-parts/content', 'none' );
		}
		?>
    </div>

<?php
get_footer();
