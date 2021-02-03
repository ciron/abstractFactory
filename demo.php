<?php

namespace Creational\AbstractFactory;

require(__DIR__ . '/../../vendor/autoload.php');

$displayFactory = new DisplayFactory();
$indoorDisplay = $displayFactory->makeIndoor();
$outdoorDisplay = $displayFactory->makeOutdoor();

if(isset($_POST['submit'])){
    $a =$_POST['type'];
    
if($a=='summer'){
    $indoorDisplay->summerseason();
}
elseif($a=='cotton'){
    $indoorDisplay->summerfabric();
}elseif($a=='winter'){
    $indoorDisplay->winterseason(); 
}elseif($a=='wool'){
    $indoorDisplay->winterfabric(); 
}
elseif($a=='spring'){
    $indoorDisplay->springseason(); 
}
elseif($a=='silk'){
    $indoorDisplay->springfabric(); 
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="type">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>