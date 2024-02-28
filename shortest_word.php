<?php

function findShortestWord($str){
    //convert the string to array
    $str = explode(" ", $str);

    //set the first word in the string as the shortest word for comparison
    $shortest= strlen($str[0]);
    $shortestWord=$str[0];

    
    foreach($str as $word){
        $wordLength=strlen($word);
        if($wordLength<$shortest){
            $shortest=$wordLength;
            $shortestWord=$word;
        }
    }

    echo '"'.implode(" ", $str). '"' ."\n";
    //print the shortest length and the equivalent word
    echo "$shortest - BECAUSE THE SHORTEST WORD IS '" . strtoupper($shortestWord) . "'";

}


//if thru user input
//$str= trim(readline("Input a string: "));

//test case
$str="TRUE FRIENDS ARE ME AND YOU";

//pass the input to the function for finding the shortest word
findShortestWord($str);

?>