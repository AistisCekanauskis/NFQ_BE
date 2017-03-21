<?php

// Used for PHP_EOL usage.
//header('Content-Type: text/plain', true);

// Autoloader was not used here
require_once 'magicMethods/constructAndDestruct.class.php';
require_once 'magicMethods/callAndCallStatic.class.php';
require_once 'magicMethods/getSetIssetUnset.class.php';
require_once 'magicMethods/sleepAndWakeUp.class.php';
require_once  'magicMethods/toString.class.php';
require_once 'magicMethods/invoke.class.php';
require_once 'magicMethods/setState.class.php';
require_once 'magicMethods/clone.class.php';
require_once 'magicMethods/debuginfo.class.php';

// __construct()
$object = new magicMethods\ConstructAndDestruct('TEST');
echo '$value = ' . $object->getValue() . PHP_EOL;
// __construct()
$object2 = new magicMethods\ConstructAndDestruct('TEST2');
echo '$value = ' . $object2->getValue() . PHP_EOL;

echo PHP_EOL;

$call = new magicMethods\CallAndCallStatic();
// __call()
$call->myProtected('TEST');
// __callstatic()
magicMethods\callAndCallStatic::myProtectedStatic('TEST2');

echo PHP_EOL;

$object3 = new magicMethods\GetSetIssetUnset;
// __set
$object3->a = 1;
// __get
echo $object3->a . PHP_EOL;
// __isset
var_dump(isset($object3->a));
// __unset
unset($object3->a);
var_dump(isset($object3->a));

echo PHP_EOL;

$object4 = new magicMethods\SleepAndWakeUp();
echo 'When using serialize() magic method __sleep() is engaged returning array containing'
    .' names of instance-variables to serialize.' . PHP_EOL;
// __sleep()
$serializedStr = serialize($object4);
var_dump($object4);
echo PHP_EOL;
var_dump($serializedStr);
echo PHP_EOL;
echo 'When using unserialize magic method __wakeup() '
    .'is engaged getting back some values, that other way would be lost.' . PHP_EOL;
// __wakeup();
var_dump(unserialize($serializedStr));

echo PHP_EOL;

// __tostring($param);
$object5 = new magicMethods\ToString('Hello World');
echo 'Object is treated as string : ' . $object5 .' . Also __tostring() must return String.' . PHP_EOL;

echo PHP_EOL;

function sparkles(Callable $func) {
    $func();
    return "fairy dust";
}
echo '__invoke makes your object callable - ';
// __invoke
$object6 = new magicMethods\Invoke();
echo sparkles($object6) . PHP_EOL;

echo PHP_EOL;

echo '__set_state() used with var_export().' .PHP_EOL;
$object7 = new magicMethods\SetState();
$object7->var1 = 5;
$object7->var2 = 'string';
// __set_state()
eval('$b = ' . var_export($object7, true) . ';');
var_dump($b);

echo PHP_EOL;

echo 'Makes copy with the same properties and assigned to new object.' . PHP_EOL;
$cloneable = new magicMethods\MyCloneable();
$cloneable->obj1 = new magicMethods\SubObject();
$cloneable->obj2 = new magicMethods\SubObject();
// __clone()
$clone = clone $cloneable;
print("Original Object:" . PHP_EOL);
print_r($cloneable);
print("Cloned Object:" . PHP_EOL);
print_r($clone);

echo PHP_EOL;

echo 'This method is called when using var_dump() is used on object to get properties.' . PHP_EOL;
$debugInfo = new magicMethods\DebugInfo(50);
// __debug()
var_dump($debugInfo);

echo PHP_EOL;