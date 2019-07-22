<?php 

function prefix_woocommerce_checkout_update_order_meta( $order_id ) {
	update_post_meta( $order_id, 'cpf', sanitize_text_field( $_POST['billing_cpf'] ) );
	update_post_meta( $order_id, 'number', sanitize_text_field( $_POST['billing_number'] ) );
	update_post_meta( $order_id, 'neighborhood', sanitize_text_field( $_POST['billing_neighborhood'] ) );
}
add_action( 'woocommerce_checkout_update_order_meta', 'prefix_woocommerce_checkout_update_order_meta' );
