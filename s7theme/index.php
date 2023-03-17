<?php /*
  * index Template == default for all (für uns Beitragsseite -> Einstellung lesen)
  * https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
<?php get_header(); // WordPress Funktion zum Einbinden der header.php ?>


    <main id="content" class="container">


        <h1><?php /*
            * Mit get_option() können die WP Option-Fields abgerufen 
            werden
            * die Option "page_for_posts" liefert die ID der Seite, 
            die als Beiitragsseite eingestellt wurde
            * https://developer.wordpress.org/reference/functions/get_option/
            */
            $pagePosts = get_option('page_for_posts');
            if (!empty($pagePosts)) {
                /* get_the_title() liefert als return den Seitentitel
                 als Parameter kann der Funktion die Post-ID oder das 
                 -Object übergeben werden */
                echo get_the_title($pagePosts);
            } else {
                /* die WordPress Funktion "bloginfo()" gibt nütliche
                 Informationen zur Website zurück. Über den Parameter
                  'show' können einzelne Werte ausgegeben werden.
                 * bloginfo('name') gibt den "Titel der Website"
                 *  (Einstellungen->Allgemein) zurück
                 * https://developer.wordpress.org/reference/functions/bloginfo/
                 */
                bloginfo('name');
            }
            ?></h1>
        
        <?php /* WordPress Standard Schleife zur Ausgabe des
         Seiten-Inhalts und der Beiträge
                * https://developer.wordpress.org/themes/basics/the-loop/
                */
        if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="post">
                    <?php
                    /*  Mit the_title() wird der Beitrags-Titel 
                    ausgegeben
                      * https://developer.wordpress.org/reference/functions/the_title/
                      *
                      * sprintf — gibt einen formatierten String zurück
                      * https://www.php.net/manual/en/function.sprintf.php
                      *
                      * esc_url prüft URLs und bereinigt diese 
                      z.B.: Codieren von Leerzeichen)
                      * https://developer.wordpress.org/reference/functions/esc_url/
                      *
                      * the_permalink() gibt die URL zum Beitrag 
                      (Detailseite) aus
                      * https://developer.wordpress.org/reference/functions/the_permalink/
                      */
                    the_title(sprintf('<h2 class="post-title"><a href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
                    <div class="meta">
                  
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <h2><?php _e('Es wurden keine Beiträge gefunden', 'wifi'); ?></h2>
        <?php endif; ?>

    </main>
<?php get_footer(); // WordPress Funktion zum Einbinden der footer.php ?>