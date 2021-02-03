<?php

namespace Creational\AbstractFactory;


class IndoorIot implements IndoorProduct {

    public function wheat (): void {
        echo "wheat flour, 27 tk </br>" . PHP_EOL;
    }

    public function Flour (): void {
        echo "Flour, 45 Tk</br>" . PHP_EOL;
    }
    public function semolina(): void {
        echo "semolina, 60 Tk</br>" . PHP_EOL;
    }

}