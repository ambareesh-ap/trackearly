<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xmoze
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php xmoze_post_thumbnail(); ?>
	<div class="single-post-content-wrap">
		<div class="category-date-area">
			<div class="d-flex align-items-center">
				<div class="category-single">
					<?php
					$category = get_the_category();
					if ($category[0]) {
						echo '<span><a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a></span>';
					}

					?>

				</div>
				<div class="separator">
					<i class="fas fa-circle"></i>
				</div>
				<div class="date-single">
					<span class="xmoze-single-post-date"><?php echo the_date(); ?></span>
				</div>
			</div>
		</div>

		<div class="entry-content clearfix">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'xmoze'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					esc_html(get_the_title())
				)
			);
			?>
			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'xmoze'),
					'after'  => '</div>',
				)
			);
			?>
		</div>


	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->