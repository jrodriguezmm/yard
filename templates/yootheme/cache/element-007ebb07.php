<?php // @file C:/xampp/htdocs/yard2/templates/yootheme/vendor/yootheme/builder/elements/text/element.json

return [
  '@import' => $this->applyFilter('./element.php', ['path']), 
  'name' => 'text', 
  'title' => 'Text', 
  'icon' => $this->applyFilter('images/icon.svg', ['url']), 
  'iconSmall' => $this->applyFilter('images/iconSmall.svg', ['url']), 
  'element' => true, 
  'width' => 500, 
  'defaults' => [
    'margin' => 'default', 
    'column_breakpoint' => 'm'
  ], 
  'placeholder' => [
    'props' => [
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
    ]
  ], 
  'templates' => [
    'render' => $this->applyFilter('./templates/template.php', ['path']), 
    'content' => $this->applyFilter('./templates/content.php', ['path'])
  ], 
  'fields' => [
    'content' => [
      'label' => 'Content', 
      'type' => 'editor', 
      'editor' => 'text'
    ], 
    'dropcap' => [
      'label' => 'Drop Cap', 
      'description' => 'Display the first letter of the paragraph as a large initial.', 
      'type' => 'checkbox', 
      'text' => 'Enable drop cap'
    ], 
    'text_style' => [
      'label' => 'Text Style', 
      'description' => 'Select a predefined text style, including color, size and font-family.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Lead' => 'lead', 
        'Meta' => 'meta'
      ]
    ], 
    'text_color' => [
      'label' => 'Text Color', 
      'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Muted' => 'muted', 
        'Emphasis' => 'emphasis', 
        'Primary' => 'primary', 
        'Success' => 'success', 
        'Warning' => 'warning', 
        'Danger' => 'danger'
      ], 
      'show' => '!text_style'
    ], 
    'text_size' => [
      'label' => 'Text Size', 
      'description' => 'Select the text size.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Small' => 'small', 
        'Large' => 'large'
      ], 
      'show' => '!text_style'
    ], 
    'column' => [
      'label' => 'Columns', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Halves' => '1-2', 
        'Thirds' => '1-3', 
        'Quarters' => '1-4', 
        'Fifths' => '1-5', 
        'Sixths' => '1-6'
      ]
    ], 
    'column_divider' => [
      'description' => 'Choose whether you want to apply a multi-column layout for the text.', 
      'type' => 'checkbox', 
      'text' => 'Show dividers between the text columns', 
      'show' => 'column'
    ], 
    'column_breakpoint' => [
      'label' => 'Columns Breakpoint', 
      'description' => 'Set the device width from which the text columns should apply. Note: For each breakpoint downward the number of columns will be reduced by one.', 
      'type' => 'select', 
      'options' => [
        'Always' => '', 
        'Small (Phone Landscape)' => 's', 
        'Medium (Tablet Landscape)' => 'm', 
        'Large (Desktop)' => 'l', 
        'X-Large (Large Screens)' => 'xl'
      ], 
      'show' => 'column'
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
    'maxwidth' => $this->get('builder.maxwidth'), 
    'maxwidth_breakpoint' => $this->get('builder.maxwidth_breakpoint'), 
    'block_align' => $this->get('builder.block_align'), 
    'block_align_breakpoint' => $this->get('builder.block_align_breakpoint'), 
    'block_align_fallback' => $this->get('builder.block_align_fallback'), 
    'text_align' => $this->get('builder.text_align_justify'), 
    'text_align_breakpoint' => $this->get('builder.text_align_breakpoint'), 
    'text_align_fallback' => $this->get('builder.text_align_justify_fallback'), 
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
          'fields' => ['content']
        ], [
          'title' => 'Settings', 
          'fields' => [[
              'label' => 'Text', 
              'type' => 'group', 
              'divider' => true, 
              'fields' => ['dropcap', 'text_style', 'text_color', 'text_size', 'column', 'column_divider', 'column_breakpoint']
            ], [
              'label' => 'General', 
              'type' => 'group', 
              'fields' => ['position', 'position_left', 'position_right', 'position_top', 'position_bottom', 'position_z_index', 'margin', 'margin_remove_top', 'margin_remove_bottom', 'maxwidth', 'maxwidth_breakpoint', 'block_align', 'block_align_breakpoint', 'block_align_fallback', 'text_align', 'text_align_breakpoint', 'text_align_fallback', 'animation', '_parallax_button', 'visibility']
            ]]
        ], $this->get('builder.advanced')]
    ]
  ]
];
