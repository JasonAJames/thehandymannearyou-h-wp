<?php
/**
 * Template part for displaying  Single Posts
 * @subpackage lz-cleaning-services
 * @since 1.0
 * @version 1.4
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="single-post">
    <div class="article_content">
      <div class="article-text">
        <h1 class="single-post"><?php the_title();?></h1>
          <div class="metabox1"> 
            <span class="entry-author"><i class="fas fa-user"></i><?php the_author(); ?></span>
            <span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date()); ?></span>
            <span class="entry-comments"><i class="fas fa-comments"></i><?php comments_number( __('0 Comments','lz-cleaning-services'), __('0 Comments','lz-cleaning-services'), __('% Comments','lz-cleaning-services') ); ?></span>
          </div>
        <?php the_post_thumbnail(); ?>
        <div class="entry-content"><p><?php the_content(); ?></p></div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</article>