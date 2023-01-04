<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title><?php echo $title?></title>
      <link href="../public/css/style.css" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
      <link rel="icon" type="image/x-icon" href="../public/images/favicon.ico">
   </head>

   <body>
      <?php include('header.php');?>
      <section class="page-content">
         <?php echo $content;?>
      </section>
      <?php include('footer.php');?>
   </body>
   <script src="../public/js/script.js"></script>
</html>