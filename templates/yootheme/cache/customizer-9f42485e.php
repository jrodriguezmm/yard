<?php // @file /datos/hypertext/plantilla.uniandes.edu.co/Yard/templates/yootheme/vendor/yootheme/theme/../theme-joomla/config/customizer.json

return [
  'id' => $this->get('.theme.id'), 
  'title' => $this->get('.theme.title'), 
  'default' => $this->get('.theme.default'), 
  'cookie' => $this->get('theme.cookie'), 
  'admin' => $this->get('.app.admin'), 
  'root' => $this->get('app.base'), 
  'site' => "{$this->get('app.root')}/index.php", 
  'token' => $this->get('app.token'), 
  'user_id' => $this->get('app.user.id'), 
  'panels' => [
    'advanced' => [
      'fields' => [
        'child_theme' => [
          'label' => 'Child Theme', 
          'description' => 'Select a child theme. Note that different template files will be loaded and theme settings will be updated respectively. To set up your own child theme, create new folder on the same level as theme\'s and name it yootheme_child or similar.', 
          'type' => 'select', 
          'default' => '', 
          'options' => $this->get('theme.child_themes')
        ], 
        'media_folder' => [
          'label' => 'Media Folder', 
          'description' => 'This folder stores images that you download when using layouts from the YOOtheme Pro library. It\'s located inside the Joomla images folder.', 
          'type' => 'text'
        ], 
        'search_module' => [
          'label' => 'Search Module', 
          'description' => 'Select the search module.', 
          'type' => 'select', 
          'options' => [
            'Search' => 'mod_search', 
            'Smart Search' => 'mod_finder'
          ]
        ]
      ]
    ], 
    'system-post' => [
      'title' => 'Post', 
      'width' => 400, 
      'fields' => [
        'post.width' => [
          'label' => 'Width', 
          'description' => 'Set the post width. The image and content can\'t expand beyond this width.', 
          'type' => 'select', 
          'options' => [
            'XSmall' => 'xsmall', 
            'Small' => 'small', 
            'Default' => '', 
            'Large' => 'large', 
            'Expand' => 'expand', 
            'None' => 'none'
          ]
        ], 
        'post.padding' => [
          'label' => 'Padding', 
          'description' => 'Set the vertical padding.', 
          'type' => 'select', 
          'options' => [
            'Default' => '', 
            'XSmall' => 'xsmall', 
            'Small' => 'small', 
            'Large' => 'large', 
            'XLarge' => 'xlarge'
          ]
        ], 
        'post.padding_remove' => [
          'type' => 'checkbox', 
          'text' => 'Remove top padding'
        ], 
        'post.content_width' => [
          'label' => 'Content Width', 
          'description' => 'Set an optional content width which doesn\'t affect the image.', 
          'type' => 'select', 
          'options' => [
            'Auto' => '', 
            'XSmall' => 'xsmall', 
            'Small' => 'small'
          ], 
          'enable' => 'post.width != \'xsmall\''
        ], 
        'post.image_margin' => [
          'label' => 'Image Margin', 
          'description' => 'Set the top margin if the image is aligned between the title and the content. Define the image position in the <a href="index.php?option=com_config&view=component&component=com_content#editinglayout">Editing Layout</a> settings in Joomla.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'post.image_dimension' => [
          'type' => 'grid', 
          'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically and where possible, high resolution images will be auto-generated.', 
          'fields' => [
            'post.image_width' => [
              'label' => 'Image Width', 
              'width' => '1-2', 
              'attrs' => [
                'placeholder' => 'auto', 
                'lazy' => true
              ]
            ], 
            'post.image_height' => [
              'label' => 'Image Height', 
              'width' => '1-2', 
              'attrs' => [
                'placeholder' => 'auto', 
                'lazy' => true
              ]
            ]
          ]
        ], 
        'post.header_align' => [
          'label' => 'Alignment', 
          'description' => 'Align the title and meta text.', 
          'type' => 'checkbox', 
          'text' => 'Center the title and meta text'
        ], 
        'post.title_margin' => [
          'label' => 'Title Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'post.meta_margin' => [
          'label' => 'Meta Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'post.meta_style' => [
          'label' => 'Meta Style', 
          'description' => 'Display the meta text in a sentence or a horizontal list.', 
          'type' => 'select', 
          'options' => [
            'List' => 'list', 
            'Sentence' => 'sentence'
          ]
        ], 
        'post.content_margin' => [
          'label' => 'Content Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'post.content_dropcap' => [
          'label' => 'Drop Cap', 
          'description' => 'Set a large initial letter that drops below the first line of the first paragraph.', 
          'type' => 'checkbox', 
          'text' => 'Show drop cap'
        ]
      ], 
      'help' => [
        'Post' => [[
            'title' => 'Layout', 
            'src' => 'site/docs/yootheme-pro/post/joomla/videos/layout.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/post#layout', 
            'support' => 'support/search?tags=125&q=post'
          ], [
            'title' => 'Image', 
            'src' => 'site/docs/yootheme-pro/post/joomla/videos/image.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/post#image', 
            'support' => 'support/search?tags=125&q=post'
          ], [
            'title' => 'Content', 
            'src' => 'site/docs/yootheme-pro/post/joomla/videos/content.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/post#content', 
            'support' => 'support/search?tags=125&q=post'
          ]], 
        'Post Builder' => [[
            'title' => 'Post Builder', 
            'src' => 'site/docs/yootheme-pro/post-builder/joomla/videos/post-builder.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/post-builder', 
            'support' => 'support/search?tags=125&q=builder'
          ]], 
        'Image Field' => [[
            'title' => 'Images', 
            'src' => 'site/docs/yootheme-pro/files-and-images/joomla/videos/images.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#images', 
            'support' => 'support/search?tags=125&q=image%20field'
          ], [
            'title' => 'Media Manager', 
            'src' => 'site/docs/yootheme-pro/files-and-images/joomla/videos/media-manager.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#media-manager', 
            'support' => 'support/search?tags=125&q=media%20manager'
          ], [
            'title' => 'Unsplash Library', 
            'src' => 'site/docs/yootheme-pro/files-and-images/joomla/videos/unsplash.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#unsplash-library', 
            'support' => 'support/search?tags=125&q=unsplash'
          ]]
      ]
    ], 
    'system-blog' => [
      'title' => 'Blog', 
      'width' => 400, 
      'fields' => [
        'blog.width' => [
          'label' => 'Width', 
          'description' => 'Set the blog width.', 
          'type' => 'select', 
          'options' => [
            'Default' => '', 
            'Small' => 'small', 
            'Large' => 'large', 
            'Expand' => 'expand'
          ]
        ], 
        'blog.padding' => [
          'label' => 'Padding', 
          'description' => 'Set the vertical padding.', 
          'type' => 'select', 
          'options' => [
            'Default' => '', 
            'XSmall' => 'xsmall', 
            'Small' => 'small', 
            'Large' => 'large', 
            'XLarge' => 'xlarge'
          ]
        ], 
        'blog.grid_column_gap' => [
          'label' => 'Column Gap', 
          'description' => 'Set the size of the gap between the grid columns. Define the number of columns in the <a href="index.php?option=com_config&view=component&component=com_content#blog_default_parameters">Blog/Featured Layout</a> settings in Joomla.', 
          'type' => 'select', 
          'default' => '', 
          'options' => [
            'Small' => 'small', 
            'Medium' => 'medium', 
            'Default' => '', 
            'Large' => 'large', 
            'None' => 'collapse'
          ]
        ], 
        'blog.grid_row_gap' => [
          'label' => 'Row Gap', 
          'description' => 'Set the size of the gap between the grid rows.', 
          'type' => 'select', 
          'default' => '', 
          'options' => [
            'Small' => 'small', 
            'Medium' => 'medium', 
            'Default' => '', 
            'Large' => 'large', 
            'None' => 'collapse'
          ]
        ], 
        'blog.grid_breakpoint' => [
          'label' => 'Breakpoint', 
          'description' => 'Set the breakpoint from which grid items will stack.', 
          'type' => 'select', 
          'options' => [
            'Small (Phone Landscape)' => 's', 
            'Medium (Tablet Landscape)' => 'm', 
            'Large (Desktop)' => 'l', 
            'X-Large (Large Screens)' => 'xl'
          ]
        ], 
        'blog.grid_masonry' => [
          'label' => 'Masonry', 
          'description' => 'The masonry effect creates a layout free of gaps even if grid items have different heights. ', 
          'type' => 'checkbox', 
          'text' => 'Enable masonry effect'
        ], 
        'blog.grid_parallax' => [
          'label' => 'Parallax', 
          'description' => 'The parallax effect moves single grid columns at different speeds while scrolling. Define the vertical parallax offset in pixels.', 
          'type' => 'range', 
          'attrs' => [
            'min' => 0, 
            'max' => 600, 
            'step' => 10
          ]
        ], 
        'blog.image_margin' => [
          'label' => 'Image Margin', 
          'description' => 'Set the top margin if the image is aligned between the title and the content. Define the image position in the <a href="index.php?option=com_config&view=component&component=com_content#editinglayout">Editing Layout</a> settings in Joomla.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'blog.image_dimension' => [
          'type' => 'grid', 
          'description' => 'Setting just one value preserves the original proportions. The image will be resized and cropped automatically and where possible, high resolution images will be auto-generated.', 
          'fields' => [
            'blog.image_width' => [
              'label' => 'Image Width', 
              'width' => '1-2', 
              'attrs' => [
                'placeholder' => 'auto', 
                'lazy' => true
              ]
            ], 
            'blog.image_height' => [
              'label' => 'Image Height', 
              'width' => '1-2', 
              'attrs' => [
                'placeholder' => 'auto', 
                'lazy' => true
              ]
            ]
          ]
        ], 
        'blog.header_align' => [
          'label' => 'Alignment', 
          'description' => 'Align the title and meta text as well as the continue reading button.', 
          'type' => 'checkbox', 
          'text' => 'Center the title, meta text and button'
        ], 
        'blog.title_style' => [
          'label' => 'Title Style', 
          'description' => 'Title styles differ in font-size but may also come with a predefined color, size and font.', 
          'type' => 'select', 
          'options' => [
            'None' => '', 
            'H1' => 'h1', 
            'H2' => 'h2', 
            'H3' => 'h3', 
            'H4' => 'h4'
          ]
        ], 
        'blog.title_margin' => [
          'label' => 'Title Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'blog.meta_margin' => [
          'label' => 'Meta Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'blog.content_length' => [
          'label' => 'Content Length', 
          'description' => 'Limit the content length to a number of characters. All HTML elements will be stripped.', 
          'type' => 'number'
        ], 
        'blog.content_margin' => [
          'label' => 'Content Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'blog.content_align' => [
          'label' => 'Content Alignment', 
          'type' => 'checkbox', 
          'text' => 'Center the content'
        ], 
        'blog.button_style' => [
          'label' => 'Button', 
          'description' => 'Select a style for the continue reading button.', 
          'type' => 'select', 
          'options' => [
            'Default' => 'default', 
            'Primary' => 'primary', 
            'Secondary' => 'secondary', 
            'Danger' => 'danger', 
            'Text' => 'text'
          ]
        ], 
        'blog.button_margin' => [
          'label' => 'Button Margin', 
          'description' => 'Set the top margin.', 
          'type' => 'select', 
          'options' => [
            'Small' => 'small', 
            'Default' => 'default', 
            'Medium' => 'medium', 
            'Large' => 'large', 
            'X-Large' => 'xlarge', 
            'None' => 'remove'
          ]
        ], 
        'blog.navigation' => [
          'label' => 'Navigation', 
          'description' => 'Use a numeric pagination or previous/next links to move between blog pages.', 
          'type' => 'select', 
          'options' => [
            'Pagination' => 'pagination', 
            'Previous/Next' => 'previous/next'
          ]
        ], 
        'blog.pagination_startend' => [
          'type' => 'checkbox', 
          'text' => 'Show Start/End links', 
          'show' => 'blog.navigation == \'pagination\''
        ]
      ], 
      'help' => [
        'Blog' => [[
            'title' => 'Layout', 
            'src' => 'site/docs/yootheme-pro/blog/joomla/videos/layout.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/blog#layout', 
            'support' => 'support/search?tags=125&q=blog'
          ], [
            'title' => 'Image', 
            'src' => 'site/docs/yootheme-pro/blog/joomla/videos/image.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/blog#image', 
            'support' => 'support/search?tags=125&q=blog'
          ], [
            'title' => 'Content', 
            'src' => 'site/docs/yootheme-pro/blog/joomla/videos/content.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/blog#content', 
            'support' => 'support/search?tags=125&q=blog'
          ], [
            'title' => 'Navigation', 
            'src' => 'site/docs/yootheme-pro/blog/joomla/videos/navigation.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/blog#navigation', 
            'support' => 'support/search?tags=125&q=navigation'
          ], [
            'title' => 'Excerpt', 
            'src' => 'site/docs/yootheme-pro/blog/joomla/videos/excerpt.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/blog#excerpt', 
            'support' => 'support/search?tags=125&q=excerpt'
          ]], 
        'Image Field' => [[
            'title' => 'Images', 
            'src' => 'site/docs/yootheme-pro/files-and-images/joomla/videos/images.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#images', 
            'support' => 'support/search?tags=125&q=image%20field'
          ], [
            'title' => 'Media Manager', 
            'src' => 'site/docs/yootheme-pro/files-and-images/joomla/videos/media-manager.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#media-manager', 
            'support' => 'support/search?tags=125&q=media%20manager'
          ], [
            'title' => 'Unsplash Library', 
            'src' => 'site/docs/yootheme-pro/files-and-images/joomla/videos/unsplash.mp4', 
            'documentation' => 'support/yootheme-pro/joomla/files-and-images#unsplash-library', 
            'support' => 'support/search?tags=125&q=unsplash'
          ]]
      ]
    ]
  ]
];
