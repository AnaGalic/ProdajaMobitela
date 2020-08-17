<?php
    require("baza.php");
    echo($_POST["id"]);
    $cijena=$_POST["cijena"];
    $ime="'". $_POST["ime"]."'";
    $sql="UPDATE proizvod as p  set p.Cijena=".$cijena.",p.Ime=".$ime." WHERE p.ID=".$_POST["id"];
    $result = $con->query($sql);
   
    header("Location: urediMobitel.php?id=".$_POST["id"]);