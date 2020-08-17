<?php require('nav.php')?>

<?php
	require ('baza.php');
	// session_start();
	function generateRandomString() {
	return rand(0,10000000);
}
	
	if(!isset($_SESSION["idKorpe"]))
	{
		$idKorpe=generateRandomString();
		//echo($idKorpe);
		$_SESSION["idKorpe"]=$idKorpe;
	}
	//$_SESSION["idKorpe"]
?>
<body>
<style>
.fit-image{
width: 100%;
object-fit: cover;
height: 300px; /* only if you want fixed height */
}
</style>
	<div class="container">
	<div class="row">
    <div class="col-sm-9">
		<?php
            $sql="select * from proizvod";
			$result = $con->query($sql);

			
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		
		echo ('
			  <div class="col-sm-3">
    		<div class="thumbnail">
				<img src="uploads/'.$row["Slika"].'" alt="slika" class="img-responsive" width = "100%" >
					<h3>Ime: '.$row["Ime"].'</h3><h4> Cijena: '.$row["Cijena"].'</h4>
					<p><a href="dodajUKosaru.php?mobitel='.$row["ID"].'" class="btn btn-primary" role="button">Dodaj</a></p>
				</div>
				</div>
		');
	}
} else {
    echo "0 results";
}
		?>
			

	</div>
	<aside class="col-sm-3">
			
            <div id="smartcart" class="panel panel-default sc-cart sc-theme-default">
                <input type="hidden" name="cart_list" id="cart_list" />
                <div class="panel-heading sc-cart-heading">
                    Korpa
                    <span class="sc-cart-count badge">
					<?php
					//broji sve mobitele u kosari
						$brojac="SELECT COUNT(*) as brojac FROM kosara as k INNER JOIN kosaraproizvod as kp on kp.Kosara_ID=k.ID INNER JOIN proizvod as p on p.ID=kp.Proizvod_ID WHERE k.KupnjaZavrsena=0 and  k.ID=".$_SESSION["idKorpe"];
						$resultBrojac=$con->query($brojac);
						$rowBrojac = $resultBrojac->fetch_assoc();
						echo($rowBrojac["brojac"]);
					?>
					
					</span>
                </div>

                <div class="list-group sc-cart-item-list">
                    <div id="izbrisi" class="sc-cart-item list-group-item" data-unique-key="1528315106377">
                        <table id="kosarica" class="table">
                            <thead>
                                <tr>
								<th>Naziv</th>
								<th>Cijena</th>
                            </thead>
                            <tbody>
                                <tr class="tr">
                                    <!-- <td class="naziv">a</td>
                                    <td class="cijena">a</td>
                                    <td class="izbrisi"><span class="glyphicon glyphicon-remove"></span></td> -->
									<?php 
									//svi proizvodi iz baze
									if(isset($_SESSION["idKorpe"]) && isset($_SESSION["ID"]) ){
										$kosara="SELECT k.ID_User as uid, k.ID as kosaraId,p.ID,p.Cijena as cijena,p.Ime as ime FROM kosara as k INNER JOIN kosaraproizvod as kp on kp.Kosara_ID=k.ID INNER JOIN proizvod as p on p.ID=kp.Proizvod_ID WHERE k.KupnjaZavrsena=0 and k.ID=".$_SESSION["idKorpe"]." and k.ID_User=".$_SESSION["ID"];
										$resultKosara = $con->query($kosara);
										    while($rowKosara = $resultKosara->fetch_assoc()) {
												echo("<td>".
													$rowKosara["ime"]
													."</td>"
													."<td>"
													.$rowKosara["cijena"]
													."</td></tr>"
												);
											}
										}
										else {
											echo("prijavite se da bi mogli dodati u kosaru");
										}
									?>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="panel-footer sc-toolbar">
                    <div class="sc-cart-summary">
                        <div class="sc-cart-summary-subtotal">
                            Ukupno:
							<?php
							//zbraja i ispisuje sve cijene mobitela
							$suma="SELECT SUM(p.Cijena) as sumaa FROM kosara as k INNER JOIN kosaraproizvod as kp on kp.Kosara_ID=k.ID INNER JOIN proizvod as p on p.ID=kp.Proizvod_ID WHERE k.KupnjaZavrsena=0 and  k.ID=".$_SESSION["idKorpe"];
							$resultSuma=$con->query($suma);
							$rowSuma=$resultSuma->fetch_assoc();
							$zbroj=($rowSuma["sumaa"]);
							?>
                            <span class="sc-cart-subtotal"><?php echo($zbroj)?></span>
                        </div>
                    </div>
                    <div class="sc-cart-toolbar">
                        <a href="zavrsiKupnju.php" class="btn btn-info sc-cart-checkout" type="button" id="zavrsiKupnju">Zavrsi kupnju</a>
                        <a href="dodajUKosaru.php?izbrisi=1" type="button" class="btn btn-danger btn-md" >Isprazni kosaricu</a>
                    </div>
                </div>
            </div>


    </aside>
	</div>

<?php require('footer.php')?>
</html>
