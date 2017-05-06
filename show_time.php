<?php
require_once('persian_calendar.php');

$a= new persian_calendar;

$b= $a->g2p(2017,5,10);

var_dump($b);