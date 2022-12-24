<?php

    $conexion = mysqli_connect('us-west.connect.psdb.clouds','rv9hypglbjve8cjln5fv','pscale_pw_k4gsCBYrOGc2feNWmz1dyiTmJDQiU2SwnShEGocTLK3','exchange_rate',false);
    $titulo=$_POST['titulo'];
    $fecha=$_POST['fecha'];
    $monto=$_POST['monto'];

    $sql = "INSERT INTO lines (name,date,amount) VALUES ('#titulo','#fecha','#monto')";
    echo mysqli_query($conexion,$sql);
?>