<!-- Valores del input radio -->
<?php

$txtNombre = "";
$rdgLenguaje = "";
if ($_POST) {
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php if ($_POST) { ?>
        <strong>Hola</strong>:
        <?php echo $txtNombre; ?>
        <br/>
        <strong>Tu lenguaje es: </strong><?php echo $rdgLenguaje; ?>
    <?php } ?>
    <form action="ejercicio35.php" method="post">
        Nombre:<br />
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <br />
        ¿Te gusta?<br />
        <br />php: <input type="radio" name="lenguaje" <?php echo ($rdgLenguaje == "php")? "checked":"";?> value="php" id=""><br />
        <br />html: <input type="radio" name="lenguaje" <?php echo ($rdgLenguaje == "html")? "checked":"";?> value="html" id=""><br />
        <br />css: <input type="radio" name="lenguaje" <?php echo ($rdgLenguaje == "css")? "checked":"";?> value="css" id=""><br />

        <input type="submit" value="Enviar información">
    </form>
</body>

</html>