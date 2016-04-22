<?php

require_once 'vendor/autoload.php';

$json = file_get_contents('members.json');
$parser = new \Seld\JsonLint\JsonParser();

try {
    $parser->parse($json);
} catch (\Seld\JsonLint\ParsingException $e) {
    echo $e->getMessage();
    exit(1);
}