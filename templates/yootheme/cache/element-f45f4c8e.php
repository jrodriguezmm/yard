<?php // @file C:/xampp/htdocs/yard2/templates/yootheme/vendor/yootheme/builder/elements/layout/element.json

return [
  'name' => 'layout', 
  'title' => 'Layout', 
  'container' => true, 
  'templates' => [
    'render' => $this->applyFilter('./templates/template.php', ['path']), 
    'content' => $this->applyFilter('./templates/template.php', ['path'])
  ]
];
