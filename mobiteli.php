<?php
    require('nav.php')    
?>
<form action="dodajmobitel.php" method="post" enctype="multipart/form-data">
<div class="container">

	<div class="row">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Naziv mobitela" aria-describedby="basic-addon1" name="ime">
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">$</span>
            <input type="text" class="form-control" placeholder="Unesite cijenu u KM" name="cijena">
        <span class="input-group-addon">.00</span>
    </div>
    <br>
    <div class="input-group">
     <input type="file" name="file" id="file"><br>
    </div>
    <br>
<button class="btn btn-info" type="submit">Dodaj</button>
</form>
</div>

