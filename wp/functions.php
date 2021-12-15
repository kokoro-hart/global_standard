<?php

//セットアップ
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( 
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

//css jsの読み込み
function my_script_init()
{
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_script('my', get_template_directory_uri() . '/js/bundle.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

//フォーム設置ページのみContactForm7のcss、jsを読み込み
add_action( 'wp', function() {
  if ( is_page( 'contact' ) || is_page('download') ) return;
  add_filter( 'wpcf7_load_js', '__return_false' );
  add_filter( 'wpcf7_load_css', '__return_false' );
});

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

//カテゴリページのタイトル フィルターフック
add_filter('get_the_archive_title', function($title)
{
  if(is_category()) {
    $title = single_cat_title( '', false );
  }
  return $title;
});

//lazyload対象のアイキャッチはsrcをdata-srcに置き換える
function my_post_image_html( $html, $post_id, $post_image_id ) {

  //遅延読み込み対象の画像のみ
  if(strpos($html, 'lazyload') === false) {
      return $html;
  }

  //srcをdata-srcに置換する
  $html = str_replace('src="', 'data-src="', $html);
  return $html;
}
add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

//scriptタグにdefer属性を追加
function scriptLoader($script, $handle, $src) {
	if (is_admin()) {
		return $script;
	}
	$script = sprintf('<script src="%s" type="text/javascript" defer=""></script>' . "\n", $src);
	return $script;
}
add_filter('script_loader_tag', 'scriptLoader', 10, 5);



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

  //研修内容
  register_taxonomy('training', 'case',[
    'label' => '研修内容',
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);
});