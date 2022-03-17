<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="cart.css">
    <?php include 'links.php'?>
    <title>Uman | Cart</title>
</head>
<body>
<style>
    .nav{
    background-color: rgba(0, 0, 0, 0.2);
}
</style>

<!---List--->
<?php 
    session_start();
    include "connection.php";
if($_SESSION['state']==''){
     include"nav.php";
    }else{
        include "nav-c.php";
    }
?>
<section class="py-5">       
    <div class="container d-flex mt-3">
        
        <div class="div1">
        <h3 class="text-dark display-6">MY SHOPPING BAG</h3>
        <hr id="bag">
            <div class="row">
                <div class="col-8"><h4 class="text-muted">PRODUCT</h4></div>
                <div class="col-2"><h4 class="text-muted"> PRICE &nbsp;</div>
                <div class="col-2"><h4 class="text-muted">TOTAL</h4></div>
            </div> 
        <hr id="pro">
<?php 

    $sql1 = "SELECT * FROM temp";
    $query1 = mysqli_query($con, $sql1);
    $total = array();
    while($row1 = mysqli_fetch_array($query1)) {
        $count = 0;
    $prdid = $row1['idProduit'];
    $sql = "SELECT * FROM Produit WHERE idProduit='$prdid'";
    $query = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($query);
    array_push($total,  $row['prix']*$row1['quantity']);
    ?>
        
        <div class="row">
            <div class="col-3">
                <div class="container-fluid">
                    <img src="<?php echo $row['image'];?>" style="width: 100%;">
                </div>
            </div>
            <div class="col-5 my-3">   
                <h6 class="text-dark py-2"> <?php echo $row['libelle'];?></h6>
                <h6 class="text-dark py-2"> <?php echo $row['description'];?></h6>
                <h6 class="text-dark py-3">Quantity : <?php echo $row1['quantity'];?></h6>
                <h6 class="text-dark py-2"> <a href="" class="btn btn-transparent text-dark btn-sm">edit</a> |
                <a href="" class="btn btn-transparent btn-sm text-danger ">delete</a></h6>
            </div>
            
                <div class="col-2">
                    <h6 class="text-dark py-2"> <?php echo $row['prix'].'€';?> </h6>
                </div>
                <div class="col-2">
                    <h6 class="text-dark py-2"><?php echo $row['prix']*$row1['quantity'].'€';?></h6>
                </div>    
            </div> 
            <?php 
}
$ttl = array_sum($total);
?>
</div>
<div class="div2 my-5">
    <div class="container p-5">
        <h4 class="text-dark fw-bold">SUMMARY</h4><hr id="summ">
        <div class="row">
            <div class="col-6">
                <h4 class="text-$gray-700 fw-bold">SUBTOTAL:</h4>
            </div>
            <div class="col-6">
                <h4 class="text-dark fw-bold"><?php echo  $ttl;?>€</h4>
            </div>
            <span>
                <p class="fs-6 text-secondary py-4">Shipping: <?php 
                $ship;
                if($ttl==0){$ship = 0; echo $ship;}elseif($ttl < 1000){$ship =10; echo $ship;}else{$ship =250; echo $ship;}
                ?>€</p>

                <p class="fs-6 text-secondary">Sales Tax(5%): <?php
                $tax = $ttl * 5/100;
                if($ttl==0){$tax =0;}
                echo  $tax;?>€</p><hr id="summ">
                <div class="text-center">
                    <h4 class="text-dark fw-bold">ESTIMATED TOTAL</h4><br>
                <h4 class="text-dark fw-bold"><?php echo $ttl + $ship + $tax;?>€</h4><hr id="summ">
                <form action="checkout.php" method="POST">
                    <button class="text-center btn btn-dark" >CHECKOUT</button>
                </form>
                </div>
                </div>

                
            </div>
            
        
        </div>
    </div>
</section>
</body>
</html>