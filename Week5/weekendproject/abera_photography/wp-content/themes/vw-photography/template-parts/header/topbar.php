<?php
/**
 * The template part for header
 *
 * @package VW Photography 
 * @subpackage vw_photography
 * @since VW Photography 1.0
 */
?>

<?php
  $vw_photography_search_hide_show = get_theme_mod( 'vw_photography_search_hide_show' );
  if ( 'Disable' == $vw_photography_search_hide_show ) {
   $colmd = 'col-lg-4 col-md-4';
  } else { 
   $colmd = 'col-lg-3 col-md-4';
  } 
?>

<div id="header">
  <div class="container">
    <div class="bg-header-box">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="nav primary-left">
            <?php wp_nav_menu( array('theme_location'  => 'primary-left') ); ?>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="logo">
            <?php if( has_custom_logo() ){ vw_photography_the_custom_logo();
              }else{ ?>
              <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) : ?>
              <p class="site-description"><?php echo esc_html($description); ?></p>
            <?php endif; } ?>
          </div>
        </div>
        <div class="<?php echo esc_html( $colmd ); ?>">
          <div class="nav primary-right">
            <?php wp_nav_menu( array('theme_location'  => 'primary-right') ); ?>
          </div>
        </div>
        <?php if ( 'Disable' != $vw_photography_search_hide_show ) {?>
          <div class="search-box col-lg-1 col-md-12">
            <span><i class="fas fa-search"></i></span>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="serach_outer">
    <div class="closepop"><i class="far fa-window-close"></i></div>
    <div class="serach_inner">
      <?php get_search_form(); ?>
    </div>
  </div>
</div>