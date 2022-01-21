<?php

if ($_GET['id']){
    $id = $_GET['id'];

    $data = [
        "id" => $id,
    ];
    $ch = curl_init('http://localhost/slimapp/api/course/' . $id);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    curl_exec($ch);

    header('Location:index.php');
}

?>
