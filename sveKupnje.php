<?php
require("nav.php");
require("baza.php");

$sql="SELECT k.ID as id, u.Ime as ime, u.Prezime as prezime,u.Email as mail FROM kosara as k inner JOIN user as u on u.ID=k.ID_User";

$result = $con->query($sql);

?>

<table class="table">
<thead>
      <tr>
        <th>Ime korisnika</th>
        <th>Prezime</th>
        <th>Mail</th>
      </tr>
    </thead>
    <tbody> 
    <?php
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo("<tr>"
            .
            "<td>".$row["ime"]."</td>"
            .
            "<td>".$row["prezime"]."</td>"
            ."<td>".$row["mail"]."</td>"
            // "<td><a name='izbrisi' href='izbrisimobitel.php?id=4'> <span class='glyphicon glyphicon-remove'></a></span></td>"
        );
    }
}
    ?>
    </tbody>
</table>