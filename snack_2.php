<?php
    function emailOk() {
        $result="";
        if(!empty($_GET["email"])){
            $email=$_GET["email"];
            if(strpos($email,"@")!=false 
            && strpos($email,".")!=false 
            && strpos($email,"@")<strpos($email,".")-1 
            && strpos($email,"@")>0 
            && strpos($email,".")<strlen($email)-1 
            && substr_count($email,"@")<2 
            && strlen($email)>4){
                $result=$email;
            }else{
                $result=false;
            }
        }
        return $result;
    }
    function nameOk() {
        $result="";
        if(!empty($_GET["name"])){
            $name=$_GET["name"];
            if(strlen($name)>3){
                $result=$name;
            }else{
                $result=false;
            }
        }
        return $result;
    }
    function ageOk() {
        $result="";
        if(!empty($_GET["age"])){
            $age=$_GET["age"];
            if(is_numeric($age)){
                $result=$age;
            }else{
                $result=false;
            }
        }
        // var_dump($result);
        return $result;
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
        <input type="number" name="age" placeholder="Inserisci la tua età">
        <input type="text" name="name" placeholder="Inserisci il tuo nome">
        <input type="email" name="email" placeholder="Inserisci la tua email">
        <input type="submit" value="Sbumit">
        <?php 
            $email=emailOk();
            $age=ageOk();
            $name=nameOk();
            if($email!=""&&$age!=""&&$name!=""){
                echo "<h2>Benvenuto {$name}, età {$age}, email {$email} accesso effettuato con successo.</h2>";
            }elseif(emailOk()===false){
                echo "<h2>L'indirizzo di posta elettronica {$email} inserito non risulta corretto, ti preghiamo di inserire un indirizzo e-mail valido.</h2>";
            }
        ?>
    </form>
    <h1></h1>
</body>
</html>