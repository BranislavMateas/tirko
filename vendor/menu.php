<?php
  $menu = file("./assets/menu.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>


<nav class="navbar navbar-expand-md navbar-light bg-dark py-0">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">

            <?php
            for ($i=0; $i < count($menu); $i++) {
                echo '<li class="nav-item"><a class="nav-link py-3" href="./' . explode("::",  $menu[$i])[0] . '.php">' . explode("::",  $menu[$i])[1] . '</a></li>';
            }
            
            ?>
            
            </ul>

            <button class="btn btn-success my-2 my-sm-0 px-4" type="submit">Registrovať</button>

        </div>
    </div>
</nav>
<header class="bg-image-banner">
    <div class="container" style="padding-top: 20%;">
        <h1 class="display-3"><span style="color:#DE4642">ZENIT </span><span style="color:#617F20">FITNESS</span></h1>
        <p class="mt-3">
            "Starajte sa o svoje telo. Je to jediné miesto, kde musíte žiť."<br>(Jim Rohn)
        </p>
        <button class="btn btn-outline-danger mt-3" style="margin-left: 20%;">Prihlásiť</button>
    </div>
</header>
