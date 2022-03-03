<?php
    $adresare = glob('../galeria/*', GLOB_ONLYDIR);

    foreach($adresare as $priecinok) {
        $menuGaleria[basename($priecinok)] = file_get_contents($priecinok . '/' . basename($priecinok) . '.txt');
    }
?>

<section id="galeria" class="container py-5">
    <h1 class="pb-4">Galéria</h1>
    <div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">

            <?php 
                foreach ($menuGaleria as $priecinok => $nazov) {
                
            ?>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"><?php echo $nazov ?></button>
          </li>
          
          <?php 
                }
                
            ?>

            </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab"> home </div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"> profile </div>
          <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab"> messages </div>
        </div>
    </div>
</section>