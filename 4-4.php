<?php
    function prost($n){
        $res = TRUE;
        for($i = 2; $i < floor($n / 2) + 1; $i++){
            if($n % $i == 0){
                $res = FALSE;
                break;
            }
        }
        return $res;
    }

    for($d = 2; $d < 100; $d++){
        if(prost($d)){
            echo $d . "\t";
        }
    }
?>