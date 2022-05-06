<?php
require '../Models/Class/car.php';


$car1 = new Car('Audi', 'FR-3455', '14-10-2003', 'R8', 'Red', 0,'12' );
$car2 = new Car('BMW', 'BE-3455', '14-10-2006', 'X5', 'Blue', 100000,'12' );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Car Park" author="Ali K">
    <title>Car Park</title>

</head>
<body>


<table>
    <thead>
    <tr>
        <th>Brand</th>
        <th>Registration</th>
        <th>Issuance</th>
        <th>Model</th>
        <th>Color</th>
        <th>Kilometers</th>
        <th>Weight</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $car1 -> drive();
        $car1 -> display('https://www.cars-data.com/webp/thumbs/350px/audi/audi-r8-coupe_3738_1.webp');
        $car2 -> display('https://www.cars-data.com/webp/thumbs/350px/bmw/bmw-8-serie-gran-coupe_4562_1.webp');
        ?>
    </tbody>
</table>


</body>
</html>