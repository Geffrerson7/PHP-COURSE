<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php
$objConnection = new connection();
$projects = $objConnection->querying("SELECT * FROM `project`");
?>

<div class="row align-items-md-stretch">
    <div class="col-md-12">
        <div class="h-100 p-5 text-white bg-primary border rounded-3">
            <h2>Bienvenidos</h2>
            <p>Este es un aportafolio privado</p>
        </div>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($projects as $project) { ?>
        <div class="col">
            <div class="card">
                <img src="img/<?php echo $project['image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $project['name']; ?></h5>
                    <p class="card-text"><?php echo $project['description']; ?></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php include("pie.php"); ?>