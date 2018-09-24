<?php
/**
 * batanaWeb Theme Customizer
 *
 * @package batanaWeb
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function batanaweb_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'batanaweb_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'batanaweb_customize_partial_blogdescription',
		) );
	}

	//Register propios

	// Add section.
	$wp_customize->add_section( 'BatanaWeb' , array(
		'title'    => __('Batana Web Configuración'),
		'priority' => 10
	) );

	// Add setting
	$wp_customize->add_setting( 'texto_destacados', array(
		 'default'        => '',
	) );

	$wp_customize->add_control(new WP_Customize_Control(
	        $wp_customize,
	        'texto_destacados',
	        array(
	            'label'          => __( 'TEXTO DESTACADOS HOME' ),
	            'section'        => 'BatanaWeb',
	            'settings'       => 'texto_destacados',
	            'type'           => 'text',
	            
	        )
	    )
	);


	// Add setting
	$wp_customize->add_setting( 'imagen_superior', array(
		 'default'        => '',
	) );

	// Add control
	$wp_customize->add_control( new WP_Customize_Image_Control(
	    $wp_customize,
		'imagen_superior',
		    array(
		        'label'    => __( 'Imagen Superior' ),
		        'section'  => 'BatanaWeb',
		        'settings' => 'imagen_superior',
		 						
		    )
	    )
	);


	// Add setting
	$wp_customize->add_setting( 'imagen_abajoizquierda', array(
		 'default'        => '',
	) );

	// Add control
	$wp_customize->add_control( new WP_Customize_Image_Control(
	    $wp_customize,
		'imagen_abajoizquierda',
		    array(
		        'label'    => __( 'Imagen Abajo Izquierda' ),
		        'section'  => 'BatanaWeb',
		        'settings' => 'imagen_abajoizquierda',
		 						
		    )
	    )
	);

	// Add setting
	$wp_customize->add_setting( 'texto_abajoizquierda', array(
		 'default'        => '',
	) );

	$wp_customize->add_control(new WP_Customize_Control(
	        $wp_customize,
	        'texto_abajoizquierda',
	        array(
	            'label'          => __( 'Texto Imagen izquierda' ),
	            'section'        => 'BatanaWeb',
	            'settings'       => 'texto_abajoizquierda',
	            'type'           => 'text',
	            
	        )
	    )
	);

	// Add setting
	$wp_customize->add_setting( 'enlace_abajoizquierda', array(
		 'default'        => '',
	) );

	$wp_customize->add_control(new WP_Customize_Control(
	        $wp_customize,
	        'enlace_abajoizquierda',
	        array(
	            'label'          => __( 'Enlace Imagen izquierda' ),
	            'section'        => 'BatanaWeb',
	            'settings'       => 'enlace_abajoizquierda',
	            'type'           => 'text',
	            
	        )
	    )
	);


		// Add setting
	$wp_customize->add_setting( 'imagen_abajoderecha', array(
		 'default'        => '',
	) );

	// Add control
	$wp_customize->add_control( new WP_Customize_Image_Control(
	    $wp_customize,
		'imagen_abajoderecha',
		    array(
		        'label'    => __( 'Imagen Abajo Derecha' ),
		        'section'  => 'BatanaWeb',
		        'settings' => 'imagen_abajoderecha',
		 						
		    )
	    )
	);

	// Add setting
	$wp_customize->add_setting( 'texto_abajoderecha', array(
		 'default'        => '',
	) );

	$wp_customize->add_control(new WP_Customize_Control(
	        $wp_customize,
	        'texto_abajoderecha',
	        array(
	            'label'          => __( 'Texto Imagen Derecha' ),
	            'section'        => 'BatanaWeb',
	            'settings'       => 'texto_abajoderecha',
	            'type'           => 'text',
	            
	        )
	    )
	);

	// Add setting
	$wp_customize->add_setting( 'enlace_abajoderecha', array(
		 'default'        => '',
	) );

	$wp_customize->add_control(new WP_Customize_Control(
	        $wp_customize,
	        'enlace_abajoderecha',
	        array(
	            'label'          => __( 'Enlace Imagen derecha' ),
	            'section'        => 'BatanaWeb',
	            'settings'       => 'enlace_abajoderecha',
	            'type'           => 'text',
	            
	        )
	    )
	);


	//Section Responsive


	// Add setting
	$wp_customize->add_setting( 'responsive_imagen_superior', array(
		 'default'        => '',
	) );


	// Add control
	$wp_customize->add_control( new WP_Customize_Image_Control(
	    $wp_customize,
		'responsive_imagen_superior',
		    array(
		        'label'    => __( 'Moviles Imagen Superior' ),
		        'section'  => 'BatanaWeb',
		        'settings' => 'responsive_imagen_superior',
		        'description' => 'En esta zona va la imagen superior para la versión moviles 800x800'
		 						
		    )
	    )
	);

	// Add setting
	$wp_customize->add_setting( 'responsive_imagen_izquierda', array(
		 'default'        => '',
	) );


	// Add control
	$wp_customize->add_control( new WP_Customize_Image_Control(
	    $wp_customize,
		'responsive_imagen_izquierda',
		    array(
		        'label'    => __( 'Moviles Imagen Izquierda' ),
		        'section'  => 'BatanaWeb',
		        'settings' => 'responsive_imagen_izquierda',
		        'description' => 'En esta zona va la imagen IZQUIERDA para la versión moviles 800x800'
		 						
		    )
	    )
	);



	// Add setting
	$wp_customize->add_setting( 'responsive_imagen_derecha', array(
		 'default'        => '',
	) );


	// Add control
	$wp_customize->add_control( new WP_Customize_Image_Control(
	    $wp_customize,
		'responsive_imagen_derecha',
		    array(
		        'label'    => __( 'Moviles Imagen Derecha' ),
		        'section'  => 'BatanaWeb',
		        'settings' => 'responsive_imagen_derecha',
		        'description' => 'En esta zona va la imagen DERECHA para la versión moviles 800x800'
		 						
		    )
	    )
	);


	// Customize opciones envios

	// Add section.
	$wp_customize->add_section( 'Textos_BatanaWeb' , array(
		'title'    => __('Batana Web Textos'),
		'priority' => 11
	) );


	// Add setting
	$wp_customize->add_setting( 'textoEnvios', array(
		 'default'        => '',
	) );

		// Add control
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'textoEnvios',
		    array(
		        'label'    => __( 'Texto Envios' ),
		        'section'  => 'Textos_BatanaWeb',
		        'settings' => 'textoEnvios',
		        'description' => 'Por favor, utilizar para cada parrafo las etiquetas HTML de apertura y cierre de parrafo. <code>&#65308;p&#65310;ejemplo&#65308;/p&#65310;</code>. En esta zona puedes cambiar el texto de Envios que aparece en cada producto.',
		        'type' => 'textarea'		 						
		    )
	    )
	);

		// Add setting
	$wp_customize->add_setting( 'textoCambioDevoluciones', array(
		 'default'        => '',
	) );

		// Add control
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'textoCambioDevoluciones',
		    array(
		        'label'    => __( 'Texto Cambios y Devoluciones' ),
		        'section'  => 'Textos_BatanaWeb',
		        'settings' => 'textoCambioDevoluciones',
		        'description' => 'En esta zona puedes cambiar el texto de Cambios y Devoluciones que aparece en cada producto',
		        'type' => 'textarea'		 						
		    )
	    )
	);

			// Add setting
	$wp_customize->add_setting( 'textoPagoPlazos', array(
		 'default'        => '',
	) );

		// Add control
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'textoPagoPlazos',
		    array(
		        'label'    => __( 'Texto Pago a Plazos' ),
		        'section'  => 'Textos_BatanaWeb',
		        'settings' => 'textoPagoPlazos',
		        'description' => 'En esta zona puedes cambiar el texto de Pago a plazos que aparece en cada producto',
		        'type' => 'textarea'		 						
		    )
	    )
	);



}
add_action( 'customize_register', 'batanaweb_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function batanaweb_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function batanaweb_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function batanaweb_customize_preview_js() {
	wp_enqueue_script( 'batanaweb-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'batanaweb_customize_preview_js' );


