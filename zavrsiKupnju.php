<?php
    require("baza.php");
    session_start();
    if(isset($_SESSION["idKorpe"]))
    {
    

            $id=$_SESSION["idKorpe"];

            $sql="UPDATE kosara as k set KupnjaZavrsena=1 WHERE k.ID=".$id;
            $result = $con->query($sql);

            unset($_SESSION["idKorpe"]);

            header("Location: index.php");

    }
    echo("greska");

?>