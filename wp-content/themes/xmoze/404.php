<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package xmoze
 */
use XmozeTheme\Inc\Classes\Xmoze_Main;
get_header();

$xmozeObj = new Xmoze_Main();
?>
<?php echo esc_html($xmozeObj->xmoze_breadcrumb_bridge()); ?>
<div class="error-404 not-found">
	<div class="container">
		<div class="row justify-content-center align-items-center">
		<div class="col-md-8 order-1 text-center">
				<img src="<?php echo esc_url( get_theme_file_uri('/assets/img/404.png') );  ?>" alt="<?php echo esc_attr('404 page') ?>">
			</div>
			<div class="col-xl-5 col-lg-6 col-md-8 content-404 order-2 text-center px-xl-5">
				<h4><?php echo esc_html__( '404 Error!', 'xmoze' ) ?></h4>
				<p><?php echo esc_html__('The page you are looking for is not available or doesn’t belong to this website!', 'xmoze') ?></p>
				<a href="<?php echo esc_url(home_url()) ?>" class="xmoze-btn"><?php echo esc_html__( 'Go back to home', 'xmoze' ) ?></a>
			</div>
		</div>
	</div>
</div><!-- .error-404 -->


<?php
get_footer();
