<?php

require_once 'cliente.php';
require_once 'persona.php';
include_once 'empleado.php';
include_once 'nieto.php';

$datCliente = new cliente("Albert", 123, 1.9, 456 );

echo $datCliente->mostrar().'<br>'."El codigo del cliente es: ".$datCliente->getCodClient();


$datNieto = new nieto("Andrea", 124, 1.8, 455, 789);

echo $datNieto->mostrar().'<br>'."El codigo del nieto es: ".$datNieto->getCodNieto();


$datEmpleado = new empleado("juan", 741, 1.7, 852);

echo $datEmpleado->mostrar();


?>