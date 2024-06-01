<?php
session_start();
if(!isset($_SESSION["mail"])){
    header("Location: login_account.php");
    exit;

}
else{
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['id_prodotto'])) {
    $id_prodotto = $data['id_prodotto'];
    
    
    // Connessione al database
    $conn = new mysqli("localhost", "root", "", "MulinoBianco");
        if($data['x']==1){
            $query=mysqli_query($conn,"INSERT INTO AFFERENZA VALUES('".$_SESSION['mail']."','".$id_prodotto."')");
        }
        else if($data['x']==0){
            $query=mysqli_query($conn,"DELETE FROM AFFERENZA WHERE Mail='".$_SESSION["mail"]."' AND Prodotto='".$id_prodotto."'");

        }
        mysqli_close($conn);

    }
}





?>