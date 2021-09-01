<?php

class mobil{
    function properti_mobil(){
        //object
        echo " kaca , spion , ban , merk ";
    }
    function maju(){
        echo " mobil maju ";
    }
    function mundur(){
        echo " mobil mundur ";
    }
}

$jalan = new mobil();
echo $jalan->mundur();

?>