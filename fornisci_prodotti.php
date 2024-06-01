<?php
  
    $conn=mysqli_connect("localhost","root","","MulinoBianco") or die(mysqli_error($conn));
    
    
        $query="SELECT * FROM PRODOTTI";
        $dati_prodotti=array();
        $result=mysqli_query($conn,$query);
        while( $row=mysqli_fetch_assoc($result) ) {
            $dati_prodotti[]=$row;
        }
        mysqli_free_result($result);
          mysqli_close($conn);
    
        echo json_encode($dati_prodotti);
?>