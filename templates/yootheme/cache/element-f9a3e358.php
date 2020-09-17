<?php // @file /datos/hypertext/plantilla.uniandes.edu.co/Yard/templates/yootheme/vendor/yootheme/builder/elements/grid_item/element.json

return [
  'name' => 'grid_item', 
  'title' => 'Item', 
  'width' => 500, 
  'placeholder' => [
    'props' => [
      'title' => 'Title', 
      'meta' => '', 
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 
      'image' => '', 
      'icon' => ''
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
    'icon' => [
      'label' => 'Icon', 
      'description' => 'Instead of using a custom image, you can click on the pencil to pick an icon from the icon library.', 
      'type' => 'icon', 
      'enable' => '!image'
    ], 
    'link' => $this->get('builder.link'), 
    'tags' => [
      'label' => 'Tags', 
      'description' => 'Enter a comma-separated list of tags, for example, <code>blue, white, black</code>.'
    ]
  ], 
  'fieldset' => [
    'default' => [
      'fields' => ['title', 'meta', 'content', 'image', 'image_alt', 'icon', 'link', 'tags']
    ]
  ]
];
