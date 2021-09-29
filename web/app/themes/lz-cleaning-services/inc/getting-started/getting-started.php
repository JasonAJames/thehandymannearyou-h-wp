<?php
//about theme info
add_action( 'admin_menu', 'lz_cleaning_services_gettingstarted' );
function lz_cleaning_services_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'lz-cleaning-services'), esc_html__('About Theme', 'lz-cleaning-services'), 'edit_theme_options', 'lz_cleaning_services_guide', 'lz_cleaning_services_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function lz_cleaning_services_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'lz_cleaning_services_admin_theme_style');

//guidline for about theme
function lz_cleaning_services_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'lz-cleaning-services' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to LZ Cleaning Services WordPress Theme', 'lz-cleaning-services' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'lz-cleaning-services' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'lz-cleaning-services' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'lz-cleaning-services' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'lz-cleaning-services' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'lz-cleaning-services' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'lz-cleaning-services' ); ?> <a href="<?php echo esc_url( LZ_CLEANING_SERVICES_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'lz-cleaning-services' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Cleaning services is a big name in the area of cleaning. It is a theme suitable for any company that operates in the area of cleaning sector or associated with the cleaning sector. One of the best things about this theme is that there is use of the zero programing skills and it can be finely used by the advanced developers. Armed with some of the mind bowing features like elegance, retina readiness, personalization options, testimonial section, SEO friendly, customization option, CTA, Bootstrap framework, shortcodes and much more;  it is good for cleaning service companies, maid service companies, maintenance and general service company and also suitable for other companies in the corporate category. Cleaning WordPress Themes professional and modern design helps to advertise the cleaning services to potential customers, cleaning services, Maintenance, Maid clean services. It is also good for the maintenance as well as the general service companies. This WP theme provides choice to select the home page options and because of its professional as well as modern design, you have the option to advertise the cleaning services to the potential clients in the global market. Cleaning services is highly appreciable when it comes to the global customer reviews. ', 'lz-cleaning-services')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free LZ Cleaning Services Theme', 'lz-cleaning-services' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'lz-cleaning-services'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( LZ_CLEANING_SERVICES_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'lz-cleaning-services'); ?></a>
			<a href="<?php echo esc_url( LZ_CLEANING_SERVICES_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'lz-cleaning-services'); ?></a>
			<a href="<?php echo esc_url( LZ_CLEANING_SERVICES_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'lz-cleaning-services'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/cleaning-services.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'lz-cleaning-services'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'lz-cleaning-services'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'lz-cleaning-services'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'lz-cleaning-services'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'lz-cleaning-services'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'lz-cleaning-services'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'lz-cleaning-services'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'lz-cleaning-services'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'lz-cleaning-services'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'lz-cleaning-services'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'lz-cleaning-services'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'lz-cleaning-services'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'lz-cleaning-services'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>