<?php
/**
 * Created by PhpStorm.
 * User: Marvin
 * Date: 01.02.22
 * Time: 11:48
 */
include("User.php");


function registerUser() {
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $strasse = $_POST["strasse"];
    $postleitzahl= $_POST["postleitzahl"];
    $ort = $_POST["ort"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];
    $beschreibung = $_POST["beschreibung"];

    $user = new User($vorname, $nachname, $strasse, $postleitzahl, $ort, $email, $telefon, $beschreibung);
    $result = true;
    if (!$user->checkEmail())  {
        echo "Falche Email <br>" ;
        $result = false;
    }
    if (!$user->checkTel())  {
        echo "Falche Telefonummer  <br>" ;
        $result = false;
    }
    if (!$user->checkStrasse())  {
        echo "Falche Strassenname  <br>" ;
        $result = false;
    }
    if($result==true) {
        saveData($user);
    } else {
        echo "Daten wurden nicht gespeichert";
        return;
    }

}

function saveData (User $user) {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=register', "root", "");
        $sql = "INSERT INTO users (Vorname, Nachname, Strasse, Postleitzahl, Ort, Telefon, Email, Beschreibung, Register_Time  ) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt= $dbh->prepare($sql);
        $stmt->execute([
            $user->getVorname(),
            $user->getNachname(),
            $user->getStrasse(),
            $user->getPostleitzahl(),
            $user->getOrt(),
            $user->getEmail(),
            $user->getTelefon(),
            $user->getBeschreibung(),
            date("Y-m-d H:i:s")
        ]);
        echo "Daten wurden gespeichert";
        $dbh = null;
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br/>";
        die();
    }
}


registerUser();


// Aufgabe 2)
//delete from users WHERE Beschreibung ="" AND Ort="Frankfurt"



