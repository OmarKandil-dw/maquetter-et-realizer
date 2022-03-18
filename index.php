<!DOCTYPE html>
<html lang="en">
<head>
    <link href="home.css" rel="stylesheet">
    <link rel="icon" href="1646826725874.webp" type="image/x-icon">
    <title>Uman | Home</title>
</head>

<body>
    
    
    <?php
 session_start();
 if($_SESSION['state']==''){
     include "nav.php";
    }else{
        include "nav-c.php";
    }
    ?>


<div class="banner-image img-fluid w-100 vh-100 d-flex justify-content-center 
align-items-center"
>
<div class="content-text-center">
    <h1 class="text-white"></h1>
</div>
</div>

<section class="py-5">
    <div class=" text-center justify-content-center align-items-center">
        <h1 id="aboutus">About Us</h1><br> 
        
        <h2 class="py-5  text-center justify-content-center">“For a long time we have been looking to<br>
        create a new different Skin care brand for<br>
        men. Our beauticians use effective<br>
        ingredients that everyone understands ...”
            </h2>
        </div>
    </section> 
    
    <h2></h2>
    
    <!---Products--->
    
    <section class="py-5">
        
        <div class="container py-4">
            <div class="row text-center">
                <?php 

include 'connection.php';
$sql = 'SELECT * FROM Produit WHERE Promo = "1"';
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query)){
    ?>
                    <div class="col-sm">
                        <div class="card bg-white text-center">
                            <img src="<?php echo $row['image'];?>" alt="" class="card-img-top">
                            <div class="card-body text-center">
                                <h4 class="card-title"><?php echo $row['libelle']?></h4>
                                <p class="card-text"><?php echo $row['description']?></p>
                                <div class="price ">Price : <?php echo $row['prix'] . '€';?> &nbsp;|     &nbsp; <?php if($row['stock'] > 10){echo '<span style="color:#4BB543;">In Stock</span>';}elseif($row['stock']< 10 && $row['stock'] > 0){echo '<span style="color:#FF7900;">only '.$row['stock'].' left</span>';}else{echo '<span style="color: #FF0000;">Out of Stock</span>';} ?></div><br>
                                <a href="" class="btn btn-light btn-outline-dark" value="<?php echo $row['idProduit'] ?>">Details</a>
                            </div>
                            
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        
        
        
        
        <div class="button py-5">
            <div class="col-md-12 text-center">
     <a href="product.php"><button type="button"  class="btn btn-light btn-lg p-4">SEE MORE</button></a>
    </div>
</div>


<footer class="py-3 text-center">
    <div class="container">
        <div class="row">
            <div class="col">Contact Us On<br>Noreply@gmail.com</div>
            <div class="col">Or on our social media<br> <i class="bi bi-facebook h3"></i><i class="bi bi-instagram h3 mx-2"></i></div>
            <div class="col"><p class="lead">Copyright &copy; 2022 Uman</p></div>
        </div>
        
        
    </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php include 'links.php'?>

</body>
</html> 