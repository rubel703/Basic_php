<?php

   /*  $marks=30;

    if ($marks>=80 && $marks<=100) {
        echo "you got A+";
    }
    elseif($marks<80 && $marks>=70){
        echo "you got A";
    }
    elseif($marks<70 && $marks>=60){
        echo "you got A-";
    }
    elseif($marks<60 && $marks>=50){
        echo "you got B";
    }
    elseif($marks<50 && $marks>=40){
        echo "you got C";
    }
    elseif($marks<40 && $marks>=33){
        echo "you got D";
    }
    else{
        echo "You are failed";
    } */

    $marks=10;
    switch($marks){
        case($marks>=80 && $marks<=100):
            echo "you got A+";
            break;
        case($marks<80 && $marks>=70):
            echo "you got A";
            break;
        case($marks<70 && $marks>=60):
            echo "you got A-";
            break;
        case($marks<60 && $marks>=50):
            echo "you got B";
            break;
        case($marks<50 && $marks>=40):
            echo "you got C";
            break;
        case($marks<40 && $marks>=33):
            echo "you got D";
            break;
        case($marks<33 && $marks>=0):
            echo "yor are failed";
            break;
        default:
            echo "invalid number";
        
    }
    
?>