<?php

$categories = [
    1 => [
        'key' => 'club',
        'title' => 'Club'
    ],
    2 => [
        'key' => 'sport',
        'title' => 'Sport'
    ]
];

$categories_keys = [];
foreach ($categories as $id => $cat) {
    $categories_keys[$cat['key']] = $id;
}

return [
    'categories' => $categories,
    'categories_keys' => $categories_keys
];