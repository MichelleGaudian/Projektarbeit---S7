<?php /*
 * die header.php wird auf jeder Seiten eingebunden 
 * (über die Funktion 
 * "get_header()" 
*/ ?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); //erlaubt WordPress und den installierten Plugins hier Code (Scripten, links, meta, title, etc.) auszugeben ?>
</head>
<body <?php body_class(); ?>>
<a href="#content" class="screen-reader-text"><?php _e('Skip to Content', 'ize'); ?></a>
<nav id="navbar">
    <div class="container">
        <div id="brand">
            <?php /* Ausgabe des Logos aus dem Cusomizer
                    * Bedingung (if) überprüft ob die Funktion existiert*/
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } ?>
        </div>


        <input type="checkbox" id="nav-toggle">
        <label for="nav-toggle" id="nav-button">
            <span class="nav-button-icon" aria-hidden="true"></span>
            <span class="screen-reader-text"><?php _e('Navigation öffnen/schließen', 'wifi'); ?></span>
        </label>
        <?php /* Ausgabe des Menüs, dass im WordPress als "Haupt Navigation" festgelegt wurde */
        wp_nav_menu(array(
            'theme_location' => 'primary',  // wurde in der functions.php festgelegt "register_nav_menus()"
            'container' => false,           // true würde eine <div> um die <ul> des wp_nav_menu() erzeugen
            'menu_class' => 'nav-menu',     // Klassenname der ul: <ul class="nav-menu">
            'menu_id' => 'nav-main',        // IDname der ul: <ul id="nav-main">
            'depth' => 2,                   // Anzahl der Menüebenen die ausgegeben werden
            'fallback_cb' => false          // wenn im WordPress kein Menü als "Footer Navigation" zugewiesen wurde (Checkbox), wird keine Navigation ausgegeben. 
        )); ?>
    </div>
</nav>

    