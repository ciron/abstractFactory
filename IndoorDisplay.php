<?php

namespace Creational\AbstractFactory;


class IndoorDisplay implements IndoorProduct {

    public function summerseason  (): void {
        echo "cotton , 60 grams</br>" . PHP_EOL;
    }
    
    public function summerfabric  (): void {
        echo "Summer , 60 grams</br>" . PHP_EOL;
    }

    public function winterseason(): void {
        echo "wool, 95 grams </br>" . PHP_EOL;
    }

    public function winterfabric(): void {
        echo "winter, 95 grams </br>" . PHP_EOL;
    }
    public function springseason(): void {
        echo "silk,  75 grams </br>" . PHP_EOL;
    }
    public function springfabric(): void {
        echo "spring,  75 grams </br>" . PHP_EOL;
    }
}

?>
 
