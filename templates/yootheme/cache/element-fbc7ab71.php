<?php // @file /datos/hypertext/plantilla.uniandes.edu.co/Yard/templates/yootheme/vendor/yootheme/builder/elements/divider/element.json

return [
  '@import' => $this->applyFilter('./element.php', ['path']), 
  'name' => 'divider', 
  'title' => 'Divider', 
  'icon' => $this->applyFilter('images/icon.svg', ['url']), 
  'iconSmall' => $this->applyFilter('images/iconSmall.svg', ['url']), 
  'element' => true, 
  'width' => 500, 
  'defaults' => [
    'divider_element' => 'hr'
  ], 
  'templates' => [
    'render' => $this->applyFilter('./templates/template.php', ['path']), 
    'content' => $this->applyFilter('./templates/content.php', ['path'])
  ], 
  'fields' => [
    'divider_style' => [
      'label' => 'Style', 
      'description' => 'Choose a divider style.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Icon' => 'icon', 
        'Small' => 'small', 
        'Vertical' => 'vertical'
      ]
    ], 
    'divider_element' => [
      'label' => 'HTML Element', 
      'description' => 'Choose the divider element to fit your semantic structure. Use the hr element for a thematic break and the div element for decorative reasons.', 
      'type' => 'select', 
      'options' => [
        'Hr' => 'hr', 
        'Div' => 'div'
      ]
    ], 
    'divider_align' => [
      'label' => 'Alignment', 
      'description' => 'Center, left and right alignment may depend on a breakpoint and require a fallback.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Left' => 'left', 
        'Center' => 'center', 
        'Right' => 'right'
      ], 
      'enable' => 'divider_style == \'small\''
    ], 
    'divider_align_breakpoint' => [
      'label' => 'Alignment Breakpoint', 
      'description' => 'Define the device width from which the alignment will apply.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'Always' => '', 
        'Small (Phone Landscape)' => 's', 
        'Medium (Tablet Landscape)' => 'm', 
        'Large (Desktop)' => 'l', 
        'X-Large (Large Screens)' => 'xl'
      ], 
      'enable' => 'divider_style == \'small\' && divider_align'
    ], 
    'divider_align_fallback' => [
      'label' => 'Alignment Fallback', 
      'description' => 'Define an alignment fallback for device widths below the breakpoint.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Left' => 'left', 
        'Center' => 'center', 
        'Right' => 'right'
      ], 
      'enable' => 'divider_style == \'small\' && divider_align && divider_align_breakpoint'
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
          'title' => 'Settings', 
          'fields' => [[
              'label' => 'Divider', 
              'type' => 'group', 
              'divider' => true, 
              'fields' => ['divider_style', 'divider_element', 'divider_align', 'divider_align_breakpoint', 'divider_align_fallback']
            ], [
              'label' => 'General', 
              'type' => 'group', 
              'fields' => ['position', 'position_left', 'position_right', 'position_top', 'position_bottom', 'position_z_index', 'margin', 'margin_remove_top', 'margin_remove_bottom', 'maxwidth', 'maxwidth_breakpoint', 'block_align', 'block_align_breakpoint', 'block_align_fallback', 'animation', '_parallax_button', 'visibility']
            ]]
        ], $this->get('builder.advanced')]
    ]
  ]
];
