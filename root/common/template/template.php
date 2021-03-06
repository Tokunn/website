<?php
# Path name
$path_name = [
    'root'      => 'ホーム',
    'bookshelf' => 'ほんだな',
    'keyword'   => 'キーワード',
    'blender'   => 'Blender',
    'linux'     => 'Linux',
    'imageprocessing'    => '画像処理',
    'program'   => 'プログラム',
    'robot'     => 'ロボット',
];
$path_list = [
    'root'      => '/',
    'bookshelf' => '/bookshelf/',
    'keyword'   => '/keyword/',
    'blender'   => '/bookshelf/blender/',
    'linux'     => '/bookshelf/linux/',
    'imageprocessing'    => '/bookshelf/imageprocessing/',
    'program'   => '/bookshelf/program/',
    'robot'     => '/bookshelf/robot/',
];

# Analytics
$analyticstracking = <<< EOF
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-64549299-1', 'auto');
    ga('send', 'pageview');

</script>
EOF;

# Head
$head = <<< EOF
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>絵のない技術書 - %s</title>
        <link rel="stylesheet" href="/common/css/normalize.css">
        <link rel="stylesheet" href="/common/css/style.css">
        <link rel="stylesheet" href="/common/syntaxhighlighter/styles/shCoreCustom.css">

        <script type="text/javascript" src="/common/syntaxhighlighter/scripts/shCore.js"></script>
        <script type="text/javascript">SyntaxHighlighter.all()</script>
        <script type="text/javascript" src="/common/syntaxhighlighter/scripts/shBrushPlain.js"></script>
        <script type="text/javascript" src="/common/syntaxhighlighter/scripts/shBrushPython.js"></script>
        <script type="text/javascript" src="/common/syntaxhighlighter/scripts/shBrushCpp.js"></script>
        <script type="text/javascript" src="/common/syntaxhighlighter/scripts/shBrushBash.js"></script>

    </head>

    <body>
        %s
        <div id="page">

            <header id="pageHead">
                <h1 id="siteTitle"><a href="/">絵のない技術書</a></h1>
                <p id="catchcopy"><a href="/">かんたんな技術をむずかしくお勉強</a></p>
                <nav class="globalNavi">
                    <ul>
                        <li><a href="/">ホーム</a></li>
                        <li><a href="/bookshelf/">ほんだな （記事を読む）</a></li>
                        <li><a href="/keyword/">キーワード</a></li>
                    </ul>
                </nav>
            </header>

            <p class="topicPath"> %s </p>

            <div id="pageBody">
EOF;

# Foot
$foot = <<< EOF
                <div id="pageBodySide">
                    <p></p>
                </div><!-- pageBodySide -->
            </div><!-- pageBody -->

            <p class="pagetop"><a href="#page">ページの先頭へ戻る</a></p>

            <footer id="pageFoot">
                <p id="copyright"><small>Copyright&copy; 2015 @Tokunn All Rights Reserve.</small></p>
            </footer>

        </div><!-- page -->
    </body>
</html>
EOF;

# Check Analytics()
function check_analytics() {
    global $analyticstracking;
    $dirname_new = __FILE__;
    $dirname;
    while($dirname_new != '/') {
        $dirname = $dirname_new;
        $dirname_new = dirname($dirname_new);
    }

    if ($dirname == '/srv') {
        $analytics_code = '<!-- Test System -->';
    } else {
        $analytics_code = $analyticstracking;
    }
    return $analytics_code;
}

# Head()
function set_head_path($title, $path) {
    global $head;
    echo(sprintf($head, $title, check_analytics(), $path));
}

# Foot()
function set_foot() {
    global $foot;
    echo($foot);
}


# Head and Path
function set_head($title, $dir) {
    global $path_name;
    global $path_list;
    $path_template = " &gt; <a href=\"%s\">%s</a>";
    $base_dir = NULL;
    $path = NULL;
    $dir = dirname($dir);

    while ($base_dir != 'root') {
        $base_dir = basename($dir);
        $dir = dirname($dir);
        $path = sprintf($path_template, $path_list[$base_dir], $path_name[$base_dir]).$path;
    }
    set_head_path($title, $path);
}

#include_once("analyticstracking.php");
?>
