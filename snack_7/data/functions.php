<?php 
    function mediaVoti($array){
        $media=0;
        foreach($array as $element){
            $media+=$element;
        }
        $media/=count($array);
        return $media;
    }
?>