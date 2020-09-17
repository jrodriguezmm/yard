<?php // @file /datos/hypertext/plantilla.uniandes.edu.co/Yard/templates/yootheme/vendor/yootheme/builder/elements/html/element.json

return [
  'name' => 'html', 
  'title' => 'Html', 
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
      'type' => 'editor', 
      'editor' => 'code', 
      'mode' => 'text/html'
    ], 
    'name' => $this->get('builder.name'), 
    'id' => $this->get('builder.id'), 
    'status' => $this->get('builder.status'), 
    'class' => $this->get('builder.cls'), 
    'css' => [
      'type' => 'editor', 
      'label' => 'CSS', 
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>', 
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
        ], $this->get('builder.advanced')]
    ]
  ]
];
