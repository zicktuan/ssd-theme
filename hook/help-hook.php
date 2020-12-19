<?php

    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
    add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

    if ( ! function_exists('woocommerce_template_loop_product_thumbnail') ) {
        function woocommerce_template_loop_product_thumbnail() {
            echo woocommerce_get_product_thumbnail();
        }
    }

    if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {
        function woocommerce_get_product_thumbnail( $size = 'shop_catalog' ) {
            global $post;
            $output = '';

            if ( has_post_thumbnail() ) {
                $output .= get_the_post_thumbnail( $post->ID, $size );
//                 $output .= '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="600px" height="764px" />';
            } else {
                $output .= wc_placeholder_img( $size );
            }
            return $output;
        }
    }


    remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
    add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

    if ( ! function_exists('woocommerce_template_loop_product_title') ) {
        function woocommerce_template_loop_product_title() {
            echo '<a href="#" class="text-black d-block font-weight-600 sm-text-extra-large">'.get_the_title().'</a>';
        }
    }