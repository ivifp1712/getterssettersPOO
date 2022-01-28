<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio 8</title>
</head>
<body>
    <h2>POO en PHP</h2>
    <?php
        echo "<h3>Clases y objetos</h3>";
        require_once("./clases/clase1.php");
        $objeto = new ClasePropiedades(); // instanciar
        echo $objeto->nombre;
        require_once("./clases/Cliente.php");
        $cliente1 = new Cliente("indra",5,true);
        echo "<br>";
        echo $cliente1->getNombre();
        //modifica el nombre del cliente
        echo "<br>";
        $cliente1->setNombre("Repsol");
        //consulta nombre de nuevo para ver el cambio
        echo "<br>";
        echo $cliente1->getNombre();
        // Actividad: POO getters / setters
        echo "<br>";
        require_once("./clases/Productos.php");
        $producto1 = new Productos(100, "camisa", 5, 7.99);
        $producto1->setPrecio(7.95);
        echo $producto1->total();
        echo $producto1->info();
    ?>
</body>
</html>