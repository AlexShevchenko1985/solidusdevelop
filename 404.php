<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package aitech
 */

get_header();
?>
	<main id="primary" class="site-main">

		<section class="error-404 not-found">
            <div class="container">
                <h1>404</h1>
                <div class="error-404__inner">
                    <h2>Oops, Page Not Found</h2>
                    <p>Looks like the page you’re looking for doesn’t exist. You can return to our Home Page to continue exploring.</p>
                    <a href="<?= get_home_url() ?>" class="btn">Back to Home Page</a>
                </div>
            </div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
