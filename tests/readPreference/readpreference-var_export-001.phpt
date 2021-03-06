--TEST--
MongoDB\Driver\ReadPreference: var_export()
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$tests = [
    new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_PRIMARY),
    new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_PRIMARY_PREFERRED),
    new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_SECONDARY),
    new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_SECONDARY_PREFERRED),
    new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_NEAREST),
    new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_PRIMARY, []),
    new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_SECONDARY, [['dc' => 'ny']]),
    new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_SECONDARY, [['dc' => 'ny'], ['dc' => 'sf', 'use' => 'reporting'], []]),
    new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_SECONDARY, null, ['maxStalenessSeconds' => 1000]),
];

foreach ($tests as $test) {
    echo var_export($test, true), "\n";
}

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
MongoDB\Driver\ReadPreference::__set_state(array(
   'mode' => 'primary',
))
MongoDB\Driver\ReadPreference::__set_state(array(
   'mode' => 'primaryPreferred',
))
MongoDB\Driver\ReadPreference::__set_state(array(
   'mode' => 'secondary',
))
MongoDB\Driver\ReadPreference::__set_state(array(
   'mode' => 'secondaryPreferred',
))
MongoDB\Driver\ReadPreference::__set_state(array(
   'mode' => 'nearest',
))
MongoDB\Driver\ReadPreference::__set_state(array(
   'mode' => 'primary',
))
MongoDB\Driver\ReadPreference::__set_state(array(
   'mode' => 'secondary',
   'tags' => 
  array (
    0 => 
    stdClass::__set_state(array(
       'dc' => 'ny',
    )),
  ),
))
MongoDB\Driver\ReadPreference::__set_state(array(
   'mode' => 'secondary',
   'tags' => 
  array (
    0 => 
    stdClass::__set_state(array(
       'dc' => 'ny',
    )),
    1 => 
    stdClass::__set_state(array(
       'dc' => 'sf',
       'use' => 'reporting',
    )),
    2 => 
    stdClass::__set_state(array(
    )),
  ),
))
MongoDB\Driver\ReadPreference::__set_state(array(
   'mode' => 'secondary',
   'maxStalenessSeconds' => 1000,
))
===DONE===
