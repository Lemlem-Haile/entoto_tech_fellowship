<?php
/**
 * The template part for displaying slider
 *
 * @package Food Restaurant 
 * @subpackage food_restaurant
 * @since 1.0
 */
?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>

<div class="main-inner-ser-box">
  <h3 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h3>
  <div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>   
    <div class="date-box"><?php the_time( get_option( 'date_format' ) ); ?></div>
    <div class="box-image">
      <?php
        if ( ! is_single() ) {

          // If not a single post, highlight the video file.
          if ( ! empty( $video ) ) {
            foreach ( $video as $video_html ) {
              echo '<div class="entry-video">';
                echo $video_html;
              echo '</div>';
            }
          };

        }; 
      ?> 
    </div>
    <div class="new-text">
      <?php the_excerpt();?>
    </div>
    <div class="cat-box">
      <?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?>
    </div>
    <div class="clearfix"></div>
  </div>
</div>