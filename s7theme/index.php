<?php /*
  * index Template == default for all (für uns Beitragsseite -> Einstellung lesen) */
?>
<?php get_header(); // WordPress Funktion zum Einbinden der header.php ?>
    <main id="content" class="container">
        <h1><?php /*
            * Mit get_option() können die WP Option-Fields abgerufen 
            werden */
            $pagePosts = get_option('page_for_posts');
            if (!empty($pagePosts)) {
                /* get_the_title() liefert als return den Seitentitel
                 als Parameter kann der Funktion die Post-ID oder das 
                 -Object übergeben werden */
                echo get_the_title($pagePosts);
            } else {
                /* die WordPress Funktion "bloginfo()" gibt nütliche
                 Informationen zur Website zurück. 
                 */
                bloginfo('name');
            }
            ?></h1>
        
        <?php /* WordPress Standard Schleife zur Ausgabe des
         Seiten-Inhalts und der Beiträge */
        if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="post">
                    <?php
                    /*  Mit the_title() wird der Beitrags-Titel 
                    ausgegeben
                      * sprintf — gibt einen formatierten String zurück
                      * esc_url prüft URLs und bereinigt diese 
                    
                      * the_permalink() gibt die URL zum Beitrag 
                      (Detailseite) aus
                      */
                    the_title(sprintf('<h2 class="post-title"><a href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
                    <div class="meta">
                  
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <h2><?php _e('Es wurden keine Beiträge gefunden', 'Michelle'); ?></h2>
        <?php endif; ?>

    </main>
<?php get_footer(); // WordPress Funktion zum Einbinden der footer.php ?>