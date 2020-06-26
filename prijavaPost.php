<?php
require("baza.php");
session_start();
if(isset($_SESSION["email"]))
{
    header('Location: index.php');
}
if(isset($_POST["email"]) && isset($_POST["sifra"]))
    {
        $email=strtolower($_POST["email"]);
        $sifra=$_POST["sifra"];

        $id="select u.ID as ID,ul.Naziv as uloga
        from user as u 
        INNER JOIN uloga as ul on ul.ID=u.Uloga_ID
        where u.Email='".$email."'";
        $resultId=$con->query($id);
        $rowId = $resultId->fetch_assoc();
        $id=$rowId["ID"];
        $_SESSION["ID"]=$id;
        $_SESSION["uloga"]=$rowId["uloga"];

        $sql = "select count(*) as brojac from user where Email='".$email."' and Pass='".$sifra."'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();       
        $brojac = $row['brojac'];
        if($brojac > 0){
            $_SESSION['email'] = $email;
            echo($_SESSION["email"]);
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }
    }
    else
    {
        echo("not ok");
    }

?>