<?php
/**
 * The header for our theme
 *
 * @package wp-starter-theme
 */

use Theme\Setup\Menus;

$header_menu_items = Menus::get_nav_menu_items_by_location( 'HEADER_MENU' );
?>
<!--header start-->
<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				?>
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
					<?php echo get_bloginfo( 'blogname' ); ?>
                </a>
				<?php
			}
			?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul id="menu" class="navbar-nav ml-auto">
					<?php if ( is_array( $header_menu_items ) && ! empty( $header_menu_items ) ): ?>
						<?php
						foreach ( $header_menu_items as $menu_item ):
							$child_menu_items = Menus::get_child_menu_items( $header_menu_items, $menu_item->ID );
							?>
							<?php if ( empty( $child_menu_items ) && intval( $menu_item->menu_item_parent ) === 0 ): ?>
                            <li class="nav-item">
                                <a href="<?php echo esc_url( $menu_item->url ); ?>" class="nav-link">
									<?php echo esc_html( $menu_item->title ); ?>
                                </a>
                            </li>
						<?php endif ?>
							<?php if ( ! empty( $child_menu_items ) ): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo esc_url( $menu_item->url ); ?>"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<?php echo esc_html( $menu_item->title ); ?>
                                </a>
                                <ul class="dropdown-menu">
									<?php foreach ( $child_menu_items as $child_menu_item ): ?>
                                        <a href="<?php echo esc_url( $child_menu_item->url ); ?>" class="dropdown-item">
											<?php echo esc_html( $child_menu_item->title ); ?>
                                        </a>
									<?php endforeach; ?>
                                </ul>
                            </li>
						<?php endif; ?>
						<?php endforeach; ?>
					<?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>