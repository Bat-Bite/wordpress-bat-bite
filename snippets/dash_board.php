<?php
/**
 *
 * @return void
 */
function changelog_widget_callback():void {
 
    $changelog= [
        '12-02-31' => 'Implementacion de boton "ver gratis en Ondamedia". Implementacion de mejoras en el SEO de la sección "Integrantes" para una mejor visibilidad en motores de búsqueda.',
        '11-02-31' => 'Optimizaciones.',
        '10-02-31' => 'Mejoras de seguridad.'
    ];
    $separator = ' - ';
    
    /**
     *
     * @return void
     */
        function listarArray(array $array, string $separator): void {
            echo '<div class="main"><ul>';
            foreach($array as $key => $value) {
                echo '<li>'.esc_html($key).esc_html($separator).esc_html($value).'</li>';
            }
            echo '</ul></div>';
        }
        
        listarArray($changelog, $separator);
    }
    
    add_action( 'wp_dashboard_setup', 'add_changelog_widget' );
    
    function add_changelog_widget() {
        if (current_user_can('editor' || 'admin')) {
            wp_add_dashboard_widget(
                'changelog_widget',
                'Bat-Bite - Cambios',
                'changelog_widget_callback'
            );
        }
    }
