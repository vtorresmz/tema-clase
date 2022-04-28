<?php 



/*Mis estilos*/
function mis_estilos(){
    //local carpeta assets
	wp_register_style('mi-estilo', get_template_directory_uri() . '/assets/librerias/css/chippewa.css', 'all');
	//url internet google font
	wp_register_style('letritas', 'https://fonts.googleapis.com/css?family=Karla:400,700', 'all');
    //url internet bootstrap
	wp_register_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', 'all');
	
    //encolamiento de estilos
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('letritas');
	wp_enqueue_style('mi-estilo');

}


add_action('wp_enqueue_scripts', 'mis_estilos');


/*Mis estilos*/




/*mis scripts*/

function mis_script(){
    // nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este aarchivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer

        // Register the script like this for a theme:
        wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array('jquery'), '1', true);
        
        /*encolamos los JS*/
        wp_enqueue_script('bootstrap-js', array('jquery'), false);
        
    }
}
add_action("wp_enqueue_scripts", "mis_script", 1);

/*mis scripts*/


//Agregar extracto a las plantillas de paginas
add_post_type_support( 'page', 'excerpt' );

//función para crear y registrar menús en wordpress.
function menu_mobile(){

    $locations = array(
        'menu-mobile' => __('menu-mobile', 'menu-mobile'),
    );
    register_nav_menus($locations);
}
add_action('init', 'menu_mobile');


function example_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );

/*zona de widgets*/
function widget_mi_sitio() {
	register_sidebar(
		array(
		'name' => 'Menu footer columna 1', 
		'id' => 'menu_1', 
		'before_widget' => '<div id="%1$S" class="col-12 col-md-4">', 
		'after_widget' => '</div>', 
		'before_title' => '<h5 class="titulo-widget">', 
		'after_title' => '</h5>')
		);
	
		register_sidebar(
			array( 
			'name' => 'Menu footer columna 2', 
			'id' => 'menu_2', 
			'before_widget' => '<div id="%1$S" class="col-12 col-md-4">', 
			'after_widget' => '</div>', 
			'before_title' => '<h5 class="titulo-widget">', 
			'after_title' => '</h5>')
			);
	
			register_sidebar(
				array(
				'name' => 'Menu footer columna 3', 
				'id' => 'menu_3', 
				'before_widget' => '<div id="%1$S" class="col-12 col-md-4">', 
				'after_widget' => '</div>', 
				'before_title' => '<h5 class="titulo-widget">', 
				'after_title' => '</h5>')
				);
	
		}
	
	add_action('widgets_init', 'widget_mi_sitio');
	/*zona de widgets*/