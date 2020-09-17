<?php // @file C:/xampp/htdocs/yard2/templates/yootheme/vendor/yootheme/builder/elements/quotation/element.json

return [
  '@import' => $this->applyFilter('./element.php', ['path']), 
  'name' => 'quotation', 
  'title' => 'Quotation', 
  'icon' => $this->applyFilter('images/icon.svg', ['url']), 
  'iconSmall' => $this->applyFilter('images/iconSmall.svg', ['url']), 
  'element' => true, 
  'width' => 500, 
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
      'type' => 'editor'
    ], 
    'author' => [
      'label' => 'Author', 
      'description' => 'Enter the author\'s name.'
    ], 
    'link' => [
      'label' => 'Author Link', 
      'attrs' => [
        'placeholder' => 'http://'
      ], 
      'enable' => 'author'
    ], 
    'link_target' => [
      'type' => 'checkbox', 
      'text' => 'Open in a new window', 
      'enable' => 'author && link'
    ], 
    'footer' => [
      'label' => 'Footer', 
      'description' => 'Enter an optional footer text.'
    ], 
    'link_style' => [
      'label' => 'Style', 
      'description' => 'Select the link style.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Muted' => 'muted', 
        'Text' => 'text', 
        'Reset' => 'reset'
      ], 
      'enable' => 'author && link'
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
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-footer</code>, <code>.el-author</code>', 
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
          'fields' => ['content', 'author', 'link', 'link_target', 'footer']
        ], [
          'title' => 'Settings', 
          'fields' => [[
              'label' => 'Link', 
              'type' => 'group', 
              'divider' => true, 
              'fields' => ['link_style']
            ], [
              'label' => 'General', 
              'type' => 'group', 
              'fields' => ['position', 'position_left', 'position_right', 'position_top', 'position_bottom', 'position_z_index', 'margin', 'margin_remove_top', 'margin_remove_bottom', 'maxwidth', 'maxwidth_breakpoint', 'block_align', 'block_align_breakpoint', 'block_align_fallback', 'text_align', 'text_align_breakpoint', 'text_align_fallback', 'animation', '_parallax_button', 'visibility']
            ]]
        ], $this->get('builder.advanced')]
    ]
  ]
];
