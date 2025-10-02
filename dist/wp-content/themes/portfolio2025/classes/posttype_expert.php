<?php

namespace FierteExpert;

class PosttypeExpert
{

  static function getAllPostIncluding($limit = 3, $terms = null, $paged = null)
  {
    $args = array(
      'post_type' => 'expert',
      'posts_per_page' => $limit
    );

    if ($limit !== -1) {
      $args['no_found_rows'] = true;
    }

    if ($terms) {
      $args['tax_query'][] = [
        'taxonomy' => 'expert-category',
        'field'    => 'slug',
        'terms'    => $terms
      ];
    }

    if (!empty($paged)) {
      $args['paged'] = $paged;
      $args['no_found_rows'] = false;
    }

    $query = new \WP_Query($args);

    return $query;
  }
}
