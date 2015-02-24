<?php
/*
Template Name: Default page Template
*/
?>

<?php get_header(); ?>

	<?php //while ( have_posts() ) : the_post(); ?>
		<?php
			$args = array(
				'sort_order' => 'ASC',
				'sort_column' => 'menu_order', //post_title
				'hierarchical' => 1,
				'exclude' => '',
				'child_of' => 0,
				'parent' => -1,
				'exclude_tree' => '',
				'number' => '',
				'offset' => 0,
				'post_type' => 'page',
				'post_status' => 'publish'
			);
			$pages = get_pages($args);
			//start loop
			foreach ($pages as $page_data) {
				$content = apply_filters('the_content', $page_data->post_content);
				$title = $page_data->post_title;
				$slug = $page_data->post_name;
			?>
				<div class='<?php echo "$slug" ?>' id="<?php echo $slug ?>">
					<div class="container">
						<h2><?php echo "$title" ?></h2>
						<?php echo "$content" ?>
						<a href="#top" rel="m_PageScroll2id">top</a>
					</div>
				</div>
				
	<?php //endwhile; ?>

	<?php } ?>
	
<?php get_footer(); ?>