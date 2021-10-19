<?php 
$nomi=["cippa","lippa","milano","genova","palermo","firenze","torino","livorno","cosenza","napoli","venezia","bari","roma","biella","mango","banjo","kazooye"];

//passo i nomi da estrapolare, il punteggio minimo e massimo da generare
$squadre=populateTeam($nomi,10,90);

//stampo le squadre in html
for($i=0 ; $i<count($squadre) ; $i++){
    echo "<p>{$squadre[$i]}</p>";
}

//genero e ritorno l'array con le squadre complete
function populateTeam($nomi, $min, $max){
    $i=0;
    $positionTaken=[];
    $associatedPos=(int)rand($i+1,count($nomi)-1);
    $returningArray=[];
    while(count($returningArray)<((int)(count($nomi)/2))){
        while(in_array($associatedPos, $positionTaken)){
            $associatedPos=(int)rand($i+1,count($nomi)-1);
        }
        $returningArray[]=$nomi[$i] . " - " . $nomi[$associatedPos] . " | " . strval((int)rand($min,$max)) . "-" .strval((int)rand($min,$max));
        $positionTaken[]=$associatedPos;
        $positionTaken[]=$i;
        $i++;
        while(in_array($i, $positionTaken)){
            $i++;
        }
    }
    return $returningArray;
}
?>