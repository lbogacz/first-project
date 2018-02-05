<!DOCTYPE html>
<html lang="pl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta name="keywords" content="skateboard, hoverboard">
   <meta name="description" content="Najlepsza strona i jedyna w Polsce z eletrycznymi skateboard">
   <meta name="author" content="Lukasz Bogacz">
   <title>Dynawit</title>
   <link rel="stylesheet" href="css/main.css">
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
   <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
   <script src="js/script.js"></script>
   <script src="js/koowhel.js"></script>
   <script src="js/scooter.js"></script>
   <script>
      window.addEventListener("load", wspolna)

   </script>
</head>

<body>
   <header class="page-header">
      <nav class="topnav" id="myTopnav">
         <a href="index.html">Home</a>
         <a href="news.php">News</a>
         <a href="product.php" class="active">Produkty</a>
         <a href="contact.php">Kontakt</a>
         <a href="about.php">O Dynawit.pl</a>
         <a href="javascript:void(0);" class="icon" onclick="myFunction()"><span class="hamburger">&#9776;</span></a>
      </nav>
      <figure>
         <img src="img/hoverboard-2003088_1920.jpg" alt="hoverboard">
      </figure>
   </header>

   <section class="page-section-content">
      <?php include('koowhel.php')?>
   </section>
   <section class="page-section-content">
      <?php include('scooter.php')?>
   </section>
   <footer class=" page-footer ">
      <?php include('footer.php') ?>
   </footer>

</body>

</html>
