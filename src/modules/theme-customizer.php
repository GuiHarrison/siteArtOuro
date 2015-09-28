<?php

/**
 * Create our panels and sections.
 */
function kirki_artOuro_panels_sections( $wp_customize ) {
  /**
   * Add panels
   */
  $wp_customize->add_panel( 'backgrounds', array(
    'priority'    => 10,
    'title'       => __( '', 'artOuro' ),
  ) );

  $wp_customize->add_section( 'contato', array(
    'title'       => __( 'Formas de Contato', 'artOuro' ),
    'priority'    => 1,
  ) );

  $wp_customize->add_section( 'redes-sociais', array(
    'title'       => __( 'Redes Sociais', 'artOuro' ),
    'priority'    => 2,
  ) );

  $wp_customize->add_section( 'analytics', array(
    'title'       => __( 'Google Analytics', 'artOuro' ),
    'priority'    => 3,
  ) );

}
add_action( 'customize_register', 'kirki_artOuro_panels_sections' );


/**
 * Add our controls.
 */
function kirki_artOuro_fields( $fields ) {


$fields[] = array(
      'type'        => 'text',
      'setting'     => 'facebook',
      'label'       => __( 'Facebook', 'artOuro' ),
      'description' => __( 'Link do facebook, includindo http://', 'artOuro' ),
      'section'     => 'redes-sociais',
      'default'     => '',
      'priority'    => 10,
  );

$fields[] = array(
      'type'        => 'text',
      'setting'     => 'twitter',
      'label'       => __( 'twitter', 'artOuro' ),
      'description' => __( 'Link do twitter, includindo http://', 'artOuro' ),
      'section'     => 'redes-sociais',
      'default'     => '',
      'priority'    => 10,
  );

$fields[] = array(
      'type'        => 'text',
      'setting'     => 'gplus',
      'label'       => __( 'gplus', 'artOuro' ),
      'description' => __( 'Link do gplus, includindo http://', 'artOuro' ),
      'section'     => 'redes-sociais',
      'default'     => '',
      'priority'    => 10,
  );

$fields[] = array(
      'type'        => 'text',
      'setting'     => 'instagram',
      'label'       => __( 'instagram', 'artOuro' ),
      'description' => __( 'Link do instagram, includindo http://', 'artOuro' ),
      'section'     => 'redes-sociais',
      'default'     => '',
      'priority'    => 10,
  );

$fields[] = array(
      'type'        => 'text',
      'setting'     => 'youtube',
      'label'       => __( 'youtube', 'artOuro' ),
      'description' => __( 'Link do youtube, includindo http://', 'artOuro' ),
      'section'     => 'redes-sociais',
      'default'     => '',
      'priority'    => 10,
  );

$fields[] = array(
      'type'        => 'textarea',
      'setting'     => 'analytics',
      'label'       => __( 'Código do Google Anatytics', 'artOuro' ),
      'description' => __( 'http://www.google.com/analytics/', 'artOuro' ),
      'section'     => 'analytics',
      'default'     => '',
      'priority'    => 10,
  );


  return $fields;

}
add_filter( 'kirki/fields', 'kirki_artOuro_fields' );

//customização da página de customização
function kirki_artOuro_configuration() {

    $args = array(
        'logo_image'   => get_template_directory_uri() . '/img/logo.svg',
        'url_path'     => $url,
        'color_accent' => '#dd5c26',
        'color_back'   => '#61a08d',
        'textdomain'   => 'kirki',
        'i18n'         => $strings,
    );

    return $args;

}

add_filter( 'kirki/config', 'kirki_artOuro_configuration' );


/**
 * Custom CSS
 */
function kirki_artOuro_custom_css() {

  // Early exit if Kirki is not installed
  if ( ! function_exists( 'kirki_get_option' ) ) {
    return;
  }

  // Add custom CSS for layouts
  $css = '';
  if ( 'full' == kirki_get_option( 'layout' ) ) {
    $css .= '#primary{width:100%;}';
  } elseif ( 'left-sidebar' == kirki_get_option( 'layout' ) ) {
    $css .= '#primary{float:right;}#secondary{float:left;}';
  }

  wp_add_inline_style( 'artOuro-style', $css );

}
add_action( 'wp_enqueue_scripts', 'kirki_artOuro_custom_css' );


?>