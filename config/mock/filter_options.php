<?php

$fiter = [
    'filter_title' => [
        [
            'title' => 'Ccылка 1',
            'svg' => 'car',
            'data' => '1'
        ],
        [
            'title' => 'Ccылка 2',
            'svg' => 'truk',
            'data' => '2'
        ],
        [
            'title' => 'Ccылка 3',
            'svg' => 'wheels',
            'data' => '3'
        ],
        [
            'title' => 'Ccылка 4',
            'svg' => 'oil',
            'data' => '4'
        ],
        [
            'title' => 'Ccылка 5',
            'svg' => 'acum',
            'data' => '5'
        ],
    ],
    'filter_form' => [
        [   
            'data' => '1',
            'group' => 'b',
            'tabs' => [
                [   
                    'data' => '1',
                    'titles' => 'Tab 1',
                    'selector_items' => ['1','2','3','4','5','6','7'],
                ],
                [   
                    'data' => '2',
                    'titles' => 'Tab 2',
                    'selector_items' => ['1','2','3','4','6'],
                ],
            ],
        ],
        [
            'data' => '2',
            'group' => 'c',
            'tabs' => [
                [   
                    'data' => '1',
                    'titles' => 'Tab 1',
                    'selector_items' => ['1','2']
                ],
                [   
                    'data' => '2',
                    'titles' => 'Tab 2',
                    'selector_items' => ['1']
                ],
            ],
        ],
    ]
    
];

return $fiter;