<?php
return [

    'default' => env('FIELD_DEFAULT_CONTENT','default'),

    'contents' => [

        'default' => [

            'container' => [
                'active' => true,
                'class' => 'form-group'
            ],

            'label' => [
                'active' => true,
                'options' => [
                    'class' => 'col-md-2',
                    'style' => ''
                ],
            ],

            'field_div' => [
                'active' => true,
                'options' => [
                    'class' => 'col-md-9',
                    'style' => ''
                ],
            ],

            'field_error' => [
                'active' => true,
                'options' => [
                    'class' => 'help-block',
                    'style' => ''
                ],
            ],
        ],
    ],
];