<?php

if(isset($_POST['nombre1']) && isset($_POST['nombre2'])) {
    $x = $_POST['nombre1'];
    $y = $_POST['nombre2'];
    echo rand($x, $y);
}
