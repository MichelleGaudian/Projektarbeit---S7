<?php /*
 * die footer.php wird auf jeder Seiten eingebunden
 *  (über die Funktion "get_footer()" in den 
 * 
 * einzelnen Templates).
 * Somit hier sollte das Markup, dass auf jeder Seite
 *  im Footer angezeigt wird, zu finden sein.
 * Am Ende sollte immer der schließende </body> und
 *  </html> Tag stehen - geöffnet werden die Tags in
 *  der Datei "header.php"
*/ ?>
<footer id="footer-page" class="container columns">
    
<div class="copyright footer-column">
        <?php /* sprintf — gibt einen formatierten String zurück
                * https://www.php.net/manual/en/function.sprintf.php
                * translators: 1: Datum (nur Jahr), 2: Name der WordPress Seite
                */
        echo sprintf(__('&copy; %1$s, %2$s'), date('Y'), get_bloginfo('name')); ?>
    </div>

    <nav id="nav-footer" class="footer-column">
            <ul class="nav-menu">
        <?php /*
                * Ausgabe des Menüs, dass im WordPress als "Footer Navigation" festgelegt wurde (Design -> Menüs oder Cusotmizer -> Menüs / Position im Theme: Checkbox "Footer Navigation")
                * https://developer.wordpress.org/reference/functions/wp_nav_menu/
                */
        wp_nav_menu(array(
            'theme_location' => 'footer',   // wurde in der functions.php festgelegt "register_nav_menus()"
            'container' => false,      // true würde eine <div> um die <ul> des wp_nav_menu() erzeugen
            'menu_class' => 'nav-menu', // Klassenname der ul: <ul class="nav-menu">
            'depth' => 1,          // Anzahl der Menüebenen die ausgegeben werden
            'fallback_cb' => false       // wenn im WordPress kein Menü als "Footer Navigation" zugewiesen wurde (Checkbox), wird keine Navigation ausgegeben. Default wäre die Ausgebe der WordPress Funktion "wp_page_menu()" (https://developer.wordpress.org/reference/functions/wp_page_menu/)
        )); ?>
        </ul>
    </nav>
    



</footer>
<div id="to-top"><?php _e('Top', 's7'); ?></div>
<?php wp_footer(); ?>



</body>

</html>