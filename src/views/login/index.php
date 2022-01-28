<!DOCTYPE html>
<html lang="en">
<head>
<?PHP
 include_once "assets/templates/NmHeaders.php";
 include_once "assets/templates/header.php";
?>
 <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/login.css">
 <title>Login</title>
</head>

<body>

  <?php
  // that flag is to implement an alert message when you make a worng log in .
    if(isset($_GET["flag"])){
      echo "<div class='alert alert-info' id='logoutLabel' role='alert'>Not a valid user or password!</div>";
    }

  ?>
  <div id="container-login">
  <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center" id="template-bg-3">
  
    <div class="card mb-6 bg-dark bg-gradient text-white">
      <div class="card-header text-center">
      <a class="logo" href="#">
      <img src="https://i2.wp.com/assemblerschool.com/wp-content/uploads/2020/11/LOGO-ORG.png?fit=479%2C131" alt="logo" height="150">
    </a>
      </div>
      <div class="card-body mt-3">
        <form name="login" action="<?php echo BASE_URL ?>login/loginUser" method="POST">
          <div class="input-group form-group mt-3">
            <input type="text" class="form-control text-center p-3" placeholder="Email address" name="email" value="admin@AssemblerSchool.com">
          </div>
          <div class="input-group form-group mt-3">
            <input type="password" class="form-control text-center p-3" placeholder="Password" name="password" value="123456">
          </div>
          
          <div class="text-center">
            <input type="submit" value="Sign in" class="btn btn-primary mt-3 w-100 p-2" name="login-btn">
          </div>
          <footer class="py-3 my-4 border-top">
  <div class="footer-block">
    <span class="text-center text-muted">© Assambler School Of Software Engineering 2020</span>
  </div>
</footer>
        </form>
        <?php if (!empty($loginResult)) { ?>
          <div class="text-danger"><?php echo $loginResult; ?></div>
        <?php } ?>
      </div>
    </div>
  </div>
  </div>
</body>
</html>
