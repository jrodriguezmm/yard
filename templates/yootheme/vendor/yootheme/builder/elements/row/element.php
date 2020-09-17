<?php

return [

    'transforms' => [

        'prerender' => function ($node, array $params) {

            // Sets `$node->widths` property on column child nodes
            if (!empty($node->props['layout'])) {
                foreach (explode('|', $node->props['layout']) as $widths) {
                    foreach (explode(',', $widths) as $index => $width) {
                        if (isset($node->children[$index])) {
                            $node->children[$index]->widths[] = $width;
                        }
                    }
                }
            }

        },

    ],

    'updates' => [

        '1.22.0-beta.0.1' => function ($node, array $params) {

            if (isset($node->props['gutter'])) {
                $node->props['column_gap'] = $node->props['gutter'];
                $node->props['row_gap'] = $node->props['gutter'];
                unset($node->props['gutter']);
            }

            if (empty($node->props['layout'])) {
                return;
            }

            switch ($node->props['layout']) {
                case '2-3,':
                    $node->props['layout'] = '2-3,1-3';
                    break;
                case ',2-3':
                    $node->props['layout'] = '1-3,2-3';
                    break;
                case '3-4,':
                    $node->props['layout'] = '3-4,1-4';
                    break;
                case ',3-4':
                    $node->props['layout'] = '1-4,3-4';
                    break;
                case '1-2,,|1-1,1-2,1-2':
                    $node->props['layout'] = '1-2,1-4,1-4|1-1,1-2,1-2';
                    break;
                case ',,1-2|1-2,1-2,1-1':
                    $node->props['layout'] = '1-4,1-4,1-2|1-2,1-2,1-1';
                    break;
                case ',1-2,':
                case ',1-2,|1-2,1-1,1-2':
                    $node->props['layout'] = '1-4,1-2,1-4';
                    break;
                case ',,,|1-2,1-2,1-2,1-2':
                    $node->props['layout'] = '1-4,1-4,1-4,1-4|1-2,1-2,1-2,1-2';
                    break;
            }

        },

    ],

];
