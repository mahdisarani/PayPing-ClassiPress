<?php
/*
Plugin Name: PayPing ClassiPress
Description: دروازه‌پرداخت پی‌پینگ برای پوسته کلاسی‌پرس
Version: 1.0.0
Author: MahdiSarani
Author URI: https://MahdiSarani.ir
Text Domain: PayPing
*/
add_action( 'init', 'PayPing_ClassiPress_Gateway' );
function PayPing_ClassiPress_Gateway(){
    appthemes_pp_add_currencies();
    include 'includes/PayPingGateway.php';
}

function appthemes_pp_add_currencies(){
    $currencies = array(
        'IRR' => array(
            'symbol' => 'ریال',
            'name' => __('ایران', 'PayPing')
        ),
        'IRT' => array(
            'symbol' => 'تومان',
            'name' => __('ایران', 'PayPing')
        )
    );
    foreach( $currencies as $currency_code => $args ){
        APP_Currencies::add_currency( $currency_code, $args );
    }
}
