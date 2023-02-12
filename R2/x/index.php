<?php
    if(!file_exists("x.txt")){
        file_put_contents("x.txt", "0\r\n");
    }
    if(isset($_GET['x'])){
        $VAR1=$_GET['x'];
        $TEXTO=$VAR1."\r\n";
        file_put_contents("x.txt",$TEXTO);
    }

    $ARCHIVO = file_get_contents("x.txt");
    $pos=strpos($ARCHIVO, "\r\n");
    $VAR1=substr($ARCHIVO,0,$pos);
?><?php echo $VAR1 ?>