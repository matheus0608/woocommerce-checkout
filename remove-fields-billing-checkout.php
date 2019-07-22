<?php 

function prefix_woocommerce_checkout_fields( $fields ) {
    unset( $fields['billing']['billing_cpf'] );
    unset( $fields['billing']['billing_neighborhood'] );

    return $fields; 
}
add_filter( 'woocommerce_checkout_fields' , 'prefix_woocommerce_checkout_fields' );
