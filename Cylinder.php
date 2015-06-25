<?php
$width = $_POST['width'];
$height = $_POST['height'];
$formats = $_POST['formats'];
//class MyClass{
/*function __autoload ($class_name){
    require_once $class_name . '.class.php';
}
$a = new MyClass();

$a -> test();*/

//}
//$a = new MyClass();
//
//$a -> test();
class cylinder {
    public $degrees = 90;
    public $img;
    private $width = 200;
    private $height = 110;

    function create_one_cylinder(){
        $img="img/cylinder1.jpg";
        $wm = imagecreatefrompng('img/logo1.png');
        $wmW = imagesx($wm);
        $wmH  = imagesy($wm);
        $image=imagecreatetruecolor($wmW, $wmH);//создаёт новое изображение

        if(preg_match("/.jpeg/i",$img) or preg_match("/.jpg/i",$img)):
            $image=imagecreatefromjpeg($img);
        else:
            die("Ошибка! Неизвестное расширение изображения");
        endif;

        $size=getimagesize($img);
        $cx=$size[0]-$wmW-550;/*530 1-2*/
        $cy=$size[1]-$wmH-100/*170 2-3*/;
        imagecopyresampled ($image, $wm, $cx, $cy, 0, 0, $wmW, $wmH, $wmW, $wmH);
        imagejpeg($image,$img,90);

        /*header('Content-type: image/jpeg');
        $rotate = imagerotate($image, $this->degrees, 0);
        imagejpeg($rotate);
        imagedestroy($rotate);*/

        imagedestroy($image);
        imagedestroy($wm);
        unset($image,$img);


    }
    function create_two_cylinder(){
        $img="img/cylinder2.jpg";
        $wm=imagecreatefrompng('img/logo2.png');
        $wmW=imagesx($wm);
        $wmH=imagesy($wm);
        $image=imagecreatetruecolor($wmW, $wmH);//создаёт новое изображение

        if(preg_match("/.jpeg/i",$img) or preg_match("/.jpg/i",$img)):
            $image=imagecreatefromjpeg($img);
        else:
            die("Ошибка! Неизвестное расширение изображения");
        endif;

        $size=getimagesize($img);
        $cx=$size[0]-$wmW-530;/*530 1-2*/
        $cy=$size[1]-$wmH-170/*170 2-3*/;
        imagecopyresampled ($image, $wm, $cx, $cy, 0, 0, $wmW, $wmH, $wmW, $wmH);
        imagejpeg($image,$img,90);
        imagedestroy($image);
        imagedestroy($wm);
        unset($image,$img);
    }
    function create_three_cylinder(){
        $img="img/cylinder3.jpg";
        $wm=imagecreatefrompng('img/logo3.png');
        $wmW=imagesx($wm);
        $wmH=imagesy($wm);
        $image=imagecreatetruecolor($wmW, $wmH);//создаёт новое изображение

        if(preg_match("/.jpeg/i",$img) or preg_match("/.jpg/i",$img)):
            $image=imagecreatefromjpeg($img);
        else:
            die("Ошибка! Неизвестное расширение изображения");
        endif;

        $size=getimagesize($img);
        $cx=$size[0]-$wmW-530;/*530 1-2*/
        $cy=$size[1]-$wmH-170/*170 2-3*/;
        imagecopyresampled ($image, $wm, $cx, $cy, 0, 0, $wmW, $wmH, $wmW, $wmH);
        imagejpeg($image,$img,90);
        imagedestroy($image);
        imagedestroy($wm);
        unset($image,$img);
    }
}
$obj = new cylinder();


/*if ($GLOBALS['width'] > 0 && $GLOBALS['height'] > 0){

    include("resize.class.php");
    $resizeObj = new resize('img/cylinder1.jpg');
    $resizeObj -> resizeImage($GLOBALS['width'], $GLOBALS['height'], 'crop');
    $resizeObj -> saveImage('cylinder1.'.$formats, 100);
}*/