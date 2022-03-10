
    <form action="test.php" method="post" enctype="multipart/form-data" >
    <?php  
include 'connection.php';
// //getting inputs values
// if(isset($_POST['submit'])){
// $label = $_POST['label'];
// $description = $_POST['description'];
// $price = $_POST['price'];
// $stock = $_POST['stock'];
// $image = $_POST['image'];
// $uploaddir = 'product\ details/images/';
// $file = $uploaddir."image ".$image.".png";
// $prd_id = uniqid('PD', 'true');



// // form input >> database
// $sql = "INSERT INTO Produit (idProduit, libelle, description, prix, stock,  image) VALUES ('$prd_id', '$label', '$description', '$price', '$stock', '$file')";

// $rs = mysqli_query($con, $sql);
    
//     if($rs)
//     {
//         echo "<script>console.log('Successfully saved');</script>";
//     }
    
// //connection closed.
// mysqli_close($con);
// }

// ?>

<!-- // <label >label</label>
// <input name="label" class="description form-control" type="text" placeholder="Enter the First Name" value="" required>
//     <label >desc</label>
//     <input name="description"  class="label form-control" type="text" placeholder="Enter the Last Name" value="" required>
//     <label >price</label>
//     <input name="price" class="price form-control" type="text" value="" required> 
//     <label >stock</label>
//     <input name="stock" class="price form-control" type="text" value="" required> 
//     <label >image</label>
//     <input name="image" class="price form-control" type="text" value="" required> 
//     <input type="submit" name="submit" class="btn btn-dark" value="submit"> 
// </form> -->



<?php
session_start();
    echo $_SESSION['state'];
?>


    