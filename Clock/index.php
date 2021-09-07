<?php
require_once('Clock.php');

use Guilde\Clock;

$clock = new Clock(23, 59, 59);
$clock->print();
$clock->increment();
$clock->print();
$clock->setTime(24, 12, 59);
$clock->print();

$clock->setTime(23, -12, 59);
$clock->print();

$clock->setTime(23, 12, 600);
$clock->print();







