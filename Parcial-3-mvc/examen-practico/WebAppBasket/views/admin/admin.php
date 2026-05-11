<?php
//Ana Verónica Colín Lozano LISI 3-1
    require_once("../admin/template/header.php");
?>

<div class="card text-center">
  <div class="card-header">
    MENÚ
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
        <div class="row mb-3">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        CREAR TORNEO
                    </div>
                    <div class="card-body">
                        <a href="frmTorneos.php" class="btn btn-primary">
                            <img src="../img/torneo-admin.png" alt="Crear un torneo." width="180"
                            height="180">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        LISTA DE TORNEOS
                    </div>
                    <div class="card-body">
                        <a href="readAllTorneos.php" class="btn btn-primary">
                            <img src="../img/lista-torneos-admin.jpg" alt="Listar torneos."
                            height="180">
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--FILA CON DOS CARDS-->
        <div class="row">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        ESTADÍSTICAS
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        ANUNCIOS
                    </div>
                    <div class="card-body">
                    </div>  
                </div>
            </div>
        </div> 
  </div>
  <div class="card-footer text-body-secondary">
    Configuración de torneos. Web App BasketBall.
  </div>
</div>

<?php
    require_once("../admin/template/footer.php");
?>