<?php
$salario_do_magrao = 2900;
$comissao_do_magrao = 4900;

$salario_total_do_magrao = $salario_do_magrao + $comissao_do_magrao;

if($salario_total_do_magrao <= 2000){
    echo"bah magrao ta feia coisa";
}elseif ($salario_total_do_magrao > 2000 && $salario_total_do_magrao < 4500){
    echo"Opa magrão tamo indo";
}else{
    echo"caralho magrao $salario_total_do_magrao tamo bem";
}


?>