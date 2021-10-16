<!--サイドバー-->
<aside class="p-news-sidebar l-archive__sidebar">
  <!--新着記事-->
  <article class="c-sidebar-new">
    <h2 class="c-sidebar-title">新着記事</h2>
    <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
      );
      $new_posts = get_posts($args);
      foreach($new_posts as $post) : setup_postdata($post);
    ?>
    <a href="<?php the_permalink(); ?>" class="c-sidebar-new__item">
      <div class="c-sidebar-new__item-thumbnail">
        <?php
          if(has_post_thumbnail()) {
            the_post_thumbnail('small' , array(
              'class' => 'c-sidebar-new__item-img lazyload'
            ));
          } else {
            echo '<img data-src="'. esc_url(get_template_directory_uri()) . '/img/common/icatch-news.jpeg" alt="記事の画像" class="c-sidebar-new__item-img lazyload">';
          }
        ?>
      </div>
      <div class="c-sidebar-new__item-body">
        <div class="c-sidebar-new__item-meta">
          <div class="c-sidebar-new__item-cats">
            <?php $category = get_the_category();?>
            <?php if($category[0]) : ?>
              <span class="c-sidebar-new__item-cat"><?php echo $category[0]->cat_name; ?></span>
            <?php endif; ?>
          </div>
          <time class="c-sidebar-new__item-time" datetime="<?php the_time(' c '); ?>"><?php the_time('Y.n.j'); ?></time>
        </div>
        <h2 class="c-sidebar-new__item-title"><?php the_title(); ?></h2>
      </div>
    </a>
    <?php endforeach; ?>
  </article>
  <!--新着記事-->
  <!--カテゴリー-->
  <article class="c-sidebar-cats">
    <h2 class="c-sidebar-title">カテゴリ</h2>
    <ul class="c-sidebar-cats__list">
      <?php
        $args = array(
          'parent' => 0,
          'orderby' => 'term_order',
          'order' => 'ASC'
        );
        $categories = get_categories( $args );
      ?>
      <?php foreach( $categories as $category ) : ?>
      <li class="c-sidebar-cats__item">
        <a href="<?php echo get_category_link( $category->term_id ); ?>" class="c-sidebar-cats__link">
          <svg class="c-svg c-sidebar-cats__svg" width="10" height="16">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-arrow03" />
          </svg>
          <?php echo $category->name; ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </article>
  <!--カテゴリー-->
</aside>
<!--/サイドバー-->