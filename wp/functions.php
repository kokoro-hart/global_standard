<?php

//セットアップ
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}


//css js
function my_script_init()
{
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_script('my', get_template_directory_uri() . '/js/bundle.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');



//タイトルの分岐
function wp_document_title_parts( $title )
{
  if ( is_home() || is_front_page() ) {
    unset( $title['tagline'] ); // キャッチフレーズを出力しない
  } else if ( is_category() ) {
    $title['title'] = $title['title'];
  }
  return $title;
}
add_filter( 'document_title_parts', 'wp_document_title_parts', 10, 1 );

add_action('after_setup_theme', 'my_setup');



//タイトルフィルターフック
add_filter('get_the_archive_title', function($title)
{
  if(is_category()) {
    $title = single_cat_title( '', false );
  }
  return $title;
});



add_action('init', function() {
  //カスタム投稿タイプ

  //導入事例
  register_post_type('case', [
    'label' => '導入事例',
    'public' => true,
    'menu_position' => 5,
    'supports' => ['thumbnail','title','editor','custom-fields'],
    'has_archive' => true,
    'show_in_rest' =>true,
  ]);
  //良くある質問
  register_post_type('faq', [
    'label' => '良くある質問',
    'public' => true,
    'menu_position' => 5,
    'supports' => ['thumbnail','title','editor','custom-fields'],
    'has_archive' => true,
    'show_in_rest' =>true,
  ]);


  //カスタム分類
  register_taxonomy('training', 'case',[
    'label' => '研修内容',
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);
});
