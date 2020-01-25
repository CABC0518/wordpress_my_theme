<?php

function my_theme_script_enqueue(){

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/my_theme.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/my_theme.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_theme_script_enqueue');

function my_theme_setup(){
  // 外観(Apperance)からカスタムメニューを見えるようにする
  add_theme_support('menus');
  //ここカスタムメニューを定義する。 register_nav_menu('場所','説明')
  register_nav_menu('primary', 'Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
}
// initalizationの時に実行される。
// 第一引数がいつ実行するか、第二引数がどの関数を実行するか
add_action('init', 'my_theme_setup');

// Theme Support Functions
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside', 'image', 'video'));

// Sidebar Functions
function my_theme_widget_setup(){
  // もし複数個のサイドバーを追加したかったら、この関数のなかにregister_sidebar()もう一つ記述し、引数を変える。
  // そうすることによって一個のフック(add_action())で呼び出せるようになる
  register_sidebar(
    array(
      'name' => 'Sidebar',
      // サイドバーを一意にするためにidを設定。
      'id' => 'sidebar-1',
      // ここに指定したクラスはページではwordpressによって、'sidebar-'が自動で追加され、sidebar-customのようになる。
      'class' => 'custom',
      // もしサイドバーについての説明を加えたかったら、descriptionを使う。
      'description' => 'This is a standard sidebar',
      // ウィジェットを包めhtmlを記載できる。
      'before_widget' => '<aside> id="%1$s" class="widget %2$s"',
      'after_widget' => '</aside>',
      // カスタムクラスを包むhtmlを記載できる。
      'before_title' => '<h1 class="widget-title">',
      'after_title' => '</h1>',
        )
    );
}

add_action('widgets_init','my_theme_widget_setup');
