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

			<?php if ( is_active_sidebar( 'FOOTER-ONE' ) ): ?>
                <div class="col-md-6 col-lg-3">
					<?php dynamic_sidebar( 'FOOTER-ONE' ); ?>
                </div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'FOOTER-TWO' ) ): ?>
                <div class="col-md-6 col-lg-3">
					<?php dynamic_sidebar( 'FOOTER-TWO' ); ?>
                </div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'FOOTER-THREE' ) ): ?>
                <div class="col-md-6 col-lg-3">
					<?php dynamic_sidebar( 'FOOTER-THREE' ); ?>
                </div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'FOOTER-FOUR' ) ): ?>
                <div class="col-md-6 col-lg-3">
					<?php dynamic_sidebar( 'FOOTER-FOUR' ); ?>
                </div>
			<?php endif; ?>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
