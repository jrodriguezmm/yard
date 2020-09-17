<?php // @file /datos/hypertext/plantilla.uniandes.edu.co/Yard/templates/yootheme/vendor/yootheme/builder/elements/switcher_item/element.json

return [
  'name' => 'switcher_item', 
  'title' => 'Item', 
  'width' => 500, 
  'placeholder' => [
    'props' => [
      'title' => 'Title', 
      'meta' => '', 
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
    'meta' => [
      'label' => 'Meta'
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
    'link' => $this->get('builder.link'), 
    'link_text' => [
      'label' => 'Link Text', 
      'description' => 'Set a different link text for this item.', 
      'enable' => 'link'
    ], 
    'label' => [
      'label' => 'Navigation Label'
    ], 
    'thumbnail' => [
      'label' => 'Navigation Thumbnail', 
      'description' => 'This is only used, if the thumbnail navigation is set.', 
      'type' => 'image'
    ]
  ], 
  'fieldset' => [
    'default' => [
      'fields' => ['title', 'meta', 'content', 'image', 'image_alt', 'link', 'link_text', 'label', 'thumbnail']
    ]
  ]
];
