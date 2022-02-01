<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Challenge</title>
</head>
<style>
    .container {
        text-align: center;
    }
    form {
        padding-top: 100px;
    }
    form  div {
        padding: 10px;
    }
    h2{
        text-align: center;
    }
</style>
<body>


<div class="container">
    <div>
        <? if(!empty($_POST)) include ("Register.php") ?>
    </div>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="input-group">
            <label for="vorname">Vorname</label>
            <input name="vorname" type="text" >
        </div>
        <div class="input-group">
            <label for="nachname">Nachname</label>
            <input name="nachname" type="text" >
        </div>
        <div class="input-group">
            <label for="strasse">Straße</label>
            <input name="strasse" type="text" >
        </div>
        <div class="input-group">
            <label for="postleitzahl">Postleitzahl</label>
            <input name="postleitzahl" type="number" >
        </div>
        <div class="input-group">
            <label for="ort">Ort</label>
            <input name="ort" type="text" >
        </div>
        <div class="input-group">
            <label for="telefon">Telefon</label>
            <input name="telefon" type="tel" >
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input name="email" type="email" >
        </div>

        <div class="input-group">
            <label for="beschreibung">Beschreibung</label>
            <textarea name="beschreibung"></textarea>
        </div>
        <input type="submit" value="Senden">
    </form>

</div>

</body>
</html>