<?php get_header(); ?>
<?php ambient_elated_get_title(); ?>
<div class="eltdf-container eltdf-default-page-template">
	<?php do_action('ambient_elated_after_container_open'); ?>
	<div class="eltdf-container-inner clearfix">
		<?php
			$tag_id = get_queried_object_id();
			$tag = get_tag($tag_id);
			$tag_slug = $tag->slug;

			ambient_elated_get_portfolio_tag_list($tag_slug);
		?>
	</div>
	<?php do_action('ambient_elated_before_container_close'); ?>
</div>
<?php get_footer(); ?>
