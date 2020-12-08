<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="submit">
</form>
</body>
</html>
<?php
function findMin($arr)
{
    $index = 0;
    $min = $arr[0];
    foreach ($arr as $key => $value) {
        if ($min > $value) {
            $index = $key;
            $min = $value;
        }
    }
    return "Index of min: " . $index;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $array = [56789,34567,5678, 2, 3, 4, 4, 6, 7, 8, 32, 45667, 24567, 4, 675, 6, 5465, 465, 43];
    echo findMin($array);
}