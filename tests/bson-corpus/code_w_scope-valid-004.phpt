--TEST--
Javascript Code with Scope: Non-empty code string and non-empty scope
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('210000000F6100190000000500000061626364000C000000107800010000000000');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toJSON($bson)), "\n";

$json = '{"a" : {"$code" : "abcd", "$scope" : {"x" : 1}}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toJSON(fromJSON($json))), "\n";

// extJSON to Canonical BSON
echo bin2hex(fromJSON($json)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
210000000f6100190000000500000061626364000c000000107800010000000000
{"a":{"$code":"abcd","$scope":{"x":1}}}
{"a":{"$code":"abcd","$scope":{"x":1}}}
210000000f6100190000000500000061626364000c000000107800010000000000
===DONE===