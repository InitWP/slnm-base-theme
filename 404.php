<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package slnm-base
 */

get_header(); ?>

	<main id="main" class="l-main l-container">

		<article class="error404 entry">
			<header class="entry--header">
				<h1><?php esc_html_e( 'Oeps! De pagina kan niet worden gevonden.', 'slnm-base' ); ?></h1>
			</header><!-- .entry--header -->

			<div class="entry--content">
				<p><?php esc_html_e( 'Het lijkt erop dat er niets op deze locatie te vinden is. Misschien kan een zoekactie helpen: ', 'slnm-base' ); ?></p>

				<?php
					get_search_form();
				?>

			</div><!-- .entry--content -->
		</article><!-- .error404 -->

	</main><!-- #main -->

<?php
get_footer();
