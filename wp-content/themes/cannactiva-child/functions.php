<?php

function agregar_estilos_personalizados() {
    wp_enqueue_style('estilos-personalizados', get_stylesheet_directory_uri() . '/css/mis-estilos.css');
}
add_action('wp_enqueue_scripts', 'agregar_estilos_personalizados');

add_action('init', 'cloneUserRole');
function cloneUserRole()
{
 global $wp_roles;
 if (!isset($wp_roles))
 $wp_roles = new WP_Roles();
 $adm = $wp_roles->get_role('customer');

 // Adding a new role with all admin caps.
 $wp_roles->add_role('dropshipper', 'Dropshipper', $adm->capabilities);
 $wp_roles->add_role('dropshipper_eu', 'Dropshipper EU', $adm->capabilities);
 $wp_roles->add_role('dropshipper_re', 'Dropshipper RE', $adm->capabilities);

}
