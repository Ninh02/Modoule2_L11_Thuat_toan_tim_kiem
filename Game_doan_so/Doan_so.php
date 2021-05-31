<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doan so</title>
</head>
<body>
<form method="post">
    <input type="number" name="number">
    <button type="submit" value="submit">Submit</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    $arr = range(1, 100);
    function find($arr, $number)
    {
        $left = 1;
        $right = count($arr) - 1;
        while ($left <= $right) {
            $mid = floor(($left + $right) / 2);
            if ($mid == $number) {
                return true;
            } elseif ($mid > $number) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        return false;
    }

    if(find($arr, $number)){
        echo "game over";
    }else{
        echo "doan lai";
    }
}



?>

</body>
</html>
