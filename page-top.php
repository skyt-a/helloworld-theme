<?php /* Template Name: Top */ ?>
<?php
function get_version() {
    $theme = wp_get_theme();
    return '?version=' . $theme['Version'];
}
function get_theme_asset_uri($path) {
    return get_theme_file_uri($path) . get_version();
}
wp_deregister_style('luxeritas');
wp_dequeue_style('luxeritas');
?>
<!DOCTYPE html>
<html lang="ja" class="hello-world">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
        <?php wp_head() ?>
        <link rel="stylesheet" href="<?= get_theme_asset_uri("css/top.css") ?>" />
    </head>
    <body>
        <section class="MV">
            <section class="MV__Frame">
            </section>
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
            <div class="Message">
                Hello, World...
            </div>
            <section class="Logo__Container">
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
            </section>
            <section class="MV__Scroll">
                <div>&lt;</div>
                <div>&lt;</div>
                <div>S</div>
                <div>C</div>
                <div>R</div>
                <div>O</div>
                <div>L</div>
                <div>L</div>
            </section>
        </section>
        <section class="ProfileImage__Container">
            <a class="ProfileImage__Wrapper" href="https://twitter.com/RinGoku98" target="_blank" rel="noopener">
                <img src="<?= get_theme_asset_uri("images/ringoku.jpg") ?>"
                class="ProfileImage" alt="RinGoku98"/>
            </a>
            <a class="ProfileImage__Wrapper" href="https://twitter.com/neet_dot" target="_blank" rel="noopener">
                <img src="<?= get_theme_asset_uri("images/neet.jpg") ?>"
                class="ProfileImage" alt="neet_dot"/>
            </a>
        </section>
        <article class="Main">
            <div class="Main__Title">制作作品</div>
            <section class="Main__Section">
                <div class="Main__Section_Title">カリスマを取り戻せ</div>
                <section class="Main__Section_Description">
                    <div class="Main__Section_Description_Image_Wrapper">
                        <img src="<?= get_theme_asset_uri("images/Reclaim_the_Charisma.png") ?>" class="Main__Section_Description_Image" alt="カリスマを取り戻せ">
                        <img class="Main__Section_Description_Image" src="<?= get_theme_asset_uri("images/Remilia.png") ?>" alt="自機(レミリア)"/>
                    </div>
                    <p class="Main__Section_Description_Text">
                        レミリアがカリスマを取り戻すために奮闘する縦スクロール型シューティングゲームです。<br>
                        対応OS: Windows 7/8/10 64bit<br>
                        <a href="https://ringoku98.thebase.in/items/24584354" target="_blank" rel="noopener">購入はこちら</a>
                    </p>
                </section>
            </section>
        </article>
    </body>
    <?php wp_footer() ?>
</html>