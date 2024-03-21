<?php

    $database= new mysqli("localhost","root","","petcare");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>