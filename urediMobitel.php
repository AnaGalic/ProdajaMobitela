<?php
    require("baza.php");
    require("nav.php");
    $id=$_GET["id"];

    if (isset($id)) 
    {
        $sql="select * from proizvod where ID=".$id;
        $result = $con->query($sql);

        $ime="";
        $cijena=0;
        while($row = $result->fetch_assoc()) {
            $ime=$row["Ime"];
            $cijena=$row["Cijena"];

            }

            
        }
    else
    {
        echo("greska");
    }
?>

<div class="container">
  <h2>Uredite proizvod</h2>
  <form action="urediPost.php" method="post">
    <div class="form-group">
      <label for="usr">Ime:</label>
      <input name="ime" type="text" class="form-control" id="ime" value=<?php echo($ime);?>>
    </div>
    <div class="form-group">
      <label for="cijena">Cijena:</label>
      <input name="cijena" type="number" class="form-control" id="cijena" value=<?php echo($cijena);?>>
    </div>
    <input name="id" type="hidden" value=<?php echo($id) ?>>
    <button class="btn btn-info">Uredi</button>
  </form>
</div>