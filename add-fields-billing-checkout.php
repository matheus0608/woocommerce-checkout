<?php 

function prefix_woocommerce_checkout_fields( $fields ) {
    $fields['billing']['billing_cpf'] = array(
        'label' => __( 'CPF' ),
        'placeholder' => '',
        'required' => false, 
        'clear' => false, 
        'type' => 'text', 
        'class' => array('my-css') 
    );

    $fields['billing']['billing_neighborhood'] = array(
        'label' => __( 'neighborhood' ),
        'placeholder' => '',
        'required' => false, 
        'clear' => false, 
        'type' => 'text', 
        'class' => array('my-css') 
    );

	return $fields; 
}
add_filter( 'woocommerce_checkout_fields' , 'prefix_woocommerce_checkout_fields' );
