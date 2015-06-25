<?php
include_once('Cylinder.php');
$obj->create_one_cylinder();
$obj->create_two_cylinder();
$obj->create_three_cylinder();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css.css">

    <meta charset="utf-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <title></title>



</head>
<body>
<a href="index.php"><img src="img/cylinder3.jpg" alt=""></a>
<div>
    <a href="index1.php"><img src="img/cylinder1.jpg" alt="" id="a1"></a>
    <a href="index2.php"><img src="img/cylinder2.jpg" alt="" id="a2"></a>
    <a href="index3.php"><img src="img/cylinder3.jpg" alt="" id="a3"></a>
</div>
<form action="">
    <p><b>input picture for print</b></p>
    <p><input type="text" name="width" value="111">enter width<Br>
        <input type="text" name="height" value="111">enter height<Br>
        <input type="text" name="formats" value="jpeg">enter formats</p>
    <p><input type="submit"></p>
    <?php
    $width = $_GET['width'];
    $height = $_GET['height'];
    $formats = $_GET['formats'];

    if ($GLOBALS['width'] > 0 && $GLOBALS['height'] > 0){

        include("resize.class.php");
        $resizeObj = new resize('img/cylinder3.jpg');
        $resizeObj -> resizeImage($GLOBALS['width'], $GLOBALS['height'], 'crop');
        $resizeObj -> saveImage('cylinder3.'.$formats, 100);
    }
    ?>
</form>
</body>
</html>