<?php 
$input = array (3, 6, -3, 5, -10, 3, 10, 1, 7, -1, -9, -8, 7, 7, -7, -2, -7);
$length = count($input) - 1;
$count = 0;
for ($i = 0; $i <= $length; $i++){
    $flag[$i]=0;
}

for ($i = 0; $i <= $length; $i++) {
    for ($j = $i + 1; $j <= $length; $j++) {
        if ($input[$i] + $input[$j] == 0 && $flag[$i]==0 && $flag[$j]==0) {
            $count++;
            $flag[$i]=1;
            $flag[$j]=1;
        }
    }
}

echo $count;

//telah diuji di https://www.onlinegdb.com/ by refi ahmad fauzi
?>