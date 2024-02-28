<?php

function countIslands($matrix) {
    $numRows = count($matrix);
    if ($numRows == 0) return 0;

    $numCols = count($matrix[0]);
    $visited = array_fill(0, $numRows, array_fill(0, $numCols, false));
    $count = 0;

    for ($i = 0; $i < $numRows; $i++) {
        for ($j = 0; $j < $numCols; $j++) {
            if ($matrix[$i][$j] == 1 && !$visited[$i][$j]) {
                exploreIsland($matrix, $visited, $i, $j);
                $count++;
            }
        }
    }

    echo "\nNumber of Islands: $count";
}

function exploreIsland(&$matrix, &$visited, $row, $col) {
    $numRows = count($matrix);
    $numCols = count($matrix[0]);

    if ($row < 0 || $col < 0 || $row >= $numRows || $col >= $numCols || $visited[$row][$col] || $matrix[$row][$col] == 0) {
        return;
    }

    $visited[$row][$col] = true;
    exploreIsland($matrix, $visited, $row + 1, $col);
    exploreIsland($matrix, $visited, $row - 1, $col);
    exploreIsland($matrix, $visited, $row, $col + 1);
    exploreIsland($matrix, $visited, $row, $col - 1);
}


//test case
$matrix = [
    [1,1,1,1],
    [0,1,1,0],
    [0,1,0,1],
    [1,1,0,0]
];

//display the matrix
echo "------------MATRIX---------------\n";
foreach($matrix as $row){
    foreach($row as $col){
        echo $col. " ";
    }
    echo "\n";
}

//display the stringified form
echo "---------STRIGIFIED FORM---------\n";
foreach($matrix as $row){
    foreach($row as $col){
        echo($col==1? 'X' : '~'). " ";
    }
    echo"\n";
}

//call the function for counting the island
countIslands($matrix);

?>