<?php
    $classe40=[
        [
            "nome"=> "alessandro",
            "cognome"=> "nessi",
            "voti"=> [5,6,7,8,9,10],
        ],
        [
            "nome"=> "marco",
            "cognome"=> "greg",
            "voti"=> [5,6,7],
        ],
        [
            "nome"=> "luca",
            "cognome"=> "cattaneo",
            "voti"=> [5,9,10],
        ],
        [
            "nome"=> "gianni",
            "cognome"=> "monaci",
            "voti"=> [5,8,9],
        ],
        [
            "nome"=> "jonny",
            "cognome"=> "rudoph",
            "voti"=> [5,6,0,0,0,0],
        ],
        [
            "nome"=> "lillo",
            "cognome"=> "weejee",
            "voti"=> [1,2,3,4,5],
        ],
    ];
    function mediaVoti($array){
        $media=0;
        foreach($array as $element){
            $media+=$element;
        }
        $media/=count($array);
        return $media;
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
    <h1>classe 40</h1>
    <?php 
        foreach($classe40 as $student){
            $votomedio=mediaVoti($student['voti']);
            echo "<div>
            <p>{$student['nome']} {$student['cognome']}</p>
            <p>Media voti: {$votomedio}</p>
            </div>";
        }
    ?>
</body>
</html>