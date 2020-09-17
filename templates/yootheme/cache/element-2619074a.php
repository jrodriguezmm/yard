<?php // @file /datos/hypertext/plantilla.uniandes.edu.co/Yard/templates/yootheme/vendor/yootheme/builder/elements/button/element.json

return [
  '@import' => $this->applyFilter('./element.php', ['path']), 
  'name' => 'button', 
  'title' => 'Button', 
  'icon' => $this->applyFilter('images/icon.svg', ['url']), 
  'iconSmall' => $this->applyFilter('images/iconSmall.svg', ['url']), 
  'element' => true, 
  'container' => true, 
  'width' => 500, 
  'defaults' => [
    'grid_column_gap' => 'small', 
    'grid_row_gap' => 'small', 
    'margin' => 'default'
  ], 
  'placeholder' => [
    'children' => [[
        'type' => 'button_item', 
        'props' => []
      ]]
  ], 
  'templates' => [
    'render' => $this->applyFilter('./templates/template.php', ['path']), 
    'content' => $this->applyFilter('./templates/content.php', ['path'])
  ], 
  'fields' => [
    'content' => [
      'label' => 'Buttons', 
      'type' => 'content-items', 
      'title' => 'content', 
      'item' => 'button_item', 
      'media' => [
        'type' => '', 
        'item' => [
          'link_title' => 'title', 
          'link' => 'src'
        ]
      ]
    ], 
    'button_size' => [
      'label' => 'Size', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'Small' => 'small', 
        'Default' => '', 
        'Large' => 'large'
      ]
    ], 
    'fullwidth' => [
      'type' => 'checkbox', 
      'text' => 'Full width button'
    ], 
    'grid_column_gap' => [
      'label' => 'Column Gap', 
      'description' => 'Set the size of the column gap between multiple buttons.', 
      'type' => 'select', 
      'options' => [
        'Small' => 'small', 
        'Medium' => 'medium', 
        'Default' => '', 
        'Large' => 'large'
      ]
    ], 
    'grid_row_gap' => [
      'label' => 'Row Gap', 
      'description' => 'Set the size of the row gap between multiple buttons.', 
      'type' => 'select', 
      'options' => [
        'Small' => 'small', 
        'Medium' => 'medium', 
        'Default' => '', 
        'Large' => 'large'
      ]
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
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-item</code>, <code>.el-content</code>', 
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
              'label' => 'Button', 
              'type' => 'group', 
              'divider' => true, 
              'fields' => ['button_size', 'fullwidth', 'grid_column_gap', 'grid_row_gap']
            ], [
              'label' => 'General', 
              'type' => 'group', 
              'fields' => ['position', 'position_left', 'position_right', 'position_top', 'position_bottom', 'position_z_index', 'margin', 'margin_remove_top', 'margin_remove_bottom', 'maxwidth', 'maxwidth_breakpoint', 'block_align', 'block_align_breakpoint', 'block_align_fallback', 'text_align', 'text_align_breakpoint', 'text_align_fallback', 'animation', '_parallax_button', 'visibility']
            ]]
        ], $this->get('builder.advanced')]
    ]
  ]
];
