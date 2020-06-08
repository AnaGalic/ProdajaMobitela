<?php
        require ('baza.php');
    if(isset($_POST["email"]) && isset($_POST["sifra"]))
    {
        $email= strtolower($_POST["email"]);
        $sifra=$_POST["sifra"];
        $ime=$_POST["ime"];
        $prezime=$_POST["prezime"];
        $broj=$_POST["broj"];

        $sql="INSERT INTO user (Ime,Prezime,Email,Broj_mob,Pass,Uloga_ID) VALUES ("."'".$ime."'".","."'".$prezime."'".","."'".$email."'".","."'".$broj."'".","."'".$sifra."'".",2".")";
        $result = $con->query($sql);
        echo($sql);
        echo($result);
        header("Location: index.php");
    }
    else
    {
        echo("not ok");
    }



?>