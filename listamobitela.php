<?php
    require ('baza.php');
    require('nav.php'); 
?>

<?php
$sql = "SELECT * from proizvod";
$result = $con->query($sql);

?>


<div class="container">
  <h2>Mobiteli</h2>
  <a href="mobiteli.php" class="btn btn-info">Dodajte mobitel </a>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Naziv</th>
      </tr>
    </thead>
    <tbody>
    <?php
        if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo("<tr>"
            .
            "<td>".$row["ID"]."</td>"
            .
            "<td>".$row["Ime"]."</td>"
            
            
        );
        echo("<td><a name='izbrisi' href='izbrisimobitel.php?id=".$row["ID"]."'> <span class='glyphicon glyphicon-remove'></a></span></td>");
        echo("<td><a name='uredi' href='urediMobitel.php?id=".$row["ID"]."'> <span class='glyphicon glyphicon-pencil'></a></span></td>");
        echo("</tr>");
    }
}
    ?>
    </tbody>
</table>

<?php require('footer.php')?>
