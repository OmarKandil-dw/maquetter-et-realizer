
<nav class="nav navbar fixed-top navbar-expand-lg navbar-dark p-md-1">
        <div class="container">
            <a href="#" class="navbar-brand mb-3"><img src="logo.png" width="200"></a>
            <button
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse"
            data-bs-target="#menu">
            <span class="navbar-toggler-icon text-black"> </span>
        
        </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto text-white p-4 ">
                        <li class="nav-item px-4 h4"><a href="index.php" class="nav-link text-white">Home</a></li>
                        <li class="nav-item px-4 h4"><a href="product.php" class="nav-link text-white">Products</a></li>
                        <li class="nav-item px-4 h4"><a href="index.php#aboutus" class="nav-link text-white">About US</a></li>
                        <li class="nav-item px-4 h4"><a href="Cart.php" class="nav-link text-white p-0"><img src="bag.png" width="50"></a></li>
                        <li class="nav-item px-4 h4">
            </div>
            <div class="dropdown">
  <button class="btn btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <div class="bi bi-person-circle h2 text-white"></div>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <form action="" method="POST">
          <?php 
            if(isset($_POST['signout'])){
                session_start();
                session_destroy();
                header("Location: log-in.php"); 
                exit(); 
            }
          ?>
          <span>Logged in as: <br> <?php echo $_SESSION['email'];?> </span>
          <button class="dropdown-item btn btn-dark" type="submit" name="signout">Sign out</button>
        </form>
  </div>
</div>

                        </li>
                </ul>
            </div>
        </div>
    </nav>
    <style>
        .btn btn-secondary{
            background-color: rgba(0, 0, 0, 0.2);
        }
    </style>