<?php
/**
 * Template part for displaying page content in page.php
 * @subpackage lz-cleaning-services
 * @since 1.0
 * @version 0.1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" role="banner">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php lz_cleaning_services_edit_link( get_the_ID() ); ?>
	</header>
	<div class="entry-content">
		<?php the_post_thumbnail(); ?>
		<div class="entry-content"><p><?php the_content();?></p></div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'lz-cleaning-services' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>