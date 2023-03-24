
<?php

/* ---- Theme Setups ----*/
add_action('after_setup_theme', function () {

    // Title Tag in <head> : <title>...</title>
    add_theme_support('title-tag');

    load_textdomain('wifi', get_template_directory() . '/assets/languages');

    // WordPress HTML5-Markup
    add_theme_support('html5', array(
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
        'comment-list',
        'comment-form'
    ));

    register_nav_menus(array(
        'primary' => __('Haupt Navigation', 'wifi'),
        'footer' => __('Footer Navigation', 'wifi'),
    ));


    /* -- Customizer --  */
    add_theme_support('custom-logo', array(
        'height' => 60,
        'width' => 100,

        /* Bei SVG (können nicht beschnitten werden) MUSS beides true sein */
        'flex-height' => true,
        'flex-width' => true
    ));


    /* -- Gutenberg Editor --    */

    // Theme für Gutenberg optimiert - Lade default Block styles
    add_theme_support('wp-block-styles');

    // aktiviere wide & fullwidth Layouts
    add_theme_support('align-wide');

    // Custom CSS für Gutenberg (Backend)
    add_theme_support('editor-styles');
    add_editor_style('assets/style-editor.css');
    add_editor_style('assets/icons/style.min.css');

    // Responsive Embeds (ZB. YouTube Videos, Iframes) erlauben
    add_theme_support('responsive-embeds');

   

    // Adminbar im Frontend deaktivieren (wenn aktiviert, sollten die Syles für Navigation angepasst werden)
    
    add_filter('show_admin_bar', '__return_false'); 

});


/*
 * Zusätzlichen Mimes (Dokumenttypen) für den Upload erlauben */
add_filter('upload_mimes', function ($mimes = array()) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
});


/* ---- CSS & JS in <head> bzw. vor dem </body> einfügen [ wp_head() ,*/
$theme_version = wp_get_theme()->get( 'Version' );
$version = is_string( $theme_version ) ? $theme_version : false;

add_action('wp_enqueue_scripts', function () use ($version) {
    
    // CSS (style.css) im Head einfügen
    wp_enqueue_style('webdev-css', get_template_directory_uri() . '/style.css');
   // JS im Footer einfügen
    wp_enqueue_script('webdev-js', get_template_directory_uri() . '/assets/js/scripts.js', [], $version, true);
});



add_filter('show_admin_bar', '__return_false');




    /* Hinzufügen von Gutenberg-Block-Kategorie */ 
add_filter( 'block_categories_all', function($categories){
    return array_merge(
            array(
                array(
                    'slug' => 'wifi',
                    'title' => 'wifi'
                )
                ),
                $categories
            );

}, 10, 2 );