<?php
    if(!file_exists("y.txt")){
        file_put_contents("y.txt", "0\r\n");
    }
    if(isset($_GET['y'])){
        $VAR1=$_GET['y'];
        $TEXTO=$VAR1."\r\n";
        file_put_contents("y.txt",$TEXTO);
    }

    $ARCHIVO = file_get_contents("y.txt");
    $pos=strpos($ARCHIVO, "\r\n");
    $VAR1=substr($ARCHIVO,0,$pos);
?><?php echo $VAR1 ?>