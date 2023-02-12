<?php
/**
 * Shortcode para mostrar un botón con un enlace sanitizado que se encuentra en ACF.
 *
 * @return string
 */
function link_button_shortcode(): string {
    $acf_link = get_field('link');

if (!$acf_link && !filter_var($acf_link, FILTER_VALIDATE_URL)) {
    return '';
}

return '
<div class="tu clase de elementor">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> 
 <a target="_blank" rel="noopener noreferrer follow" href="' . esc_url($acf_link) . '" class="elementor-button-link elementor-button elementor-size-sm" role="button">
  <span class="elementor-button-content-wrapper">
  <span class="elementor-button-text">texto boton</span>
  </span>
 </a>
</div>
</div>
</div>';
}

add_shortcode('link_button', 'link_button_shortcode');