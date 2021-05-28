<?php
function findMax($arr){
    $max=$arr[0];
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]>$max){
            $max=$arr[$i];
        }
    }
    return $max;
}
$array=[1,2,3,9,45,6];
echo "Phan tu lon nhat trong mang la:".findMax($array);