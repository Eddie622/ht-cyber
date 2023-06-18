<?php

function htcyber_customizer( $wp_customize ) {
    if ( ! isset( $wp_customize ) ) {
		return;
	}
}
add_action( 'customize_register', 'htcyber_customizer' );
