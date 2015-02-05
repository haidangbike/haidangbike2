<?php
function my_cpt_init() {
global $wp_rewrite;
register_post_type('sanpham', array('label' => 'Sản phẩm','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'products', 'with_front' => false),'query_var' => true,
  'has_archive' => true,'supports' => array('title', 'editor', 'comments','excerpt', 'trackbacks', 'custom-fields', 'thumbnail',), 'labels' => array (
  'name' => 'Sản phẩm',
  'singular_name' => __('Sản phẩm'),
  'menu_name' =>  __('Sản phẩm'),
  'add_new' =>  __('Thêm sản phẩm'),
  'add_new_item' =>  __('Thêm sản phẩm'),
  'edit' =>  __('Edit'),
  'edit_item' =>  __('Edit'),
  'new_item' =>  __('New '),
  'view' =>  __('View '),
  'view_item' =>  __('View '),
  'search_items' =>  __('Search '),
  'not_found' =>  __('No  Found'),
  'not_found_in_trash' =>  __('No  Found in Trash'),
  'parent' =>  __('Parent '),
),) );

register_taxonomy('products',array (
  0 => 'sanpham',
),array( 'hierarchical' => true, 'label' => 'Nhóm hàng','show_ui' => true,'query_var' => true,'rewrite' => array('slug' => 'products', 'with_front' => false),'singular_label' => 'Sản phẩm') );

$wp_rewrite->flush_rules();
}
add_action('init', 'my_cpt_init');
?>
