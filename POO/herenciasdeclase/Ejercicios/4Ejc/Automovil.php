<?php

class vehiculo{

    private $modelo;
    private $marca;
    private $tipoCombustible;
}

public function __construc($modelo, $marca, $tipoCombustible){
    $this->modelo = $modelo;
    $this->marca = $marca;
    $this->tipoCombustible = $tipoCombustible;

}

public function setModelo(){
    return $this->modelo;
}

public function getModelo($modelo){
    return $this->modelo = $modelo;
}

public function setMarca(){
    return $this->marca;
}

public function getMarca($marca){
    return $this->marca = $marca;
}

public function setTipoCombustible(){
    return $this->tipoCombustible;
}

public function getTipoCombustible($tipoCombustible){
    return $this->tipoCombustible = $tipoCombustible;
}


public mostrarInf(){
    return(
        "<h2>Informacion General</h2>".
        "Modelo $this->modelo <br>".
        "Marca $this->marca <br>".
        "Tipo de combustible $this->tipoCombustible <br>";
    )
}
?>