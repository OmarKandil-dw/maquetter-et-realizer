<?php
include "connection.php";
session_start();
if(isset($_POST['add'])){
        $qte = $_POST['qte'];
        $prdid = $_SESSION['idprd'];
        $sql =  "INSERT INTO temp (quantity, idProduit) VALUES ('$qte', '$prdid')";
        $query = mysqli_query($con, $sql);
            header("Location: product.php"); 
            exit(); 
}
        ?>