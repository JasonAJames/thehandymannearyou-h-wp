<?php
/**
 * Template part for displaying posts
 * @subpackage lz-cleaning-services
 * @since 1.0
 * @version 1.4
 */

?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="article_content">
    <div class="metabox"> 
      <span class="entry-author"><i class="fas fa-user"></i><?php the_author(); ?></span>
      <span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date()); ?></span>
      <span class="entry-comments"><i class="fas fa-comments"></i><?php comments_number( __('0 Comments','lz-cleaning-services'), __('0 Comments','lz-cleaning-services'), __('% Comments','lz-cleaning-services') ); ?></span>
    </div>
    <?php if(has_post_thumbnail()) { ?>
      <?php the_post_thumbnail(); ?>  
    <?php }?>
    <h3><?php the_title(); ?></h3>
    <div class="entry-content"><p><?php the_excerpt(); ?></p></div>
    <div class="read-btn">
      <a href="<?php the_permalink(); ?>" title="<?php esc_attr_e( 'READ MORE', 'lz-cleaning-services' ); ?>"><?php esc_html_e('READ MORE','lz-cleaning-services'); ?>
      </a>
    </div>
    <div class="clearfix"></div> 
  </div>
</article>