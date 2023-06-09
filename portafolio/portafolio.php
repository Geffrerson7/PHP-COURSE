<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php
if ($_POST) {
    print_r($_POST);
    $name = $_POST["name"];
    $description = $_POST["description"];
    $date = new DateTime();
    $image = $date->getTimestamp() . "_" . $_FILES['file']['name'];
    $temporal_image = $_FILES['file']['tmp_name'];

    move_uploaded_file($temporal_image, "img/" . $image);

    $objConnection = new connection();
    $sql = "INSERT INTO project (name, image, description) VALUES ('$name', '$image', '$description');";
    $objConnection->run($sql);
    header("location:portafolio.php");
}

if ($_GET) {
    $id = $_GET['delete'];
    $objConnection = new connection();
    $image = $objConnection->querying("SELECT `image` FROM `project` WHERE id=" . $id);
    unlink("img/" . $image[0]['image']);
    $sql = "DELETE FROM `project` WHERE `project`.`id` =" . $id;
    $objConnection->run($sql);
    header("location:portafolio.php");
}

$objConnection = new connection();
$projects = $objConnection->querying("SELECT * FROM `project`");

?>

<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-6">
            <div class="card" style="max-width: 36rem;">
                <div class="card-header">
                    Project data
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        Project name: <input required class="form-control" type="text" name="name" id="">
                        <br />
                        Project image: <input required class="form-control" type="file" name="file" id="">
                        <br />
                        Description
                        <div class="mb-3">
                            <label for="description" class="form-label"></label>
                            <textarea required class="form-control" name="description" id="" rows="3"></textarea>
                        </div>
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
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($projects as $project) { ?>
                            <tr class="">
                                <td scope="row">
                                    <?php echo $project['id']; ?>
                                </td>
                                <td>
                                    <?php echo $project['name']; ?>
                                </td>
                                <td>
                                    <img width="100" src="img/<?php echo $project['image']; ?>" alt="" srcset="">
                                </td>
                                <td>
                                    <?php echo $project['description']; ?>
                                </td>
                                <td><a class="btn btn-danger" href="?delete=<?php echo $project['id']; ?>">Delete</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include("pie.php"); ?>