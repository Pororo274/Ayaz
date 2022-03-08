<?php
    $host = 'localhost';
    $db_name = 'z347';
    $login = 'z347';
    $pass = ']3c6#.M_Lx;N';

    $link = new mysqli($host, $login, $pass, $db_name);

    if($link ->connect_errno){
        echo "Проблемы";
    }


    if(!$link->set_charset("utf8")){
        echo 'Problem s kod';
    }

?>