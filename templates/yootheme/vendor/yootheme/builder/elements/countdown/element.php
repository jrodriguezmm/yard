<?php

return [

    'updates' => [

        '1.22.0-beta.0.1' => function ($node, array $params) {

            if (isset($node->props['gutter'])) {
                $node->props['grid_column_gap'] = $node->props['gutter'];
                $node->props['grid_row_gap'] = $node->props['gutter'];
                unset($node->props['gutter']);
            }

        },

    ],

];
