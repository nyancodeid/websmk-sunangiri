<?php
session_start();

require_once "../functions/jpgraph_antispam.php";
$random = new AntiSpam();
$_SESSION['kodeRandom'] = strtoupper($random -> Rand(5));

?>