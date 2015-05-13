<?php
function menu_css() {
?>

<style type="text/css">
.menu-inactive, .menu-active {
padding: 2px;
padding-left; 20px;
font-family: arial, verdana;
}
.menu-inactive { background: #ddd; }
.menu-active { background: #000; font-weight: bold; }
.menu-inactive a { text-decoration: none; }
.menu-active a { color: white; text-decoration: none; }
</style>
<?php
}

function menu_item($id, $title, $current) {
    $class = "menu-inactive";
    if ($current == $id)
        $class = "menu-active";
?>

    <tr><td class="<?php echo($class); ?>">
    <a href="index.php?page=<?php echo($id); ?>">
<?php echo($title); ?>
</a>
</td></tr>
<?php
}

function page_menu($page) {
?>
<table width="100%"
<?php menu_item('home', 'ホーム', $page); ?>
<?php menu_item('faq' , 'よくある質問', $page); ?>
<?php menu_item('download', 'ダウンロード', $page); ?>
<?php menu_item('links', 'リンク', $page); ?>
<?php menu_item('credits', '会社案内', $page); ?>
</table>
<?php
}
?>
