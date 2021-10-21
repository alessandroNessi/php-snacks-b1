<?php
    include __DIR__ . '/data/data.php';
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
            </div><hr>";
        }
    ?>
</body>
</html>