<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php 
    include_once "assets/templates/NmHeaders.php";
    include_once "assets/templates/header.php";
    include_once "assets/templates/navbar.php";
    ?>
    
</head>
<body>

  <div class="container">
    <div class="table-responsive">
      <h3 align="center">Inline Table Insert Update Delete in PHP using jsGrid</h3><br />
      <div id="grid_table"></div>
    </div>
  </div>
  <form action="../index.php" method="post"></form>
  <?php 
    include_once "assets/templates/footer.php";
    ?>
</body>
</html>