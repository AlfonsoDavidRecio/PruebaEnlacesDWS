<?php
if ($_GET["opcion"] == 1){
    header("Location:borrar.php?ip=".$_GET["ip"]);
}else{
    header("Location:modificar.php?ip=".$_GET["ip"]);
}