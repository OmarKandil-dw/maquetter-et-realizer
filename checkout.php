
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <link rel="icon" href="1646826725874.webp" type="image/x-icon">   
<title>Uman | checkout</title>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    main{
        margin-top: 150px !important;
    }
</style>
</head>
<body>
<?php 
    session_start();
    include "connection.php";
if($_SESSION['state']==''){
     include "nav.php";
    }else{
        include "nav-c.php";
    }
    $email = $_SESSION['email'];
    if($email == ''){
        header("Location: log-in.php"); 
        exit(); 
    }
    function query ($q){
        global $con;
        return mysqli_query($con, $q);
    }
    function fetch($f){
        return mysqli_fetch_array($f);
    }
    //temp
    $sql1 = "SELECT * FROM temp";
    $query1 = query($sql1);
    $row1 = fetch($query1);
    $qte = $row1['quantity'];
    $prdid = $row1['idProduit'];


    //produit
    $sql = "SELECT * FROM Produit WHERE idProduit='$prdid'";
    $query = query($sql);  
    $row = fetch($query);

    //client
    $sql2 = "SELECT * FROM Client WHERE email = '$email'";
    $query2 = query($sql2);  
    $row2 = fetch($query2);
    
    $idcli = $row2['idClient'];
    $adress = $row2['adresse'];
    
    $timestamp = rand( strtotime("mar 17 2022"), strtotime("dec 30 2022") );
    $random_Date = date("Y-m-d", $timestamp );
        $sql3 = "INSERT INTO Commande (date, adresseLivraison, idClient ) VALUES ('$random_Date', '$adress', '$idcli')";
        $query3 = query($sql3);  
        
        // $sql4 = "select * from Commande where idCommande =(SELECT LAST_INSERT_ID())";
        // $query4 = mysqli_query($con, $sql4);
        // $row4 = mysqli_fetch_array($query4);
        // $cmdid = $row4['idCommande'];
        // while($row1){
        //     global  $row1, $qte, $prdid;

        //     $sql5 = "INSERT INTO detailscommande (idCommande, idProduit, quantite ) VALUES ('$cmdid', '$prdid', '$qte')";
        //     $query5 = mysqli_query($con, $sql5);
        //                 }

            
 
    
        //command

    ?>

    <main>
        <h2 class="text-center">Shipment Details</h2>
        <div class="container-fluid d-flex">

            <div class="col-6">
                <h4 class="text-dark py-2">Full Name: <?php echo $row2['prenom'].' '.$row2['nom'];?></h4>
                <h4 class="text-dark py-2">Shipping Adresse : <?php echo $row2['adresse'];?></h4>
                <h4 class="text-dark py-2">Phone number : <?php echo $row2['telephone'];?></h4>
                <h4 class="text-dark py-2">Email : <?php echo $row2['email'];?></h4>
            </div>
            <div class="col-6">
                <h4 class="text-dark py-2">Shipment id: <?php echo $row2['email'];?></h4>
                <h4 class="text-dark py-2">date of arrival: <?php echo $row4['date'];?></h4>

            </div>
        </div>
    </main>

<?php 
include 'footer.php';
include 'links.php';
?>
</body>
</html>
