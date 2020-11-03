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

			<?php if ( is_active_sidebar( 'FOOTER_ONE' ) ): ?>
                <div class="col-md-6 col-lg-3">
					<?php dynamic_sidebar( 'FOOTER_ONE' ); ?>
                </div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'FOOTER_TWO' ) ): ?>
                <div class="col-md-6 col-lg-3">
					<?php dynamic_sidebar( 'FOOTER_TWO' ); ?>
                </div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'FOOTER_THREE' ) ): ?>
                <div class="col-md-6 col-lg-3">
					<?php dynamic_sidebar( 'FOOTER_THREE' ); ?>
                </div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'FOOTER_FOUR' ) ): ?>
                <div class="col-md-6 col-lg-3">
					<?php dynamic_sidebar( 'FOOTER_FOUR' ); ?>
                </div>
			<?php endif; ?>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
