<?php
# bookshelf_html
$bookshelf_html = <<< EOF
<div id="bookshelf">
    <h2 class="heading-typeA" id="bunrui">ぶんるい</h2>
    <section>
        <!-- プログラム・プログラミング -->
        <h3 class="heading-typeB" id="program"><a href="/bookshelf/program/">プログラム・プログラミング</a></h3>
        <div class="page-description">
            <a href="/bookshelf/program/">
                <img src="/common/img/program-ico.png" alt="" width="100" height="75" class="page-description-ico">
            </a>
            <div class="page-description-list">
                <ul>
                    <li>Python</li>
                    <li>C++</li>
                    <li>Makefile</li>
                    <li>JavaScript</li>
                </ul>
            </div><!-- page-description-list -->
        </div><!-- page-description -->

        <!-- Linux -->
        <h3 class="heading-typeB" id="linux"><a href="/bookshelf/linux/">Linux</a></h3>
        <div class="page-description">
            <a href="/bookshelf/linux/">
                <img src="/common/img/linux-ico.png" alt="" width="100" height="75" class="page-description-ico">
            </a>
            <div class="page-description-list">
                <ul>
                    <li>ArchLinux</li>
                    <li>GentooLinux</li>
                    <li>Ubuntu</li>
                    <li>LinuxMint</li>
                </ul>
            </div><!-- page-description-list -->
        </div><!-- page-description -->

        <!-- 画像処理 -->
        <h3 class="heading-typeB" id="image"><a href="/bookshelf/imageprocessing/">画像処理</a></h3>
        <div class="page-description">
            <a href="/bookshelf/imageprocessing/">
                <img src="/common/img/comingsoon-ico.png" alt="" width="100" height="75" class="page-description-ico">
            </a>
            <div class="page-description-list">
                <ul>
                    <li>OpenCV</li>
                </ul>
            </div><!-- page-description-list -->
        </div><!-- page-description -->

        <!-- ロボット・組み込み技術 -->
        <h3 class="heading-typeB" id="robot"><a href="/bookshelf/robot/">ロボット・組み込み技術</a></h3>
        <div class="page-description">
            <a href="/bookshelf/robot/">
                <img src="/common/img/raspberrypi-ico.png" alt="" width="100" height="75" class="page-description-ico">
            </a>
            <div class="page-description-list">
                <ul>
                    <li>AVR PIC</li>
                    <li>Arduino</li>
                    <li>RaspberryPi</li>
                    <li>BeagleBoneBlack</li>
                </ul>
            </div><!-- page-description-list -->
        </div><!-- page-description -->
    </section>

    </div><!-- bookshelf -->
EOF;


# set_bookshelf()
function set_bookshelf() {
    global $bookshelf_html;
    echo($bookshelf_html);
}
?>
