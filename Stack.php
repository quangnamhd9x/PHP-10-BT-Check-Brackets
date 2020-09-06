<?php


function check($sym){
    $stack = SplStack();
    $stack1 = new SplStack();
    $array = str_split($sym);

    if ($stack === null){
        echo 'chuan Nam';
    }
    for ($i = 0; $i < count($array); $i++){
        if ($array[$i] === '('){
            $stack->push($array[$i]);
        } else if ($array[$i] === ')' && $stack === null){
            echo 'Wrong!!';
        } else if ($array[$i] === ')'){
            $stack1->push($array[$i]);
            if ($stack->bottom() === ")") {
                echo 'Wrong!! bottom';
            }
        }
    }
}