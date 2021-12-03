<?php
  $menu = file("./assets/menu.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>


<nav class="navbar navbar-expand-md navbar-light bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">

        <?php
        for ($i=0; $i < count($menu); $i++) {
            echo '<li class="nav-item"><a class="nav-link" target="_blank" href="./' . explode("::",  $menu[$i])[0] . '.php">' . explode("::",  $menu[$i])[1] . '</a></li>';
        }
        
        ?>
        

        </ul>
        <form class="d-flex my-2 my-lg-0">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </div>
</nav>