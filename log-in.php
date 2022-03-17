<?php include"links.php"?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="1646826725874.webp" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>Uman | Log In</title>
    <style>
    
      input[type=text],[type=passowrd] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    form{
      padding-right: 150px;
    }
    
    </style>
</head>
<body>
    <?php
    session_start();
    $_SESSION['state']='';
    include"nav.php"?>
<main>
  
    <section id="inscr">


    <div style="text-align: center;">
    <img src="./images/./image 20.png"alt="..." style="width:15%; margin-top:60px;"  > <br><br><br>
</div>

 <form class="d-flex flex-column align-items-center justify-content-center" action="log-in.php" method="POST">
    <?php
    include 'connection.php';
    if(isset($_POST['submit'])){
      $email = htmlspecialchars($_POST['email']);
      $pwd =  htmlspecialchars($_POST['pwd']);
      //validation
      $valid = 0;
          //email validation
          $checkEmail = mysqli_query($con, "SELECT email from Client WHERE email = '$email'");
          if (mysqli_num_rows($checkEmail) == 0) {
            $valid++;
          }
          //password validation
          $checkPwd = mysqli_query($con, "SELECT pass from Client WHERE pass = '$pwd'");
          if (mysqli_num_rows($checkPwd) == 0) {
            $valid++;
          }

          if($valid != 0){
            echo  "<p style=\"color: red;\">wrong email or password</p>";
          }else{
            $_SESSION['state']=$email.":logged in";
            $_SESSION['email']=$email;
            $_SESSION['count']=0;
            header("Location: index.php"); 
            exit(); 
          }
        }
    ?>
  
<div class="form-group">
    <label for="formGroupExampleInput">Email*</label> <br>   
    <input  class="form-control " name="email" type="text"  placeholder="example@gmail.com" style="width: 180%;">
</div>
    <div class="form-group">
    <label for="formGroupExampleInput2">Password*</label> <br>
    <input class="form-control" name="pwd" type="password" placeholder="******" style="width: 180%;"> 
  </div>

</section>
<section>


<div class="d-flex justify-content-center">
  <button  name="submit" type="submit" class="button">Sign-up</button> 
</div>
  <br>
<div style="line-height: 2;">
 
  <p style="text-align: center;">new user? <a href="./inscription.php" style="color: blue;">Signup</a></p>
</div>
</form>
</section>
<?php include"footer.php"?>
</main>

</body>
</html>