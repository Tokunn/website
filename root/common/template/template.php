<?php

# Path name
$path_name = [
    'root'      => 'ホーム',
    'bookshelf' => 'ほんだな',
    'keyword'   => 'キーワード',
    'blender'   => 'Blender',
    'linux'     => 'Linux',
    'opencv'    => 'OpenCV',
    'program'   => 'プログラム',
    'robot'     => 'ロボット',
];
$path_list = [
    'root'      => '/',
    'bookshelf' => '/bookshelf/',
    'keyword'   => '/keyword/',
    'blender'   => '/bookshelf/blender/',
    'linux'     => '/bookshelf/linux/',
    'opencv'    => '/bookshelf/opencv/',
    'program'   => '/bookshelf/program/',
    'robot'     => '/bookshelf/robot/',
];

# Head
$head = <<< EOF
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>絵のない技術書</title>
        <link rel="stylesheet" href="/common/css/normalize.css">
        <link rel="stylesheet" href="/common/css/style.css">
        <link rel="stylesheet" href="/common/syntaxhighlighter/styles/shCoreDefault.css">

        <script type="text/javascript" src="/common/syntaxhighlighter/scripts/shCore.js"></script>
        <script type="text/javascript">SyntaxHighlighter.all()</script>
        <script type="text/javascript" src="/common/syntaxhighlighter/scripts/shBrushPlain.js"></script>
        <script type="text/javascript" src="/common/syntaxhighlighter/scripts/shBrushPython.js"></script>
        <script type="text/javascript" src="/common/syntaxhighlighter/scripts/shBrushCpp.js"></script>
        <script type="text/javascript" src="/common/syntaxhighlighter/scripts/shBrushBash.js"></script>

    </head>

    <body>
        <div id="page">

            <header id="pageHead">
                <h1 id="siteTitle">絵のない技術書</h1>
                <p id="catchcopy">かんたんな技術をむずかしくお勉強</p>
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

# Head()
function set_head_path($path) {
    global $head;
    echo(sprintf($head, $path));
}

# Foot()
function set_foot() {
    global $foot;
    echo($foot);
}

# Head and Path
function set_head($dir) {
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
    set_head_path($path);
}

?>
