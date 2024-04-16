<?php

return [
    //PSRs
    '@PHP82Migration'=>true,
    '@PhpCsFixer' => true,
    '@PSR12' => true,

    //Overrides
    'array_syntax' => ['syntax' => 'short'],
    'indentation_type' => true,
    'concat_space' => [
        'spacing' => 'one',
    ],
    'multiline_whitespace_before_semicolons'=> ['strategy' => 'no_multi_line'],
    'no_unused_imports' => true,
    'ordered_imports' => ['sort_algorithm' => 'alpha'],
    'global_namespace_import' => [
        'import_classes' => true,
        'import_constants' => true,
        'import_functions' => null
    ],

    'no_null_property_initialization' => false,
    'no_superfluous_phpdoc_tags' => false,
    'phpdoc_align' => false,
    'phpdoc_no_package' => false,
    'phpdoc_order_by_value' => false,
    'phpdoc_separation' => false,
    'phpdoc_single_line_var_spacing' => false,
    'phpdoc_summary' => false,
    'phpdoc_var_annotation_correct_order' => false,
    'php_unit_internal_class' => ['types' => ['normal', 'final', 'abstract']],
    'php_unit_test_class_requires_covers' => false,
    'single_line_comment_style' => false,
    'single_line_empty_body' => false,
    'yoda_style' => [
        'equal' => false,
        'identical' => null,
        'less_and_greater' => null,
    ],
];
