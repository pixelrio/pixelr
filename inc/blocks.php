<?php
  function pixelrio_acf_init_block_types() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

      //Main
      acf_register_block_type(array(
        'name'              => 'main-content',
        'title'             => __('Main Content'),
        'description'       => __('Main content section built with Bootstrap columns'),
        'render_template'   => 'blocks/layout/main-content.php',
        'category'          => 'layout',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'pixelrio', 'columns', 'main', 'content' ),
        'mode'			        => 'preview',
        'supports'		=> array(
          'anchor' => true , 
          'jsx'  => true, 
          'multiple' => true)
      ));

      //All Posts
      acf_register_block_type(array(
        'name'              => 'allPosts',
        'title'             => __('All Posts'),
        'description'       => __('A custom block to embed recent blog posts'),
        'render_template'   => 'blocks/core/allPosts.php',
        'category'          => 'layout',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'pixelrio', 'blog', 'recent posts', 'all' ),
        'mode'			        => 'preview',
        'supports'		=> array(
          'anchor' => true , 
          'jsx'  => true, 
          'multiple' => true)
      ));

      //Category Posts
      acf_register_block_type(array(
        'name'              => 'categoryPosts',
        'title'             => __('Category Posts'),
        'description'       => __('A custom block to embed recent blog posts based on the category'),
        'render_template'   => 'blocks/core/categoryPosts.php',
        'category'          => 'layout',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'pixelrio', 'blog', 'recent posts', 'category' ),
        'mode'			        => 'preview',
        'supports'		=> array(
          'anchor' => true , 
          'jsx'  => true, 
          'multiple' => true)
      ));


      //Hero
      acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'description'       => __('Hero section that support video background and a big headline'),
        'render_template'   => 'blocks/components/hero.php',
        'category'          => 'layout',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'pixelrio', 'hero', 'video' ),
        'mode'			        => 'preview',
        'supports'		=> array(
          'anchor' => true , 
          'jsx'  => true, 
          'multiple' => true)
      ));

    }
  }

  add_action('acf/init', 'pixelrio_acf_init_block_types');