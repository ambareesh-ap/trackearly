<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xmoze
 */
use XmozeTheme\Inc\Classes\Xmoze_Main;

get_header();

$xmozeObj = new Xmoze_Main();
echo esc_html($xmozeObj->xmoze_breadcrumb_bridge());

$xmoze = get_option('xmoze');
$grid = (isset($xmoze['blog_grid'])) ? $xmoze['blog_grid'] : 'two-column';

?>

<div class="content-block">
	<div class="container">
		<div class="row blog-content-row">

			<?php
			// If Redux Framework Active
			if (class_exists('ReduxFrameworkPlugin')) :
				$xmozeObj->postMarkupGenerator($xmoze['blog_layout'], $grid);

			else : // If Redux Framework Is Not Active

				$xmozeObj->postMarkupGenerator(null, $grid);

			endif;

			?>

		</div>
	</div>
</div>


<?php
get_footer();
