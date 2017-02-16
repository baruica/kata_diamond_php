<?php
declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

if (2 !== $argc) {
    die('usage: php print-diamond.php D'.PHP_EOL);
}

$kata = new Kata();

echo $kata->print_diamond($argv[1]).PHP_EOL;
