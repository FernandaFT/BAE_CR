<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/BAE_CR/grav/user/plugins/tinymce-editor/blueprints/pages/default.yaml',
    'modified' => 1510781021,
    'data' => [
        'title' => 'PLUGIN_ADMIN.DEFAULT',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'content' => [
                                    'type' => 'tinymce',
                                    'validate' => [
                                        'type' => 'textarea'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
