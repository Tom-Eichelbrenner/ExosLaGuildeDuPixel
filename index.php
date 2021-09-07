<?php
require_once('Clock.php');
use Guilde\Clock;

$clock = new Clock(23, 59, 61);
$clock->print();
$clock->setTime(23, 59, 58);
$clock->print();
$clock->increment();
$clock->print();
$clock->increment();
$clock->print();



