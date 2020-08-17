<?php
    require("nav.php");
    require("baza.php");

    $sql="select * from proizvod";
    $result = $con->query($sql);
    while($row = $result->fetch_assoc()) {
        echo($row["ID"]);
    }
?>