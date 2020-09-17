<?php // @file /datos/hypertext/plantilla.uniandes.edu.co/Yard/templates/yootheme/vendor/yootheme/builder/elements/subnav_item/element.json

return [
  'name' => 'subnav_item', 
  'title' => 'Item', 
  'width' => 500, 
  'placeholder' => [
    'props' => [
      'content' => 'Item'
    ]
  ], 
  'templates' => [
    'render' => $this->applyFilter('./templates/template.php', ['path']), 
    'content' => $this->applyFilter('./templates/content.php', ['path'])
  ], 
  'fields' => [
    'content' => [
      'label' => 'Content'
    ], 
    'link' => $this->get('builder.link'), 
    'link_target' => $this->get('builder.link_target')
  ], 
  'fieldset' => [
    'default' => [
      'fields' => ['content', 'link', 'link_target']
    ]
  ]
];
