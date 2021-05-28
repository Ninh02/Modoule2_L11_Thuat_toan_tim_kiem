<?php
function countNumber($numbers,$value){
    $count=0;
    for($i=0;$i<count($numbers);$i++){
        if($numbers[$i]==$value){
            $count++;
        }
    }
    return $count;
}
$arr=[1,2,3,4,2,6,7,2,2];
foreach ($arr as $value){
    echo $value.",";
}
echo "<br>";
echo "Số lần xuất hiện của phần tử là:".countNumber($arr,2);