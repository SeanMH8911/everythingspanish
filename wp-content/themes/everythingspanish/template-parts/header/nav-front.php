<?php
/**
 * Header Navigation template.
 *
 * @package EverythingSpanish
 */

$menu_class     = \EVERYTHINGSPANISH_Theme\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'everythingspanish-header-menu' );
$header_menus   = wp_get_nav_menu_items( $header_menu_id );
?>



  <div class="hero-section">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
    <nav class="nav-front navbar navbar-expand-lg py-4">
	<div class="container">
		
		<?php
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
		?>
		<a class="navbar-brand" href="/">Everything Spanish</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
		        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="30 " height="30" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<?php
			if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
				?>
				<ul class="navbar-nav ms-auto">
					<?php
					foreach ( $header_menus as $menu_item ) {
						if ( ! $menu_item->menu_item_parent ) {

							$child_menu_items   = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
							$has_children       = ! empty( $child_menu_items ) && is_array( $child_menu_items );
							$has_sub_menu_class = ! empty( $has_children ) ? 'has-submenu' : '';
							$link_target        = ! empty( $menu_item->target ) && '_blank' === $menu_item->target ? '_blank' : '_self';

							// Note_: Similar to $menu_item->target, there are other keys available in the $menu_item, such as classes. You can more key values if you need.

							if ( ! $has_children ) {
								?>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo esc_url( $menu_item->url ); ?>"
									   target="<?php echo esc_attr( $link_target ); ?>"
									   title="<?php echo esc_attr( $menu_item->title ); ?>">
										<?php echo esc_html( $menu_item->title ); ?>
									</a>
								</li>
								<?php
							} else {
								?>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url ); ?>"
									   id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									   aria-expanded="false" target="<?php echo esc_attr( $link_target ); ?>"
									   title="<?php echo esc_attr( $menu_item->title ); ?>">>
										<?php echo esc_html( $menu_item->title ); ?>
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php
										foreach ( $child_menu_items as $child_menu_item ) {
											$link_target = ! empty( $child_menu_item->target ) && '_blank' === $child_menu_item->target ? '_blank' : '_self';
											?>
											<a class="dropdown-item"
											   href="<?php echo esc_url( $child_menu_item->url ); ?>"
											   target="<?php echo esc_attr( $link_target ); ?>"
											   title="<?php echo esc_attr( $child_menu_item->title ); ?>">>
												<?php echo esc_html( $child_menu_item->title ); ?>
											</a>
											<?php
										}
										?>
									</div>
								</li>
								<?php
							}
							?>
							<?php
						}
					}
					?>
				</ul>
				<?php
			}
			?>
			<?php get_search_form(); ?>
		</div>
	</div>
</nav>
      <div class="hero-content">
      	<div class="hero-header">
		  <h1 class="mb-3">ME ENCANTA ESPAÑA</h1>
		</div>
        <div class="hero-tagline">
			  <h4 class="mb-3">For The Love Of Spain And Everything Spanish</h4>
		</div>
        <div class="hero-button">
			<a class="btn btn-outline-light btn-lg" href="#latest-posts" role="button">View Latest Posts</a>
		</div>
      </div>
    </div>
  </div>