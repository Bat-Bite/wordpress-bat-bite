<?php
/**
 * Shortcode para mostrar un botón con un enlace sanitizado que se encuentra en ACF.
 *
 * @return string
 */
function bat_bite_link_button_shortcode(): string
{
    $link = esc_url(get_field(''));
    $elementor_class =sanitize_text_field('');
    $text = sanitize_text_field('');

    if (!$link) {
        return '';
    }
    
    return '
    <div class="'.$elementor_class.'">
        <div class="elementor-widget-container">
            <div class="elementor-button-wrapper"> 
                <a target="_blank" rel="noopener noreferrer follow" href="' . $link . '" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                    <span class="elementor-button-content-wrapper">
                        <span class="elementor-button-text">' . $text . '</span>
                    </span>
                </a>
            </div>
        </div>
    </div>';
}

add_shortcode('bat_bite_link_button', 'bat_bite_link_button_shortcode');