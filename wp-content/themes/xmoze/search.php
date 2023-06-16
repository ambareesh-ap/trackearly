<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package xmoze
 */

use XmozeTheme\Inc\Classes\Xmoze_Main;

get_header();

$xmozeObj = new Xmoze_Main();
$xmozeObj->xmoze_breadcrumb_bridge();

$xmoze = get_option('xmoze');
$grid = (isset($xmoze['blog_grid'])) ? $xmoze['blog_grid'] : 'one-column';

?>

<div class="content-block sp-80">
	<div class="container">
		<div class="row blog-content-row justify-content-center">

			<?php
			// If Redux Framework Active
			if (have_posts()) :

				if (class_exists('ReduxFrameworkPlugin')) :
					$xmozeObj->postMarkupGenerator($xmoze['blog_layout'], $grid);

				else : // If Redux Framework Is Not Active

					$xmozeObj->postMarkupGenerator(null, $grid);

				endif;
			else :
				get_template_part('template-parts/contents/content-none');
			endif;
			?>
		</div>
	</div>
</div>


<?php
get_footer();
