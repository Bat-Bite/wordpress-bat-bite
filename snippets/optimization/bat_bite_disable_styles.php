<?php

// Función para desactivar los estilos CSS de la biblioteca de bloques de WordPress
function remove_wp_block_library_css(): void
{
  // Crear un array con los nombres de los estilos CSS que se desactivarán
  $disabled_styles = [
    'wp-block-library',
    'wp-block-library-theme',
    'global-styles',
    'classic-theme-styles',
  ];

  // Recorrer el array y desactivar cada estilo CSS
  foreach ($disabled_styles as $style) 
  {
    // Comprobar si la función wp_dequeue_style está disponible en WordPress
    if (function_exists('wp_dequeue_style')) 
    {
      // Desactivar el estilo CSS actual utilizando la función wp_dequeue_style
      wp_dequeue_style($style);
    }
  }
}

// Agregar la función remove_wp_block_library_css a la acción wp_print_styles con una prioridad de 100
add_action('wp_print_styles', 'remove_wp_block_library_css', 100);