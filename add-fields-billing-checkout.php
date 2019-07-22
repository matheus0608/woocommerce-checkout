<?php 
/**
 * Hooks add fields checkout custom
 *
 * Source: https://docs.woocommerce.com/document/tutorial-customising-checkout-fields-using-actions-and-filters/
 */
function prefix_woocommerce_checkout_fields( $fields ) {
    $fields['billing']['billing_cpf'] = array(
        'label' => __( 'CPF' ),
        'placeholder' => '',
        'required' => false, 
        'clear' => false, 
        'type' => 'text', 
        'input_class' => array( '' ), // add class in tag input
        'label_class' => array( '' ), // add class in tag label
        'class' => array( '' ), //form-row-first, form-row-last, form-row-wide or custom class, add class in tag p
        'priority' => 23, // position in checkout
    );

    $fields['billing']['billing_neighborhood'] = array(
        'label' => __( 'neighborhood' ),
        'placeholder' => '',
        'required' => false, 
        'clear' => false, 
        'type' => 'text', 
        'input_class' => array( '' ), // add class in tag input
        'label_class' => array( '' ), // add class in tag label
        'class' => array( '' ), //form-row-first, form-row-last, form-row-wide or custom class, add class in tag p
        'priority' => 23, // position in checkout
    );
    
    return $fields; 
}
add_filter( 'woocommerce_checkout_fields' , 'prefix_woocommerce_checkout_fields' );
