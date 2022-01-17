<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes i Objectes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    require_once('./Classes.php');

    $coche1 = new Coches();
    $coche1->marca = "BMW";
    $coche1->color = "Rojo";
    
    $coche2 = new Coches();
    $coche2->marca = "Fiat";
    $coche2->color = "Blanco";

    $coche3 = new Coches();
    $coche3->marca = "Mercedes";
    $coche3->color = "Gris";

    $coches = array($coche1, $coche2, $coche3);
    //require_once('./Classes.php');
    //$coches = new Coches("BMW", "Rojo");
    //$coches .= new Coches("Fiat", "Verde");
    //$coches .= new Coches("Mercedes", "Gris");

    //$coches->setMarca("BMW");
    //$coches->setColor("Rojo);

    //echo $coches
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Marca</th>
                <th scope="col">Color</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo $coche1->marca ?></th>
                <th><?php echo $coche1->color ?></th>
            </tr>
            <tr>
                <th><?php echo $coche2->marca ?></th>
                <th><?php echo $coche2->color ?></th>
            </tr>
            <tr>
                <th><?php echo $coche3->marca ?></th>
                <th><?php echo $coche3->color ?></th>
            </tr>
        </tbody>
    </table>

    
</body>
</html>
