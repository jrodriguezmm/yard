<?php // @file C:/xampp/htdocs/yard2/templates/yootheme/vendor/yootheme/builder-joomla/elements/joomla_module/element.json

return [
  '@import' => $this->applyFilter('./element.php', ['path']), 
  'name' => 'joomla_module', 
  'title' => 'J! Module', 
  'icon' => $this->applyFilter('images/icon.svg', ['url']), 
  'iconSmall' => $this->applyFilter('images/iconSmall.svg', ['url']), 
  'element' => true, 
  'width' => 500, 
  'templates' => [
    'render' => $this->applyFilter('./templates/template.php', ['path'])
  ], 
  'fields' => [
    'module' => [
      'type' => 'select-module', 
      'label' => 'Module', 
      'description' => 'Any Joomla module can be displayed in your custom layout.', 
      'default' => ''
    ], 
    'style' => [
      'type' => 'select', 
      'label' => 'Style', 
      'description' => 'Select a panel style.', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Card Default' => 'card-default', 
        'Card Primary' => 'card-primary', 
        'Card Secondary' => 'card-secondary', 
        'Card Hover' => 'card-hover'
      ]
    ], 
    'title_style' => [
      'type' => 'select', 
      'label' => 'Style', 
      'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.', 
      'default' => '', 
      'options' => [
        'None' => '', 
        '2Xlarge' => 'heading-2xlarge', 
        'XLarge' => 'heading-xlarge', 
        'Large' => 'heading-large', 
        'Medium' => 'heading-medium', 
        'Small' => 'heading-small', 
        'H1' => 'h1', 
        'H2' => 'h2', 
        'H3' => 'h3', 
        'H4' => 'h4', 
        'H5' => 'h5', 
        'H6' => 'h6'
      ]
    ], 
    'title_decoration' => [
      'type' => 'select', 
      'label' => 'Decoration', 
      'description' => 'Decorate the title with a divider, bullet or a line that is vertically centered to the heading.', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Divider' => 'divider', 
        'Bullet' => 'bullet', 
        'Line' => 'line'
      ]
    ], 
    'title_font_family' => [
      'label' => 'Font Family', 
      'description' => 'Select an alternative font family.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Default' => 'default', 
        'Primary' => 'primary', 
        'Secondary' => 'secondary', 
        'Tertiary' => 'tertiary'
      ]
    ], 
    'title_color' => [
      'type' => 'select', 
      'label' => 'Color', 
      'description' => 'Select the text color. If the background option is selected, styles that don\'t apply a background image use the primary color instead.', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Muted' => 'muted', 
        'Primary' => 'primary', 
        'Success' => 'success', 
        'Warning' => 'warning', 
        'Danger' => 'danger', 
        'Background' => 'background'
      ]
    ], 
    'list_style' => [
      'label' => 'List Style', 
      'description' => 'Select the list style.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Divider' => 'divider'
      ], 
      'enable' => '$match(type, \'articles_archive|articles_categories|articles_latest|articles_popular|tags_popular|tags_similar\')'
    ], 
    'link_style' => [
      'label' => 'Link Style', 
      'description' => 'Select the link style.', 
      'type' => 'select', 
      'default' => '', 
      'options' => [
        'None' => '', 
        'Muted' => 'muted'
      ], 
      'enable' => '$match(type, \'articles_archive|articles_categories|articles_latest|articles_popular|tags_popular|tags_similar\')'
    ], 
    'menu_style' => [
      'label' => 'Style', 
      'description' => 'Select the menu style', 
      'type' => 'select', 
      'default' => 'nav', 
      'options' => [
        'Nav' => 'nav', 
        'Subnav' => 'subnav'
      ], 
      'enable' => '$match(type, \'menu\')'
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
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>, <code>.el-title</code>', 
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
          'fields' => ['module']
        ], [
          'title' => 'Settings', 
          'fields' => [[
              'type' => 'group', 
              'label' => 'Panel', 
              'divider' => true, 
              'fields' => ['style']
            ], [
              'type' => 'group', 
              'label' => 'Title', 
              'divider' => true, 
              'fields' => ['title_style', 'title_decoration', 'title_font_family', 'title_color']
            ], [
              'type' => 'group', 
              'label' => 'List', 
              'divider' => true, 
              'fields' => ['list_style', 'link_style']
            ], [
              'type' => 'group', 
              'label' => 'Menu', 
              'divider' => true, 
              'fields' => ['menu_style']
            ], [
              'type' => 'group', 
              'label' => 'General', 
              'fields' => ['position', 'position_left', 'position_right', 'position_top', 'position_bottom', 'position_z_index', 'margin', 'margin_remove_top', 'margin_remove_bottom', 'maxwidth', 'maxwidth_breakpoint', 'block_align', 'block_align_breakpoint', 'block_align_fallback', 'text_align', 'text_align_breakpoint', 'text_align_fallback', 'animation', '_parallax_button', 'visibility']
            ]]
        ], [
          'title' => 'Advanced', 
          'fields' => ['name', 'status', 'id', 'class', 'css']
        ]]
    ]
  ]
];
