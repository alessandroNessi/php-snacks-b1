<?php 
$nomi=["cippa","lippa","milano","genova","palermo","firenze","torino","livorno","cosenza","napoli","venezia","bari","roma","biella"];
//passo i nomi da estrapolare, il punteggio minimo e massimo da generare
$squadre=populateTeam($nomi,10,90);

function populateTeam($nomi, $min, $max){
    $i=0;
    $positionTaken=[];
    $associatedPos=(int)rand($i+1,count($nomi)-1);
    $returningArray=[];
    // echo (int)rand($i+1,count($nomi)-1);
    while(count($returningArray)<((int)(count($nomi)/2))){
        while(in_array($associatedPos, $positionTaken)){
            $associatedPos=(int)rand($i+1,count($nomi)-1);
        }
        echo $i;
        echo count($returningArray)<((int)(count($nomi)/2));
        $returningArray[]=$nomi[$i].$nomi[$associatedPos];
        $positionTaken[]=$associatedPos;
        echo var_dump($positionTaken);
        $i++;
    }
}
?>