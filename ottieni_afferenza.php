<?php

    session_start();
    if(!isset($_SESSION["mail"])){
        header("Location: login_account.php");
        exit;

    }


    $conn=mysqli_connect("localhost","root","","MulinoBianco");
    $dati=array();
    $query=mysqli_query($conn,"SELECT Prodotto FROM AFFERENZA WHERE Mail='".$_SESSION["mail"]."'");
    while($r=mysqli_fetch_assoc($query)){
        $dati[]=$r["Prodotto"];
    }

    mysqli_free_result($query);
    mysqli_close($conn);
    echo json_encode($dati);



?>