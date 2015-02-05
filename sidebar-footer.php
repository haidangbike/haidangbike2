<?php
	if (   ! is_active_sidebar( 'sidebar-2' )
		&& ! is_active_sidebar( 'sidebar-3' )
		&& ! is_active_sidebar( 'sidebar-4' )
		&& ! is_active_sidebar( 'sidebar-5' )
		&& ! is_active_sidebar( 'sidebar-6' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

<div class="footer-links">
	<div class="container">
		<div class="col-md-2 col-sm-6">
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-2 col-sm-6">
			<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-2 col-sm-6">
			<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-2 col-sm-6">
			<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-5' ); ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-4 col-sm-12 last">
			<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-6' ); ?>
			<?php endif; ?>
		</div>
		<div style="clear:both"></div>
	</div>
</div>
