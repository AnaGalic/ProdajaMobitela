<?php
    require ('baza.php');

    $id=$_GET["id"];
    $sql="DELETE FROM proizvod WHERE id=".$id;
    $result = $con->query($sql);
    header("Location: listamobitela.php");

?>