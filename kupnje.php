<?php
    require("baza.php");
    require("nav.php");

    $id=$_SESSION["ID"];
    // echo($id);


?>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Datum kupnje</th>
      </tr>
    </thead>
    <tbody>
    <?php
     $sql="SELECT * FROM kosara as k WHERE k.KupnjaZavrsena=1 and k.ID_User=".$id." ORDER BY k.Datum";
    $result = $con->query($sql);

    while($row = $result->fetch_assoc()) {
            echo("<tr>"
                .
                "<td>".$row["ID"]."</td>"
                .
                "<td>".$row["Datum"]."</td>"
            );
        }
        ?>
    </tbody>
</table>
