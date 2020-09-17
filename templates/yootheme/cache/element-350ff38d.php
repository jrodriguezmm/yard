<?php // @file C:/xampp/htdocs/yard2/templates/yootheme/vendor/yootheme/builder/elements/accordion_item/element.json

return [
  'name' => 'accordion_item', 
  'title' => 'Item', 
  'width' => 500, 
  'placeholder' => [
    'props' => [
      'title' => 'Title', 
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 
      'image' => ''
    ]
  ], 
  'templates' => [
    'render' => $this->applyFilter('./templates/template.php', ['path']), 
    'content' => $this->applyFilter('./templates/content.php', ['path'])
  ], 
  'fields' => [
    'title' => [
      'label' => 'Title'
    ], 
    'content' => [
      'label' => 'Content', 
      'type' => 'editor'
    ], 
    'image' => $this->get('builder.image'), 
    'image_alt' => [
      'label' => 'Image Alt', 
      'enable' => 'image'
    ], 
    'link' => $this->get('builder.link')
  ], 
  'fieldset' => [
    'default' => [
      'fields' => ['title', 'content', 'image', 'image_alt', 'link']
    ]
  ]
];
