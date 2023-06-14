<!-- Valores select option -->
<?php

$txtNombre = "";
$rdgLenguaje = "";

$chkphp = "";
$chkhtml = "";
$chkcss = "";

$lsAnime = "";

if ($_POST) {
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";

    $chkphp = (isset($_POST['chkphp']) == "si") ? "checked" : "";
    $chkhtml = (isset($_POST['chkhtml']) == "si") ? "checked" : "";
    $chkcss = (isset($_POST['chkcss']) == "si") ? "checked" : "";

    $lsAnime = (isset($_POST['lsAnime'])) ? $_POST['lsAnime'] : "";

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
        <br />
        <strong>Tu lenguaje es: </strong>
        <?php echo $rdgLenguaje; ?>
        <br />
        <strong>Tu estás aprendiendo: </strong><br />
        - <?php echo ($chkphp == "checked") ? "PHP" : ""; ?><br />
        - <?php echo ($chkhtml == "checked") ? "HTML" : ""; ?><br />
        - <?php echo ($chkcss == "checked") ? "CSS" : ""; ?><br />
        <br />
        <strong>Tu anime favorito es: </strong>
        <?php echo $lsAnime; ?>
    <?php } ?>
    <form action="ejercicio37.php" method="post">
        Nombre:<br />
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <br />
        ¿que tecnología te gusta?<br />
        <br />php: <input type="radio" name="lenguaje" <?php echo ($rdgLenguaje == "php") ? "checked" : ""; ?> value="php"
            id=""><br />
        <br />html: <input type="radio" name="lenguaje" <?php echo ($rdgLenguaje == "html") ? "checked" : ""; ?> value="html"
            id=""><br />
        <br />css: <input type="radio" name="lenguaje" <?php echo ($rdgLenguaje == "css") ? "checked" : ""; ?> value="css"
            id=""><br />

        Estás aprendiendo...
        <br />php: <input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
        <br />html: <input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id="">
        <br />css: <input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id="">
        <br />

        ¿Qué anime te gusta?<br />
        <select name="lsAnime" id="">
            <option value="">[Ninguna serie]</option>
            <option value="Naruto" <?php echo ($lsAnime == "Naruto") ? "selected" : "" ?> >Naruto</option>
            <option value="Bleach" <?php echo ($lsAnime == "Bleach") ? "selected" : "" ?> >Bleach</option>
            <option value="Dragon Ball" <?php echo ($lsAnime == "Dragon Ball") ? "selected" : "" ?> >Dragon Ball</option>
        </select>
        <br />
        <br />
        <input type="submit" value="Enviar información">

    </form>
</body>

</html>