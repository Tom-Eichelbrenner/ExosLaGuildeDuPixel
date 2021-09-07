<?php
require_once('Clock.php');
use Guilde\Clock;

$clock = new Clock(2, 59, 59);
$clock->print();
$clock->increment();
$clock->print();




