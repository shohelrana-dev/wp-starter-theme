<?php
/**
 * The template for displaying the footer
 *
 * @package wp-starter-theme
 */
?>
</main>
<footer>
    <div class="container">
        <div class="row">

			<?php if ( is_active_sidebar( 'footer-one' ) ): ?>
                <div class="col-md-6 col-lg-3">
					<?php dynamic_sidebar( 'footer-one' ); ?>
                </div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-two' ) ): ?>
                <div class="col-md-6 col-lg-3">
					<?php dynamic_sidebar( 'footer-two' ); ?>
                </div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-three' ) ): ?>
                <div class="col-md-6 col-lg-3">
					<?php dynamic_sidebar( 'footer-three' ); ?>
                </div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'footer-four' ) ): ?>
                <div class="col-md-6 col-lg-3">
					<?php dynamic_sidebar( 'footer-four' ); ?>
                </div>
			<?php endif; ?>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
