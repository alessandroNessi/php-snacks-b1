<?php
    $result=false;
    if(!empty($_GET["email"])){
        $email=$_GET["email"];
        $result=true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./snack_2.php">
        <input type="email" name="email" placeholder="Inserisci la tua email">
        <input type="submit" value="Sbumit">
        <?php 
            if($result==true){
                echo "<h2>Login effettuato con successo, benvenuto {$email}</h2>";
            }
        ?>
    </form>
    <h1></h1>
</body>
</html>