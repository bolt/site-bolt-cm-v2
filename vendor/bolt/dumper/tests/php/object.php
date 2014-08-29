<?php

require('../../class.dumper.php');

$obj = (object) array('a' => array('b' => array('c' => array('d' => array('e' => null)))));

Dumper::dump($obj);
