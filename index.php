<?php
echo array_reduce(file(__DIR__ . '/input', FILE_SKIP_EMPTY_LINES), function ($a, $b) {
	return $a + intval($b);
}, 0) . PHP_EOL;