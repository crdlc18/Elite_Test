<?php

function findPos($words, $target){
    $pos= []; //array for storing the position/s of the target word

    foreach($words as $index => $word){
        if($word===$target){
            $pos[]= $index;
        }
    }
    return $pos;
}

//test case
$words = ["I", "TWO", "FORTY", "THREE", "JEN", "TWO", "tWo", "Two"];
echo '[' . '"' . implode('", "', $words) . '"' . "]\n";
$target=readline("TARGET: ");


//call the function for finding the index/indices
$result=findPos($words, $target);

//condition for display (assuming the list will never be empty)
if(count($result)==1){ 
    echo "INDEX" .$result[0];
}
elseif(count($result)==2){
    echo "INDEX ".$result[0]. " and INDEX ".$result[1];
}
else{
    echo "INDICES". implode(", " ,$result);
}

?>