<!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <p>Usuarios registrados en la base de datos:</p>
        <?php foreach ($consulta->result() as $fila){ 
        ?>
         <div class="post-preview">
            <a href="<?= base_url()?>article/usuario/<?= $fila->id_usuario?>">
              <h2 class="post-title">
               <?= $fila->email?>
              </h2>
              <h3 class="post-subtitle">
                 <?= $fila->contraseña?>
              </h3>
            </a>
        
          </div>

        <?php

        }

        ?>

    <hr>

