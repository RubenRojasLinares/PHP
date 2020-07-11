<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>-logotipo</h1>
    </header>
    <?php
        include "MVC/View/Modules/nav.php";
        
    ?>
    
    <section>
    <?php
         $mvc= new MvcController();
         $mvc->enlacesPaginasController();
    ?>
    </section>
</body>
</html>