<?php
  $menu = file("./assets/menu.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  $aktivnaStranka = basename($_SERVER['PHP_SELF'], ".php");
?>

<header class="bg-image-banner">
    <nav class="navbar navbar-expand-md navbar-light bg-dark py-0 opacity-50">
        <div class="container">
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <?php
                        for ($i=0; $i < count($menu); $i++) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link py-3 px-2 <?php echo $aktivnaStranka == explode("::",  $menu[$i])[0]?"active":""?>" href="<?php echo explode("::",  $menu[$i])[0] . '.php' ?>"><?php echo explode("::",  $menu[$i])[1] ?></a>
                        </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>

            <button class="btn btn-success my-2 my-sm-0 px-4 rounded-0 border-0" type="submit">Registrovať</button>
        </div>
    </nav>
                        
    <div class="container" id="header-content">
        <h1 class="motto"><span style="color:#DE4642">ZENIT </span><span style="color:#617F20">FITNESS</span></h1>
            <p>
                "Starajte sa o svoje telo. Je to jediné miesto, kde musíte žiť."<br>(Jim Rohn)
            </p>
        
        <button class="btn btn-outline-danger py-3 px-5">Prihlásiť</button>
    </div>
</header>
