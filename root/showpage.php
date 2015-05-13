<?php
echo dirname(__FILE__);
echo('<br />');
echo dirname($_SERVER["SCRIPT_NAME"]);
echo('<br />');
define('id', 'id');
define('home', 'home');
define('parent', 'parent');
define('title', 'title');
define('url', 'url');
define('users', 'users');
define('jack', 'jack');

$id = $_GET['id'];
if (strlen($id) < 1) {
    $id = "home";
}

$pages = array(
    home => array(id=>"home", parent=>"", title=>"ホーム", url=>"showpage.php?id=home"),
    users => array(id=>"users", parent=>"home", title=>"ユーザー", url=>"showpage.php?id=users"),
    jack => array(id=>"jack", parent=>"users", title=>"ジャック", url=>"showpage.php?id=jack")
);

function breadcrumbs($id, $pages) {
    $bcl = array();
    $pageid = $id;
    while(strlen($pageid) > 0) {
        $bcl[] = $pageid;
        $pageid = $pages[$pageid]['parent'];
    }
    for ($i = count($bcl) - 1; $i >= 0; $i--) {
        $page = $pages[$bcl[$i]];
        if ($i > 0) {
            echo("<a href=\"");
            echo($page['url']);
            echo("\">");
        }
        echo($page['title']);
        if ($i > 0) {
            echo("</a> | ");
        }
    }
}
?>
<html>
<head>
<title>ページ - <?php echo($id); ?></title>
</head>
<body>
Link: <?php breadcrumbs($id, $pages); ?><br />
ID  : <?php echo($id); ?>
</body>
</html>
