<?php
$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . "/src");

return PhpCsFixer\Config::create()
    ->setRules(
        [
            '@PSR2'                               => true,
            'array_syntax'                        => [
                'syntax' => 'short'
            ],
            'class_keyword_remove'                => false,
            'concat_space'                        => [
                'spacing' => 'one'
            ],
            'combine_consecutive_unsets'          => true,
            'general_phpdoc_annotation_remove'    => [
                'annotations' => ['@author'],
            ],
            'linebreak_after_opening_tag'         => true,
            'no_short_echo_tag'                   => true,
            'no_useless_return'                   => true,
            'not_operator_with_space'             => false,
            'not_operator_with_successor_space'   => false,
            'ordered_imports'                     => true,
            'phpdoc_add_missing_param_annotation' => true,
            'protected_to_private'                => true,
            'semicolon_after_instruction'         => true,
        ]
    )
    ->setFinder($finder);
