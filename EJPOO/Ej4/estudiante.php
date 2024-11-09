<?php

 class Estudiante{

    private $nombre;
    private $notas;

    public function __construct($nombre, $notas){

        $this->nombre=$nombre;
        $this->notas=$notas;

    }


    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        return $this->nombre=$nombre;
    }

    public function getNota(){
        return $this->notas;
    }

    public function setNota($notas){
        return $this->notas=$notas;
    }

    public function promedioE(){

        $cadenaNotas = array_map('intval', explode(',', $this->notas));

        //print_r($cadenaNotas)."<br>";   //imprimir el array

        $cont=0;
        $acum=0;

        foreach($cadenaNotas as $k){
            $cont++;
            $acum += $k;
        }

        $promedio= $acum/$cont;

        return
            ( "El Promedio del estudiante ". $this->nombre. "<br>".
            "es: ".$promedio
            );

    }

    public function inf(){
        return(
            "nombre es: $this->nombre <br>"
            //"notas son: $this->notas"
        );
    }

}

?>