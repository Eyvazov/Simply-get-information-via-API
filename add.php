<?php

if ($_POST){
    $title = $_POST['title'];
    $couponCode = $_POST['couponCode'];
    $price = $_POST['price'];

    $data = [
      "title" => $title,
      "couponCode" => $couponCode,
      "price" => $price,
    ];

    $ch = curl_init('http://localhost/slimapp/api/course/add');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    curl_exec($ch);

    header('Location:index.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>API</title>
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Kurs Adı</label>
            <input type="text" class="form-control" name="title" placeholder="Kurs Adı">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kurs Kuponu</label>
            <input type="text" class="form-control" name="couponCode" placeholder="Kurs Kuponu">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kurs Qiyməti</label>
            <input type="text" class="form-control" name="price" placeholder="Kurs Qiyməti">
        </div>
        <button type="submit" class="btn btn-primary">Göndər</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>

