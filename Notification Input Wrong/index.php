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
<h1>Simple Calculator</h1>
<form action="" method="post">
    <input type="number" name="input1" placeholder="Số thứ nhất"><br>
    <input type="number" name="input2" placeholder="Số thứ hai"><br>
    <button>Tính</button>
</form>
</body>
</html>
<?php
function calc($num1, $num2){
    try {
        if ($num2 == 0 || $num1 == $num2){
            throw new Exception("/ by zero");
        }
        $result1 = $num1 + $num2;
        $result2 = $num1 - $num2;
        $result3 = $num1 * $num2;
        $result4 = $num1 / $num2;

        return "<strong>Với x=$num1, y=$num2</strong><br>Tổng x+y= $result1<br>Hiệu x-y= $result2<br>Tích x * y = $result3<br>Thương x / y = $result4";
    }catch (Exception $exception){
        return $exception->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $num1 = $_POST['input1'];
    $num2 = $_POST['input2'];

    $result = calc($num1, $num2);

    echo "$result";
}