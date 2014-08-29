<?php

require('../../class.dumper.php');

class A
{
    public $b;
    public $c;
}

$x = new A();
$x->b = new A();
$x->b->b = new A();
$x->b->c = new A();
$x->b->c->b = new A();

Dumper::dump($x);

