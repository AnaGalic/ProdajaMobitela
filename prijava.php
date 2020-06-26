<?php
    require ('baza.php');
    require('nav.php');
?>


<div class="container">
	<h2>Prijava</h2>
	<form action="prijavaPost.php" method="post">
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="text" class="form-control" id="usr" name="email"/>
		</div>
		<div class="form-group">
			<label for="sifra">Sifra:</label>
			<input type="password" class="form-control" id="pwd" name="sifra"/>
		</div>
    	<button class="btn btn-info">Prijava</button>
	</form>
</div>
<?php require('footer.php')?>