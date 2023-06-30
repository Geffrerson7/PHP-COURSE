<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php
$objConnection = new connection();
$sql = "INSERT INTO project (name, image, description) VALUES ('Airline check-in', 'ruta/de/la/imagen.jpg', 'Airline check-in simulation');";
$objConnection->run($sql);
?>

<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-6">
            <div class="card" style="max-width: 36rem;">
                <div class="card-header">
                    Project data
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post">
                        Project name;: <input class="form-control" type="text" name="name" id="">
                        <br />
                        Project image: <input class="form-control" type="file" name="file" id="">
                        <br />
                        <input class="btn btn-success form-control" type="submit" value="Send project">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row">R1C1</td>
                            <td>R1C2</td>
                            <td>R1C3</td>
                            <td>R1C4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include("pie.php"); ?>