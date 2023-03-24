<?php /*
 * die footer.php wird auf jeder Seiten eingebunden
 *  (über die Funktion "get_footer()" 
*/ ?>
   
<footer id="footer" class="footer-container footer-columns">
	
<div class="copyright footer-column">
        <?php /* sprintf — gibt einen formatierten String zurück*/
	echo sprintf(__('&copy; %2$s'), date('Y'), 'sevian7 IT development GmbH'); ?>
    </div>

    <nav id="nav-footer" class="footer-column">
            <ul class="nav-menu">
        <?php /* Ausgabe des Menüs, dass im WordPress als "Footer Navigation" festgelegt wurde */
        wp_nav_menu(array(
            'theme_location' => 'footer',   // wurde in der functions.php festgelegt "register_nav_menus()"
            'container' => false,      // true würde eine <div> um die <ul> des wp_nav_menu() erzeugen
            'menu_class' => 'nav-menu', // Klassenname der ul: <ul class="nav-menu">
            'depth' => 1,          // Anzahl der Menüebenen die ausgegeben werden
            'fallback_cb' => false       // wenn im WordPress kein Menü als "Footer Navigation" zugewiesen wurde (Checkbox), wird keine Navigation ausgegeben. Default wäre die Ausgebe der WordPress Funktion "wp_page_menu()" 
        )); ?>
        </ul>
    </nav>
    
</footer>
<div id="to-top"><?php _e('Top', 's7'); ?></div>
<?php wp_footer(); ?>

</body>

</html>