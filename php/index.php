<?php

    echo "PHP page started";
    $json = file_get_contents('http://product-services');
    $obj = json_decode($json);
    echo "<pre/>";
    print_r($obj)
   
?>

