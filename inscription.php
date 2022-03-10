<?php include"links.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>

</head>
<style>
  @media screen and (max-width: 980px) {
    .sectioncontent{
    display: grid;
    grid-template-columns: 2fr ;
    gap: 40px;
    padding: 20px 100px ;
}
nav{
  width: 100%;
}
}
@media screen and (max-width: 200px) {
  .sectioncontent{ display: grid;
    grid-template-columns: 1fr ;
    gap: 10px;
    padding: 10px 30px ;
  }
}
</style>

<body>
<?php include"nav.php";
?> 

<main style="position: absolute; top:120px;">
  <section class="sectioncontent"> 

    <div>
    <img src="./images/./istockphoto-1097381346-612x612.jpg" class="img-thumbnail" alt="..." style="height: 100%;">
    </div>
<div>
    <h1><i><u>Create Your Account</i></u></h1>

<form action="inscription.php" method="POST">
  <?php

    include "connection.php";


    if(isset($_POST['submit'])){
      //login info
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $adress = $_POST['adress'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $pwd = $_POST['pwd'];
      //client unique id
      $cli_id = uniqid ('MA', 'true');
      //validation
      $valid = 0;
      $_SESSION['state'] = '';
      //email existing validation
      $checkUserId = mysqli_query($con, "SELECT email from Client WHERE email = '$email'");
      if (mysqli_num_rows($checkUserId) > 0) {
      echo  "<p style=\"color: red;\">this email is already used</p>";
      $valid++;
      }
      //phone number existing validation
      $checkPhone = mysqli_query($con, "SELECT telephone from Client WHERE telephone = '$phone'");
      if (mysqli_num_rows($checkPhone) > 0) {
      echo  "<p style=\"color: red;\">this phone number is already used</p>";
      $valid++;
      }

      if($valid == 0){
        //login info >> database >> client.tb
        $sql = "INSERT INTO Client (idClient, nom, prenom, adresse, telephone, email, pass) VALUES ('$cli_id', '$fname', '$lname', '$adress', '$phone', '$email', '$pwd')";
        $query = mysqli_query($con, $sql);
        header("Location: log-in.php"); 
        exit(); 
        // connection closed.
        mysqli_close($con);
      }
    }
    ?>
  <div class="form-group">
    <label for="formGroupExampleInput">First Name*</label>
    <input name="fname" type="text" class="form-control" id="formGroupExampleInput" placeholder="First name ">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput"> Last name*</label>
    <input name="lname" type="text" class="form-control" id="formGroupExampleInput" placeholder="Last name ">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput"> Adresse*</label>
    <input name="adress" type="text" class="form-control" id="formGroupExampleInput" placeholder="Adresse">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Phone*</label>
    <input name="phone" type="float" class="form-control" id="formGroupExampleInput" placeholder="0605040302">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput">Email*</label>
    <input name="email" type="text" class="form-control" id="formGroupExampleInput" placeholder="example@gmail.com">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Password*</label>
    <input name="pwd" type="password" class="form-control" id="formGroupExampleInput2" placeholder="*****">
  </div>
  
  <div class="d-flex justify-content-center">
  <button name="submit" type="submit" class="button">Sign-up</button>
  </div>
  <p style="text-align: center;">already have an account? <a href="./log-in.php" style="color: blue;">Sign in</a></p>
</form>
</div>
</section>


<?php include"footer.php"?>
</main>
    
</body>
</html>