<?PHP

include("../../class.dumper.php");

$fp = fopen(__FILE__,"r");

$a = array(
	'first'           => $fp,
	'last'            => new bar,
	'null_var'        => NULL,
	'float'           => pi(),
	'bool'            => true,
	' leading_space'  => 6*8,
	'trailing_space ' => 'grapes',
	'middle space'    => 'Mt. Rushmore',
	'phones'          => array(5036541278,8714077831,'x253'),
	'long_str'        => "This is a really long string full of a\n bunch of crap that should eventually wrap. There once was a man from New Mexico...",
	'empty_arr'       => array(),
	'func_str'        => 'preg_replace',
	'address'         => array('street' => '123 Fake Street', 'city' => 'Portland', 'state' => 'Maine'),
	'unixtime'        => 1231241234,
	'microtime'       => microtime(1),
);

if (isset($_GET['short'])) {
	Dumper::$expand_all = 1;
	kd($a);
}

print "<h2>Dumper capture</h2>\n";
$str = k(array('foo' => 'bar'),KRUMO_CAPTURE);
print $str;

print "<h2>Dumper</h2>\n";
k(array('likes','kittens','and','dogs'));

print "<h2>Dumper passing multiple args</h2>\n";
k('likes','kittens','and','dogs');

print "<h2>Dumper + die()</h2>\n";
kd($a);
print "If you see this something is broken";

$k = new Dumper;

class bar
{
    public $b = 'bb';
    public $a = 'aa';

    function foo()
    {
        return 'bar';
    }
}

