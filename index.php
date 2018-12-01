<?php
$data = file(__DIR__ . '/input', FILE_SKIP_EMPTY_LINES);
// the first puzzle
echo array_reduce(file(__DIR__ . '/input', FILE_SKIP_EMPTY_LINES), function ($a, $b) {
	return $a + intval($b);
}, 0) . PHP_EOL;
// the second puzzle
$frequencies = [];
$currentFrequency = 0;
while (true) {
	foreach ($data as $change) {
		$currentFrequency += intval($change);
		if (in_array($currentFrequency, $frequencies)) {
			echo $currentFrequency;
			break 2;
		}
		array_push($frequencies, $currentFrequency);
	}
}