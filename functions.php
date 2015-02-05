<?php
// Themes
include_once("inc/product.php");

// Thumbnail
add_theme_support('post-thumbnails');

// Image size for single posts
add_image_size( 'single-post-thumbnail', 230, 190 );

// Menu
register_nav_menus( array('header' => __( 'Main Menu' ), 'header' => 'Header Menu'));

// Widget
register_sidebar( array(
	'name' => __( 'Sidebar Right', 'xehaidang' ),
	'id' => 'sidebar-1',
	'class' => '',
	'description' => __( 'Right Sidebar', 'xehaidang' ),
	'before_widget' => '<div id="%1$s" class="list-group widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="side-heading">',
	'after_title' => '</h3>',
) );

// Area 2, located in the footer. Empty by default.
register_sidebar( array(
	'name' => __( 'Footer Widget 1', 'twentyten' ),
	'id' => 'sidebar-2',
	'description' => __( 'An optional widget area for your site footer.', 'twentyten' ),
	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

// Area 3, located in the footer. Empty by default.
register_sidebar( array(
	'name' => __( 'Footer Widget 2', 'twentyten' ),
	'id' => 'sidebar-3',
	'description' => __( 'An optional widget area for your site footer.', 'twentyten' ),
	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

// Area 4, located in the footer. Empty by default.
register_sidebar( array(
	'name' => __( 'Footer Widget 3', 'twentyten' ),
	'id' => 'sidebar-4',
	'description' => __( 'An optional widget area for your site footer.', 'twentyten' ),
	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

// Area 5, located in the footer. Empty by default.
register_sidebar( array(
	'name' => __( 'Footer Widget 4', 'twentyten' ),
	'id' => 'sidebar-5',
	'description' => __( 'An optional widget area for your site footer.', 'twentyten' ),
	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

// Area 5, located in the footer. Empty by default.
register_sidebar( array(
	'name' => __( 'Footer Widget 5', 'twentyten' ),
	'id' => 'sidebar-6',
	'description' => __( 'An optional widget area for your site footer.', 'twentyten' ),
	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

// Pagination
function wp_pagination() {
global $wp_query;
$big = 12345678;
$page_format = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'type'  => 'array'
) );
if( is_array($page_format) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="navi"><ul class="pagination">';
		echo '<li><span>'. $paged . ' trên ' . $wp_query->max_num_pages .'</span></li>';
		foreach ( $page_format as $page ) {
				echo "<li>$page</li>";
		}
	   echo '</ul></div>';
}
}

// Comment
function wordpressapi_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div id="comment-<?php comment_ID(); ?>">
		<div>
			<?php echo get_avatar($comment,$size='70',$default='<path_to_url>' ); ?>
			<?php $user_name_str = substr(get_comment_author(),0, 20); ?>
			<?php printf(__('<cite><b>%s</b></cite>'), $user_name_str) ?>
			<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
				Trả lời vào lúc:
				<?php comment_time('H:i'); ?>
				Ngày: <?php comment_time('d/m/Y'); ?>
			</a>
			<?php edit_comment_link(__('(Sửa)'),'&nbsp; ','') ?>
			<div>
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</div>
		</div>
	<?php if ($comment->comment_approved == '0') : ?>
	<em><?php _e('Thảo luận đang chờ duyệt.') ?></em>
	<br />
	<?php endif; ?>
	<?php comment_text() ?>
	</div> <!-- End #comment -->
<?php
 }
