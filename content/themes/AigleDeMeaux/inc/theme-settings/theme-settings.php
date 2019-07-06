<?php
/// CPT Actualité ///
require('actualite-cpt.php');
require('result-cpt.php');

$actualite_cpt = new Actualite_cpt();
$actualite_cpt->activation();

$result_cpt = new Result_cpt();
$result_cpt->activation();