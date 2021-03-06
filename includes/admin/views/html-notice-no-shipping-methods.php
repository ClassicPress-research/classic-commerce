<?php
/**
 * Admin View: Notice - No Shipping methods.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="message" class="updated woocommerce-message woocommerce-no-shipping-methods-notice">
	<a class="woocommerce-message-close notice-dismiss" href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'wc-hide-notice', 'no_shipping_methods' ), 'woocommerce_hide_notices_nonce', '_wc_notice_nonce' ) ); ?>"><?php _e( 'Dismiss', 'classic-commerce' ); ?></a>

	<p class="main"><strong><?php _e( 'Add shipping methods &amp; zones', 'classic-commerce' ); ?></strong></p>
	<p><?php _e( 'Shipping is currently enabled, but you have not added any shipping methods to your shipping zones.', 'classic-commerce' ); ?></p>
	<p><?php _e( 'Customers will not be able to purchase physical goods from your store until a shipping method is available.', 'classic-commerce' ); ?></p>

	<p class="submit">
		<a class="button-primary" href="<?php echo esc_url( admin_url( 'admin.php?page=wc-settings&tab=shipping' ) ); ?>"><?php _e( 'Setup shipping zones', 'classic-commerce' ); ?></a>
		<a class="button-secondary" href="https://classiccommerce.cc/docs/installation-and-setup/shipping/"><?php _e( 'Learn more about shipping zones', 'classic-commerce' ); ?></a>
	</p>
</div>
