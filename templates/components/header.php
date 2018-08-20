<nav class="navbar navbar-expand-lg fixed-top ">
    <a class="navbar-brand" href="/">Weather Site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">&#9776;</span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-<? (count($menuElements) - 1) ?>">
            <?
            foreach ($menuElements as $key => $value) {
                echo "<li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{$value['link']}\">{$value['name']}</a>
                            </li>";
            }
            ?>
            </li>
        </ul>
    </div>
</nav>
<header class="header">
    <div class="overlay"></div>
<? //
//foreach ($menuElements as $key => $value) {
//    echo "<li class=\"nav-item\">
//                                <a class=\"nav-link\" href=\"{$value['name']}\">{$value['link']}</a>
//                            </li>";
//}
//?>
<?//
//            for ($i = 0; $i < (count($menuElements)); $i++) {
//                echo "<li class=\"nav-item\">
//                                 <a class=\"nav-link\" href=\"#\">{$menuElements[$i]}</a>
//                            </li>";
//            }
//?>