<?php
function RableWay_assets() {
  wp_enqueue_style(
    'meu-css',
    get_template_directory_uri() . '/assets/css/style.css'
  );

  wp_enqueue_script(
    'meu-js',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'RableWay_assets');
