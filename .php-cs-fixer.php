<?php

return [
    '@PHP80Migration'=>true,
    '@PhpCsFixer' => true,
    '@PSR12' => true,
    'array_syntax' => ['syntax' => 'short'],
    'indentation_type' => true,
    'concat_space' => [
        'spacing' => 'one',
    ],
    'multiline_whitespace_before_semicolons'=> ['strategy' => 'no_multi_line'],
    'no_unused_imports' => true,
    'ordered_imports' => ['sort_algorithm' => 'alpha'],
];