<?php

// Función para devolver un mensaje personalizado cuando se trate de ingresar al feed
function disable_feed_meesage()
{
    $message = 'Feed no disponible,visite nuestro sitio web <a href="'. esc_url( home_url( '/' ) ) .'">Storyboard Media</a>!';
    wp_die($message);
}

// Deshabilitar acceso a los feeds
add_action('do_feed', 'itsme_disable_feed', 1);
add_action('do_feed_rdf', 'itsme_disable_feed', 1);
add_action('do_feed_rss', 'itsme_disable_feed', 1);
add_action('do_feed_rss2', 'itsme_disable_feed', 1);
add_action('do_feed_atom', 'itsme_disable_feed', 1);
add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);

// Quitar del head los links del feed
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );