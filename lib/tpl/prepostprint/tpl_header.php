<?php
/**
 * Template header, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** HEADER ********** -->
<div id="dokuwiki__header"><div class="pad group">

    <?php tpl_includeFile('header.html') ?>

    <div class="headings group">
        <ul class="a11y skip">
            <li><a href="#dokuwiki__content"><?php echo $lang['skip_to_content']; ?></a></li>
        </ul>
        

        <h1><a href="<?php echo wl() ?>"><span class="p1">Pre</span><span class="p2">Post</span><span class="p3">Print</span></a></h1>
    </div>

    <div class="tools group">
        <!-- USER TOOLS -->
        <?php if ($conf['useacl']): ?>
            <div id="dokuwiki__usertools">
                <h3 class="a11y"><?php echo $lang['user_tools']; ?></h3>
                <ul>
                    <?php
                        if (!empty($_SERVER['REMOTE_USER'])) {
                            echo '<li class="user">';
                            tpl_userinfo(); /* 'Logged in as ...' */
                            echo '</li>';
                        }
                        tpl_toolsevent('usertools', array(
                            tpl_action('admin', true, 'li', true),
                            tpl_action('profile', true, 'li', true),
                            tpl_action('register', true, 'li', true),
                            tpl_action('login', true, 'li', true)
                        ));
                    ?>
                    <?php
                    $translation = plugin_load('helper','translation');
                    if ($translation) echo $translation->showTranslations();
                    ?>
                    
                </ul>
            </div>
        <?php endif ?>


    </div>




    <hr class="a11y" />
</div></div><!-- /header -->
