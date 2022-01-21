<?php require_once 'api.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>API</title>
</head>
<body>

<div class="container mt-5">
    <a href="add.php">
        <button class="btn btn-primary mb-3">Əlavə Et</button>
    </a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Kurs Adı</th>
            <th scope="col">Kupon Kodu</th>
            <th scope="col">Qiyməti</th>
            <th scope="col">Əməliyyatlar</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($api->data as $datum): ?>
            <tr>
                <td><?= $datum['title']; ?></td>
                <td><?= $datum['couponCode']; ?></td>
                <td><?= $datum['price']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $datum['id']; ?>">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Redaktə Et</button>
                    </a>
                    <a href="delete.php?id=<?= $datum['id']; ?>">
                        <button class="btn btn-danger">Sil</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
