<?php
/**
 * Template footer, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** FOOTER ********** -->
<div id="dokuwiki__footer"><div class="pad">
    <?php tpl_pageinfo() //metadata on current page ?> ●
    <?php tpl_license(''); // license text ?> ●
    <?php
        tpl_toolsevent('sitetools', array(
            tpl_action('recent', true, 'span', true, '', ' '),
            tpl_action('media', true, 'span', true, '', ' '),
            tpl_action('index', true, 'span', true, '', ' ')
        ));
    ?>
</div></div><!-- /footer -->

<?php
tpl_includeFile('footer.html');
