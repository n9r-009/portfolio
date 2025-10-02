<?php

namespace  FiertePost;

class PosttypePost
{

  static function getAllPostIncluding($limit = 3, $category_name = null, $paged = null)
  {
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => $limit
    );

    if ($limit !== -1) {
      $args['no_found_rows'] = true;
    }

    if ($category_name) {
      $args['category_name'] = $category_name;
    }

    if (!empty($paged)) {
      $args['paged'] = $paged;
    }

    $query = new \WP_Query($args);

    return $query;
  }
}
