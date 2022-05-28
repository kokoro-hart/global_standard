<?php

/**********************
初期設定
*********************/
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


/**********************
OGP設定
*********************/
function my_meta_ogp()
{
  if (is_front_page() || is_home() || is_singular() || is_archive()) {

    /*初期設定*/

    // 画像 （アイキャッチ画像が無い時に使用する代替画像URL）
    $ogp_image = ''.esc_url(get_template_directory_uri()).'/img/common/img-mv01.jpeg';
    // Twitterのアカウント名 (@xxx)
    $twitter_site = '@dummy_global_standard';
    // Twitterカードの種類（summary_large_image または summary を指定）
    $twitter_card = 'summary_large_image';
    // Facebook APP ID
    $facebook_app_id = '';

    /*初期設定 ここまで*/

    global $post;
    $ogp_title = '';
    $ogp_description = '';
    $ogp_url = '';
    $html = '';

    if (is_front_page()) {
      // トップページ
      $ogp_title = get_bloginfo('name');
      $ogp_description = get_bloginfo('description');
      $ogp_url = home_url();
    } elseif (is_page()) {
      // 固定ページ
      $ogp_title = get_the_title() . ' - ' . get_bloginfo('name');
      $ogp_description = get_bloginfo('description');
      $ogp_url = get_pagenum_link(get_query_var('paged'));
      wp_reset_postdata();
    } elseif (is_archive())  {
      // アーカイブページ
      $ogp_title = '導入事例 - ' . get_bloginfo('name');
      $ogp_description = get_bloginfo('description');
      $ogp_url =get_pagenum_link(get_query_var('paged'));
    } elseif (is_home()) {
      // お知らせページ
      $ogp_title = 'お知らせ - ' . get_bloginfo('name');
      $ogp_description = get_bloginfo('description');
      $ogp_url =get_pagenum_link(get_query_var('paged'));
    } elseif (is_singular()) {
      // 記事＆固定ページ
      setup_postdata($post);
      $ogp_title = $post->post_title . ' - ' . get_bloginfo('name');
      $ogp_description = mb_substr(get_the_excerpt(), 0, 100);
      $ogp_url = get_permalink();
      wp_reset_postdata();
    }

    // og:type
    $ogp_type = (is_front_page()) ? 'website' : 'article';

    // og:image
    if (is_singular() && has_post_thumbnail()) {
      $ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
      $ogp_image = $ps_thumb[0];
    }

    // 出力するOGPタグをまとめる
    $html = "\n";
    $html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
    $html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '">' . "\n";
    $html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
    $html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
    $html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '">' . "\n";
    $html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    $html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
    $html .= '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
    $html .= '<meta property="og:locale" content="ja_JP">' . "\n";

    if ($facebook_app_id != "") {
      $html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
    }

    echo $html;
  }
}
// wp_head内でOGPを出力する場合
//add_action('wp_head', 'my_meta_ogp');

/**********************
フィルターフック
*********************/
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

//scriptタグにdefer属性を追加
function scriptLoader($script, $handle, $src) {
	if (is_admin()) {
		return $script;
	}
	$script = sprintf('<script src="%s" type="text/javascript" defer=""></script>' . "\n", $src);
	return $script;
}
add_filter('script_loader_tag', 'scriptLoader', 10, 5);


/**********************
カスタム投稿設定
*********************/
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