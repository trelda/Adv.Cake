<?php
require_once __DIR__ . '/revertText.php';

$reverObject = new RevertText();
echo $reverObject->makeRevert("Привет! Давно не виделись.");