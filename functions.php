<?php 
function register_my_menus() {
    register_nav_menus(
      array(
        'menu_izquierdo' => __( 'Menu Principal Izquierdo' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
?>