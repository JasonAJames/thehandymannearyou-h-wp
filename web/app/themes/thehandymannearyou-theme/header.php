<?php
/**
 * The header for our theme
 *
 * @subpackage lz-cleaning-services
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'lz-cleaning-services' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lz-cleaning-services' ); ?></a>

	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<span class="contact">
						<span class="call"><?php if( get_theme_mod('lz_cleaning_services_location') != ''){ ?>
							<i class="fas fa-map-marker-alt"></i><?php echo esc_html( get_theme_mod('lz_cleaning_services_location','') ); ?><?php } ?>
						</span>
						<span class="email"><?php if( get_theme_mod('lz_cleaning_services_timming') != ''){ ?>
							<i class="far fa-clock"></i><?php echo esc_html( get_theme_mod('lz_cleaning_services_timming','') ); ?><?php } ?>
						</span>
					</span>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="social-icons">
								<?php if( get_theme_mod( 'lz_cleaning_services_facebook_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'lz_cleaning_services_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
							    <?php } ?>
							    <?php if( get_theme_mod( 'lz_cleaning_services_twitter_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'lz_cleaning_services_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
							    <?php } ?>
							    <?php if( get_theme_mod( 'lz_cleaning_services_insta_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'lz_cleaning_services_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
							    <?php } ?>
							    <?php if( get_theme_mod( 'lz_cleaning_services_linkedin_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'lz_cleaning_services_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
							    <?php } ?>	 
							    <?php if( get_theme_mod( 'lz_cleaning_services_pinterest_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'lz_cleaning_services_pinterest_url','' ) ); ?>"><i class="fab fa-pinterest-p"></i></a>
							    <?php } ?>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<?php if( get_theme_mod( 'lz_cleaning_services_quote_text') != '') { ?>
								<div class="quote-btn">
									<a href="<?php echo esc_url( get_theme_mod( 'lz_cleaning_services_quote_url','' ) ); ?>"><?php echo esc_html( get_theme_mod( 'lz_cleaning_services_quote_text','' ) ); ?></a>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header id="header" role="banner">	
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="logo">
				        <?php if ( has_custom_logo() ) : ?>
					        <div class="site-logo"><?php the_custom_logo(); ?></div>
					    <?php endif; ?>
			            <?php if (get_theme_mod('lz_cleaning_services_show_site_title',true)) {?>
					        <?php $blog_info = get_bloginfo( 'name' ); ?>
					        <?php if ( ! empty( $blog_info ) ) : ?>
					            <?php if ( is_front_page() && is_home() ) : ?>
						            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></h1>
					        	<?php else : ?>
				            		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></p>
					            <?php endif; ?>
					        <?php endif; ?>
					    <?php }?>
			        	<?php if (get_theme_mod('lz_cleaning_services_show_tagline',true)) {?>
					        <?php
					        $description = get_bloginfo( 'description', 'display' );
					        if ( $description || is_customize_preview() ) :
					          ?>
						        <p class="site-description">
						            <?php echo esc_html($description); ?>
						        </p>
					        <?php endif; ?>
					    <?php }?>
				    </div>
				</div>
				<div class="col-lg-5 offset-lg-4 col-md-9">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="info-box">
								<div class="row">
									<?php if( get_theme_mod('lz_cleaning_services_call_text') != '' ||  get_theme_mod('lz_cleaning_services_call_number') != ''){ ?>
										<div class="col-lg-3 col-md-3">
											<i class="fas fa-phone"></i>
										</div>
										<div class="col-lg-9 col-md-9">
											<h6><?php echo esc_html( get_theme_mod('lz_cleaning_services_call_text','') ); ?></h6>
											<p><a href="tel:<?php echo esc_url( get_theme_mod('lz_cleaning_services_call_number','') ); ?>"><?php echo esc_html( get_theme_mod('lz_cleaning_services_call_number','') ); ?></a></p>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="info-box">
								<div class="row">
									<?php if( get_theme_mod('lz_cleaning_services_email_text') != '' ||  get_theme_mod('lz_cleaning_services_email_address') != ''){ ?>
										<div class="col-lg-3 col-md-3">
											<i class="far fa-envelope"></i>
										</div>
										<div class="col-lg-9 col-md-9">
											<h6><?php echo esc_html( get_theme_mod('lz_cleaning_services_email_text','') ); ?></h6>
											<p><a href="mailto:<?php echo esc_url( get_theme_mod('lz_cleaning_services_email_address','') ); ?>"><?php echo esc_html( get_theme_mod('lz_cleaning_services_email_address','') ); ?></a></p>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-section">
			<div class="container">
				<?php if (has_nav_menu('primary')){ ?>
					<div class="toggle-menu responsive-menu">
			            <button onclick="lz_cleaning_services_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','lz-cleaning-services'); ?></span></button>
			        </div>
					<div id="sidelong-menu" class="nav sidenav">
		                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'lz-cleaning-services' ); ?>">
		                  	<?php 
		                    wp_nav_menu( array( 
		                      'theme_location' => 'primary',
		                      'container_class' => 'main-menu-navigation clearfix' ,
		                      'menu_class' => 'clearfix',
		                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
		                      'fallback_cb' => 'wp_page_menu',
		                    ) ); 
		                  	?>
		                  	<a href="javascript:void(0)" class="closebtn responsive-menu" onclick="lz_cleaning_services_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','lz-cleaning-services'); ?></span></a>
		                </nav>
		            </div>
		        <?php }?>
			</div>
		</div>
	</header>

	<div class="site-content-contain">
		<div id="content" class="site-content">