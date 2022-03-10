<?php include"links.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="1646826725874.webp" type="image/x-icon">
    <title>Uman | Products</title>
</head>
<body>
    <header>
        <style>
            .nav {
    background-color: rgb(86 81 82 / 77%);
}
.square {

height: 250px;
border: solid;
}
.grid{
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 100px;
  grid-auto-rows: minmax(50px, auto);
}

.fill {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden
}
.fill img {
    flex-shrink: 0;
    min-width: 70%;
    min-height: 70%;
}

        </style>

<?php
session_start();
include 'nav.php';?>

    <div class="banner-image img-fluid w-100 vh-100 d-flex justify-content-center 
    align-items-center" 
    >
     <div class="content-text-center">
        <h1 class="text-white"></h1>
     </div>
    </div>
     </header>
     
     <main>
         <div class="grid">
         <?php 
            include 'connection.php';
            $sql = 'SELECT * FROM Produit';
            $query = mysqli_query($con, $sql);  
            while($row = mysqli_fetch_array($query)) {
                $_SESSION['id'] = $row['idProduit'];
         ?>
       <div class="container">
           <div>
               <div class="  fill"> <img src="<?php echo $row['image'] ?>"></div>
               
               <p><h1 style="text-align: center;"><?php echo $row['libelle'] ;?></h1> <br>
               <h4 style="text-align: center;"><span><?php echo $row['prix'] . '€';?></span> &nbsp;|     &nbsp;   <?php if($row['stock'] > 10){echo '<span style="color:#4BB543;">In Stock</span>';}elseif($row['stock']< 10 && $row['stock'] > 0){echo '<span style="color:#FF7900;">only '.$row['stock'].' left</span>';}else{echo '<span style="color: #FF0000;">Out of Stock</span>';} ?></h4>
            </p>    
            <div class="col-md-12 text-center">
                <form action="Pd.php" method="post"><button type="submit" name="submit" value="<?php echo $_SESSION['id']; ?>" class="btn btn-outline-dark btn-lg p-4">SEE MORE</button></form>
            </div>
        </div>
       </div>
       <?php
            }

                mysqli_close($con);
                ?>
       
    </div>






      <?php include 'footer.php'; ?>

     </main>
</body>
</html>