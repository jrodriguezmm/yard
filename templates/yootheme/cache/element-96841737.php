<?php // @file /datos/hypertext/plantilla.uniandes.edu.co/Yard/templates/yootheme/vendor/yootheme/builder/elements/countdown/element.json

return [
  '@import' => $this->applyFilter('./element.php', ['path']), 
  'name' => 'countdown', 
  'title' => 'Countdown', 
  'icon' => $this->applyFilter('images/icon.svg', ['url']), 
  'iconSmall' => $this->applyFilter('images/iconSmall.svg', ['url']), 
  'element' => true, 
  'width' => 500, 
  'defaults' => [
    'show_separator' => true, 
    'show_label' => true, 
    'grid_column_gap' => 'small', 
    'grid_row_gap' => 'small', 
    'label_margin' => 'small', 
    'margin' => 'default'
  ], 
  'templates' => [
    'render' => $this->applyFilter('./templates/template.php', ['path']), 
    'content' => $this->applyFilter('./templates/content.php', ['path'])
  ], 
  'fields' => [
    'date' => [
      'label' => 'Date', 
      'description' => 'Enter a date for the countdown to expire. Use the <a href="https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Global_Objects/Date/parse#ECMAScript_5_ISO-8601_format_support" target="_blank">ISO 8601 format</a>: <code>YYYY-MM-DDThh:mm:ssTZD</code>, e.g. <code>2017-05-01T22:00:00+00:00</code> (UTC time).', 
      'type' => 'text', 
      'attrs' => []
    ], 
    'label_days' => [
      'label' => 'Labels', 
      'attrs' => [
        'placeholder' => 'Days'
      ]
    ], 
    'label_hours' => [
      'attrs' => [
        'placeholder' => 'Hours'
      ]
    ], 
    'label_minutes' => [
      'attrs' => [
        'placeholder' => 'Minutes'
      ]
    ], 
    'label_seconds' => [
      'attrs' => [
        'placeholder' => 'Seconds'
      ]
    ], 
    'show_label' => [
      'description' => 'Enter labels for the countdown time.', 
      'type' => 'checkbox', 
      'text' => 'Show Labels'
    ], 
    'grid_column_gap' => [
      'label' => 'Column Gap', 
      'description' => 'Set the size of the column gap between the numbers.', 
      'type' => 'select', 
      'options' => [
        'Small' => 'small', 
        'Medium' => 'medium', 
        'Default' => '', 
        'Large' => 'large', 
        'None' => 'collapse'
      ]
    ], 
    'grid_row_gap' => [
      'label' => 'Row Gap', 
      'description' => 'Set the size of the row gap between the numbers.', 
      'type' => 'select', 
      'options' => [
        'Small' => 'small', 
        'Medium' => 'medium', 
        'Default' => '', 
        'Large' => 'large', 
        'None' => 'collapse'
      ]
    ], 
    'show_separator' => [
      'label' => 'Separator', 
      'description' => 'Show a separator between the numbers.', 
      'type' => 'checkbox', 
      'text' => 'Show Separators'
    ], 
    'label_margin' => [
      'label' => 'Label Margin', 
      'description' => 'Set the margin between the countdown and the label text.', 
      'type' => 'select', 
      'options' => [
        'Default' => '', 
        'Small' => 'small', 
        'Medium' => 'medium', 
        'None' => 'remove'
      ], 
      'enable' => 'show_label'
    ], 
    'position' => $this->get('builder.position'), 
    'position_left' => $this->get('builder.position_left'), 
    'position_right' => $this->get('builder.position_right'), 
    'position_top' => $this->get('builder.position_top'), 
    'position_bottom' => $this->get('builder.position_bottom'), 
    'position_z_index' => $this->get('builder.position_z_index'), 
    'margin' => $this->get('builder.margin'), 
    'margin_remove_top' => $this->get('builder.margin_remove_top'), 
    'margin_remove_bottom' => $this->get('builder.margin_remove_bottom'), 
    'text_align' => $this->get('builder.text_align'), 
    'text_align_breakpoint' => $this->get('builder.text_align_breakpoint'), 
    'text_align_fallback' => $this->get('builder.text_align_fallback'), 
    'animation' => $this->get('builder.animation'), 
    '_parallax_button' => $this->get('builder._parallax_button'), 
    'visibility' => $this->get('builder.visibility'), 
    'name' => $this->get('builder.name'), 
    'status' => $this->get('builder.status'), 
    'id' => $this->get('builder.id'), 
    'class' => $this->get('builder.cls'), 
    'css' => [
      'label' => 'CSS', 
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>', 
      'type' => 'editor', 
      'editor' => 'code', 
      'mode' => 'css', 
      'attrs' => [
        'debounce' => 500
      ]
    ]
  ], 
  'fieldset' => [
    'default' => [
      'type' => 'tabs', 
      'fields' => [[
          'title' => 'Content', 
          'fields' => ['date', 'label_days', 'label_hours', 'label_minutes', 'label_seconds', 'show_label']
        ], [
          'title' => 'Settings', 
          'fields' => [[
              'label' => 'Countdown', 
              'type' => 'group', 
              'divider' => true, 
              'fields' => ['grid_column_gap', 'grid_row_gap', 'show_separator', 'label_margin']
            ], [
              'label' => 'General', 
              'type' => 'group', 
              'fields' => ['position', 'position_left', 'position_right', 'position_top', 'position_bottom', 'position_z_index', 'margin', 'margin_remove_top', 'margin_remove_bottom', 'text_align', 'text_align_breakpoint', 'text_align_fallback', 'animation', '_parallax_button', 'visibility']
            ]]
        ], $this->get('builder.advanced')]
    ]
  ]
];
