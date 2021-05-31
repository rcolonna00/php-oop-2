<?php 
    
    // require_once __DIR__ . '/Tecnologia.php';
    
    // $tecnologia = new Tecnologia ('Computer', 'Samsung', 'AGH157');
    // var_dump($tecnologia->getInfoData());

    require_once __DIR__ . '/Tablet.php';   
    require_once __DIR__ . '/Computer.php';   
    require_once __DIR__ . '/Smartphone.php';   

    $galaxyA70 = new Tablet ('Tablet', 'Samsung', 'GalaxyA70');
    var_dump($galaxyA70);

    $ComputerAcerXP456 = new Computer ('Computer', 'Acer', 'XP456');
    var_dump($ComputerAcerXP456);

    $GalaxyP90 = new Smartphone ('Smartphone', 'Samsung', 'GalaxyP90');
    var_dump($GalaxyP90)
?>