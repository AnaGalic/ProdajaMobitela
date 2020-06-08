<?php
    require ('baza.php');
    require('nav.php');
?>
<div class="container">
	<h2>Registracija</h2>
	<form action="registracijaPost.php" method="post">
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="text" class="form-control" id="usr" name="email"/>
		</div>
		<div class="form-group">
			<label for="sifra">Sifra:</label>
			<input type="password" class="form-control" id="pwd" name="sifra"/>
		</div>
		<div class="form-group">
			<label for="Ime">Ime:</label>
			<input type="text" class="form-control" id="pwd" name="ime"/>
		</div>
		<div class="form-group">
			<label for="prezime">Prezime:</label>
			<input type="text" class="form-control" id="pwd" name="prezime"/>
		</div>

		<div class="form-group">
			<label for="broj">Broj:</label>
			<input type="text" class="form-control" id="pwd" name="broj"/>
		</div>

		<button class="btn btn-info">Registracija</button>
	</form>
</div>

<?php require('footer.php')?>