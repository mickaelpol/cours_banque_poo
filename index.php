<?php

require_once('class/Operation.php');

$compte1 = new Operation(100, "super virement");
$compte2 = new Operation(-100, "super virement");
$compte3 = new operation(1, "encore un virement");
$compte4 = new operation(-1, "encore un virement");


echo($compte1->getMontant());
var_dump($compte2);
var_dump($compte3);
var_dump($compte4);
