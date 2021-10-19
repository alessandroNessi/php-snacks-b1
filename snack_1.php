<?php 
$nomi=["cippa","lippa","milano","genova","palermo","firenze","torino","livorno","cosenza","napoli","venezia","bari","roma","biella","mango","banjo","kazooye"];

//passo i nomi da estrapolare, il punteggio minimo e massimo da generare
$squadre=populateTeam($nomi,10,90);

//stampo le squadre in html
for($i=0 ; $i<count($squadre) ; $i++){
    echo "<p>{$squadre[$i]["home_team"]} - {$squadre[$i]["host_team"]} | {$squadre[$i]["home_score"]}-{$squadre[$i]["host_score"]}</p>";
}

//genero e ritorno l'array con le squadre complete
function populateTeam($nomi, $min, $max){
    $i=0;
    $returnIndex=0;
    $positionTaken=[];
    $associatedPos=(int)rand($i+1,count($nomi)-1);
    $returningArray=[];
    while(count($returningArray)<((int)(count($nomi)/2))){
        while(in_array($associatedPos, $positionTaken)){
            $associatedPos=(int)rand($i+1,count($nomi)-1);
        }
        $returningArray[$returnIndex]=["home_team" => $nomi[$i], "host_team" => $nomi[$associatedPos], "home_score" => strval((int)rand($min,$max)) , "host_score" => strval((int)rand($min,$max))];
        $positionTaken[]=$associatedPos;
        $positionTaken[]=$i;
        $returnIndex++;
        $i++;
        while(in_array($i, $positionTaken)){
            $i++;
        }
    }
    return $returningArray;
}
?>