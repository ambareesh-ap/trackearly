<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
		<div class="row blog-content-row justify-content-center">

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
