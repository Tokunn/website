<?php

# Head
$head = <<< EOF
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>絵のない技術書</title>
        <link rel="stylesheet" href="/common/css/normalize.css">
        <link rel="stylesheet" href="/common/css/style.css">
    </head>

    <body>
        <div id="page">

            <header id="pageHead">
                <h1 id="siteTitle">絵のない技術書</h1>
                <p id="catchcopy">かんたんな技術をむずかしくお勉強</p>
                <nav class="globalNavi">
                    <ul>
                        <li><a href="/index.html">ホーム</a></li>
                        <li><a href="/bookshelf/index.html">ほんだな</a></li>
                        <li><a href="/keyword/index.html">キーワード</a></li>
                    </ul>
                </nav>
            </header>

            <p class="topicPath"> &gt; <a href="/index.html">ホーム</a>

            <div id="pageBody">
EOF;

# Foot
$foot = <<< EOF
            </div><!-- pageBody -->

            <p class="pagetop"><a href="#page">ページの先頭へ戻る</a></p>

            <footer id="pageFoot">
                <p id="copyright"><small>Copyright&copy; 2015 @Tokunn All Rights Reserve.</small></p>
            </footer>

        </div><!-- page -->
    </body>
</html>
EOF;

# Head()
function set_head() {
    global $head;
    echo($head);
}

# Foot()
function set_foot() {
    global $foot;
    echo($foot);
}

?>
