<?php
    require("baza.php");
    session_start();

    
    if (isset($_GET["mobitel"])) {
        $idMob=$_GET["mobitel"];
    }
    if (isset($_SESSION["idKorpe"])) {
        $idKorpe=$_SESSION["idKorpe"];
    }
    if(isset($_SESSION["ID"])){
        $idKorisnik=$_SESSION["ID"];
    }

    $izbrisiKorpu=$_GET["izbrisi"];
    echo($izbrisiKorpu);
    if (isset($izbrisiKorpu)) {
        unset($_SESSION["idKorpe"]);
    }

    if(isset($idKorisnik) && isset($idKorpe))
    {
        $values="(".$idKorpe.",".$idKorisnik.",NOW())";
        $sql="INSERT INTO kosara (ID, ID_User, Datum) VALUES ".$values;
        $result = $con->query($sql);
    }

    if (isset($idMob) && isset($idKorpe)) {
        //gleda ima li vec taj mob u kosari
            $sql="SELECT COUNT(*) br FROM kosaraproizvod kp WHERE kp.Proizvod_ID=".$idMob." and kp.Kosara_ID=".$idKorpe;
	// echo($rowBrojac["brojac"]);
    $result=$con->query($sql);
    while($row = $result->fetch_assoc()) {
        $br=$row["br"];
    }
    if($br==0)
    {
        //ako nema u kosari onda ga doda
        $values="(".$idKorpe.",".$idMob.")";
        $sql="INSERT INTO kosaraproizvod (Kosara_ID,Proizvod_ID) VALUES ".$values;
        $result=$con->query($sql);
    }
    }
    


    

    header("Location: index.php");
?>