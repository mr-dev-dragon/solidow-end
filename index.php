 
<?php include "src/CPU.php" ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php include "src/incloud.php" ?>
 </head>
 <body>
    <header >
    <?php include "src/navbar.php" ?>
    </header>
    <main class="text-center  bg-light text-muted container">
    <?php include "src/main.php" ?>
    </main>
    <article class="text-center  bg-light text-muted container">
      <button   class="print-button" onclick="window.print()" >
        <span class="print-icon"></span>
      </button>  
     </article> 
    <footer class="text-center text-lg-start bg-light text-muted container">
    <?php include "src/footer.php"?>
    </footer>
 </body>
 </html>
