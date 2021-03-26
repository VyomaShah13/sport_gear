<?php
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 0 );
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 5 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    /**
     * Show cart contents / total cart value using Ajax
     */

    function sport_woocommerce_add_to_cart_fragments( $fragments ) {
        global $woocommerce;

        ob_start();

        ?>
        <a class="cart-container" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span id="cart-items" class="cart-items"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span>
        </a>
        <?php
        $fragments['a.cart-container'] = ob_get_clean();
        return $fragments;
    }
    add_filter( 'woocommerce_add_to_cart_fragments', 'sport_woocommerce_add_to_cart_fragments' );
    
