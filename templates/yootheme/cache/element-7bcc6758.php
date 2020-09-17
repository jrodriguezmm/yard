<?php // @file /datos/hypertext/plantilla.uniandes.edu.co/Yard/templates/yootheme/vendor/yootheme/builder/elements/row/element.json

return [
  '@import' => $this->applyFilter('./element.php', ['path']), 
  'name' => 'row', 
  'title' => 'Row', 
  'container' => true, 
  'width' => 500, 
  'defaults' => [
    'layout' => '1-1', 
    'breakpoint' => 'm', 
    'fixed_width' => 'large'
  ], 
  'templates' => [
    'render' => $this->applyFilter('./templates/template.php', ['path']), 
    'content' => $this->applyFilter('./templates/content.php', ['path'])
  ], 
  'fields' => [
    'layout' => [
      'label' => 'Layout', 
      'type' => 'select-img', 
      'default' => '1-1', 
      'title' => 'Select a grid layout', 
      'options' => [
        '1-1' => [
          'label' => 'Whole', 
          'src' => $this->applyFilter('images/whole.svg', ['url'])
        ], 
        ',' => [
          'label' => 'Halves', 
          'src' => $this->applyFilter('images/halves.svg', ['url'])
        ], 
        ',,' => [
          'label' => 'Thirds', 
          'src' => $this->applyFilter('images/thirds.svg', ['url'])
        ], 
        '1-4,1-4,1-4,1-4|1-2,1-2,1-2,1-2' => [
          'label' => 'Quarters', 
          'src' => $this->applyFilter('images/quarters.svg', ['url'])
        ], 
        '2-3,1-3' => [
          'label' => 'Thirds 2-1', 
          'src' => $this->applyFilter('images/thirds-2-1.svg', ['url'])
        ], 
        '1-3,2-3' => [
          'label' => 'Thirds 1-2', 
          'src' => $this->applyFilter('images/thirds-1-2.svg', ['url'])
        ], 
        '3-4,1-4' => [
          'label' => 'Quarters 3-1', 
          'src' => $this->applyFilter('images/quarters-3-1.svg', ['url'])
        ], 
        '1-4,3-4' => [
          'label' => 'Quarters 1-3', 
          'src' => $this->applyFilter('images/quarters-1-3.svg', ['url'])
        ], 
        '1-2,1-4,1-4|1-1,1-2,1-2' => [
          'label' => 'Quarters 2-1-1', 
          'src' => $this->applyFilter('images/quarters-2-1-1.svg', ['url'])
        ], 
        '1-4,1-4,1-2|1-2,1-2,1-1' => [
          'label' => 'Quarters 1-1-2', 
          'src' => $this->applyFilter('images/quarters-1-1-2.svg', ['url'])
        ], 
        '1-4,1-2,1-4' => [
          'label' => 'Quarters 1-2-1', 
          'src' => $this->applyFilter('images/quarters-1-2-1.svg', ['url'])
        ], 
        'fixed,' => [
          'label' => 'Fixed-Left', 
          'src' => $this->applyFilter('images/fixed-left.svg', ['url'])
        ], 
        ',fixed' => [
          'label' => 'Fixed-Right', 
          'src' => $this->applyFilter('images/fixed-right.svg', ['url'])
        ], 
        ',fixed,' => [
          'label' => 'Fixed-Inner', 
          'src' => $this->applyFilter('images/fixed-inner.svg', ['url'])
        ], 
        'fixed,,fixed' => [
          'label' => 'Fixed-Outer', 
          'src' => $this->applyFilter('images/fixed-outer.svg', ['url'])
        ]
      ]
    ], 
    'columns' => [
      'label' => 'Columns', 
      'description' => 'Set a background style or image for each column to create a tile.', 
      'type' => 'children'
    ], 
    'fixed_width' => [
      'label' => 'Fixed Column Width', 
      'description' => 'Set a fixed column width or expand it to its content\'s width. The other column(s) will automatically fill the remaining space.', 
      'type' => 'select', 
      'options' => [
        'Small' => 'small', 
        'Medium' => 'medium', 
        'Large' => 'large', 
        'X-Large' => 'xlarge', 
        'XX-Large' => 'xxlarge', 
        'Auto' => 'auto'
      ], 
      'show' => '$match(layout, \'fixed\')'
    ], 
    'column_gap' => [
      'label' => 'Column Gap', 
      'description' => 'Set the size of the gap between the grid columns.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'Small' => 'small', 
        'Medium' => 'medium', 
        'Default' => '', 
        'Large' => 'large', 
        'None' => 'collapse'
      ]
    ], 
    'row_gap' => [
      'label' => 'Row Gap', 
      'description' => 'Set the size of the gap between the grid rows.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'Small' => 'small', 
        'Medium' => 'medium', 
        'Default' => '', 
        'Large' => 'large', 
        'None' => 'collapse'
      ]
    ], 
    'divider' => [
      'label' => 'Divider', 
      'description' => 'Show a divider between grid columns.', 
      'type' => 'checkbox', 
      'text' => 'Show dividers', 
      'enable' => 'column_gap != \'collapse\' && row_gap != \'collapse\''
    ], 
    'breakpoint' => [
      'label' => 'Breakpoint', 
      'description' => 'Set the breakpoint from which grid items will stack.', 
      'type' => 'select', 
      'options' => [
        'None' => '', 
        'Small (Phone Landscape)' => 's', 
        'Medium (Tablet Landscape)' => 'm', 
        'Large (Desktop)' => 'l', 
        'X-Large (Large Screens)' => 'xl'
      ]
    ], 
    'width' => [
      'label' => 'Max Width', 
      'description' => 'Set the maximum content width. Note: The section may already have a maximum width, which you cannot exceed.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'Default' => 'default', 
        'XSmall' => 'xsmall', 
        'Small' => 'small', 
        'Large' => 'large', 
        'Expand' => 'expand', 
        'None' => ''
      ]
    ], 
    'width_expand' => [
      'label' => 'Expand One Side', 
      'description' => 'Expand the width of one side to the left or right while the other side keeps within the constraints of the max width.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'Don\'t expand' => '', 
        'To left' => 'left', 
        'To right' => 'right'
      ], 
      'show' => '$match(width, \'^(default|small|large)$\')'
    ], 
    'height' => [
      'label' => 'Height', 
      'description' => 'Enabling viewport height on a row that directly follows the header will subtract the header\'s height from it.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Viewport' => 'full', 
        'Viewport (Minus 20%)' => 'percent'
      ]
    ], 
    'margin' => [
      'label' => 'Margin', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'Keep existing' => '', 
        'Small' => 'small', 
        'Default' => 'default', 
        'Medium' => 'medium', 
        'Large' => 'large', 
        'X-Large' => 'xlarge', 
        'None' => 'remove-vertical'
      ]
    ], 
    'margin_remove_top' => [
      'type' => 'checkbox', 
      'text' => 'Remove top margin', 
      'enable' => 'margin != \'remove-vertical\''
    ], 
    'margin_remove_bottom' => [
      'description' => 'Set the vertical margin. Note: The first grid\'s top margin and the last grid\'s bottom margin are always removed. Define those in the section settings instead.', 
      'type' => 'checkbox', 
      'text' => 'Remove bottom margin', 
      'enable' => 'margin != \'remove-vertical\''
    ], 
    'match' => [
      'label' => 'Match Height', 
      'description' => 'Match the height of all panel elements which are styled as a card.', 
      'type' => 'checkbox', 
      'text' => 'Match height'
    ], 
    'order_last' => [
      'label' => 'Order', 
      'description' => 'Change the visual order for the last item of the grid. This only applies to the selected breakpoint. When stacked, items will appear in the same order as they do in the source code.', 
      'type' => 'checkbox', 
      'text' => 'Last item appears first'
    ], 
    'status' => [
      'label' => 'Status', 
      'description' => 'Disable your row and publish it later. It will only be shown to the editor while the customizer is open.', 
      'type' => 'checkbox', 
      'text' => 'Disable row', 
      'attrs' => [
        'true-value' => 'disabled', 
        'false-value' => ''
      ]
    ], 
    'id' => $this->get('builder.id'), 
    'class' => $this->get('builder.cls')
  ], 
  'fieldset' => [
    'default' => [
      'fields' => ['layout', 'columns', 'fixed_width', 'column_gap', 'row_gap', 'divider', 'breakpoint', 'width', 'width_expand', 'height', 'margin', 'margin_remove_top', 'margin_remove_bottom', 'match', 'order_last', 'status', 'id', 'class']
    ]
  ]
];
