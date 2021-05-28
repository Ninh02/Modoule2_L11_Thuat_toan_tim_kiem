<?php
function findMin($arr){
    $min=$arr[0];
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]<$min){
            $min=$arr[$i];
        }
    }
    return $min;
}
$array=[1,2,3,-1,-2,4,5];
echo "Phan tu nho nhat trong mang la: ".findMin($array);