<?php /* Template Name: Top */ ?>
<!DOCTYPE html>
<html lang="ja" class="wf-tbchibirgothicplusk-pro-n4-active wf-active">
    <head>
        <?php wp_head() ?>
        <link rel="stylesheet" href="<?= get_theme_file_uri("css/top.css") ?>" />
    </head>
    <body>
    <div class="Scene --first">
            <div class="Scene_Item --top">
            </div>
            <div class="Scene_Item --bottom">
            </div>
        </div>
        <div class="Scene --second">
            <div class="Scene_Item --left">
            </div>
            <div class="Scene_Item --right">
            </div>
        </div>
        <div class="Logo">
            <div class="Logo__Wrapper --small">
                <span>ゲ</span>
                <span>ー</span>
                <span>ム</span>
                <span>制</span>
                <span>作</span>
                <span>サ</span>
                <span>ー</span>
                <span>ク</span>
                <span>ル</span>
            </div>
            <div class="Logo__Wrapper">
                <span>H</span>
                <span>e</span>
                <span>l</span>
                <span>l</span>
                <span>o</span>
                <span>,</span>
            </div>
            <div class="Logo__Wrapper">
                <span>W</span>
                <span>o</span>
                <span>r</span>
                <span>l</span>
                <span>d</span>
                <span>!</span>
            </div>
        </div>
        <div>
            <a class="ProfileImageWrapper" href="https://twitter.com/RinGoku98">
                <img
                    src="https://twitter.com/RinGoku98/profile_image?size=original"
                    class="ProfileImage" />
            </a>
            <a class="ProfileImageWrapper" href="https://twitter.com/neet_dot">
                <img
                    src="https://twitter.com/neet_dot/profile_image?size=original"
                    class="ProfileImage" />
            </a>
        </div>
        <div class="Remilia">
            <img class="Remilia__Image" src="<?= get_theme_file_uri("images/Remilia.png")?>" />
        </div>
    </body>
    <?php wp_footer() ?>
</html>