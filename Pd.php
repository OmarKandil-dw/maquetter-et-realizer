<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Pd.css">
    <title>Product details</title>
</head>
<body>
    <?php include 'nav.php'?>
    <header>
        <div>
</div>
  <!--Product-->
  <section class="py-5">
      <?php
            include 'connection.php';
            session_start();
            $prd = $_REQUEST['submit'];
            $sql = 'SELECT * FROM Produit WHERE idProduit ='.'"'.$prd.'"'; 
            $query = mysqli_query($con, $sql);  
            while($row = mysqli_fetch_array($query)) {
      ?>
        <div class="container">
            <div class="row">
                <div class="col square">
                    <img src="<?php echo $row['image'];?>" alt="" srcset="">
                </div>
                <div class="col"><h3 class="py-3"><?php echo $row['libelle'];?></h3><br>
                <h6 class="py-2"><?php echo $row['description'];?></h6><br>
                 <h3 class="py-3"><?php echo $row['prix'];?></h3><h3 class="text-danger"> <?php if($row['stock'] > 10){echo '<span style="color:#4BB543;">In Stock</span>';}elseif($row['stock']< 10 && $row['stock'] > 0){echo '<span style="color:#FF7900;">only '.$row['stock'].' left</span>';}else{echo '<span style="color: #FF0000;">Out of Stock</span>';} ?></h3><br>
                
            
            </div>
            </div>
        </div>
  </section>
  <!--footer-->
  <?php } include"footer.php";?>
</footer>

    
    














    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>