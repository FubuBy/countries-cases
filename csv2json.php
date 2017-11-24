<?php
$csv = array_map('str_getcsv', file('countries_cases.csv'));

$result = [];

foreach ($csv as $k => $item) {
    if (! $k) {
        continue;
    }

    $result[$item[0]] = [
        'im' => $item[1],
        'ro' => $item[2],
        'da' => $item[3],
        'vi' => $item[4],
        'tv' => $item[5],
        'pr' => $item[6],
    ];
}

file_put_contents('countries_cases.json', json_encode($result, JSON_UNESCAPED_UNICODE));
