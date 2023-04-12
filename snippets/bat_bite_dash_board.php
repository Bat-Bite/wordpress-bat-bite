<?php

function changelog_widget_callback():void 
{
	$changelog= [];
	$separator = ' - ';
	
	function listarArray(array $array, string $separator): void
	{
		
		echo '<div class="main"><ul>';
		array_walk($array, function(&$value, $key) use ($separator) {
            echo sprintf('<li>%s%s%s</li>', esc_html($key), esc_html($separator), esc_html($value));
        });
        echo '</ul></div>';
	}
	
	listarArray($changelog, $separator);
}

function add_changelog_widget() 
{
	if (current_user_can('editor' || 'admin')) 
	{
		wp_add_dashboard_widget(
			'changelog_widget',
			'Bat-Bite - Cambios',
			'changelog_widget_callback'
		);
	}
}

add_action( 'wp_dashboard_setup', 'add_changelog_widget' );