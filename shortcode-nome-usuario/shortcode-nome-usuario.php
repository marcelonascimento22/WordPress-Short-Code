<?php
/*
Plugin Name: Shortcode Nome do Usuário
Description: Exibe o nome do usuário logado usando o shortcode [my-user-name] e retorna a variavel para logout [my-url-logout].
Version: 1.0
Author: Marcelo Nascimento
*/

/*
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function exibir_nome_usuario_logado() {
    if ( is_user_logged_in() ) {
        $user = wp_get_current_user();
        return esc_html( $user->display_name );
    }
    return 'Visitante';
}

add_shortcode( 'nome_usuario', 'exibir_nome_usuario_logado' );
*/

// Minha conta - Nome do usuário
function my_user_name() {
  $current_user = wp_get_current_user();
  return trim($current_user->user_firstname . ' ' . $current_user->user_lastname);
}
add_shortcode( 'my-user-name', 'my_user_name' );

// URL Logout
function my_url_logout() {
  return wp_logout_url();
}
add_shortcode( 'my-url-logout', 'my_url_logout' );