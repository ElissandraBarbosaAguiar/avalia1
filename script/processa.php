<?php

    include_once("connexao.php");

    $nomeCompleto = filter_input(INPUT_POST, 'nomeCompleto', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $numeroComplemento = filter_input(INPUT_POST, 'numeroComplemento', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
   // $items_li = filter_input(INPUT_POST, 'items_li', FILTER_SANITIZE_STRING);


    $result_usuario = "INSERT INTO  cadastroMembro (nomeCompleto, endereco, numeroCompleto, estado, cidade, /*items_li*/) VALUES ('$nomeCompleto', '$endereco', '$numeroCompleto', '$estado', '$cidade')";//, '$items_li'
    $resultado_usuario = mysqli_query($conn, $result_usuario);


  
?>