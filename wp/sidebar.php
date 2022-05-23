<!--サイドバー-->
<aside class="p-sidebar l-archive__sidebar">
  <!--新着記事-->
  <article class="p-sidebar-new">
    <h2 class="p-sidebar__title">新着記事</h2>
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
    <a href="<?php the_permalink(); ?>" class="p-sidebar-new__item p-sidebar-item">
      <div class="p-sidebar-item__thumbnail">
        <?php
          if(has_post_thumbnail()) {
            the_post_thumbnail('full' , array(
              'class' => 'p-sidebar-item__img'
            ));
          } else {
            echo '<img src="'. esc_url(get_template_directory_uri()) . '/img/common/icatch-news.jpeg" alt="記事の画像" class="p-sidebar-item__img">';
          }
        ?>
      </div>
      <div class="p-sidebar-item__body">
        <div class="p-sidebar-item__meta">
          <div class="p-sidebar-item__cats">
            <?php $category = get_the_category();?>
            <?php if($category[0]) : ?>
              <span class="p-sidebar-item__cat"><?php echo $category[0]->cat_name; ?></span>
            <?php endif; ?>
          </div>
          <time class="p-sidebar-item__time" datetime="<?php the_time(' c '); ?>"><?php the_time('Y.n.j'); ?></time>
        </div>
        <h2 class="p-sidebar-item__title"><?php the_title(); ?></h2>
      </div>
    </a>
    <?php endforeach; ?>
  </article>
  <!--新着記事-->
  <!--カテゴリー-->
  <article class="p-sidebar-cats">
    <h2 class="p-sidebar__title">カテゴリ</h2>
    <ul class="p-sidebar-cats__list">
      <?php
        $args = array(
          'parent' => 0,
          'orderby' => 'term_order',
          'order' => 'ASC'
        );
        $cat_list = get_categories( $args );
      ?>
      <?php foreach( $cat_list as $cat ) : ?>
      <li class="p-sidebar-cats__item">
        <a href="<?php echo get_category_link( $cat->term_id ); ?>" class="p-sidebar-cats__link">
          <svg class="c-svg p-sidebar-cats__svg" width="10" height="16">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-arrow03" />
          </svg>
          <?php echo $cat->name; ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </article>
  <!--カテゴリー-->
</aside>
<!--/サイドバー-->