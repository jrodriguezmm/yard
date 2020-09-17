<?php // @file C:/xampp/htdocs/yard2/templates/yootheme/vendor/yootheme/builder/elements/description_list_item/element.json

return [
  'name' => 'description_list_item', 
  'title' => 'Item', 
  'width' => 500, 
  'placeholder' => [
    'props' => [
      'title' => 'Title', 
      'meta' => '', 
      'content' => 'Lorem ipsum dolor sit amet.'
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
    'meta' => [
      'label' => 'Meta'
    ], 
    'content' => [
      'label' => 'Content', 
      'type' => 'editor'
    ], 
    'link' => $this->get('builder.link'), 
    'link_target' => $this->get('builder.link_target')
  ], 
  'fieldset' => [
    'default' => [
      'fields' => ['title', 'meta', 'content', 'link', 'link_target']
    ]
  ]
];
