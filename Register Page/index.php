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
    <fieldset>
        <legend>Register</legend>
        <input type="text" name="name"><br>
        <input type="email" name="email"><br>
        <input type="number" name="phone"><br>
        <input type="submit">
    </fieldset>

</form>
</body>
</html>
<?php
function saveDataJSON($filename, $name, $email, $phone)
{
    try {
        $contact = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        );
        $data = json_encode($contact);
        file_put_contents($filename, $data);
        echo "Đăng ký thành công!";
    } catch (Exception $exception) {
        echo "Lỗi: " . $exception->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    if (empty($name) || empty($email) || empty($phone)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Đầu vào còn thiếu!";
        }
        else {
            echo "Email không đúng định dạng!";
        }
    }
    else{
        saveDataJSON("data.json", $name, $email, $phone);
    }
}